<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	function allimages()
	 {
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data['title']="All Images";
		$viewimage=$this->product_model->allimages($page);
		$data[ 'color' ] =$this->product_model->getcolor();
		
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		
		$this->load->view('imageblank',$data);	
		
	 }
	 function sunglassimagesbrand()
	 {
	 $data['title']="Sunglasses";
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$viewimage=$this->product_model->sunglassimagesbrand($page);
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data[ 'color' ] =$this->product_model->getcolor();
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		$this->load->view('imageblank',$data);	 
	 }
	 function frameimagesbrand()
	 {
	 $data['title']="Frames";
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$viewimage=$this->product_model->frameimagesbrand($page);
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data[ 'color' ] =$this->product_model->getcolor();
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		$this->load->view('imageblank',$data);	
	 }
	  function sunglassimageshomebrand()
	 {
	 $data['title']="Sunglasses";
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$viewimage=$this->product_model->sunglassimageshomebrand($page);
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data[ 'color' ] =$this->product_model->getcolor();
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		$this->load->view('imageblank',$data);	 
	 }
	 function frameimageshomebrand()
	 {
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$viewimage=$this->product_model->frameimageshomebrand($page);
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data[ 'color' ] =$this->product_model->getcolor();
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		$this->load->view('imageblank',$data);	
	 }
	  function sunglassimageshousebrand()
	 {
	 $data['title']="Sunglasses";
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$viewimage=$this->product_model->sunglassimageshousebrand($page);
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data[ 'color' ] =$this->product_model->getcolor();
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		$this->load->view('imageblank',$data);	 
	 }
	 function frameimageshousebrand()
	 {
	 $data['title']="Frames";
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$viewimage=$this->product_model->frameimageshousebrand($page);
		$data[ 'brand' ] =$this->brand_model->getbrand();
		$data['image']=$viewimage->table;
		$data['total']=$viewimage->total;
		$this->load->view('imageblank',$data);	
	 }
	  function offerimages()
	 {
	 $data['title']="Offers";
		$page=$this->input->get_post('page');
		if($page=="")
		$page=1;
		$data['image']=$this->product_model->offerimages($page);
		$data[ 'color' ] =$this->product_model->getcolor();
		$data[ 'brand' ] =$this->brand_model->getbrand();
		
		$this->load->view('imageblank',$data);	 
	 }
	 function productpage()
	{
		$id=$this->input->get_post('id');
		$productdet=$this->product_model->productpage($id);
		$data[ 'color' ] =$this->product_model->getcolor();
		$data['product']=$productdet->product;
		$data['images']=$productdet->images;
		$this->load->view('viewproduct',$data);	 
	}
	function checkloyalty()
	{
		$data["title"]="Check Loyalty";
		$this->load->view('checkloyalty',$data);	 
	}
}

?>