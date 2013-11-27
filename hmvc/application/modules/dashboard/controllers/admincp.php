<?php


  class Admincp extends MY_Controller {


          protected $menu = array();


          function __construct() {
                  parent::__construct();
                  //$this->load->config->item('callback_prefix');
                  $this->build_menu();
          }


          function index() {

                  echo "<pre>";
                  print_r($this->menu);
                  echo "</pre>";
                  echo 'admin cp';
          }


          function build_menu() {
                  $module_location = dirname(dirname(dirname(__FILE__)));
                  //$module = 'users';
                  $class = '';
                  $modules = array('users' , 'welcome');
                  foreach ($modules as $module)
                  {
                          if(is_file($module_location . "/{$module}/controllers/admincp/callback.php"))
                          {
                                  $this->load->module("{$module}/admincp/callback");
                                  $callBack = "callback";
                                  $methodVariable = array($this->$callBack , 'menu');

                                  if(is_callable($methodVariable , false))
                                  {
                                          $this->menu[$module] = $this->$callBack->menu();
                                  }
                          }
                  }
          }


  }

?>