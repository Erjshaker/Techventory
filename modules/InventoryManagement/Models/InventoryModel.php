<?php
namespace Modules\InventoryManagement\Models;

use CodeIgniter\Model;

class InventoryModel extends \CodeIgniter\Model
{
     protected $table = 'inventories';

     protected $allowedFields = ['item_code_id', 'item_category', 'location_id', 'quantity_id', 'status','created_at','updated_at', 'deleted_at'];

    public function getInventoryWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getInventoryWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		//$str = "SELECT a.*, b.function_name FROM dentists a LEFT JOIN permissions b ON a.function_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];1
    $str = "SELECT * FROM inventories WHERE";
    $str .= " status = '" .$args['status'] ."'";
    if (isset($args['search'])) {
      $str .= "AND item_code_id LIKE '%" . $args['search'] . "'";
    }
    $str .= " LIMIT ". $args['offset'] .','.$args['limit'];//without foreign key
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getInventory()
	{
	    return $this->findAll();
	}

    public function addInventory($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	  return $this->save($val_array);
	}

    public function editInventory($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteInventory($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
