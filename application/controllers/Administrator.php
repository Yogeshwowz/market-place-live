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
	   $this
            ->load
            ->model('dashboard_model');
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
		$data['allUsers'] = $this
									->administrator_model
									->allUsers();
		$data['totalInvestors'] = $this
									->administrator_model
									->totalInvestors();	
		$data['totalBuyers'] = $this
									->administrator_model
									->totalBuyers();
		$data['totalSellers'] = $this
									->administrator_model
									->totalSellers();
		$data['totalAdvisory'] = $this
									->administrator_model
									->totalAdvisory();							
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
	public function contact(){
		if(isset($_POST['contact_admin'])){
			$this->administrator_model->updateContact();
		}
        $data['pageTitle'] = 'Contact';
		$data['contact'] = $this
                ->administrator_model
                ->contact();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/contact', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function aboutUs(){
		if(isset($_POST['about_admin'])){
			$this->administrator_model->updateAboutUs();
		}
        $data['pageTitle'] = 'About Us';
		$data['aboutUs'] = $this
                ->administrator_model
                ->aboutUs();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/about-us', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function viewBuyer($id){
		$data['pageTitle'] = 'About Us';
		$data['userprofile'] = $this
            ->dashboard_model
            ->viewBuyer($id);
		 $data['Docimages'] = $this
            ->dashboard_model
            ->buyerDocimages($id);
			
		
        $this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/view-buyer', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function viewSeller($id){
		$data['pageTitle'] = 'About Us';
		$data['userprofile'] = $this
            ->dashboard_model
            ->viewProfile($id);
		$data['Docimages'] = $this
            ->dashboard_model
            ->sellerDocimages($id);	
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/view-seller', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function viewInvestor($id){
		$data['pageTitle'] = 'About Us';
		 $data['userprofile'] = $this
            ->dashboard_model
            ->viewBuyer($id);
        $data['Docimages'] = $this
            ->dashboard_model
            ->buyerDocimages($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/view-investor', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function viewAdvisory($id){
		$data['pageTitle'] = 'About Us';
		 $data['userprofile'] = $this
            ->dashboard_model
            ->viewBuyer($id);
        $data['Docimages'] = $this
            ->dashboard_model
            ->buyerDocimages($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/view-advisory', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	public function createTestimonial(){
		$data['pageTitle'] = 'Testimonial';
		if(isset($_POST['testimonial_btn'])){
			$this->administrator_model->CTestimonial();
			$this->session->set_flashdata('success', 'Testimonial has been added successfully');	
		}
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/create-testimonial', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function Testimonial(){
        $data['pageTitle'] = 'Testimonial';
		$data['testimonial'] = $this
                ->administrator_model
                ->Testimonial();
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/testimonial', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	public function updateTestimonial($id){
		$data['pageTitle'] = 'Testimonial';
		if(isset($_POST['testimonial_btn'])){
			$this->administrator_model->UTestimonial($id);
			$this->session->set_flashdata('success', 'Testimonial has been updated successfully');	
		}
		$data['testimonial'] = $this
                ->administrator_model
                ->getTestimonialBy($id);
		$this
            ->load
            ->view('administrator/includes/header');
        $this
            ->load
            ->view('administrator/update-testimonial', $data);
        $this
            ->load
            ->view('administrator/includes/footer');
	}
	
	function deleteTestimonial(){
			$data = $this->administrator_model->deleteTestimonial();
			//$this->session->set_flashdata('delete', 'Testimonial has been delete successfully');	
			echo $data;
	}

}

?>
