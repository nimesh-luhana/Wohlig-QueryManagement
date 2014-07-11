<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fill_Details extends CI_Model
{
    
    
    public function users()
    {
    
     $res_users=$this->db->query('select * from user')->result();
$users=array(''=>'Select a User');
foreach($res_users as $user)

{ 
    $users[$user->id]=$user->name;

}
    return $users;
    
    }
       public function companies()
    {
    
                
              $res_companies=$this->db->query('select * from company')->result();
$companies=array(''=>'Select a Company');

foreach($res_companies as $company)

{ 
    $companies[$company->id]=$company->name;

}
              return $companies;
           
       }
    
    




}