<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Administrator_model extends CI_Model{
    protected $users = 'users';
    protected $resources = 'resources';
    protected $setting = 'setting';
    protected $testimonial = 'testimonial';

		
		
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
			
		}
	
	function getinfo(){
       $this->db->from($this->users);
	   $this->db->where('id',$this->session->userdata('user_id'));  
	   $query = $this->db->get();
       return $query->row_array();
    }
	
	function loginMe($email, $password) {
	    $where =" (role= '0')";
        $this->db->from($this->users);
		$this->db->where('email',$email);
        $this->db->where('password',md5($password));
        $query = $this->db->get();
		$numRow = $query->num_rows();
		if($numRow > 0){
		 return $query->row_array();
		}
    }
	//Admin Users
    function Users(){
		$where = ' role=1 OR role=2 OR role=3  OR role=4 ';
       $this->db->from($this->users);
	   $this->db->order_by("id", "desc");
        $this->db->where($where);
		$query = $this->db->get();
        return $query->result();
    }
	function Buyers(){
		$where = ' role=2 ';
       $this->db->from($this->users);
	   $this->db->order_by("id", "desc");
        $this->db->where($where);
		$query = $this->db->get();
        return $query->result();
    }
	function Sellers(){
		$where = ' role=3 ';
       $this->db->from($this->users);
	   $this->db->order_by("id", "desc");
        $this->db->where($where);
		$query = $this->db->get();
        return $query->result();
    }
	function Investors(){
		$where = ' role=1 ';
       $this->db->from($this->users);
	   $this->db->order_by("id", "desc");
        $this->db->where($where);
		$query = $this->db->get();
        return $query->result();
    }
	function Advisory(){
		$where = ' role=4 ';
       $this->db->from($this->users);
	   $this->db->order_by("id", "desc");
        $this->db->where($where);
		$query = $this->db->get();
        return $query->result();
    }
	
	
	 function resources(){
	  $this->db->from($this->resources);
	  $query = $this->db->get();
      return $query->row_array();
    }
	
	
	public function updateResources(){
	$data = array('buy' =>$_POST['buy'],
							'sell' =>$_POST['sell'],
							'business_plan' =>$_POST['business_plan']
							
							);
			

		
				$this->db->where('id', 1);
				$result = $this->db->update($this->resources, $data);
				if($result){ return 1;}
	}
	    
	
	function contact(){
	  $this->db->from($this->setting);
	  $query = $this->db->where('status','contact')->get();
      return $query->row_array();
    }
	public function updateContact(){
	$data = array('description' =>$_POST['contact']);
	$this->db->where('status', 'contact');
	$result = $this->db->update($this->setting, $data);
	if($result){ return 1;}
	}
	function aboutUs(){
	  $this->db->from($this->setting);
	  $query = $this->db->where('status','about-us')->get();
      return $query->row_array();
    }
	public function updateAboutUs(){
		if(!empty($_FILES['add_photo']["name"])){
			 $ext = pathinfo($_FILES['add_photo']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['add_photo']["name"]= 'gallery-'.$fileName;
				$add_photo = $_FILES['add_photo']["name"];
				$config['upload_path'] = './assets/upload/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('add_photo')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }else{
			   $_FILES['add_photo']['name'] = $_POST['add_photo_old'];
		   }
		  
		
		
	$data = array('banneraboutUs' => $_FILES['add_photo']['name'],'description' =>$_POST['aboutUs']);
	$this->db->where('status', 'about-us');
	$result = $this->db->update($this->setting, $data);
	if($result){ return 1;}
	}
	
	function allUsers(){
		$where_in = array('1','2','3','4');
		$this->db->from($this->users);
		$this->db->where_in('role', $where_in);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalInvestors(){
		$this->db->from($this->users);
		$this->db->where_in('role', 1);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalBuyers(){
		$this->db->from($this->users);
		$this->db->where_in('role', 2);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalSellers(){
		$this->db->from($this->users);
		$this->db->where_in('role', 3);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalAdvisory(){
		$this->db->from($this->users);
		$this->db->where_in('role', 4);
		$query = $this->db->get();
		return $query->num_rows();
    }
	
	public function deactiveAdminUser(){
		$id = $this->input->post('id');  
		$data = array(
					'status' => 0
					);
		$this->db->where('id', $id);
		$result = $this->db->update('users', $data);
		if($result){ return 1;}
		  
	}
	public function activeAdminUser(){
		$id = $this->input->post('id');  
		$data = array(
					'status' => 1
					);
		$this->db->where('id', $id);
		$result = $this->db->update('users', $data);
		if($result){ return 1;}
		  
	}
	//Delete Language
	function deleteAdminUser(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->users);
	}
	
	
	
	

	function Testimonial(){
		$this->db->from($this->testimonial);
		$this->db->order_by("id", "desc");
		$query = $this->db->get();
		return $query->result();
    }
	function deleteTestimonial(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->testimonial);
	}
	function getTestimonialBy($id){
		$tid = base64_decode($id);
		$this->db->from($this->testimonial);
		$this->db->where('id',$tid);
		$query = $this->db->get();
        return $query->row_array();
    }
	
	public function CTestimonial(){
		if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
	     $data = array(
					'name' =>$_POST['name'],
					'title' =>$_POST['title'],
					'subtitle' => $_POST['subtitle'],
					'description' => $_POST['description'],
					'image' => $_FILES['image']["name"]
					);
					
		$result = $this->db->insert($this->testimonial, $data);
		if($result){ return 1;}
	}
	
		public function UTestimonial($id){
			$tid = base64_decode($id);
		if(!empty($_FILES['image']["name"])){
			 $ext = pathinfo($_FILES['image']["name"]);
				$fileName = rand().'-'.time().'.'.$ext['extension'];
				$_FILES['image']["name"]= 'gallery-'.$fileName;
				$image = $_FILES['image']["name"];
				$config['upload_path'] = './assets/upload/';
			    $config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('image')){
				$errors =  array('error' => $this->upload->display_errors());
				$array['error'] = $errors;
				}else{
					$data =  array('upload_data' => $this->upload->data());
				}
		   }
		   else{
			   $_FILES['image']['name'] = $_POST['oldimage'];
		   }
	     $data = array(
					'name' =>$_POST['name'],
					'title' =>$_POST['title'],
					'subtitle' => $_POST['subtitle'],
					'description' => $_POST['description'],
					'image' => $_FILES['image']["name"]
					);
					
				
		$this->db->where('id', $tid);
		$result = $this->db->update($this->testimonial, $data);
		if($result){ return 1;}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
  function getUserById($id){
		$uid = base64_decode($id);
       $this->db->from($this->users);
	   $this->db->where('id',$uid);  
	   $query = $this->db->get();
       return $query->row_array();
    }
	
	
	
	
	
	
    
    
}

?>