<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budjet extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	//$user_id = $_SESSION['user_id'];
	private $user_id;

	function __construct()
    {
    	parent::__construct();
    	$this->load->model('user_details');
    	$this->load->model('budjet_model');

    	//if(is_login())
    	//if($_SESSION!="")
    	//	$this->user_id=$_SESSION['user_id'];
    	//$this->load->helper('url');
    }


	public function index()
	{
		if(isset($_SESSION['user_id'])){
    		redirect( base_url().'budjet/dashboard', 'refresh');
    	} 
    	else
    	{
    		redirect( base_url().'budjet/login', 'refresh');	
    	}
		//$this->load->view('index');

	}

	public function login()
	{
		if(isset($_SESSION['user_id'])){
    		redirect( base_url().'budjet/dashboard', 'refresh');
    	}    	
    	elseif($this->input->post()){
    		$res = $this->user_details->auth_user();
			if($res){			
			if($res=='fail')
			{
				$this->load->view('login');
			}
			else{
				$this->user_id=$_SESSION['user_id'];
				//var_dump($res);exit;
				//$this->session->set_userdata('user_data',$res);
				redirect( base_url().'budjet/dashboard', 'refresh');
			}
			//$this->load->view('dashboard');
			//exit;
		}
		else
		{
			$this->load->view('login');//redirect('user/login'); //echo 'Invalied user';
			//exit;
		}
    	}
    	else
    	{
    		$this->load->view('login');//redirect( base_url().'home/login', 'refresh');	
    	}
		//$this->load->view('login');
	}

	public function signup()
	{
		if(isset($_SESSION['user_id'])){
    		redirect( base_url().'budjet/dashboard', 'refresh');
    	}     	
    	elseif($this->input->post()){
    		$date = date('Y-m-d H:i:s');
    		$data = array (
  			'name' => $this->input->post('name', TRUE),
  			'email' => $this->input->post('email', TRUE), 
  			'password' => $this->input->post('password', TRUE),
  			'created_on' => $this->input->post('created_on', TRUE),
			);
    		//$data =$this->input->post();
    		$this->load->model('user_details');
    		$result = $this->user_details->insertRow('user_details',$data);
    		if($result){
				redirect( base_url().'budjet/login', 'refresh');    			
    		}
    		else{
    			redirect( base_url().'budjet/signup', 'refresh');
    		}
    	}
    	else{

    		$this->load->view('signup');
    	}

	}


	public function dashboard(){
	
	if(isset($_SESSION['user_id'])){
    		$this->load->view('index');
    	}  //
    	else{
    		redirect( base_url().'budjet/login', 'refresh');
    	}	

	}


	public function mode_income(){
		if(!$_SESSION){
			redirect( base_url().'budjet/login', 'refresh'); 
		}
		$user_id = $_SESSION['user_id'];
		$this->load->model('budjet_model');
		$data['data'] = $this->budjet_model->get_data('income_mode',$this->user_id,'user_id'); //'users', $this->input->post('email'), 'email',1
		$this->load->view('mode_income',$data);		
	}

	public function mode_expenses(){
		$this->load->model('budjet_model');
		$data['data'] = $this->budjet_model->get_data('expenses_mode',$this->user_id,'user_id');
		$this->load->view('mode_expenses',$data);		
	}

	public function add_income_mode(){
		if($this->input->post())
		{
			$data = $this->input->post();
			$this->load->model('budjet_model');
			$result = $this->budjet_model->insertRow('income_mode',$data);
			if($result){
				redirect( base_url().'budjet/mode_income', 'refresh');
			}
			else{
				$this->load->view('mode_income_add');	
			}
		}
		else{
			$this->load->view('mode_income_add');	
		}
		
	}

	public function add_expenses_mode($id=""){
		if($this->input->post())
		{
			$data = $this->input->post();
			$this->load->model('budjet_model');
			$result = $this->budjet_model->insertRow('expenses_mode',$data);
			if($result){
				redirect( base_url().'budjet/mode_expenses');
			}
			else{
				$this->load->view('mode_expenses_add');	
			}
		}
		elseif($id){
              
              if($this->input->post()){
              	$data = $this->input->post();
				$this->load->model('budjet_model');
				$result = $this->budjet_model->insertRow('expenses_mode',$data);
					if($result){
								redirect( base_url().'budjet/mode_expenses');
							}

              }
              else
              {
              		$this->load->model('budjet_model');
					$data['data'] = $this->budjet_model->get_data('expenses_mode',$id,'id');
					redirect( base_url().'budjet/mode_expenses_update',$data);
					
				}
		}
		else{
			$this->load->view('mode_expenses_add');	
		}
		
	}

	public function mode_expenses_update($id=""){
		if($id!=""){
		if($this->input->post()){
              	$data = $this->input->post();
				$this->load->model('budjet_model');
				$result = $this->budjet_model->updateRow('expenses_mode', 'id', $id, $data);//$table, $col, $colVal, $data
				if($result){
					redirect( base_url().'budjet/mode_expenses');
				}
             }
            else
              {
              		$this->load->model('budjet_model');
					$data['data'] = $this->budjet_model->get_data('expenses_mode',$id,'id');
					//redirect( base_url().'budjet/mode_expenses_update',$data);
					$this->load->view('mode_expenses_update',$data);
					
				}	
			}
		/*else
			redirect(base_url().'budjet/mode_expenses');*/
	}


	public function future_plan(){
		$this->load->model('budjet_model');
		$data['data'] = $this->budjet_model->get_data('future_plan');
		$this->load->view('future_plan',$data);		
	}

	public function frame_budjet()
	{
		if(isset($_SESSION['user_id'])){
    		$this->load->view('frame_budjet');
    	} 
    	
    	else{
    		redirect( base_url().'budjet/login', 'refresh');
    	}

		

	}


	public function save_budjet()
	{
		if(isset($_SESSION['user_id'])){
    		
			/*$data = array (
  			'name' => $this->input->post('name', TRUE),
  			'email' => $this->input->post('email', TRUE), 
  			'password' => $this->input->post('password', TRUE),
  			'created_on' => $this->input->post('created_on', TRUE),
			);*/
			$in_mode  = $this->input->post('in_mode');
			$in_desc  = $this->input->post('in_desc');
			$in_amt   = $this->input->post('in_amt');
			$exp_mode = $this->input->post('exp_mode');
			$exp_desc = $this->input->post('exp_desc');
			$exp_amt  = $this->input->post('exp_amt');
			$total_income   = array_sum($in_amt);
			$total_expenses = array_sum($exp_amt);
			$created_on = date('Y-m-d');


			$data = array(
			'income_mode ' 	=> implode("@@", $in_mode ),
			'income_desc ' 	=> implode("@@", $in_desc ),
			'income_amount' => implode("@@", $in_amt  ),
			'exp_mode '		=> implode("@@", $exp_mode),
			'exp_desc '		=> implode("@@", $exp_desc),
			'exp_amount'  	=> implode("@@", $exp_amt ),
			'user_id'		=> $_SESSION['user_id'],
			'total_income'  => $total_income,
			'total_expenses'=> $total_expenses,
			'created_on' => date('Y-m-d'),
			);

			$this->load->model('budjet_model');
    		$result = $this->budjet_model->insertRow('budjets',$data);
    		if($result){
				redirect( base_url().'budjet/dashboard', 'refresh');    			
    		}
    		else{
    			redirect( base_url().'budjet/frame_budjet', 'refresh');
    		}
    	}    	
    	else{
    		redirect( base_url().'budjet/login', 'refresh');
    	}

		

	}

	public function view_budjet()
	{
		if(isset($_SESSION['user_id'])){
			$this->load->model('budjet_model');
			$data['data'] = $this->budjet_model->get_data('budjets',$_SESSION['user_id'],'user_id');
			$this->load->view('view_budjet',$data);
		$this->load->view('view_budjet');
 		}
 		else{
    		redirect( base_url().'budjet/login', 'refresh');
    	}
	}

	public function signout(){
		session_unset($_SESSION);
		redirect( base_url().'budjet/login', 'refresh'); 
	}
	

	public function exp_mode_delete($id){ //$table, $col, $colVal
		$this->load->model('budjet_model');
		$this->budjet_model->delete('expenses_mode','id',$id);
		redirect( base_url().'budjet/mode_expenses');			
	}
}
