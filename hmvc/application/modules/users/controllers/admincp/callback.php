<?php

class Callback extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    function menu() {
        return array('Menu1', 'Menu2');
    }

}

?>