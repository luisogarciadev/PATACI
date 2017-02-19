<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{
    function __construct()
    {
        parent::__construct();
    }

    function admin_view($load_page, $data)
    {
        $this->view('admin/header', $data);
        $this->view($load_page, $data);
        $this->view('admin/footer', $data);
    }

    function members_view()
    {
        //same purpose as admin view
    }

    function public_view()
    {
        //same purpose as admin view
    }


}