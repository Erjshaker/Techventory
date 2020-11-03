<?php
namespace Modules\InventoryManagement\Controllers;

use Modules\InventoryManagement\Models\BorrowerModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Borrower extends BaseController
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
    	$this->hasPermissionRedirect('list-borrower');

    	$model = new BorrowerModel();

    	//kailangan ito para sa pagination
       	$data['all_items'] = $model->getBorrowerWithCondition(['status'=> 'a']);
       	$data['offset'] = $offset;
				if($_GET['search'] != null)
				{
					$data['borrowers'] = $model->getBorrowerWithFunction(['status'=> 'a', 'search' => $_GET['search'],'limit' => PERPAGE, 'offset' =>  $offset]);
				}
				else {
					$data['borrowers'] = $model->getBorrowerWithFunction(['status'=> 'a','limit' => PERPAGE, 'offset' =>  $offset]);
				}
        $data['function_title'] = "Item Borrower List";
        $data['viewName'] = 'Modules\InventoryManagement\Views\borrowers\index';
        echo view('App\Views\theme\index', $data);
    }

    public function show_borrower($id)
	{

		$this->hasPermissionRedirect('show-borrower');
		$data['permissions'] = $this->permissions;

		$model = new BorrowerModel();

		$data['borrowers'] = $model->getBorrowerWithCondition(['id' => $id]);

		$data['function_title'] = "Item Borrower Details";
        $data['viewName'] = 'Modules\InventoryManagement\Views\borrowers\borrowersDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_borrower()
    {
    	$this->hasPermissionRedirect('add-borrower');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new BorrowerModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('borrowers'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Borrower";
		        $data['viewName'] = 'Modules\InventoryManagement\Views\borrowers\frmBorrower';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addBorrower($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('borrowers'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('borrowers'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Borrower";
	        $data['viewName'] = 'Modules\InventoryManagement\Views\borrowers\frmBorrower';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_borrower($id)
    {
    	$this->hasPermissionRedirect('edit-borrower');
    	helper(['form', 'url']);
    	$model = new BorrowerModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('borrowers'))
		    {
				//die("here");
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Borrower";
		        $data['viewName'] = 'Modules\InventoryManagement\Views\borrowers\frmBorrower';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editBorrower($_POST, $id))
		        {
		        //$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('borrowers'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('borrowers'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Borrower";
	        $data['viewName'] = 'Modules\InventoryManagement\Views\borrowers\frmBorrower';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_borrower($id)
    {
    	$this->hasPermissionRedirect('delete-borrower');
    	$model = new BorrowerModel();
    	$model->deleteBorrower($id);
    }

}
