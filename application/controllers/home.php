<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public $data = array();
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
	public function __construct()
	{
		parent::__construct();
		$page = $this->uri->segment(2);
		if(isset($page) && ($page=='' || $page=='homePage')){ $title = 'About'; }
		else if(isset($page) && $page=='home1'){ $title =  'Products and services'; }
		else if(isset($page) && $page=='home2'){ $title =  'Products'; }
		else if(isset($page) && $page=='home3'){ $title =  'Industries'; }
		else if(isset($page) && $page=='home4'){ $title =  'Privacy policy'; }
		$this->data = array(
							'title' => $title,
							'page' => $page
							);
		//$this->homepage();
		if($page==''){
			redirect('home/homePage');
		}
		
	}
	
	function homePage(){		
		$data = $this->data;				
		$this->load->view('home',$data);
	}
	
	function home1(){
		$data = $this->data;		
		$this->load->view('home1',$data);
	}
	
	function home2(){
		$data = $this->data;
		$this->load->view('home2',$data);
	}
	
	function home3(){
		$data = $this->data;
		$this->load->library('form_validation');	
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('fax', 'fax', 'required|numeric');
		$this->form_validation->set_rules('message', 'message', 'required|min_length[50]');
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red;">', '</div>');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('home3',$data);
		}else{
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['fax'] = $this->input->post('fax');
			$data['message'] = $this->input->post('message');
			//dumpEx($data);
			$this->session->set_flashdata('form_submited', 'Form submited successfully');
			$this->load->view('home3',$data);
			
		}
	}	
	
	function home4(){
		$data = $this->data;
		$this->load->view('home4',$data);
	}	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */