<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'I am </br> Developer';
        $data['image'] = 'default.jpg';

        $this->load->view('templates/header_footer/header');
        $this->load->view('widget_bar_menu', $data);
        $this->load->view('templates/home');
        $this->load->view('templates/about');
        $this->load->view('templates/experience');
        $this->load->view('templates/education');
        $this->load->view('templates/skills');
        $this->load->view('templates/interests');
        $this->load->view('templates/awards');
        $this->load->view('templates/blog');
        $this->load->view('templates/header_footer/footer');
    }
}
