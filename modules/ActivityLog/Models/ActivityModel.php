<?php
namespace Modules\ActivityLog\Models;

use CodeIgniter\Model;

class ActivityModel extends \CodeIgniter\Model
{
     protected $table = 'inventories';

     protected $allowedFields = ['item_code_id', 'item_category', 'location_id', 'quantity_id', 'status','created_at','updated_at', 'deleted_at'];

    public function getActivityWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getActivityWithFunction($args = [])
	{
		$db = \Config\Database::connect();
    $str = "SELECT inventories.item_code_id, inventories.item_category, inventories.location_id, borrowers.borrowed_by, borrowers.approved_by, borrowers.approved_date FROM inventories INNER JOIN borrowers ON inventories.id = borrowers.id WHERE";
    $str .= " inventories.status = '" .$args['status'] ."'";
    if (isset($args['search'])) {
      $str .= "AND item_code_id LIKE '%" . $args['search'] . "'";
    }
    $str .= " LIMIT ". $args['offset'] .','.$args['limit'];//without foreign key
    // print_r($str); die();

		//$str = "SELECT * FROM activities WHERE status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];
		// print_r($str); die();
		$query = $db->query($str);
      //die($db->getLastQuery()); //checking of query, then copy paste the result in sql
		 //print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getActivity()
	{
	    return $this->findAll();
	}

    public function addActivity($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	  return $this->save($val_array);
	}

    public function editActivity($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteActivity($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
