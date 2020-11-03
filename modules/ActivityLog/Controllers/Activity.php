<?php
namespace Modules\ActivityLog\Controllers;

use Modules\ActivityLog\Models\ActivityModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;

class Activity extends BaseController
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
		$this->hasPermissionRedirect('list-activity');

		$model = new ActivityModel();

		//kailangan ito para sa pagination
			$data['all_items'] = $model->getActivityWithCondition(['status'=> 'a']);
			$data['offset'] = $offset;
			if(isset($_GET['search']))
			{
				$data['activities'] = $model->getActivityWithFunction(['status'=> 'a', 'search' => $_GET['search'],'limit' => PERPAGE, 'offset' =>  $offset]);
			}
			else {
				$data['activities'] = $model->getActivityWithFunction(['status'=> 'a','limit' => PERPAGE, 'offset' =>  $offset]);
			}
			$data['function_title'] = "Activity Log";
			$data['viewName'] = 'Modules\ActivityLog\Views\activities\index';
			echo view('App\Views\theme\index', $data);
	}

    public function show_activity($id)
	{
		$this->hasPermissionRedirect('show-activity');
		$data['permissions'] = $this->permissions;

		$model = new ActivityModel();

		$data['activities'] = $model->getActivityWithCondition(['id' => $id]);

		$data['function_title'] = "Activity Log";
        $data['viewName'] = 'Modules\ActivityLog\Views\activities\activityDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_activity()
    {
    	$this->hasPermissionRedirect('add-activity');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new ActivityModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('activities'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Activity";
		        $data['viewName'] = 'Modules\ActivityLog\Views\activities\frmActivity';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addActivity($_POST))
		        {
		        	//$role_id = $model->insertID();
		        	//$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('activities'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('activities'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Activity";
	        $data['viewName'] = 'Modules\ActivityLog\Views\activities\frmActivity';
	        echo view('App\Views\theme\index', $data);
    	}
    }

		public function edit_activity($id)
    {
    	$this->hasPermissionRedirect('edit-activity');
    	helper(['form', 'url']);
    	$model = new ActivityModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{

	    	if (!$this->validate('activities'))
		    {
				//die("here");
		    		$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Activity";
		        $data['viewName'] = 'Modules\ActivityLog\Views\activities\frmActivity';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editActivity($_POST, $id))
		        {
		        //$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('activities'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an error in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('activities'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Activity";
	        $data['viewName'] = 'Modules\ActivityLog\Views\activities\frmActivity';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_activity($id)
    {
    	$this->hasPermissionRedirect('delete-activity');
    	$model = new ActivityModel();
    	$model->deleteActivity($id);
    }

}
