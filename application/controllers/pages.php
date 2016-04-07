<?php
class Pages extends CI_Controller {

	function __construct(){
	parent::__construct();
	$this->load->helper(array('form'));
	}

        public function view($page = 'home')
        {
        	$this->load->model("PagesModel");
        	$data['users']=$this->PagesModel->getUsers();

        	$this->load->view('pages/'.$page, $data);

        }

        public function insertUserForm(){

                $page = 'insertUser';

        	$this->load->view('pages/'.$page);

        }
        public function insertUser(){

                $page = 'insertUser';

                $fname = $this->input->post('firstname'); 
                $lname = $this->input->post('lastname'); 

                $this->load->model("PagesModel");
                $this->PagesModel->insertUsers($fname,$lname);

                $this->load->view('pages/'.$page);



        }

        public function updateUserForm($userid){

                $page = 'updateUser';
                $data['userid']=$userid;

                $this->load->view('pages/'.$page, $data);
        }

        public function updateUser($userid){

                $page = 'updateUser';
                $data['userid']=$userid;

                $this->load->model("PagesModel");
                $this->PagesModel->updateUser($userid);

                $this->load->view('pages/'.$page, $data);
        }

}