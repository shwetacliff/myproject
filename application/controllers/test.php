<?php

/**
 * Created by PhpStorm.
 * User: shweta
 * Date: 25/9/18
 * Time: 11:43 AM
 */
class Test extends CI_Controller
{

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){

        echo "i am admin";
    }

    public function newtest(){

        echo "i am a new dmin";
    }
}