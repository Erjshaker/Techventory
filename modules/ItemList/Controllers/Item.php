<?php
namespace Modules\ItemList\Controllers;

use Modules\ItemList\Models\ItemModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Item extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0)
    {
    	$this->hasPermissionRedirect('list-item');

    	$model = new ItemModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getItemWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
				if($_GET['search'] != null)
				{
					$data['items'] = $model->getItemWithFunction(['status'=> 'a', 'search' => $_GET['search'],'limit' => PERPAGE, 'offset' =>  $offset]);
				}
				else {
					$data['items'] = $model->getItemWithFunction(['status'=> 'a','limit' => PERPAGE, 'offset' =>  $offset]);
				}
        $data['function_title'] = "Item List";
        $data['viewName'] = 'Modules\ItemList\Views\items\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_item($id)
	{
		$this->hasPermissionRedirect('show-item');
		$data['permissions'] = $this->permissions;

		$model = new ItemModel();

		$data['items'] = $model->getItemWithCondition(['id' => $id]);

		$data['function_title'] = "Item Details";
        $data['viewName'] = 'Modules\ItemList\Views\items\itemDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_item()
    {
    	$this->hasPermissionRedirect('add-item');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new ItemModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('items'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Item";
		        $data['viewName'] = 'Modules\ItemList\Views\items\frmItem';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addItem($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('items'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('items'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Item";
	        $data['viewName'] = 'Modules\ItemList\Views\items\frmItem';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_item($id)
    {
    	$this->hasPermissionRedirect('edit-item');
    	helper(['form', 'url']);
    	$model = new ItemModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('items'))
		    {
				//die("here");
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit Item";
		        $data['viewName'] = 'Modules\ItemList\Views\items\frmItem';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editItem($_POST, $id))
		        {
		        //$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('items'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('items'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing Item";
	        $data['viewName'] = 'Modules\ItemList\Views\items\frmItem';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_item($id)
    {
    	$this->hasPermissionRedirect('delete-item');
    	$model = new ItemModel();
    	$model->deleteItem($id);
    }

}
