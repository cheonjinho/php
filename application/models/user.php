<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {
	protected $table_name = 'users';
	protected $primary_key = 'id';
	function __construct() {
        // Call the Model constructor
		parent::__construct();
	}

   //get the username & password from tbl_usrs
	function get_user($usr, $pwd) {
		$sql = "select * from users where username = '" . $usr . "' and password = '" . md5($pwd);
		$query = $this->db->query($sql);
		//return $query->num_rows();
		return ($this->db->affected_rows() > 0) ? 0 : 1;
	}

}?>