<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Updating extends CI_Model
{
public function update_single_row_user($data)
{
      $id=$data['id'];
    $name=$data['name'];
    $username=$data['username'];
    $password=$data['password'];
    $logo=$data['logo'];
    $access_level=$data['access_level'];
    $json=$data['json'];
        $email=$data['email'];
    
    
$this->db->query("update `user` set `id`='$id',`name`='$name',`username`='$username',`password`=md5('$password'),
`logo`='$logo',`access_level`='$access_level',`json`='$json',`email`='$email' where `id`='$id'");
    
    
}
    public function update_single_row_user2($data)
{
      $id=$data['id'];
    $name=$data['name'];
    $username=$data['username'];
    
    $logo=$data['logo'];
    $access_level=$data['access_level'];
    $json=$data['json'];
        $email=$data['email'];
    
    
$this->db->query("update `user` set `id`='$id',`name`='$name',`username`='$username',
`logo`='$logo',`access_level`='$access_level',`json`='$json',`email`='$email' where `id`='$id'");
    
    
}
   
    public function update_single_row_company($data)
{
$this->db->update('company',$data,
                  "id = ".$data['id']);
    
}
    public function update_single_row_usercompany($data)
{
$this->db->update('usercompany',$data,
                  "id = ".$data['id']);
    
}
    public function update_single_row_query($data)
{
$this->db->update('query',$data,
                  "id = ".$data['id']);
    
}
      

}