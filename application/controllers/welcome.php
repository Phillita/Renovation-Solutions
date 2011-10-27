<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

        public function Welcome(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
        }
	public function index()
	{
            $pagedata['page'] = 'homepage';
            $pagedata['disable'] = '';
            $this->load->view('container', $pagedata);
	}
        
        public function login(){
            $pagedata = array();
            //if ($_POST['user'] == 'test'){
                $pagedata['page'] = 'loginfail';
                $pagedata['fname'] = $_POST['user'];
                $pagedata['lname'] = $_POST['password'];
                $pagedata['disable'] = 'style="display: none"';
                $this->load->view('container', $pagedata);
//            }
//            else {
//                echo 'user: '.$_POST['user'].' '.'password: '.$_POST['password']; 
//            }
            
                
        }
}
