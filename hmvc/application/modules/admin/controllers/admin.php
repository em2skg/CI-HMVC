<?php

/*
  Author: Daniel Gutierrez
  Date: 9/23/12
  Version: 1.0
 */

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();

        $this->load->module("users");
    }

    function index() {
        $this->load->view('login', array());
    }

    function dashboard() {
        $this->load->view('blank', array());
    }

    function index2() {
        echo "<pre>";
        print_r($this->users->menu());
        echo "</pre>";
        echo 'admin';
    }

}

?>