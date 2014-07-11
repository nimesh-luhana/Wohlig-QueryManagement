<?php
if ( !defined( 'BASEPATH' ) )
	exit( 'No direct script access allowed' );
class User_model extends CI_Model
{
	protected $id, $username, $password, $access_level, $details;
	public function validate($username,$password )
	{
		$query     = " SELECT `id`,`username`,`access_level` FROM `user` WHERE `username` LIKE '$username' AND `password` LIKE md5('$password') ";
		$row       = $this->db->query( $query );
		
		if ( $row->num_rows() > 0 ) {
			$row=$row->row();
			$this->id       = $row->id;
			//$this->name     = $row_array[ 0 ][ 'name' ];
			$this->username = $username;
			$this->access_level = $row->access_level;
			$newdata        = array(
				'id' => $this->id,
				'username' => $this->username,
				//'name' => $this->name,
				'access_level' => $this->access_level,
				'logged_in' => 'true' 
			);
			$this->session->set_userdata( $newdata );
			return true;
		} //count( $row_array ) == 1
		else
			return false;
	}
	public function getaccesslevels()
	{
		$query=$this->db->query("SELECT * FROM `access_level` ORDER BY `id` ASC")->result();
		$return=array(
		'' => ''
		);
		foreach($query as $row)
		{
			$return[$row->id]=$row->name;
		}
		
		return $return;
	}
	public function create($username,$password,$access_level,$email,$phone,$address,$dateofbirth)
	{
		
		$data        = array(
			//'name' => $name,
			'username' => $username,
			'password' =>md5($password),
			'access_level' => $access_level,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'dateofbirth' => $dateofbirth,
		);
		$query=$this->db->insert( 'user', $data );
		if(!$query)
			return  0;
		else
			return  1;
	}
	function viewusers()
	{
		$query=$this->db->query("SELECT `user`.`id` as `id`,`user`.`username` as `username`,`user`.`password` as `password`,`user`.`email` as `email`,`user`.`phone` as `phone`,`user`.`address` as `address`,`user`.`dateofbirth` as `dateofbirth`,`access_level`.`name` as `access_level` FROM `user` INNER JOIN `access_level` ON `user`.`accesslevel`=`accesslevel`.`id` ORDER BY `name` ASC")->result();
		return $query;
	}
	public function beforeedit( $id )
	{
		$this->db->where( 'id', $id );
		$query=$this->db->get( 'user' )->row();
		return $query;
	}
	
	public function edit( $id,$username,$password,$access_level,$email,$phone,$address,$dateofbirth )
	{
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'access_level' => $access_level,
			'email' => $email,
			'phone' => $phone,
			'address' => $address,
			'dateofbirth' => $dateofbirth,
		);
		$this->db->where( 'id', $id );
		$this->db->update( 'user', $data );
		return 1;
	}
	function deleteuser($id)
	{
		$query=$this->db->query("DELETE FROM `user` WHERE `id`='$id'");
	}
	
}
?>