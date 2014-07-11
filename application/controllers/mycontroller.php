<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mycontroller extends CI_Controller
{
    
    public function __construct( )
	{
		parent::__construct();
		$this->is_logged_in();
	}
    function is_logged_in( )
	{
		$is_logged_in = $this->session->userdata( 'logged_in' );
        $access_level = $this->session->userdata( 'access_level' );
		if ( $is_logged_in !== 'true' || !isset( $is_logged_in ) ) {
			redirect( base_url() . 'index.php/login', 'refresh' );
		}
        
        
      if($access_level=="Customer")
        {
        
        redirect( base_url() . 'index.php/Customer', 'refresh' );
        
        
        }
        
        
	}
    
   
    
    
    
    public function delete_user()
    {   
        $this->deleting->delete_single_row_user($this->input->get('id'));
       $this->display_data_user();
    
    }
      
    public function delete_company()
    {   
        $this->deleting->delete_single_row_comoany($this->input->get('id'));
       $this->display_data_company();
    
    }
      
  
    public function delete_usercompany()
    {   
        $this->deleting->delete_single_row_usercompany($this->input->get('id'));
       $this->display_data_usercompany();
    
    }
      
    
    public function delete_query()
    {   
        $this->deleting->delete_single_row_query($this->input->get('id'));
       $this->display_data_query();
    
    }
    public function index()
    {
        $data['page']="front_page";
    $this->load->view('template',$data);
    }
    
    public function storeintodb_user()
    {
        
        		
     $data['id']=$this->input->post("id");
        $data['name']=$this->input->post("name");
        $data['username']=$this->input->post("username");
    $data['password']=$this->input->post('password');
  $data['json']=$this->input->post("json");
        
        $data['logo']=$this->input->post("logo");
        $data['access_level']=$this->input->post("access_level");
        $data['email']=$this->input->post("email");
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
$this->form_validation->set_rules('password', 'Password', 'required|trim');
$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|matches[password]');
$this->form_validation->set_rules('email', 'Contact Number', 'required|trim');
        $this->form_validation->set_rules('access_level', 'Access Level', 'required|trim');
        
         if ($this->form_validation->run() == FALSE)
		{
             
	 $this->create_user();
		}
		else
		{
	
        $this->store->store_single_row_user($data);
      $this->display_data_user();
            }
    }
    
    
        public function storeintodb_company()
    {
     $data['id']=$this->input->post("id");
        $data['name']=$this->input->post("name");  
              $data['json']=$this->input->post("json");  
             $this->form_validation->set_rules('name', 'Name', 'required|trim');
              $this->form_validation->set_rules('json', 'Json Object', 'required|trim');
            
         if ($this->form_validation->run() == FALSE)
		{
             
	 $this->create_company();
		}
		else
		{
	
               
        $this->store->store_single_row_company($data);
        $this->display_data_company();
            }
            
            
  
            }
    
    
        public function storeintodb_usercompany()
    {
     $data['id']=$this->input->post("id");
        $data['user']=$this->input->post("user");
        $data['company']=$this->input->post("company");
         $this->form_validation->set_rules('user', 'User', 'required|trim');
        $this->form_validation->set_rules('company', 'Company', 'required|trim');
             if ($this->form_validation->run() == FALSE)
		{
             
	 $this->create_usercompany();
		}
		else
		{
	
               
         $this->store->store_single_row_usercompany($data);
          $this->display_data_usercompany();
            }
      
            }
    
    
        public function storeintodb_query()
    {
     $data['id']=$this->input->post("id");
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
             
	 $this->create_query();
		}
		else
		{
	
               
       $this->store->store_single_row_query($data);
       $this->display_data_query();
            }
      
        
            }
    
    
    
     public function editdb_user()
    {
     $id=$this->input->post("id");
     $name=$this->input->post("name");
         $username=$this->input->post("username");
        echo $password=$this->input->post("password");
         $json=$this->input->post("json");
         $access_level=$this->input->post("access_level");
        $email=$this->input->post("email");
        $logo=$this->input->post("logo");  
         
         
           $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
$this->form_validation->set_rules('password', 'Password', 'trim');
$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|matches[password]');
$this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('access_level', 'Access Level', 'required|trim');
        
         if ($this->form_validation->run() == FALSE)
		{
             
	  $data['rowvalues']=$this->display->display_single_row_db_user($id);
        $data['page']="edituser";
    $this->load->view('template',$data);
		}
		else
		{
            if($password!=NULL)
                
            {
                $data=array('id'=>$id,'name'=>$name,'username'=>$username,'password'=>$password,'json'=>$json,
                     'access_level'=>$access_level,'email'=>$email,'logo'=>$logo);
        $this->updating->update_single_row_user($data);
            }
            else
                {
                $data=array('id'=>$id,'name'=>$name,'username'=>$username,'json'=>$json,
                     'access_level'=>$access_level,'email'=>$email,'logo'=>$logo);
        $this->updating->update_single_row_user2($data);
            }
                
      $this->display_data_user();
	
    
            }
         
        
    
    
    }
    public function editdb_company()
    {
     $id=$this->input->post("id");
        $name=$this->input->post("name");
        $json=$this->input->post("json");
          $this->form_validation->set_rules('name', 'Name', 'required|trim');
       
            
         if ($this->form_validation->run() == FALSE)
		{
 $data['rowvalues']=$this->display->display_single_row_db_company($id);
        $data['page']="editcompany";
    $this->load->view('template',$data);
		}
		else
		{
	
        
         $data=array('id'=>$id,'name'=>$name,'json'=>$json);
         $this->updating->update_single_row_company($data);
        
       $this->display_data_company();
            }
            
        
      
    
    
    }public function editdb_usercompany()
    {
     $id=$this->input->post("id");
        $user=$this->input->post("user");
         $company=$this->input->post("company");
        
         $this->form_validation->set_rules('user', 'User', 'required|trim');
        $this->form_validation->set_rules('company', 'Company', 'required|trim');
             if ($this->form_validation->run() == FALSE)
		{
              
	 $data['rowvalues']=$this->display->display_single_row_db_usercompany($id);
      $data['users']=$this->fill_details->users();
    
                 $data['companies']=$this->fill_details->companies();
    //$data['states']=$this->fill_details->city();    
        $data['page']="editusercompany";
    $this->load->view('template',$data);
		}
		else
		{
	
      $data=array('id'=>$id,'user'=>$user,'company'=>$company);
         $this->updating->update_single_row_usercompany($data);
        
   $this->display_data_usercompany();
            }
         
       
    
    
    }public function editdb_query()
    {
     $id=$this->input->post("id");
        $name=$this->input->post("name");
         $company=$this->input->post("company");
        $email=$this->input->post("email");
        $phone=$this->input->post("phone");
        $query=$this->input->post("query");
        $json=$this->input->post("json");
        
        
         
         $data=array('id'=>$id,'name'=>$name,'company'=>$company,'email'=>$email,'phone'=>$phone,'query'=>$query,'json'=>$json);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('query', 'Query', 'required|trim');
             $this->form_validation->set_rules('company', 'Company', 'required|trim');
             $this->form_validation->set_rules('json', 'Json', 'required|trim');
             $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
            
             if ($this->form_validation->run() == FALSE)
		{
             
	 $data['rowvalues']=$this->display->display_single_row_db_query($id);
     $data['cities']=$this->fill_details->query();
 
     
        $data['page']="editquery";
    $this->load->view('template',$data);
		}
		else
		{
	  $data=array('id'=>$id,'name'=>$name,'company'=>$company,'email'=>$email,'phone'=>$phone,'query'=>$query,'json'=>$json);
     $this->updating->update_single_row_query($data);
        
       $this->display_data_query();
            }
        
    
    
    }
    
    
    
    
    
    public function create_user()
    {
     $data['page']="filldetails_user";
        $this->load->view('template',$data); 
    }
    
    public function display_data_user()
    {
         $data['table']=$this->display->display_db_user();  
        $data['page']="display_user";
    $this->load->view('template',$data);
    }
     public function create_company()
    {
     $data['page']="filldetails_company";
        $this->load->view('template',$data); 
    }
    
    public function display_data_company()
    {
         $data['table']=$this->display->display_db_company();  
        $data['page']="display_company";
    $this->load->view('template',$data);
    }
     public function create_usercompany()
    {$data['users']=$this->fill_details->users();
        $data['companies']=$this->fill_details->companies();
     $data['page']="filldetails_usercompany";
        $this->load->view('template',$data); 
    }
    
    public function display_data_usercompany()
    {
         $data['table']=$this->display->display_db_usercompany();  
        $data['page']="display_usercompany";
    $this->load->view('template',$data);
    }
         public function create_query()
    {  
             
              $data['companies']=$this->fill_details->companies();
             
     $data['page']="filldetails_query";
        $this->load->view('template',$data); 
    }
    
    public function display_data_query()
    {
         $data['table']=$this->display->display_db_query();  
        $data['page']="display_query";
    $this->load->view('template',$data);
    }
       
    
    
    public function edit_user()
    {
        $data['row_id']=$this->input->get('id'); 
        $data['rowvalues']=$this->display->display_single_row_db_user($data['row_id']);
        $data['page']="edituser";
    $this->load->view('template',$data);
        
    }
public function edit_company()
    {
        $data['row_id']=$this->input->get('id'); 
    $data['rowvalues']=$this->display->display_single_row_db_company($data['row_id']);
        $data['page']="editcompany";
    $this->load->view('template',$data);
        
    }
public function edit_usercompany()
    {
        $data['row_id']=$this->input->get('id'); 
    $data['rowvalues']=$this->display->display_single_row_db_usercompany($data['row_id']);
    $data['users']=$this->fill_details->users();
        $data['companies']=$this->fill_details->companies();
    //$data['states']=$this->fill_details->city();    
        $data['page']="editusercompany";
    $this->load->view('template',$data);
        
    }
public function edit_query()
    {       $data['row_id']=$this->input->get('id'); 
    $data['rowvalues']=$this->display->display_single_row_db_query($data['row_id']);
    // $data['cities']=$this->fill_details->area();
 
      $data['companies']=$this->fill_details->companies();
        $data['page']="editquery";
    $this->load->view('template',$data);
        
    }

    

    
}