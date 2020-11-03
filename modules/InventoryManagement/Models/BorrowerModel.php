<?php
namespace Modules\InventoryManagement\Models;

use CodeIgniter\Model;

class BorrowerModel extends \CodeIgniter\Model
{
    protected $table = 'borrowers';

    protected $allowedFields = ['borrowed_by', 'approved_by', 'approved_date', 'date_borrowed','date_return', 'status', 'created_at','updated_at', 'deleted_at'];

    public function getBorrowerWithCondition($conditions = [])
	{
		foreach($conditions as $field => $value)
		{
			$this->where($field, $value);
		}
	    return $this->findAll();
	}

	public function getBorrowerWithFunction($args = [])
	{
		$db = \Config\Database::connect();

		// $str = "SELECT a.*, b.function_name FROM payments a LEFT JOIN permissions b ON a.function_id = b.id WHERE a.status = '".$args['status']."' LIMIT ". $args['offset'] .','.$args['limit'];1
    $str = "SELECT * FROM borrowers WHERE";
    $str .= " status = '" .$args['status'] ."'";
    if (isset($args['search'])) {
      $str .= "AND borrowed_by LIKE '%" . $args['search'] . "'";
    }
    $str .= " LIMIT ". $args['offset'] .','.$args['limit'];//without foreign key
		// print_r($str); die();
		$query = $db->query($str);

		// print_r($query->getResultArray()); die();
	    return $query->getResultArray();
	}

    public function getBorrower()
	{
	    return $this->findAll();
	}

    public function addBorrower($val_array = [])
	{
		$val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
	  return $this->save($val_array);
	}

    public function editBorrower($val_array = [], $id)
	{
		$val_array['updated_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'a';
		return $this->update($id, $val_array);
	}

    public function deleteBorrower($id)
	{
		$val_array['deleted_at'] = (new \DateTime())->format('Y-m-d H:i:s');
		$val_array['status'] = 'd';
		return $this->update($id, $val_array);
	}
}
