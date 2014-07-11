<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Store extends CI_Model
{
public function store_single_row_user($data)
{
    $id=$data['id'];
    $name=$data['name'];
    $username=$data['username'];
    $password=$data['password'];
    $logo=$data['logo'];
    $access_level=$data['access_level'];
    $json=$data['json'];
        $email=$data['email'];
    
$this->db->query("insert into `user` (`id`,`name`,`username`,`password`,`logo`,`access_level`,`json`,`email`) values ('$id','$name','$username',md5('$password'),'$logo','$access_level','$json','$email')");
    
}
    public function store_single_row_company($data)
    {
$this->db->insert('company',$data);
    
}
    
    public function store_single_row_usercompany($data)
{
$this->db->insert('usercompany',$data);
    
}
    public function store_single_row_query($data)
{
$this->db->insert('query',$data);
    
}
    


}