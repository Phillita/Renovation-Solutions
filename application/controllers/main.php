<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
//comment
        public function Main(){
            parent::__construct();
            $this->load->helper('url');
            $this->load->helper('form');
        }
	public function index()
	{
            $pagedata['page'] = 'homepage';
            $this->load->view('container', $pagedata);
	}
        
        public function login(){
            $pagedata = array();
            if ($_POST['user'] == 'test'){
                $pagedata['page'] = 'loginfail';
                $pagedata['fname'] = $_POST['user'];
                $pagedata['lname'] = $_POST['password'];
                $pagedata['disable'] = 'style="display: none"';
                $this->load->view('container', $pagedata);
            }
            else {
                $pagedata['page'] = 'main';
                $this->load->view('container', $pagedata);
                //echo 'user: '.$_POST['user'].' '.'password: '.$_POST['password']; 
            }
            
            
            
                
        }
}
?>
