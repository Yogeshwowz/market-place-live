<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model{
    
    protected $users = 'users';
    protected $countries = 'countries';
	protected $profile = 'profile';
	protected $profile_gallery_images_docs = 'profile_gallery_images_docs';
	protected $business_industry = 'business_industry';
	protected $send_proposal = 'send_proposal';
	protected $setting = 'setting';
	protected $company_sector = 'company_sector';
	protected $industries_preference = 'industries_preference';
	protected $resources = 'resources';
	protected $bookmark = 'bookmark';
	protected $deal_setting = 'deal_setting';
	
	
	public function __construct(){
			parent::__construct();
			$this->load->database();
	}
    
   function getUserById(){
		$select =$this->users.".*,".$this->countries.".name as countryName";	   
		$this->db->select($select);
		$this->db->from($this->users);
		$this->db->join($this->countries, $this->countries.'.id =' .$this->users.'.country_id','left');
		$this->db->where($this->users.'.id', $this->session->userdata('uid'));
		$query = $this->db->get();
		return $query->row_array();
    }
	public function updateProfile(){
		
		 /*if(!empty($_FILES['add_photo']["name"])){
				$ext = pathinfo($_FILES['add_photo']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['add_photo']["name"]= 'gallery-'.$fileName;
				$add_photo = $_FILES['add_photo']["name"];
				$config['upload_path'] = './assets/upload/gallery/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('add_photo')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		   if(!empty($_FILES['add_documents']["name"])){
				$ext = pathinfo($_FILES['add_documents']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['add_documents']["name"]= 'gallery-'.$fileName;
				$add_documents = $_FILES['add_documents']["name"];
				$config['upload_path'] = './assets/upload/gallery/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('add_documents')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		    if(!empty($_FILES['attach_proof']["name"])){
				$ext = pathinfo($_FILES['attach_proof']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['attach_proof']["name"]= 'gallery-'.$fileName;
				$attach_proof = $_FILES['attach_proof']["name"];
				$config['upload_path'] = './assets/upload/gallery/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('attach_proof')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		   if(!empty($_FILES['company_logo']["name"])){
				$ext = pathinfo($_FILES['company_logo']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['company_logo']["name"]= 'gallery-'.$fileName;
				$company_logo = $_FILES['company_logo']["name"];
				$config['upload_path'] = './assets/upload/gallery/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('company_logo')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }*/
		   if(!empty($_POST['your_name'])){$your_name =$_POST['your_name']; }else{$your_name ='';}
		   if(!empty($_POST['mobile_number'])){
			   $mobile_number =$_POST['mobile_number']; }else{$mobile_number ='';}
		   if(!empty($_POST['official_email'])){$official_email =$_POST['official_email']; }else{$official_email ='';}
		   if(!empty($_POST['company_name'])){$company_name =$_POST['company_name']; }else{$company_name ='';}
		   if(!empty($_POST['interested_in'])){$interested_in =$_POST['interested_in']; }else{$interested_in ='';}
		     if(!empty($_POST['your_company'])){$your_company =$_POST['your_company']; }else{$your_company ='';}
			   
		   if(!empty($_POST['field_1'])){$field_1 =$_POST['field_1']; }else{$field_1 ='';}
		   if(!empty($_POST['field_2'])){$field_2 =$_POST['field_2']; }else{$field_2 ='';}
		   if(!empty($_POST['field_3'])){$field_3 =$_POST['field_3']; }else{$field_3 ='';}
		   if(!empty($_POST['field_4'])){$field_4 =$_POST['field_4']; }else{$field_4 ='';}
		   if(!empty($_POST['field_5'])){$field_5 =$_POST['field_5']; }else{$field_5 ='';}
		   if(!empty($_POST['field_6'])){$field_6 =$_POST['field_6']; }else{$field_6 ='';}
		   if(!empty($_POST['field_7'])){$field_7 =$_POST['field_7']; }else{$field_7 ='';}
		   if(!empty($_POST['field_8'])){$field_8 =$_POST['field_8']; }else{$field_8 ='';}
		   if(!empty($_POST['field_9'])){$field_9 =$_POST['field_9']; }else{$field_9 ='';}
		   if(!empty($_POST['field_10'])){$field_10 =$_POST['field_10']; }else{$field_10 ='';}
		   if(!empty($_POST['field_11'])){$field_11 =$_POST['field_11']; }else{$field_11 ='';}
		   if(!empty($_POST['field_12'])){$field_12 =$_POST['field_12']; }else{$field_12 ='';}
		   if(!empty($_POST['field_13'])){$field_13 =$_POST['field_13']; }else{$field_13 ='';}
		   if(!empty($_POST['field_14'])){$field_14 =$_POST['field_14']; }else{$field_14 ='';}
		   if(!empty($_POST['field_15'])){$field_15 =$_POST['field_15']; }else{$field_15 ='';}
		   if(!empty($_POST['field_16'])){$field_16 =$_POST['field_16']; }else{$field_16 ='';}
		   if(!empty($_POST['tentative_selling'])){$tentative_selling =$_POST['tentative_selling']; }else{$tentative_selling ='';}
		   if(!empty($_POST['reason_for_sale'])){$reason_for_sale =$_POST['reason_for_sale']; }else{$reason_for_sale ='';}
		   if(!empty($_POST['investmentto'])){$investmentto =$_POST['investmentto']; }else{$investmentto ='';}
		   $data = array(
							'first_name' => $your_name,
							'user_phone' => $mobile_number
						);
			$this->db->where('id', $this->session->userdata('uid'));		  
            $this->db->update($this->users, $data);
			
			 $updatedata = array(
							'official_email' => $official_email,
							'field_1' => $field_1,
							'field_3' => $field_3,
							'field_5' => $field_5,
							'field_6' => $field_6,
							'field_7' => $field_7,
							'field_8' => $field_8
							
							
						);
			if($this->session->userdata('role')==1 || $this->session->userdata('role')==2){

				 $updatedata['interested_in'] = $interested_in;
				 $updatedata['your_company'] = $your_company;
				 $updatedata['investmentto'] = $investmentto;
				 $updatedata['field_4'] = $field_4;
				 $updatedata['field_2'] = serialize($field_2);
				 $updatedata['field_9'] = serialize($field_9);
				 
			}			
			if($this->session->userdata('role')==3){
				$updatedata['field_4'] = serialize($field_4);
				$updatedata['company_name'] = $company_name;
				$updatedata['interested_in'] = $interested_in;
				$updatedata['field_9'] = $field_9;
				$updatedata['field_10'] = $field_10;
				$updatedata['field_11'] = $field_11;
				$updatedata['field_12'] = $field_12;
				$updatedata['field_13'] = $field_13;
				$updatedata['field_14'] = $field_14;
				$updatedata['field_15'] = $field_15;
				$updatedata['field_16'] = $field_16;
				$updatedata['tentative_selling'] = $tentative_selling;
				$updatedata['reason_for_sale'] = $reason_for_sale;
			}
			if($this->session->userdata('role')==4){
				$updatedata['field_4'] = $field_4;
				 $updatedata['interested_in'] = $interested_in;
				 $updatedata['your_company'] = $your_company;
				 $updatedata['investmentto'] = $investmentto;
				 $updatedata['field_2'] = serialize($field_2);
				 $updatedata['field_9'] = serialize($field_9);
				 $updatedata['field_10'] = $field_10;
				 
			}
		   $this->db->where('user_id', $this->session->userdata('uid'));		  
           $this->db->update($this->profile, $updatedata);
		   if($this->session->userdata('role')==1 || $this->session->userdata('role')==2){
			   $this ->db ->where('user_id', $this->session->userdata('uid'));
			   $this ->db->delete($this->industries_preference);
			   $this ->db ->where('user_id', $this->session->userdata('uid'));
			   $this ->db->delete($this->company_sector);
			   
			   
			 foreach($field_2 as $field_2){
				$data = array(
							'user_id' => $this->session->userdata('uid'),
							'ipname' =>$field_2,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->industries_preference, $data);
			 }  
			 foreach($field_9 as $field_9){
				$data = array(
							'user_id' => $this->session->userdata('uid'),
							'cname' =>$field_9,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->company_sector, $data);
			 } 
		   }
		   return 1;
    }
	function getUserProfileById(){
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where($this->profile.'.user_id', $this->session->userdata('uid'));
		$query = $this->db->get();
		return $query->row_array();
    }
	function cImageGallery(){
	
		$user_id = $this->session->userdata('uid');
		$array = array();
		$img = '';
		set_time_limit(0);
		ini_set('memory_limit', '-1');
		if(!empty($_FILES['userfile']["name"])){
		 $ext = pathinfo($_FILES['userfile']["name"]);
			$fileName = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']["name"]= 'gallery-'.$fileName;
			//Upload Image
			$config['upload_path'] = './assets/upload/gallery/';
			$config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
			}else{
				$data =  array('upload_data' => $this->upload->data());
				//echo $_FILES['userfile']['name'];
				$this->resizeImage($_FILES['userfile']['name']);
				$this->db->where(array('user_id'=>$user_id,'tag'=>'image'))->from($this->profile_gallery_images_docs);
				$query = $this->db->get();
				$numRow = $query->num_rows();
				$data = array(
							'image' => $_FILES['userfile']['name'],
							'tag' =>$_POST['tag'],
							'type' =>$_POST['Itype'],
							'user_id' => $user_id,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->profile_gallery_images_docs, $data);
						$lastID = $this->db->insert_id();
						$array['id'] =$lastID; 
						$array['imagecount'] = $numRow; 
						$array['imagename'] = $_FILES['userfile']['name'];
						$showpath =base_url()."assets/upload/gallery/thumbnail/";
						$img .= '<div class="col-md-2" id="'.$lastID.'"><div class="thumbnail">';
							$img .= '<img class="thumbnail-img" src="'.$showpath.$_FILES['userfile']['name'].'" />';
							$img .= '<span class="remove-image" onclick="removeimage('.$lastID.')">X</span></div></div>';
						$array['img'] = $img; 						
				
			}
			return $array;
		
		}
	}
	public function resizeImage($filename){
	$source_path = $_SERVER['DOCUMENT_ROOT'] . '/market-place/assets/upload/gallery/' . $filename;
	$target_path = $_SERVER['DOCUMENT_ROOT'] . '/market-place/assets/upload/gallery/thumbnail/';
	//$source_path = './assets/img/gallery/' . $filename;
	//$target_path =  './assets/img/gallery/thumbnail/';
	
	 $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          //'create_thumb' => TRUE,
          //'thumb_marker' => '_thumb',
          'width' => 150,
          'height' => 150
      );

		$this->load->library('image_lib',$config_manip);
		$this->image_lib->initialize($config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
		$this->image_lib->clear();
   }
   
   function removeimage(){
		$id = $this->input->post('id');
		$this->db->where('pmid', $id);
        return $this->db->delete($this->profile_gallery_images_docs);
    }
	function cDocumentGallery(){
	 $user_id = $this->session->userdata('uid');
		$array = array();
		$img = '';
		set_time_limit(0);
		ini_set('memory_limit', '-1');
		if(!empty($_FILES['userfile']["name"])){
		  $ext = pathinfo($_FILES['userfile']["name"]);
		  
		  $fileName = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']["name"]= 'gallery-'.$fileName;
			//Upload Image
			$config['upload_path'] = './assets/upload/gallery/';
			$config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
			}else{
				$data =  array('upload_data' => $this->upload->data());
				$this->db->where(array('user_id'=>$user_id,'tag'=>'doc'))->from($this->profile_gallery_images_docs);
				$query = $this->db->get();
				$numRow = $query->num_rows();
				$data = array(
							'image' => $_FILES['userfile']['name'],
							'tag' =>$_POST['tag'],
							'type' =>$_POST['Itype'],
							'user_id' => $user_id,
							'created_date' => date("Y-m-d H:i:s")
						);
						$result = $this->db->insert($this->profile_gallery_images_docs, $data);
						$lastID = $this->db->insert_id();
						$array['id'] =$lastID; 
						$array['imagecount'] = $numRow; 
						$array['imagename'] = $_FILES['userfile']['name'];
						$showpath =base_url()."assets/img/";
						if($ext['extension']=='docx' || $ext['extension']=='doc'){ $nameicon = "word.png";}
						if($ext['extension']=='jpg' || $ext['extension']=='gif' || $ext['extension']=='png'){ $nameicon = "img-icon.png";}
						if($ext['extension']=='pdf'){ $nameicon = "pdf-icon.png";}
						$img .= '<div class="col-md-2" id="'.$lastID.'"><div class="thumbnail">';
							$img .= '<img class="thumbnail-img" src="'.$showpath.$nameicon.'" />';
							$img .= '<span class="remove-image" onclick="removeimage('.$lastID.')">X</span></div></div>';
						$array['img'] = $img; 						
				
			}
			return $array;
		
		}
	}
	public function Gimages(){
		$user_id = $this->session->userdata('uid');
		if($this->session->userdata('role')==1){ 
			$this->db->where(array('user_id'=>$user_id,'tag'=>'image','type'=>'buyer'));}
		if($this->session->userdata('role')==2){ 
			$this->db->where(array('user_id'=>$user_id,'tag'=>'image','type'=>'buyer'));
		}
		if($this->session->userdata('role')==3){
			$this->db->where(array('user_id'=>$user_id,'tag'=>'image','type'=>'seller'));	
		}
		if($this->session->userdata('role')==4){
			$this->db->where(array('user_id'=>$user_id,'tag'=>'image','type'=>'advisor'));	
		}
		$query = $this->db->get($this->profile_gallery_images_docs);
		return $query->result_array(); 
    }
	public function Docimages(){
		$user_id = $this->session->userdata('uid');
		if($this->session->userdata('role')==1){ 
			$this->db->where(array('user_id'=>$user_id,'tag'=>'doc','type'=>'buyer'));}
		if($this->session->userdata('role')==2){ 
			$this->db->where(array('user_id'=>$user_id,'tag'=>'doc','type'=>'buyer'));
		}
		if($this->session->userdata('role')==3){
			$this->db->where(array('user_id'=>$user_id,'tag'=>'doc','type'=>'seller'));
		}
		if($this->session->userdata('role')==4){
			$this->db->where(array('user_id'=>$user_id,'tag'=>'doc','type'=>'advisor'));	
		}
		$query = $this->db->get($this->profile_gallery_images_docs);
		return $query->result_array(); 
    }
		function updateDocName(){
			$data = array( 'name' => $_POST['doctxt']);
		    $this->db->where('pmid', $_POST['pmid']);		  
           return  $this->db->update($this->profile_gallery_images_docs, $data);
    }
	function cProofGallery(){
	 $user_id = $this->session->userdata('uid');
		$array = array();
		$img = '';
		set_time_limit(0);
		ini_set('memory_limit', '-1');
		if(!empty($_FILES['userfile']["name"])){
		  $ext = pathinfo($_FILES['userfile']["name"]);
		  $fileName = rand().'-'.time().'.'.$ext['extension'];
			$_FILES['userfile']["name"]= 'gallery-'.$fileName;
			//Upload Image
			$config['upload_path'] = './assets/upload/gallery/';
			$config['allowed_types'] = 'gif|jpg|png|pdf|docx|doc';
			
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
			}else{
				$data =  array('upload_data' => $this->upload->data());
				$this->db->where(array('user_id'=>$user_id,'tag'=>'proof'))->from($this->profile_gallery_images_docs);
				$query = $this->db->get();
				$numRow = $query->num_rows();
				if($numRow > 0){
					$getdata = $query->row_array(); 
					$data = array( 'image' => $_FILES['userfile']['name']);
						$this->db->where('pmid', $getdata['pmid']);		  
					return  $this->db->update($this->profile_gallery_images_docs, $data);
				}else{
					$data = array(
							'image' => $_FILES['userfile']['name'],
							'tag' =>$_POST['tag'],
							'user_id' => $user_id,
							'created_date' => date("Y-m-d H:i:s")
						);
						return $result = $this->db->insert($this->profile_gallery_images_docs, $data);
						//$lastID = $this->db->insert_id();
				}
				
			}
			
		
		}
	}
	function getAllSeller(){
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->order_by($this->profile.".pid", "desc");
		$this->db->limit(2, 1);
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('role','3');
		$where =$this->profile.".amount!=''"; 
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
    }
    function getAllSellerDashboard(){
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->order_by($this->profile.".pid", "desc");
	
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('role','3');
		$where =$this->profile.".amount!=''"; 
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
    }
    
	function getAllBuyer(){
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->order_by($this->profile.".pid", "desc");
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('role','2');
		$where =$this->profile.".amount!=''"; 
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
    }
	function getAllInvestor(){
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->order_by($this->profile.".pid", "desc");
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('role','1');
		$where =$this->profile.".amount!=''"; 
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
    }
	function getAllAdvisory(){
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->order_by($this->profile.".pid", "desc");
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('role','4');
		$where =$this->profile.".amount!=''"; 
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
    }
	function viewProfile($id){
		$id = base64_decode($id);
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		return $query->row_array();
    }
	function Gallery($id){   
            $query = $this->db->where(array('user_id'=>$id,'tag'=>'image'))->get($this->profile_gallery_images_docs);
            return $query->result_array(); 
    }
	function business_industry(){   
            $query = $this->db->get($this->business_industry);
            return $query->result_array(); 
    }
	function viewBuyer($id){
		$id = base64_decode($id);
		$select =$this->users.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->from($this->profile);
		$this->db->join($this->users, $this->users.'.id =' .$this->profile.'.user_id','left');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		return $query->row_array();
    }
	public function buyerDocimages($id){
		$id = base64_decode($id);
		$this->db->where(array('user_id'=>$id,'tag'=>'doc'))->from($this->profile_gallery_images_docs);
		$query = $this->db->get();
		return $query->result_array(); 
    }
	public function sellerDocimages($id){
		$id = base64_decode($id);
		$this->db->where(array('user_id'=>$id,'tag'=>'doc'))->from($this->profile_gallery_images_docs);
		$query = $this->db->get();
		return $query->result_array(); 
    }
	 function getUserdataById(){
		 $query =  $this->db->where('user_id', $this->session->userdata('uid'))->get($this->profile);
        return $query->row_array();
    }
	 function sendProposal(){
		$from =  $this->session->userdata('uid');
		$this->db->where(array('user_id'=>$this->session->userdata('uid')))->from($this->profile);
		$query = $this->db->get();
		$getresult = $query->row_array(); 
		$cpoints = $getresult['cpoints'];
		if(!empty($cpoints)){
		$cpoints  = $cpoints  - 1;
			$updatedata = array('cpoints' =>$cpoints);
			$this->db->where('user_id', $this->session->userdata('uid'));		  
			$this->db->update($this->profile, $updatedata);
		
		}
		
		$to =  base64_decode($_POST['id']);
		$data = array( 
		                  'from_id' =>$from,
							'to_id' => $to,
							'created_date' => date("Y-m-d H:i:s")
						);
		$result = $this->db->insert($this->send_proposal, $data);
		if($result){
			return 1;
		}
		
     }
	 
	 function getNotifications(){
		$select =$this->users.".*,".$this->profile.".*,".$this->send_proposal.".*";	   
		$this->db->select($select);
		//$this->db->order_by($this->send_proposal.".id", "desc");
		$this->db->from($this->send_proposal);
		$this->db->join($this->users, $this->users.'.id =' .$this->send_proposal.'.to_id');
		$this->db->join($this->profile, $this->profile.'.user_id =' .$this->send_proposal.'.to_id');
		$this->db->where('to_id',$this->session->userdata('uid'));
		$query = $this->db->get();
		return $query->result();
		}
		
		function getNotificationsById($id){
		$id = base64_decode($id);
		$this->db->where('to_id', $id);
		$this->db->where('from_id', $this->session->userdata('uid'));
		$query =  $this->db->get($this->send_proposal);
		return $query->num_rows();
        }
		function getNotificationUser(){
		$this->db->where('to_id', $this->session->userdata('uid'));
		$this->db->where('status', 'unread');
		$query =  $this->db->get($this->send_proposal);
		return $query->num_rows();
       }
	   function updateNotifications(){
			$data = array('status' =>'read');
			$this->db->where('to_id', $this->session->userdata('uid'));		  
			return  $this->db->update($this->send_proposal, $data);
       }
	    public function userSettingContact(){
		   parse_str($_POST['formdata'], $postData);
			$this->db->where('uid', $this->session->userdata('uid'));
			$query =  $this->db->get($this->deal_setting);
			$countno=  $query->num_rows();
		if($countno >0){
			$data = array(
                            
                            'name' => $postData['name'],
                            'mobilenumber' => $postData['mobilenumber'],
                            'location' => $postData['location'],
							'timezone' => $postData['timezone'],
							'companyname' => $postData['companyname'],
							'designation' => $postData['designation'],
                            'gstnumber' => $postData['gstnumber'],
                            'address' => $postData['address']
                          );
			$this->db->where('uid', $this->session->userdata('uid'));		  
			$this->db->update($this->deal_setting, $data);			  
			$profile = array('company_name'=>$postData['companyname']);
			$this->db->where('user_id', $this->session->userdata('uid'));
			$this->db->update($this->profile, $profile); 
		   
		    $user = array('first_name'=>$postData['name'],'user_phone'=>$postData['mobilenumber']);
			$this->db->where('id', $this->session->userdata('uid'));
			
			return $this->db->update($this->users, $user);  			
		}else{
            $data = array(
                            'uid' => $this->session->userdata('uid'),
                            'name' => $postData['name'],
                            'mobilenumber' => $postData['mobilenumber'],
                            'location' => $postData['location'],
							'timezone' => $postData['timezone'],
							'companyname' => $postData['companyname'],
							'designation' => $postData['designation'],
                            'gstnumber' => $postData['gstnumber'],
                            'address' => $postData['address'],
                            'created_date' => date('Y-m-d H:i:s')
                          );
			return $this->db->insert($this->deal_setting, $data);
		}
			
           
    }
	
	 public function userSettingdeal(){
		   parse_str($_POST['formdata'], $postData);
			$this->db->where('uid', $this->session->userdata('uid'));
			$query =  $this->db->get($this->deal_setting);
			$countno=  $query->num_rows();
		if($countno >0){
			$data = array(
                            'deallocations' => $postData['deallocations'],
                            'dealindustries' => serialize($postData['dealindustries'])
                         );
			$this->db->where('uid', $this->session->userdata('uid'));		  
			return $this->db->update($this->deal_setting, $data);			  
					
		}else{
            $data = array(
                            'uid' => $this->session->userdata('uid'),
                            'deallocations' => $postData['deallocations'],
                            'dealindustries' => serialize($postData['dealindustries']),
                            'created_date' => date('Y-m-d H:i:s')
                          );
			return $this->db->insert($this->deal_setting, $data);
		}
			
    }
	
	public function userChangePassword(){
		   parse_str($_POST['formdata'], $postData);
			$data = array(
                            'password' => md5($postData['password'])
                           
                         );
			$this->db->where('id', $this->session->userdata('uid'));		  
			return $this->db->update($this->users, $data);		
		
			
    }
	
	public function contactsetting(){
		$select =$this->users.".*,".$this->deal_setting.".*,".$this->profile.".*";	   
		$this->db->select($select);
		$this->db->from($this->deal_setting);
		$this->db->join($this->profile, $this->profile.'.user_id =' .$this->deal_setting.'.uid','left');
		$this->db->join($this->users, $this->users.'.id =' .$this->deal_setting.'.uid','left');
		$this->db->where($this->deal_setting.'.uid', $this->session->userdata('uid'));
		$query = $this->db->get();
		return $query->row_array();
	 } 
	 // Select total records
    public function getrecordCountSeller() {
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		$where  =" where role=3 and ".$this->profile.".user_plan > 0";
		if(!empty($searcharray['field_1'])){
			 $field_1 = implode("','",$searcharray['field_1']);
			 $where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
		}
		if(!empty($searcharray['interested_in'])){
			 $interested_in = implode("','",$searcharray['interested_in']);
			 $where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
		}
		if(!empty($searcharray['field_3'])){
			 $where  .= " AND ".$this->profile.".field_3 ='".$searcharray['field_3']."'";
		}
		if(!empty($searcharray['field_7'])){
			 $field_7 = implode("','",$searcharray['field_7']);
			 $where  .= " AND ".$this->profile.".field_7 in('".$field_7."')";
		}
		if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like '".$searcharray['field_5']."%'";
		}
		if(!empty($searcharray['invest-1']) 
				&& !empty($searcharray['invest-2'])
				&& !empty($searcharray['invest-3'])
				&& !empty($searcharray['invest-4'])
			){
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='K'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".tentative_selling >=".$from." AND ".$this->profile.".tentative_selling <=".$to;
		   }
		if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".tentative_selling  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".tentative_selling  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where.$sortby;
			}else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where;
			 }
		$query = $this->db->query($Sql);
		$allcount = $query->num_rows();
		return  $allcount;
		}
		// Fetch records
		public function getDataSeller($rowno,$rowperpage) {
			if(!empty($_POST['formdata'])){
					parse_str($_POST['formdata'], $searcharray);
			}
			$where  =" where role=3 and ".$this->profile.".user_plan > 0";
			if(!empty($searcharray['field_1'])){
			 $interested_in = implode("','",$searcharray['field_1']);
			 $where  .= " AND ".$this->profile.".field_1 in('".$interested_in."')";
		    }
			if(!empty($searcharray['interested_in'])){
			 $interested_in = implode("','",$searcharray['interested_in']);
			 $where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
		    }
			if(!empty($searcharray['field_3'])){
			 $where  .= " AND ".$this->profile.".field_3 ='".$searcharray['field_3']."'";
			}
			if(!empty($searcharray['field_7'])){
				$field_7 = implode("','",$searcharray['field_7']);
				$where  .= " AND ".$this->profile.".field_7 in('".$field_7."')";
			}
			if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";
			}
			
			if(!empty($searcharray['invest-1']) 
				&& !empty($searcharray['invest-2'])
				&& !empty($searcharray['invest-3'])
				&& !empty($searcharray['invest-4'])
			){
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='K'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".tentative_selling >=".$from." AND ".$this->profile.".tentative_selling <=".$to;
		   }
			if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".tentative_selling  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".tentative_selling  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
					left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where.$sortby." limit ".$rowno." , ".$rowperpage;
			 }
			else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where." ORDER BY ".$this->profile.".user_id DESC LIMIT ".$rowno." , ".$rowperpage;
			}
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $allsellerProfile){
					//$array[] = $allsellerProfile;
					$array[$key]['user_id'] =  base64_encode($allsellerProfile['user_id']);
					if(!empty($allsellerProfile['user_plan'])) { 
						if($allsellerProfile['user_plan']==1) { 
							$array[$key]['user_plan'] =  "Basic";
						} 
						if($allsellerProfile['user_plan']==2) { 
							$array[$key]['user_plan'] =  "Professional";
						}
						if($allsellerProfile['user_plan']==3) { 
							$array[$key]['user_plan'] =  "Premium";
						}
					}
				if(!empty($allsellerProfile['field_4'])) {  
				$businessindustry= unserialize(	$allsellerProfile['field_4']);
				$array[$key]['businessindustry'] = implode(',',$businessindustry);
				}	
				if(!empty($allsellerProfile['interested_in'])) { 
							if($allsellerProfile['interested_in']==1) { 
								$array[$key]['interested_in'] = "Full sale of business";
							} 
							if($allsellerProfile['interested_in']==2) { 
								$array[$key]['interested_in'] = "Partial stake sale of business/investment";
							} 
							if($allsellerProfile['interested_in']==3) { 
								$array[$key]['interested_in'] = "Loan for business";
							}
				}
				
				
				
				if(!empty($allsellerProfile['field_5'])) { 
				  $array[$key]['field_5'] = $allsellerProfile['field_5']; 
				}
				
				
				if(!empty($allsellerProfile['field_4']) && !empty($allsellerProfile['interested_in']) && !empty($allsellerProfile['field_5'])) {  
				  $businessindustry= unserialize(	$allsellerProfile['field_4']);
				       if($allsellerProfile['interested_in']==1) { 
								$interested_in = "Full sale of business";
							} 
							if($allsellerProfile['interested_in']==2) { 
								$interested_in = "Partial stake sale of business/investment";
							} 
							if($allsellerProfile['interested_in']==3) { 
								$interested_in = "Loan for business";
							}
				  
					$array[$key]['title'] = implode(',',$businessindustry).' for '. $interested_in.' in '. $allsellerProfile['field_5'];
				}
				
				
				if(!empty($allsellerProfile['field_8'])) { 
				  $array[$key]['field_8'] = $allsellerProfile['field_8']; 
				}
				if(!empty($allsellerProfile['field_12'])) { 
				  $array[$key]['field_12'] = $this->number_format_short($allsellerProfile['field_12'], 1 );
				}
				if(!empty($allsellerProfile['field_13'])) { 
				  $array[$key]['field_13'] = $this->number_format_short($allsellerProfile['field_13'], 1 );
				}
				if(!empty($allsellerProfile['tentative_selling'])) { 
				  $array[$key]['tentative_selling'] = $this->number_format_short($allsellerProfile['tentative_selling'], 1 );
				}
				
					
			}
			return  $array;
		}
	function number_format_short( $n, $precision = 1 ) {
		if ($n < 900) {
			// 0 - 900
			$n_format = number_format($n, $precision);
			$suffix = '';
		} else if ($n < 900000) {
			// 0.9k-850k
			$n_format = number_format($n / 1000, $precision);
			$suffix = 'K';
		} else if ($n < 900000000) {
			// 0.9m-850m
			$n_format = number_format($n / 1000000, $precision);
			$suffix = 'M';
		} else if ($n < 900000000000) {
			// 0.9b-850b
			$n_format = number_format($n / 1000000000, $precision);
			$suffix = 'B';
		} else {
			// 0.9t+
			$n_format = number_format($n / 1000000000000, $precision);
			$suffix = 'T';
		}

	  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
	  // Intentionally does not affect partials, eg "1.50" -> "1.50"
		if ( $precision > 0 ) {
			$dotzero = '.' . str_repeat( '0', $precision );
			$n_format = str_replace( $dotzero, '', $n_format );
		}

		return $n_format . $suffix;
	}
	
	// Select total records Buyer
    public function getrecordCountBuyer() {
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		$where  ="  where ".$this->profile.".user_plan > 0";
		if($_POST['tag']=='buyers'){
			$where  .=" and role=2 ";
		}else{
			$where  .=" and role=1 ";
		}
		if(!empty($searcharray['field_1'])){
			 $field_1 = implode("','",$searcharray['field_1']);
			 $where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
		}
		if(!empty($searcharray['interested_in'])){
			 $interested_in = implode("','",$searcharray['interested_in']);
			 $where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
		}
		if(!empty($searcharray['field_9'])){
			$field_9 = implode("','",$searcharray['field_9']);
			  $where  .= " AND ".$this->company_sector.".cname IN ('".$field_9."')";
		}
		if(!empty($searcharray['field_2'])){
				$field_2 = implode("','",$searcharray['field_2']);
			    $where  .= " AND ".$this->industries_preference.".ipname IN ('".$field_2."')";
			
			}
		if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";;
		}
		if(!empty($searcharray['invest-1']) 
				&& !empty($searcharray['invest-2'])
				&& !empty($searcharray['invest-3'])
				&& !empty($searcharray['invest-4'])
			){
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='K'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".field_4 >=".$from." AND ".$this->profile.".investmentto <=".$to;
		   }
		
		if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where." group by ".$this->profile.".user_id".$sortby;
			}else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id
				left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id"
				.$where." group by ".$this->profile.".user_id";
			 }
			
			
				
		$query = $this->db->query($Sql);
		$allcount = $query->num_rows();
		return  $allcount;
		}
		// Fetch records
		public function getDataBuyer($rowno,$rowperpage) {
			if(!empty($_POST['formdata'])){
					parse_str($_POST['formdata'], $searcharray);
			}
			$where  ="  where ".$this->profile.".user_plan > 0";
			if($_POST['tag']=='buyers'){
				$where  .=" and role=2 ";
			}else{
				$where  .=" and role=1 ";
			}
			if(!empty($searcharray['field_1'])){
				$field_1 = implode("','",$searcharray['field_1']);
				$where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
			}
			if(!empty($searcharray['interested_in'])){
				$interested_in = implode("','",$searcharray['interested_in']);
				$where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
			}
			if(!empty($searcharray['field_9'])){
				$field_9 = implode("','",$searcharray['field_9']);
			    $where  .= " AND ".$this->company_sector.".cname IN ('".$field_9."')";
			
			}
			if(!empty($searcharray['field_2'])){
				$field_2 = implode("','",$searcharray['field_2']);
			    $where  .= " AND ".$this->industries_preference.".ipname IN ('".$field_2."')";
			
			}
			if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";;
			}
			if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";;
		}
		if(!empty($searcharray['invest-1']) 
				&& !empty($searcharray['invest-2'])
				&& !empty($searcharray['invest-3'])
				&& !empty($searcharray['invest-4'])
			){
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='K'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".field_4 >=".$from." AND ".$this->profile.".investmentto <=".$to;
		   }
			
			if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id".
				$where." group by ".$this->profile.".user_id ".$sortby." LIMIT ".$rowno." , ".$rowperpage;
			}
			else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id".
				$where." group by ".$this->profile.".user_id ORDER BY ".$this->profile.".user_id DESC LIMIT ".$rowno." , ".$rowperpage;
			}
			
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $allbuyerProfile){
					//$array[] = $allsellerProfile;
					$array[$key]['user_id'] =  base64_encode($allbuyerProfile['user_id']);
					if(!empty($allbuyerProfile['user_plan'])) { 
						if($allbuyerProfile['user_plan']==1) { 
							$array[$key]['user_plan'] =  "Basic";
						} 
						if($allbuyerProfile['user_plan']==2) { 
							$array[$key]['user_plan'] =  "Professional";
						}
						if($allbuyerProfile['user_plan']==3) { 
							$array[$key]['user_plan'] =  "Premium";
						}
					}
				if(!empty($allbuyerProfile['field_7'])) { 
					$field_7 = $allbuyerProfile['field_7'];
				}else{
					$field_7 = '';
				}
				if(!empty($allbuyerProfile['field_2'])) {  
				$businessindustry= unserialize(	$allbuyerProfile['field_2']);
				$array[$key]['businessindustry'] = implode(',',$businessindustry);
				}else{
					$array[$key]['businessindustry']='';
				}	
				if(!empty($allbuyerProfile['interested_in'])) { 
							if($allbuyerProfile['interested_in']==1) { 
								$array[$key]['interested_in'] = "Acquiring / Buying a Business";
							} 
							if($allbuyerProfile['interested_in']==2) { 
								$array[$key]['interested_in'] = "Investing in a Business";
							} 
							if($allbuyerProfile['interested_in']==3) { 
								$array[$key]['interested_in'] = "Lending to a Business";
							}
				}else{
					$array[$key]['interested_in'] = '';
				}
				$array[$key]['title'] = $field_7 .' looking to '.$array[$key]['interested_in'].' in '.$array[$key]['businessindustry'];
				
				if(!empty($allbuyerProfile['field_6'])) {  
					$array[$key]['discription'] = $allbuyerProfile['field_6'];
				}
				if(!empty($allbuyerProfile['field_5'])) {  
					$array[$key]['location'] = $allbuyerProfile['field_5'];
				}
				if(!empty($allbuyerProfile['field_4'])) {  
					$array[$key]['InvestmentRange'] = $this->number_format_short($allbuyerProfile['field_4'],1);
				}
				if(!empty($allbuyerProfile['investmentto'])) {  
					$array[$key]['investmentto'] = $this->number_format_short($allbuyerProfile['investmentto'],1);
				}
				if(!empty($allbuyerProfile['field_2'])) {  
					$businessindustry= unserialize(	$allbuyerProfile['field_2']);
					$array[$key]['IndustriesPref'] = implode(',',$businessindustry);
				}
				if(!empty($allbuyerProfile['field_3'])) {  
					$array[$key]['locationsPref'] = $allbuyerProfile['field_3'];
				}
			}
			return  $array;
		}
	
	
	
	// Select total records Buyer
    public function getrecordCountBuyerSearch() {
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		$where  ="  where role=2 and ".$this->profile.".user_plan > 0";
		
		if(!empty($searcharray['field_1_bu'])){
			 $field_1 = implode("','",$searcharray['field_1_bu']);
			 $where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
		}
		if(!empty($searcharray['interested_in_bu'])){
			 $interested_in = implode("','",$searcharray['interested_in_bu']);
			 $where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
		}
		if(!empty($searcharray['field_9'])){
			$field_9 = implode("','",$searcharray['field_9']);
			  $where  .= " AND ".$this->company_sector.".cname IN ('".$field_9."')";
		}
		if(!empty($searcharray['field_2_bu'])){
				$field_2 = implode("','",$searcharray['field_2_bu']);
			    $where  .= " AND ".$this->industries_preference.".ipname IN ('".$field_2."')";
			
			}
		if(!empty($searcharray['field_5_bu'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5_bu']."%'";;
		}
		if(!empty($searcharray['invest-1-bu']) 
				&& !empty($searcharray['invest-2-bu'])
				&& !empty($searcharray['invest-3-bu'])
				&& !empty($searcharray['invest-4-bu'])
			){
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='K'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000;
				}
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='M'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000000;
				}
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='B'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000000000;
				}
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='T'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000000000000;
				}
				if($searcharray['invest-2-bu']=='M' && $searcharray['invest-4-bu']=='M'){
					$from = $searcharray['invest-1-bu']*1000000;
					$to = $searcharray['invest-3-bu']*1000000;
				}
				if($searcharray['invest-2-bu']=='M' && $searcharray['invest-4-bu']=='B'){
					$from = $searcharray['invest-1-bu']*1000000;
					$to = $searcharray['invest-3-bu']*1000000000;
				}
				if($searcharray['invest-2-bu']=='M' && $searcharray['invest-4-bu']=='T'){
					$from = $searcharray['invest-1-bu']*1000000;
					$to = $searcharray['invest-3-bu']*1000000000000;
				}
				if($searcharray['invest-2-bu']=='B' && $searcharray['invest-4-bu']=='B'){
					$from = $searcharray['invest-1-bu']*1000000000;
					$to = $searcharray['invest-3-bu']*1000000000;
				}
				if($searcharray['invest-2-bu']=='B' && $searcharray['invest-4-bu']=='T'){
					$from = $searcharray['invest-1-bu']*1000000000;
					$to = $searcharray['invest-3-bu']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".field_4 >=".$from." AND ".$this->profile.".investmentto <=".$to;
		   }
		
		if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where." group by ".$this->profile.".user_id".$sortby;
			}else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id
				left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id"
				.$where." group by ".$this->profile.".user_id";
			 }
			
			
				
		$query = $this->db->query($Sql);
		$allcount = $query->num_rows();
		return  $allcount;
		}
		// Fetch records
		public function getDataBuyerSearch($rowno,$rowperpage) {
			if(!empty($_POST['formdata'])){
					parse_str($_POST['formdata'], $searcharray);
			}
			$where  ="  where role=2 and ".$this->profile.".user_plan > 0";
			
			if(!empty($searcharray['field_1_bu'])){
			 $field_1 = implode("','",$searcharray['field_1_bu']);
			 $where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
		}
		if(!empty($searcharray['interested_in_bu'])){
			 $interested_in = implode("','",$searcharray['interested_in_bu']);
			 $where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
		}
		if(!empty($searcharray['field_9'])){
			$field_9 = implode("','",$searcharray['field_9']);
			  $where  .= " AND ".$this->company_sector.".cname IN ('".$field_9."')";
		}
		if(!empty($searcharray['field_2_bu'])){
				$field_2 = implode("','",$searcharray['field_2_bu']);
			    $where  .= " AND ".$this->industries_preference.".ipname IN ('".$field_2."')";
			
			}
		if(!empty($searcharray['field_5_bu'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5_bu']."%'";;
		}
		if(!empty($searcharray['invest-1-bu']) 
				&& !empty($searcharray['invest-2-bu'])
				&& !empty($searcharray['invest-3-bu'])
				&& !empty($searcharray['invest-4-bu'])
			){
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='K'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000;
				}
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='M'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000000;
				}
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='B'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000000000;
				}
				if($searcharray['invest-2-bu']=='K' && $searcharray['invest-4-bu']=='T'){
					$from = $searcharray['invest-1-bu']*1000;
					$to = $searcharray['invest-3-bu']*1000000000000;
				}
				if($searcharray['invest-2-bu']=='M' && $searcharray['invest-4-bu']=='M'){
					$from = $searcharray['invest-1-bu']*1000000;
					$to = $searcharray['invest-3-bu']*1000000;
				}
				if($searcharray['invest-2-bu']=='M' && $searcharray['invest-4-bu']=='B'){
					$from = $searcharray['invest-1-bu']*1000000;
					$to = $searcharray['invest-3-bu']*1000000000;
				}
				if($searcharray['invest-2-bu']=='M' && $searcharray['invest-4-bu']=='T'){
					$from = $searcharray['invest-1-bu']*1000000;
					$to = $searcharray['invest-3-bu']*1000000000000;
				}
				if($searcharray['invest-2-bu']=='B' && $searcharray['invest-4-bu']=='B'){
					$from = $searcharray['invest-1-bu']*1000000000;
					$to = $searcharray['invest-3-bu']*1000000000;
				}
				if($searcharray['invest-2-bu']=='B' && $searcharray['invest-4-bu']=='T'){
					$from = $searcharray['invest-1-bu']*1000000000;
					$to = $searcharray['invest-3-bu']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".field_4 >=".$from." AND ".$this->profile.".investmentto <=".$to;
		   }
			
			if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id".
				$where." group by ".$this->profile.".user_id ".$sortby." LIMIT ".$rowno." , ".$rowperpage;
			}
			else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id".
				$where." group by ".$this->profile.".user_id ORDER BY ".$this->profile.".user_id DESC LIMIT ".$rowno." , ".$rowperpage;
			}
			
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $allbuyerProfile){
					//$array[] = $allsellerProfile;
					$array[$key]['user_id'] =  base64_encode($allbuyerProfile['user_id']);
					if(!empty($allbuyerProfile['user_plan'])) { 
						if($allbuyerProfile['user_plan']==1) { 
							$array[$key]['user_plan'] =  "Basic";
						} 
						if($allbuyerProfile['user_plan']==2) { 
							$array[$key]['user_plan'] =  "Professional";
						}
						if($allbuyerProfile['user_plan']==3) { 
							$array[$key]['user_plan'] =  "Premium";
						}
					}
				if(!empty($allbuyerProfile['field_7'])) { 
					$field_7 = $allbuyerProfile['field_7'];
				}else{
					$field_7 = '';
				}
				if(!empty($allbuyerProfile['field_2'])) {  
				$businessindustry= unserialize(	$allbuyerProfile['field_2']);
				$array[$key]['businessindustry'] = implode(',',$businessindustry);
				}else{
					$array[$key]['businessindustry']='';
				}	
				if(!empty($allbuyerProfile['interested_in'])) { 
							if($allbuyerProfile['interested_in']==1) { 
								$array[$key]['interested_in'] = "Acquiring / Buying a Business";
							} 
							if($allbuyerProfile['interested_in']==2) { 
								$array[$key]['interested_in'] = "Investing in a Business";
							} 
							if($allbuyerProfile['interested_in']==3) { 
								$array[$key]['interested_in'] = "Lending to a Business";
							}
				}else{
					$array[$key]['interested_in'] = '';
				}
				$array[$key]['title'] = $field_7 .' looking to '.$array[$key]['interested_in'].' in '.$array[$key]['businessindustry'];
				
				if(!empty($allbuyerProfile['field_6'])) {  
					$array[$key]['discription'] = $allbuyerProfile['field_6'];
				}
				if(!empty($allbuyerProfile['field_8'])) {  
					$array[$key]['location'] = $allbuyerProfile['field_8'];
				}
				if(!empty($allbuyerProfile['field_4'])) {  
					$array[$key]['InvestmentRange'] = $allbuyerProfile['field_4'];
				}
				if(!empty($allbuyerProfile['investmentto'])) {  
					$array[$key]['investmentto'] = $allbuyerProfile['investmentto'];
				}
				if(!empty($allbuyerProfile['field_2'])) {  
					$businessindustry= unserialize(	$allbuyerProfile['field_2']);
					$array[$key]['IndustriesPref'] = implode(',',$businessindustry);
				}
				if(!empty($allbuyerProfile['field_3'])) {  
					$array[$key]['locationsPref'] = $allbuyerProfile['field_3'];
				}
			}
			return  $array;
		}
	
	
	
	// Fetch records Advisory
	 public function getrecordCountAdvisory() {
		if(!empty($_POST['formdata'])){
			parse_str($_POST['formdata'], $searcharray);
		}
		$where  ="  where  role=4 AND ".$this->profile.".user_plan > 0";
		 
		if(!empty($searcharray['field_1'])){
			 $field_1 = implode("','",$searcharray['field_1']);
			 $where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
		}
		if(!empty($searcharray['interested_in'])){
			 $interested_in = implode("','",$searcharray['interested_in']);
			 $where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
		}
		if(!empty($searcharray['field_9'])){
			$field_9 = implode("','",$searcharray['field_9']);
			  $where  .= " AND ".$this->company_sector.".cname IN ('".$field_9."')";
		}
		if(!empty($searcharray['field_2'])){
				$field_2 = implode("','",$searcharray['field_2']);
			    $where  .= " AND ".$this->industries_preference.".ipname IN ('".$field_2."')";
			
			}
		if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";;
		}
		if(!empty($searcharray['invest-1']) 
				&& !empty($searcharray['invest-2'])
				&& !empty($searcharray['invest-3'])
				&& !empty($searcharray['invest-4'])
			){
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='K'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".field_4 >=".$from." AND ".$this->profile.".investmentto <=".$to;
		   }
		
		if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id".$where." group by ".$this->profile.".user_id".$sortby;
			}else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id
				left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id"
				.$where." group by ".$this->profile.".user_id";
			 }
			
			
				
		$query = $this->db->query($Sql);
		$allcount = $query->num_rows();
		return  $allcount;
		}
	
	
	
	
		public function getDataAdvisory($rowno,$rowperpage) {
			if(!empty($_POST['formdata'])){
					parse_str($_POST['formdata'], $searcharray);
			}
			$where  ="  where role=4 AND ".$this->profile.".user_plan > 0";
			
			if(!empty($searcharray['field_1'])){
				$field_1 = implode("','",$searcharray['field_1']);
				$where  .= " AND ".$this->profile.".field_1 in('".$field_1."')";
			}
			if(!empty($searcharray['interested_in'])){
				$interested_in = implode("','",$searcharray['interested_in']);
				$where  .= " AND ".$this->profile.".interested_in in('".$interested_in."')";
			}
			if(!empty($searcharray['field_9'])){
				$field_9 = implode("','",$searcharray['field_9']);
			    $where  .= " AND ".$this->company_sector.".cname IN ('".$field_9."')";
			
			}
			if(!empty($searcharray['field_2'])){
				$field_2 = implode("','",$searcharray['field_2']);
			    $where  .= " AND ".$this->industries_preference.".ipname IN ('".$field_2."')";
			
			}
			if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";;
			}
			if(!empty($searcharray['field_5'])){
				 $where  .= " AND ".$this->profile.".field_5 like'".$searcharray['field_5']."%'";;
		}
		if(!empty($searcharray['invest-1']) 
				&& !empty($searcharray['invest-2'])
				&& !empty($searcharray['invest-3'])
				&& !empty($searcharray['invest-4'])
			){
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='K'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='K' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='M'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='M' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='B'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000;
				}
				if($searcharray['invest-2']=='B' && $searcharray['invest-4']=='T'){
					$from = $searcharray['invest-1']*1000000000;
					$to = $searcharray['invest-3']*1000000000000;
				}
				
				$where  .= " AND ".$this->profile.".field_4 >=".$from." AND ".$this->profile.".investmentto <=".$to;
		   }
			
			if(!empty($searcharray['sortby'])){
				if($searcharray['sortby']==1){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) ASC";
				}
				else if($searcharray['sortby']==2){
					$sortby =" ORDER BY CAST(".$this->profile.".field_4  AS DECIMAL(20,2)) DESC";
				}else{
					$sortby =" ORDER BY ".$this->profile.".user_id DESC";
				}
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id".
				$where." group by ".$this->profile.".user_id ".$sortby." LIMIT ".$rowno." , ".$rowperpage;
			}
			else{
				$Sql ="select ".$this->users.".*,".$this->profile.".* from ".$this->profile."
				left join  ".$this->users." on ".$this->users.".id=".$this->profile.".user_id
				left join  ".$this->company_sector." on ".$this->profile.".user_id=".$this->company_sector.".user_id left join  ".$this->industries_preference." on ".$this->profile.".user_id=".$this->industries_preference.".user_id".
				$where." group by ".$this->profile.".user_id ORDER BY ".$this->profile.".user_id DESC LIMIT ".$rowno." , ".$rowperpage;
			}
			
			
			$query = $this->db->query($Sql);
			$numRow = $query->num_rows();
			$result = $query->result_array();
			$array = array();
			foreach($result as $key=> $allbuyerProfile){
					//$array[] = $allsellerProfile;
					$array[$key]['user_id'] =  base64_encode($allbuyerProfile['user_id']);
					if(!empty($allbuyerProfile['user_plan'])) { 
						if($allbuyerProfile['user_plan']==1) { 
							$array[$key]['user_plan'] =  "Basic";
						} 
						if($allbuyerProfile['user_plan']==2) { 
							$array[$key]['user_plan'] =  "Professional";
						}
						if($allbuyerProfile['user_plan']==3) { 
							$array[$key]['user_plan'] =  "Premium";
						}
					}
				if(!empty($allbuyerProfile['field_7'])) { 
					$field_7 = $allbuyerProfile['field_7'];
				}else{
					$field_7 = '';
				}
				if(!empty($allbuyerProfile['field_2'])) {  
				$businessindustry= unserialize(	$allbuyerProfile['field_2']);
				$array[$key]['businessindustry'] = implode(',',$businessindustry);
				}else{
					$array[$key]['businessindustry']='';
				}	
				if(!empty($allbuyerProfile['interested_in'])) { 
							if($allbuyerProfile['interested_in']==1) { 
								$array[$key]['interested_in'] = "Acquiring / Buying a Business";
							} 
							if($allbuyerProfile['interested_in']==2) { 
								$array[$key]['interested_in'] = "Investing in a Business";
							} 
							if($allbuyerProfile['interested_in']==3) { 
								$array[$key]['interested_in'] = "Lending to a Business";
							}
				}else{
					$array[$key]['interested_in'] = '';
				}
				
				if(!empty($allbuyerProfile['field_1'])) { 
							if($allbuyerProfile['field_1']==1) { 
								$array[$key]['field_1'] = "Advisory";
							} 
							if($allbuyerProfile['field_1']==2) { 
								$array[$key]['field_1'] = "Banker";
							} 
							if($allbuyerProfile['field_1']==3) { 
								$array[$key]['field_1'] = "Auditor";
							}
							if($allbuyerProfile['field_1']==4) { 
								$array[$key]['field_1'] = "Lawyer";
							}
							if($allbuyerProfile['field_1']==5) { 
								$array[$key]['field_1'] = "Consultant";
							}
							if($allbuyerProfile['field_1']==6) { 
								$array[$key]['field_1'] = "Broker";
							}
				}else{
					$array[$key]['field_1'] = '';
				}
				
				if(!empty($allbuyerProfile['field_5'])) {  
					$array[$key]['location'] = $allbuyerProfile['field_5'];
				}
				else{
					$array[$key]['location'] ='';
				}
				
				
				$array[$key]['title'] = $field_7 .', '.$array[$key]['field_1'].' in '.$array[$key]['location'];
				
				if(!empty($allbuyerProfile['field_6'])) {  
					$array[$key]['discription'] = $allbuyerProfile['field_6'];
				}
				
				if(!empty($allbuyerProfile['field_4'])) {  
					$array[$key]['InvestmentRange'] = $this->number_format_short($allbuyerProfile['field_4'],1);
				}
				if(!empty($allbuyerProfile['investmentto'])) {  
					$array[$key]['investmentto'] = $this->number_format_short($allbuyerProfile['investmentto'],1);
				}
				if(!empty($allbuyerProfile['field_2'])) {  
					$businessindustry= unserialize(	$allbuyerProfile['field_2']);
					$array[$key]['IndustriesPref'] = implode(',',$businessindustry);
				}
				if(!empty($allbuyerProfile['field_3'])) {  
					$array[$key]['locationsPref'] = $allbuyerProfile['field_3'];
				}
			}
			return  $array;
		}
	
	function resources(){
	  $this->db->from($this->resources);
	  $query = $this->db->get();
      return $query->row_array();
    }
	
	//User Plan
	function updatePlan(){
		$data = array('user_plan' => 1);
		$this->db->where('user_id', $this->session->userdata('uid'));		  
		return $this->db->update($this->profile, $data);
		
	
	 }
	// End Here
    function sendBookmark(){
		$from =  $this->session->userdata('uid');
		$to =  base64_decode($_POST['id']);
		$data = array( 
			'from_id' =>$from,
			'to_id' => $to,
			'role' => $_POST['role'],
			'created_date' => date("Y-m-d H:i:s")
		);
		$result = $this->db->insert($this->bookmark, $data);
		if($result){
			return 1;
		}
	}
	function getBookmarkById($id){
		$id = base64_decode($id);
		$this->db->where('to_id', $id);
		$this->db->where('from_id', $this->session->userdata('uid'));
		$query =  $this->db->get($this->bookmark);
		return $query->num_rows();
   }
   function getBookmark(){
		$select =$this->profile.".*,".$this->bookmark.".*";	   
		$this->db->select($select);
		$this->db->from($this->bookmark);
		$this->db->join($this->profile, $this->profile.'.user_id =' .$this->bookmark.'.to_id','left');
		$this->db->where($this->bookmark.'.from_id', $this->session->userdata('uid'));
		$query = $this->db->get();
		return $query->result_array();
	}
	
	 function deleteBookmark(){
		$id =  base64_decode($_POST['id']);
		$this ->db ->where('id', $id);
	   $result = $this ->db->delete($this->bookmark);
	   if($result){return 1;}else{return 0;}
	}


	
}
?>