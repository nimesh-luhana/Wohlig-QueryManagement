<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Deleting extends CI_Model
{
public function delete_single_row_user($id)
{
$this->db->delete('user',
                  "id = ".$id);
    
}
    public function delete_single_row_company($id)
{
$this->db->delete('company',
                  "id = ".$id);
    
}
   
    public function delete_single_row_usercompany($id)
{
$this->db->delete('usercompany',
                  "id = ".$id);
    
}
  
    public function delete_single_row_query($id)
{
$this->db->delete('query',
                  "id = ".$id);
    
}
}