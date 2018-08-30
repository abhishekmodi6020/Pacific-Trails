<?php

class PacificController extends CI_Controller{

  // public function __construct(){
  //   parent::__construct();
  //   $this->load->model('fetch_activities');
  //   $this->load->helper('url_helper');
  //   $this->activityid();
  // }

  // public function index(){
  //   $this->viewpackage();
  // }
  // public function __construct(){
	// 	parent::__construct();
	// 	$this->load->helper('url');
	// 	$this->view_data['base_url'] = base_url();
	// 	$this->load->model('pacificm');
  //   $this->shop();
	// 	}

  // public function view($page = 'yurts'){
  //   if(!file_exists(APPPATH.'views/modi_pacifictrails/'.$page.'.php')){
  //       show_404();
	// 		}
  //   $data['title'] = ucfirst($page);
		// $this->load->view('templates/header');
		// $this->load->view('modi_pacifictrails/'.$page, $data);
		// $this->load->view('templates/footer');
  // }

  public function index(){
    $this->load->model('pacificm');
    $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/index');
    $this->load->view('templates/footer');
  }

  public function yurts(){
    $this->load->model('pacificm');
    $data['allpackage'] = $this->pacificm->getPackage();
    $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/yurts',$data);
    $this->load->view('templates/footer');
  }

  // public function tp(){
  //   $this->load->model('pacificm');
  //   $data['alluser'] = $this->pacificm->getreservation();
  //   // $this->load->view('templates/header');
  //   $this->load->view('modi_pacifictrails/tp',$data);
  //   // $this->load->view('templates/footer');
  // }

  public function activities(){
    $this->load->model('pacificm');
    $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/activities');
    $this->load->view('templates/footer');
  }

  public function reservationsvalidation(){
    $this->load->model('pacificm');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('firstname','First Name','trim|required');
    $this->form_validation->set_rules('lastname', 'Last Name','trim|required');
    $this->form_validation->set_rules('email','E-mail','valid_email|trim|required');
    $this->form_validation->set_rules('phone','Phone','regex_match[/^[0-9]{10}$/]');
    $this->form_validation->set_rules('comment','Comments','required');
    $this->form_validation->set_rules('arrivaldate','Arrival date','required');
    $this->form_validation->set_rules('when','When date','required');

    if ($this->form_validation->run() == FALSE){
        $this->reservations();
      }
    else{
      $data1 = array('arrivaldate' => $this->input->post('arrivaldate'),
                      'ofnights' => $this->input->post('nights'),
                      'packageid' => $this->input->post('package'));
      $this->pacificm->insertYurtReservation($data1);
      $lastid = $this->db->insert_id();
      $data2 = array('fname' => $this->input->post('firstname'),
                    'lname' => $this->input->post('lastname'),
                    'phone' => $this->input->post('phone'),
                    'email' => $this->input->post('email'),
                    'resid' => $lastid,
                    'activityid' => $this->input->post('activities'));
      $this->pacificm->insertclient($data2);
      $lastid = $this->db->insert_id();
      $data3 = array('date' => $this->input->post('when'),
                    'activityid' => $this->input->post('activities'),
                    'clientid' => $lastid);
      $insert = $this->pacificm->insertwhen($data3);
      echo "data inserted";
      $this->reservations();
    }
  }

  public function reservations(){
    $this->load->model('pacificm');
    $this->load->view('templates/header');
    $data['allactivities'] = $this->pacificm->getActivityDropdown();
    $data['allpackage'] = $this->pacificm->getPackageDropdown();
    $this->load->view('modi_pacifictrails/reservations',$data);
    $this->load->view('templates/footer');
  }

  public function myreservationvalidation(){
    $this->load->model('pacificm');
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email','E-mail','valid_email|trim|required');

    if ($this->form_validation->run() == FALSE){
        $this->myreservations();
      }
    else{
      $data = array('email' => $this->input->post('email'));

      $this->myreservationsfull($data);
    }
  }

  public function myreservations(){
    $this->load->model('pacificm');
    // $fetchdata->pacificm->getMyReservation();
    // $data['resdata'] = array('fname' =>'','lname' =>'' );
    $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/myreservations');
    $this->load->view('templates/footer');
  }

    public function myreservationsfull($data){
      $this->load->model('pacificm');
      $data1['resdata'] = $this->pacificm->getMyReservation($data);
      // echo $data1->resdata;
      $this->load->view('templates/header');
      $this->load->view('modi_pacifictrails/myreservations',$data1);
      $this->load->view('templates/footer');
    }

  public function shop(){
    $this->load->model('pacificm');
    $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/shop');
    $this->load->view('templates/footer');
  }

  public function cart(){
    $this->load->model('pacificm');
    // $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/cart');
    // $this->load->view('templates/footer');
  }

  public function placeyourorder(){
    $this->load->model('pacificm');
    // $this->load->view('templates/header');
    $this->load->view('modi_pacifictrails/placeyourorder');
  }

}
