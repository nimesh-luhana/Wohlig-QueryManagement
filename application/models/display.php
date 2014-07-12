<?php 
class Display extends CI_Model
{
public function display_db_user()
{
     return $table=$this->db->query("SELECT * FROM `user`")->result();
}
public function display_db_company($segment)
{
    if($segment!=NULL)
    return $table=$this->db->query("SELECT * FROM `company` LIMIT $segment,10;")->result();
    else
    {
    $segment=0;
     return $table=$this->db->query("SELECT * FROM `company` LIMIT $segment,10;")->result();
    }
}

public function display_db_usercompany()
{
     return $table=$this->db->query("select `usercompany`.`id`,`user`.`name` as user,`company`.`name` as company
   from usercompany inner join `user` on `user`.`id`=`usercompany`.`user` 
   inner join `company` on `company`.`id`=`usercompany`.`company`;")->result();
}

public function display_db_query()
{
   return $table=$this->db->query("select `query`.`id`,`query`.`name`,`query`.`email`
   ,`query`.`phone`,`query`.`query`,`query`.`json`,`query`.`time_stamp`,`company`.`name` as `company`
   from query inner join `company` on `query`.`company`=`company`.`id`;")->result();
}
    
    
    public function display_db_customer($id)
{
   return $table=$this->db->query("select `usercompany`.`id`,`usercompany`.`company` as `c_id`, `company`.`name` as `company`
   from usercompany inner join `company` on `usercompany`.`company`=`company`.`id` where `usercompany`.`user`='$id';")->result();
}
    public function display_db_queries($id)
{
   return $table=$this->db->query("select `query`.`id`,`query`.`name`,`query`.`email`,`query`.`time_stamp`
   ,`query`.`phone`,`query`.`query`,`query`.`json`,`query`.`company` from `query` where `query`.`company`=$id;")->result();
}
        
    public function display_single_row_db_user($row_id)
{
    return $row=$this->db->get_where('user',array('id'=>$row_id))->row();
}

    public function display_single_row_db_company($row_id)
{
    return $row=$this->db->get_where('company',array('id'=>$row_id))->row();
}
   
    public function display_single_row_db_usercompany($row_id)
{
    return $row=$this->db->get_where('usercompany',array('id'=>$row_id))->row();
}
   
    public function display_single_row_db_query($row_id)
{
    return $row=$this->db->get_where('query',array('id'=>$row_id))->row();
}

    public function display_single_row_db_customer($row_id)
{
    return $row=$this->db->get_where('customer',array('id'=>$row_id))->row();
}
     public function display_db_singlequery($row_id)
{
    return $row=$this->db->get_where('query',array('id'=>$row_id))->row();
}
    




}