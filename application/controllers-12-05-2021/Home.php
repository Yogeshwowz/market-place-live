<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this
            ->load
            ->helper('url');
        $this
            ->load
            ->config('email');
        $this
            ->load
            ->library('email');
        $this
            ->load
            ->library('session');
        $this
            ->load
            ->model('dashboard_model');
        $this
            ->load
            ->model('login_model');
			$this->load->library("pagination");
    }
    public function index()
    {
        $data['title'] = 'Home'; /*if ($this->facebook->logged_in()){			$user = $this->facebook->user();			if ($user['code'] === 200){				$this->session->set_userdata('login',true);				$this->session->set_userdata('user_profile',$user['data']);							}		}else{			$data['link'] = $this->facebook->login_url();		}*/
        $data1['allsellerProfile'] = $this
            ->dashboard_model
            ->getAllSeller();
        $data1['allbuyerProfile'] = $this
            ->dashboard_model
            ->getAllBuyer();
        $this
            ->load
            ->view('template/frontend/header', $data);
        $this
            ->load
            ->view('home/index', $data1);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function viewProfile($id)
    {
        $data['title'] = 'Home';
        $data['allsellerProfile'] = $this
            ->dashboard_model
            ->getAllSeller();
        $data['userprofile'] = $this
            ->dashboard_model
            ->viewProfile($id);
        $data['Docimages'] = $this
            ->dashboard_model
            ->sellerDocimages($id);
        $data['users'] = $this
            ->dashboard_model
            ->getUserdataById();
        $data['notificationscount'] = $this
            ->dashboard_model
            ->getNotificationsById($id);
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/view-profile', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function viewBuyer($id)
    {
        $data['title'] = 'Home';
        $data['allbuyerProfile'] = $this
            ->dashboard_model
            ->getAllBuyer();
        $data['userprofile'] = $this
            ->dashboard_model
            ->viewBuyer($id);
        $data['Docimages'] = $this
            ->dashboard_model
            ->buyerDocimages($id);
        $data['users'] = $this
            ->dashboard_model
            ->getUserdataById();
        $data['notificationscount'] = $this
            ->dashboard_model
            ->getNotificationsById($id);
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/view-buyer', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function searchResult()
    {
        $data['title'] = 'Search Result';
		$data['businessindustry'] = $this->dashboard_model->business_industry();
		$data['businessindustry_1'] = $this->dashboard_model->business_industry();
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/search-result', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function contactUs()
    {
        $data['title'] = 'Search Result';
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/contact-us', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function aboutUs()
    {
        $data['title'] = 'Search Result';
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/about-us', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    function sendProposal()
    {
        $data = $this
            ->dashboard_model
            ->sendProposal();
        echo json_encode($data);
    }
    public function sellers()
    {
        $data['title'] = 'Search Result';
        $data['allsellerProfile'] = $this
            ->dashboard_model
            ->getAllSeller();
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/sellers', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function buyers()
    {
        $data['title'] = 'Search Result';
		$data['businessindustry'] = $this->dashboard_model->business_industry();
		$data['businessindustry_1'] = $this->dashboard_model->business_industry();
        $data['allbuyerProfile'] = $this
            ->dashboard_model
            ->getAllBuyer();
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/buyers', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function investors()
    {
        $data['title'] = 'Search Result';
		$data['businessindustry'] = $this->dashboard_model->business_industry();
		$data['businessindustry_1'] = $this->dashboard_model->business_industry();
        $data['allbuyerProfile'] = $this
            ->dashboard_model
            ->getAllInvestor();
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/investors', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
    public function viewInvestor($id)
    {
        $data['title'] = 'Home';
        $data['allbuyerProfile'] = $this
            ->dashboard_model
            ->getAllInvestor();
        $data['userprofile'] = $this
            ->dashboard_model
            ->viewBuyer($id);
        $data['Docimages'] = $this
            ->dashboard_model
            ->buyerDocimages($id);
        $data['users'] = $this
            ->dashboard_model
            ->getUserdataById();
        $data['notificationscount'] = $this
            ->dashboard_model
            ->getNotificationsById($id);
        $this
            ->load
            ->view('template/frontend/header');
        $this
            ->load
            ->view('home/view-buyer', $data);
        $this
            ->load
            ->view('template/frontend/footer');
    }
	
	//Pagination Seller
	public function loadRecordSeller($rowno=0){
	    $rowno =$_POST['pagno'];
		// Row per page
		$rowperpage = 5;
		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->dashboard_model->getrecordCountSeller();
		// Get  records
      	$users_record = $this->dashboard_model->getDataSeller($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'home/loadRecordSeller';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['anchor_class'] = 'class="number" ';
		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;
		echo json_encode($data);
		
	}
	
	public function loadRecordBuyer($rowno=0){
	    $rowno =$_POST['pagno'];
		// Row per page
		$rowperpage = 5;
		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->dashboard_model->getrecordCountBuyer();
		// Get  records
      	$users_record = $this->dashboard_model->getDataBuyer($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'home/loadRecordBuyer';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['anchor_class'] = 'class="number" ';
		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;
		echo json_encode($data);
		
	}
	
	public function loadRecordBuyerSearch($rowno=0){
	    $rowno =$_POST['pagno'];
		// Row per page
		$rowperpage = 5;
		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
      	
      	// All records count
      	$allcount = $this->dashboard_model->getrecordCountBuyerSearch();
		// Get  records
      	$users_record = $this->dashboard_model->getDataBuyerSearch($rowno,$rowperpage);
      	
      	// Pagination Configuration
      	$config['base_url'] = base_url().'home/loadRecordBuyerSearch';
      	$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['anchor_class'] = 'class="number" ';
		// Initialize
		$this->pagination->initialize($config);

		// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['allcount'] = $allcount;
		echo json_encode($data);
		
	}
	//End Here
	
	
	
	
} ?>
