<?php
class Pages extends CI_Controller {

        public function view($page = 'home')
        {
        	$this->load->model("PagesModel");
        	$data['users']=$this->PagesModel->getUsers();

        	$this->load->view('pages/'.$page, $data);
        }
}