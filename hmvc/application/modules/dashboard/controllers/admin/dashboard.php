<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //echo $this->router->class;
        echo "This is admin home";
    }

    public function login() {
        $this->template->view('admin/login', array());
    }

}
