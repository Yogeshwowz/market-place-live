<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Administrator_model extends CI_Model{
    protected $users = 'users';
    protected $resources = 'resources';
	
	
	
    protected $category = 'tb_category';
    protected $eventTypes = 'tb_event_types';
    protected $themeYear = 'tb_theme_year';
    protected $location = 'tb_location';
    protected $truck = 'tb_truck';
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
	    
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function addAdminUser(){
		parse_str($_POST['formdata'], $searcharray);
		if(empty($searcharray['editUserId'])){
			
			$email = $searcharray['email'];  
			$password = $searcharray['password'];  
			$this->db->from('users');
			$this->db->where('email',$email);
			$query = $this->db->get();
			$numRow = $query->num_rows();
			if($numRow > 0){
				return 0;
			}else{
			$dataUser = array(
						'first_name' =>$searcharray['first_name'],
						'last_name' =>$searcharray['last_name'],
						'email' => $email,
						'role' => 2,
						'password' =>md5($password),
						'plain_password' =>$password,
						'account_name' =>$searcharray['account_name'],
						'location' =>$searcharray['location'],
						'mailing_address' =>$searcharray['mailing_address'],
						'gender' =>$searcharray['gender'],
						'created_date' =>date('Y-m-d H:i:s'),
						'created_by' =>$this->session->userdata('user_id')
					);
					
			$result = $this->db->insert($this->users, $dataUser);
			if($result){ return 1;}
			}
		}
		else{
			
			$id  = base64_decode($searcharray['editUserId']);
			if($searcharray['password']!=''){
					$password = $searcharray['password'];
					$data = array(
							'first_name' =>$searcharray['first_name'],
							'last_name' =>$searcharray['last_name'],
							'password' =>md5($password),
							'plain_password' =>$password,
							'account_name' =>$searcharray['account_name'],
							'location' =>$searcharray['location'],
							'mailing_address' =>$searcharray['mailing_address'],
							'gender' =>$searcharray['gender'],
							'created_by' =>$this->session->userdata('user_id')
							);
				}else{
					$data = array(
							'first_name' =>$searcharray['first_name'],
							'last_name' =>$searcharray['last_name'],
							'account_name' =>$searcharray['account_name'],
							'location' =>$searcharray['location'],
							'mailing_address' =>$searcharray['mailing_address'],
							'gender' =>$searcharray['gender'],
							'created_by' =>$this->session->userdata('user_id')
							);
				}		
				$this->db->where('id', $id);
				$result = $this->db->update('users', $data);
				if($result){ return 1;}
		}
	    
	}
	
	//Staff Users
	 function staffUsers(){
       $this->db->from($this->users);
	   $this->db->order_by("id", "desc");
        $this->db->where('role', 3);
		if($this->session->userdata('role')==2){
			$this->db->where('created_by', $this->session->userdata('user_id'));
		}
		$query = $this->db->get();
        return $query->result();
    }
	
	
	//Delete Language
	function deleteAdminUser(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->users);
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
	public function updateProfile(){
		parse_str($_POST['formdata'], $searcharray);
		$id = $this->session->userdata('user_id');
		if($searcharray['password']!=''){
			$password = $searcharray['password'];
			$data = array(
					'first_name' =>$searcharray['first_name'],
					'last_name' =>$searcharray['last_name'],
					'password' =>md5($password),
					'plain_password' =>$password,
					'account_name' =>$searcharray['account_name'],
					'location' =>$searcharray['location']
					);
		}else{
			$data = array(
					'first_name' =>$searcharray['first_name'],
					'last_name' =>$searcharray['last_name'],
					'account_name' =>$searcharray['account_name'],
					'location' =>$searcharray['location']
					);
		}		
		$this->db->where('id', $id);
		$result = $this->db->update('users', $data);
		if($result){ return 1;}
		  
	}
	public function addStaffUser(){
		parse_str($_POST['formdata'], $searcharray);
		
	    $email = $searcharray['email'];  
		$password = $searcharray['password'];  
		$this->db->from('users');
		$this->db->where('email',$email);
		$query = $this->db->get();
		$numRow = $query->num_rows();
		if($numRow > 0){
			return 0;
		}else{
		$dataUser = array(
					'first_name' =>$searcharray['first_name'],
					'last_name' =>$searcharray['last_name'],
					'email' => $email,
					'role' => 3,
					'password' =>md5($password),
					'gender' =>$searcharray['gender'],
					'plain_password' =>$password,
					'location' =>$searcharray['location'],
					'created_date' =>date('Y-m-d H:i:s'),
					'created_by' =>$this->session->userdata('user_id')
				);
				
		$result = $this->db->insert($this->users, $dataUser);
		if($result){ return 1;}
		}
	}
	function getUserById($id){
		$uid = base64_decode($id);
       $this->db->from($this->users);
	   $this->db->where('id',$uid);  
	   $query = $this->db->get();
       return $query->row_array();
    }
	
	function totalAdminUsers(){
		$this->db->from($this->users);
		$this->db->where('role', 2);
		$query = $this->db->get();
		return $query->num_rows();
    }
	function totalStaffUsers(){
		$this->db->from($this->users);
		if($this->session->userdata('role')==2){
			$this->db->where('created_by', $this->session->userdata('user_id'));
			$this->db->where('role', 3);
		}else{
			$this->db->where('role', 3);
		}
		$query = $this->db->get();
		return $query->num_rows();
    }
	
	
	function category(){
	$this->db->from($this->users);
	$this->db->where('id',$this->session->userdata('user_id'));  
	$query = $this->db->get();
	$getresult = $query->row_array();
		
		
       $this->db->from($this->category);
	   $this->db->order_by("id", "desc");
       /*if($this->session->userdata('role')==2){
			$this->db->where('admin_id', $this->session->userdata('user_id'));
		}
		else if($this->session->userdata('role')==3){
			$this->db->where('admin_id', $getresult['created_by']);
		}*/
		
		$query = $this->db->get();
        return $query->result();
    }
	
		public function addNewCategory(){
		$array =array();
		parse_str($_POST['formdata'], $searcharray);
		if(($this->session->userdata('role')==2) || ($this->session->userdata('role')==1)){
				$created_by = $this->session->userdata('user_id');
				$admin_id = $this->session->userdata('user_id');
			}
			if($this->session->userdata('role')==3){
				$this->db->from($this->users);
				$this->db->where('id',$this->session->userdata('user_id'));  
				$query = $this->db->get();
				$getresult = $query->row_array();
				$created_by = $this->session->userdata('user_id');
				$admin_id = $getresult['created_by'];
			}
		
		
		if(empty($searcharray['editCatId'])){
			$dataUser = array(
						'category' =>$searcharray['category'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id,
						'created_date' =>date('Y-m-d H:i:s')
						
					);
			$result = $this->db->insert($this->category, $dataUser);
		}else{
			$id  = base64_decode($searcharray['editCatId']);
			$data = array(
						'category' =>$searcharray['category'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id
					);
			$this->db->where('id', $id);
			$result = $this->db->update($this->category, $data);		
		}
		
		if($result){ 
		$getcategory  = $this->category();
		
		$html =' <option value="">Select Category</option>';
		foreach($getcategory as  $value){
			$html .='<option value="'.$value->id.'" >'.$value->category.'</option>';
		}
		
		
		
		$array['getcategory'] =$html;
		$array['msg'] =1;
		return $array;
		
		
		}
		
	}
	
	function deleteCategory(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->category);
	}
	function getCategoryById($id){
		$uid = base64_decode($id);
       $this->db->from($this->category);
	   $this->db->where('id',$uid);  
	   $query = $this->db->get();
       return $query->row_array();
    }
	
	
	
	
	function eventType(){
	$this->db->from($this->users);
	$this->db->where('id',$this->session->userdata('user_id'));  
	$query = $this->db->get();
	$getresult = $query->row_array();
		
		
       $this->db->from($this->eventTypes);
	   $this->db->order_by("id", "desc");
       if($this->session->userdata('role')==2){
			$this->db->where('admin_id', $this->session->userdata('user_id'));
		}
		else if($this->session->userdata('role')==3){
			$this->db->where('admin_id', $getresult['created_by']);
		}
		
		$query = $this->db->get();
        return $query->result();
    }
	
		public function addNewEventType(){
		parse_str($_POST['formdata'], $searcharray);
		if(($this->session->userdata('role')==2) || ($this->session->userdata('role')==1)){
				$created_by = $this->session->userdata('user_id');
				$admin_id = $this->session->userdata('user_id');
			}
			if($this->session->userdata('role')==3){
				$this->db->from($this->users);
				$this->db->where('id',$this->session->userdata('user_id'));  
				$query = $this->db->get();
				$getresult = $query->row_array();
				$created_by = $this->session->userdata('user_id');
				$admin_id = $getresult['created_by'];
			}
		
		
		if(empty($searcharray['editEventTypeId'])){
			$dataUser = array(
						'event_types' =>$searcharray['event_types'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id,
						'created_date' =>date('Y-m-d H:i:s')
						
					);
			$result = $this->db->insert($this->eventTypes, $dataUser);
		}else{
			$id  = base64_decode($searcharray['editEventTypeId']);
			$data = array(
						'event_types' =>$searcharray['event_types'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id
					);
			$this->db->where('id', $id);
			$result = $this->db->update($this->eventTypes, $data);		
		}
		
		if($result){ return 1;}
		
	}
	
	function deleteEventType(){
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->delete($this->eventTypes);
	}
	function getEventTypeById($id){
		$uid = base64_decode($id);
       $this->db->from($this->eventTypes);
	   $this->db->where('id',$uid);  
	   $query = $this->db->get();
       return $query->row_array();
    }
	
	public function addThemeYear(){
		$array =array();
		parse_str($_POST['formdata'], $searcharray);
		if(($this->session->userdata('role')==2) || ($this->session->userdata('role')==1)){
				$created_by = $this->session->userdata('user_id');
				$admin_id = $this->session->userdata('user_id');
			}
			if($this->session->userdata('role')==3){
				$this->db->from($this->users);
				$this->db->where('id',$this->session->userdata('user_id'));  
				$query = $this->db->get();
				$getresult = $query->row_array();
				$created_by = $this->session->userdata('user_id');
				$admin_id = $getresult['created_by'];
			}
		
		
		$theme_year_name = $searcharray['from_theme_year'].'-'.$searcharray['to_theme_year'];
		
		if(empty($searcharray['editCatId'])){
			$dataUser = array(
						'theme_year' =>$theme_year_name,
						'from_theme_year' =>$searcharray['from_theme_year'],
						'to_theme_year' =>$searcharray['to_theme_year'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id,
						'created_date' =>date('Y-m-d H:i:s')
						
					);
			$result = $this->db->insert($this->themeYear, $dataUser);
		}else{
			$id  = base64_decode($searcharray['editCatId']);
			$data = array(
						'theme_year' =>$theme_year_name,
						'from_theme_year' =>$searcharray['from_theme_year'],
						'to_theme_year' =>$searcharray['to_theme_year'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id
					);
			$this->db->where('id', $id);
			$result = $this->db->update($this->themeYear, $data);		
		}
		
		if($result){ 
		$getthemeYear  = $this->themeYear();
		
		$html =' <option value="">Select Theme Year</option>';
		foreach($getthemeYear as  $value){
			$html .='<option value="'.$value->id.'">'.$value->theme_year.'</option>';
		}
		
		
		
		$array['getthemeYear'] =$html;
		$array['msg'] =1;
		return $array;
		
		
		}
		
	}
	
	function themeYear(){
	$this->db->from($this->users);
	$this->db->where('id',$this->session->userdata('user_id'));  
	$query = $this->db->get();
	$getresult = $query->row_array();
		
		
       $this->db->from($this->themeYear);
	   $this->db->order_by("id", "desc");
       if($this->session->userdata('role')==2){
			$this->db->where('admin_id', $this->session->userdata('user_id'));
		}
		else if($this->session->userdata('role')==3){
			$this->db->where('admin_id', $getresult['created_by']);
		}
		
		$query = $this->db->get();
        return $query->result();
    }
	function location(){
	$this->db->from($this->users);
	$this->db->where('id',$this->session->userdata('user_id'));  
	$query = $this->db->get();
	$getresult = $query->row_array();
		
		
       $this->db->from($this->location);
	   $this->db->order_by("id", "desc");
       if($this->session->userdata('role')==2){
			$this->db->where('admin_id', $this->session->userdata('user_id'));
		}
		else if($this->session->userdata('role')==3){
			$this->db->where('admin_id', $getresult['created_by']);
		}
		
		$query = $this->db->get();
        return $query->result();
    }
	
	public function addLocation(){
		
		$array =array();
		parse_str($_POST['formdata'], $searcharray);
		
		if(($this->session->userdata('role')==2) || ($this->session->userdata('role')==1)){
				$created_by = $this->session->userdata('user_id');
				$admin_id = $this->session->userdata('user_id');
			}
			if($this->session->userdata('role')==3){
				$this->db->from($this->users);
				$this->db->where('id',$this->session->userdata('user_id'));  
				$query = $this->db->get();
				$getresult = $query->row_array();
				$created_by = $this->session->userdata('user_id');
				$admin_id = $getresult['created_by'];
			}
		
		
		
		
		if(empty($searcharray['editCatId'])){
			$dataUser = array(
						
						'location' =>$searcharray['locationid'],
						'locationAddress' =>$searcharray['locationAddress'],
						'locationRegion' =>$searcharray['locationRegion'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id,
						'created_date' =>date('Y-m-d H:i:s')
						
					);
			$result = $this->db->insert($this->location, $dataUser);
		}else{
			$id  = base64_decode($searcharray['editCatId']);
			$data = array(
						'location' =>$searcharray['locationid'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id
					);
			$this->db->where('id', $id);
			$result = $this->db->update($this->location, $data);		
		}
		
		if($result){ 
		$getlocation  = $this->location();
		
		$html =' <option value="">Select Location</option>';
		foreach($getlocation as  $value){
			$html .='<option value="'.$value->id.'">'.$value->location.'</option>';
		}
		$array['getlocation'] =$html;
		$array['msg'] =1;
		return $array;
		}
		
	}
	function truck(){
	$this->db->from($this->users);
	$this->db->where('id',$this->session->userdata('user_id'));  
	$query = $this->db->get();
	$getresult = $query->row_array();
		
		
       $this->db->from($this->truck);
	   $this->db->order_by("id", "desc");
       if($this->session->userdata('role')==2){
			$this->db->where('admin_id', $this->session->userdata('user_id'));
		}
		else if($this->session->userdata('role')==3){
			$this->db->where('admin_id', $getresult['created_by']);
		}
		
		$query = $this->db->get();
        return $query->result();
    }
	
	
		public function addTruck(){
		$array =array();
		parse_str($_POST['formdata'], $searcharray);
		if(($this->session->userdata('role')==2) || ($this->session->userdata('role')==1)){
				$created_by = $this->session->userdata('user_id');
				$admin_id = $this->session->userdata('user_id');
			}
			if($this->session->userdata('role')==3){
				$this->db->from($this->users);
				$this->db->where('id',$this->session->userdata('user_id'));  
				$query = $this->db->get();
				$getresult = $query->row_array();
				$created_by = $this->session->userdata('user_id');
				$admin_id = $getresult['created_by'];
			}
		
		
		
		
		if(empty($searcharray['editCatId'])){
			$dataUser = array(
						
						'trucknumber' =>$searcharray['trucknumber'],
						'yearManufactured' =>$searcharray['yearManufactured'],
						'mileage' =>$searcharray['mileage'],
						'serviceDate' =>$searcharray['serviceDate'],
						'inspectionDate' =>$searcharray['inspectionDate'],
						'trucklocation' =>$searcharray['trucklocation'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id,
						'created_date' =>date('Y-m-d H:i:s')
						
					);
			$result = $this->db->insert($this->truck, $dataUser);
		}else{
			$id  = base64_decode($searcharray['editCatId']);
			$data = array(
						'trucknumber' =>$searcharray['trucknumber'],
						'yearManufactured' =>$searcharray['yearManufactured'],
						'mileage' =>$searcharray['mileage'],
						'serviceDate' =>$searcharray['serviceDate'],
						'inspectionDate' =>$searcharray['inspectionDate'],
						'trucklocation' =>$searcharray['trucklocation'],
						'created_by' =>$created_by,
						'admin_id' =>$admin_id
					);
			$this->db->where('id', $id);
			$result = $this->db->update($this->truck, $data);		
		}
		
		if($result){ 
		$gettruck  = $this->truck();
		
		$html =' <option value="">Select Truck/Trailer</option>';
		foreach($gettruck as  $value){
			$html .='<option value="'.$value->id.'">'.$value->trucklocation.'</option>';
		}
		$array['gettruck'] =$html;
		$array['msg'] =1;
		return $array;
		}
		
	}
	
	
	
	
	
	
	
	
	
	
	
    
    
}

?>