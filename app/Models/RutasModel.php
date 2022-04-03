<?php


namespace App\Models;

use CodeIgniter\Model;

class RutasModel extends Model
{

	function __construct()
  {
    parent::__construct();

		$this->db = db_connect( 'default');
  }


  private function ExecuteQueryResults( $sql)
	{

		$query = $this->db->query( $sql);
    $rows = $query->getResult();
    $query->freeResult();

    return ( $rows);
	}

	public function GetRoutes()
	{
		return( $this->ExecuteQueryResults( "Select id, name, slug From rutas Where enabled = 1 Order by name asc"));
	}

}