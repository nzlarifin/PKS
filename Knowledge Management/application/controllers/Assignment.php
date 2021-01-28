<?php

class Assignment extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Assigment Survei';
        $this->load->view('templates/header', $data);
        $this->load->view('assignment/index');
        $this->load->view('templates/footer');
    }
}