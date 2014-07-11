<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class Login extends CI_Controller
{
	public function index( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
		if ( $is_logged_in == 'true' ) {
			redirect( base_url() . 'index.php/mycontroller', 'refresh' );
		} //$is_logged_in == 'true'
		//$data[ 'page' ] = 'login';
		//$data[ 'title' ]     = 'Login Page';
		$this->load->view( 'login' );
	}
	public function validate( )
	{
		$this->load->model('user_model');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$validate = $this->user_model->validate($username,$password);
		if ( $validate ) {
			redirect( base_url() . 'index.php/mycontroller', 'refresh' );
		} //$validate
		else {
			$data[ 'alerterror' ] = 'Username or Password Incorrect';
			//$data[ 'page' ]  = 'login';
			//$data[ 'title' ]      = 'Login Page';
			$this->load->view( 'login' , $data );
		}
	}
	public function logout( )
	{
		$this->session->sess_destroy();
		redirect( base_url() . 'index.php/login', 'refresh' );
	}
       public function insertquery()
    {
       $data['company']=$this->input->post("company");
            $data['name']=$this->input->post("name");
        $data['email']=$this->input->post("email");
            $data['phone']=$this->input->post("phone");
            $data['query']=$this->input->post("query");
            $data['json']=$this->input->post("json");
            //$data['time_stamp']=$this->input->post("time_stamp");
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('query', 'Query', 'required|trim');
             $this->form_validation->set_rules('company', 'Company', 'required|trim');
             $this->form_validation->set_rules('json', 'Json', 'required|trim');
             $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
            
            
             if ($this->form_validation->run() == FALSE)
		{
             
	echo "false";
		}
		else
		{
	echo "true";
               
       $this->store->store_single_row_query($data);
      
            }
      
        
            }
    
    
}
?>