<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{
    function index()
    {
        $this->load->view("/boilerplates/header.php");
        $this->load->view("/templates/home.php");
        $this->load->view("/boilerplates/footer.php");
    }
}