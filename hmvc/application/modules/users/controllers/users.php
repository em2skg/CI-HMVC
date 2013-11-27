<?php

/*
  Author: Daniel Gutierrez
  Date: 9/23/12
  Version: 1.0
 */

class Users extends MY_Controller {

        function __construct() {
                parent::__construct();
        }

        function menu() {
                return $data['users'] = array('create user', 'user list');
        }

        public function login() {
                
        }

}

?>