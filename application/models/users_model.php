<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

        function authenticate($email , $password){
            $query = $this->db->query("SELECT *  FROM `admintable` where email='$email' AND password = '$password' ");
            if ($query->num_rows() > 0) {
                return $query->result();
            }
                return 0;

        }

       


}

?>