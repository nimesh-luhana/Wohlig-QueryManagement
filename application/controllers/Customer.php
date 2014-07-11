<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer extends CI_Controller
{
    
    
     public function __construct( )
	{
		parent::__construct();
		$this->is_logged_in();
	}
    function is_logged_in( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
       
		if ( $is_logged_in !== 'true' || !isset( $is_logged_in ) ) {
			redirect( base_url() . 'index.php/login', 'refresh' );
		}
        
     
        
        
	}
    public function index()
    {
    $this->display_data_customer();
    
    
    }
     public function display_data_customer()
    {$id=$this->session->userdata('id');
         $data['table']=$this->display->display_db_customer($id);  
    
      $data['page']="display_customer";
 $this->load->view('template2',$data);
    }
    
     public function display_data_queries()
    {$data['c_id']=$this->input->get('id');
         $data['table']=$this->display->display_db_queries($data['c_id']);  
    
      $data['page']="display_queries";
 $this->load->view('template2',$data);
    }
    
    public function display_data_singlequery()
    {$data['id']=$this->input->get('id');
         $data['row']=$this->display->display_db_singlequery($data['id']);  
    
    $data['page']="display_singlequery";
 $this->load->view('template2',$data);
    }
    
   
}