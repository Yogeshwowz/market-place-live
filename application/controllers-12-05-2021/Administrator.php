<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this
            ->load
            ->helper('url');
        $this
            ->load
            ->library('session');
        $this
            ->load
            ->config('email');
        $this
            ->load
            ->library('email');
        $this
            ->load
            ->model('administrator_model');
    }
    function logout()
    {
        session_start();
        session_destroy();
        unset($_SESSION);
        session_regenerate_id(true);
        redirect('administrator');
    }
    public function login(){
        if (!empty($_POST['SignIn']))
        {
            $email = $this
                ->input
                ->post('email');
            $password = $this
                ->input
                ->post('password');
            $result = $this
                ->administrator_model
                ->loginMe($email, $password);
            if ($result)
            {
				if($result['status']==1){
					$sessionArray = array(
						'user_id' => $result['id'],
						'role' => $result['role']
					);
					$this
						->session
						->set_userdata($sessionArray);
					redirect('administrator/dashboard');
				}
				else{
					$this
						->session
						->set_flashdata('error', 'Your account has been be suspended.Please contact with administrator');
					$this
						->load
						->view('/administrator/login');
				}	
            }
            else
            {
                $this
                    ->session
                    ->set_flashdata('error', 'Email or password does not match');
                $this
                    ->load
                    ->view('/administrator/login');
            }
        }
        else
        {
            $this
                ->load
                ->view('/administrator/login');
        }
    }

    public function dashboard(){
        $data['pageTitle'] = 'Inventory System : Dashboard';
		$data['totalAdminUsers'] = $this
									->administrator_model
									->totalAdminUsers();
		$data['totalStaffUsers'] = $this
									->administrator_model
									->totalStaffUsers();		
        $this
            ->load
            ->view('administrator/includes/header', $data);
        $this
            ->load
            ->view('administrator/dashboard');
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function adminUsers(){
        $data['pageTitle'] = 'Inventory System : Admin Users';
		$data['users'] = $this
                ->administrator_model
                ->adminUsers();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/admin-users', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function addAdmin(){
        $data['pageTitle'] = 'Inventory System : Add Admin Users';
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/add-admin-users', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function addAdminUser(){
			$data = $this->administrator_model->addAdminUser();
			echo json_encode($data);
	}
	function deleteAdminUser(){
			$data = $this->administrator_model->deleteAdminUser();
			echo $data;
	}
	function deactiveAdminUser(){
			$data = $this->administrator_model->deactiveAdminUser();
			echo $data;
	}
	function activeAdminUser(){
			$data = $this->administrator_model->activeAdminUser();
			echo $data;
	}
	public function profile(){
        $data['pageTitle'] = 'Inventory System : My Profile';
		$data['profile'] = $this
                ->administrator_model
                ->getinfo();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/profile', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function updateProfile(){
			$data = $this->administrator_model->updateProfile();
			echo json_encode($data);
	}
	public function staffUsers(){
        $data['pageTitle'] = 'Inventory System : Staff User';
		$data['users'] = $this
                ->administrator_model
                ->staffUsers();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/staff-users', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function addStaffUser(){
        $data['pageTitle'] = 'Inventory System : Add Staff Users';
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/add-staff-users', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function addNewStaffUser(){
			$data = $this->administrator_model->addStaffUser();
			echo json_encode($data);
	}
	public function editAdminUser($id){
        $data['pageTitle'] = 'Inventory System : Edit User';
		$data['users'] = $this
                ->administrator_model
                ->getUserById($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/edit-admin-user', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function editUser($id){
        $data['pageTitle'] = 'Inventory System : Edit User';
		$data['users'] = $this
                ->administrator_model
                ->getUserById($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/edit-user', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function category(){
        $data['pageTitle'] = 'Inventory System :Category';
		$data['category'] = $this
                ->administrator_model
                ->category();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/category', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function addCategory(){
        $data['pageTitle'] = 'Inventory System : Add Category';
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/add-category', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function addNewCategory(){
			$data = $this->administrator_model->addNewCategory();
			echo json_encode($data);
	}
	function deleteCategory(){
			$data = $this->administrator_model->deleteCategory();
			echo $data;
	}
	public function editCategory($id){
        $data['pageTitle'] = 'Inventory System : Edit Category';
		$data['category'] = $this
                ->administrator_model
                ->getCategoryById($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/edit-category', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function eventType(){
        $data['pageTitle'] = 'Inventory System :Event Type';
		$data['eventType'] = $this
                ->administrator_model
                ->eventType();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/event-types', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function addEventType(){
        $data['pageTitle'] = 'Inventory System : Add Event Type';
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/add-event-types', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function addNewEventType(){
			$data = $this->administrator_model->addNewEventType();
			echo json_encode($data);
	}
	function deleteEventType(){
			$data = $this->administrator_model->deleteEventType();
			echo $data;
	}
	public function editEventType($id){
        $data['pageTitle'] = 'Inventory System : Edit EventType';
		$data['eventType'] = $this
                ->administrator_model
                ->getEventTypeById($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/edit-event-types', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	function addThemeYear(){
			$data = $this->administrator_model->addThemeYear();
			echo json_encode($data);
	}
	function addLocation(){
			$data = $this->administrator_model->addLocation();
			echo json_encode($data);
	}
	function addTruck(){
			$data = $this->administrator_model->addTruck();
			echo json_encode($data);
	}
	

}

?>
