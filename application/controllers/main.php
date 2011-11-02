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
                $pagedata['page'] = 'calculation1';
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
        
        public function get_quote(){
            echo "<h1>Coming Soon</h1>";
        }
        
        public function sign_up(){
            echo "<h1>Database first then we will have you digned up</h1>";
        }
        
        public function test_layout(){
            $pagedata = array();
            $pagedata['page'] = 'mainlayout';
            $this->load->view('container', $pagedata);
        }
        
        public function secondary_layout(){
            $pagedata = array();
            $pagedata['page'] = 'secondaryLayout';
            $this->load->view('container', $pagedata);
        }
}
?>
