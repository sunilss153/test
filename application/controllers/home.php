<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->homepage();
	}
	
	function homepage(){
		$this->load->view('home');
	}
	
	function home1(){
		$this->load->view('home1');
	}
	
	function home2(){
		$this->load->view('home2');
	}
	
	function home3(){
		$this->load->view('home3');
	}	
	
	function home4(){
		$this->load->view('home4');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */