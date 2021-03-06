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
	public function Buyers(){
        $data['pageTitle'] = 'Buyers';
		$data['users'] = $this
                ->administrator_model
                ->Buyers();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/buyers', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function Sellers(){
        $data['pageTitle'] = 'Sellers';
		$data['users'] = $this
                ->administrator_model
                ->Sellers();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/sellers', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function Investors(){
        $data['pageTitle'] = 'investors';
		$data['users'] = $this
                ->administrator_model
                ->Investors();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/investors', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function Advisory(){
        $data['pageTitle'] = 'advisory';
		$data['users'] = $this
                ->administrator_model
                ->Advisory();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/advisory', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function resources(){
		
		if(isset($_POST['resources_admin'])){
			
			$this->administrator_model->updateResources();
		}
        $data['pageTitle'] = 'Resources';
		$data['resources'] = $this
                ->administrator_model
                ->resources();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/resources', $data);
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

	

}

?>
