<?php
namespace Modules\InventoryManagement\Controllers;

use Modules\InventoryManagement\Models\InventoryModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Inventory extends BaseController
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
    	$this->hasPermissionRedirect('list-inventory');

    	$model = new InventoryModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getInventoryWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
				if($_GET['search'] != null)
				{
					$data['inventories'] = $model->getInventoryWithFunction(['status'=> 'a', 'search' => $_GET['search'],'limit' => PERPAGE, 'offset' =>  $offset]);
				}
				else {
					$data['inventories'] = $model->getInventoryWithFunction(['status'=> 'a','limit' => PERPAGE, 'offset' =>  $offset]);
				}
        $data['function_title'] = "Item Inventory List";
        $data['viewName'] = 'Modules\InventoryManagement\Views\inventories\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_inventory($id)
	{
		$this->hasPermissionRedirect('show-inventory');
		$data['permissions'] = $this->permissions;

		$model = new InventoryModel();

		$data['inventories'] = $model->getInventoryWithCondition(['id' => $id]);

		$data['function_title'] = "Item Inventory Details";
        $data['viewName'] = 'Modules\InventoryManagement\Views\inventories\inventoryDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_inventory()
    {
    	$this->hasPermissionRedirect('add-inventory');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new InventoryModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('inventories'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Inventory";
		        $data['viewName'] = 'Modules\InventoryManagement\Views\inventories\frmInventory';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addInventory($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('inventories'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('inventories'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Inventory";
	        $data['viewName'] = 'Modules\InventoryManagement\Views\inventories\frmInventory';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_inventory($id)
    {
    	$this->hasPermissionRedirect('edit-inventory');
    	helper(['form', 'url']);
    	$model = new InventoryModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('inventories'))
		    {
				//die("here");
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Inventory";
		        $data['viewName'] = 'Modules\InventoryManagement\Views\inventories\frmInventory';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editInventory($_POST, $id))
		        {
		        //$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('inventories'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('inventories'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Inventory";
	        $data['viewName'] = 'Modules\InventoryManagement\Views\inventories\frmInventory';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_inventory($id)
    {
    	$this->hasPermissionRedirect('delete-inventory');
    	$model = new InventoryModel();
    	$model->deleteInventory($id);
    }

}
