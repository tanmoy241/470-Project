<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('doctors_model');

        $data = array(
            "doctorlist" => $this->doctors_model->loadDoctors()
        );
		$this->load->view('index',$data);
	}

	public function doclist(){

	    $this->load->model('doctors_model');

	    $data['doclist'] = $this->doctors_model->loadDoctors();


	    $this->load->view('list',$data);

    }

    public function docdetail($id){

	    $this->load->model('doctors_model');

	    $data['docdetail'] = $this->doctors_model->doctordetail($id);
	    $data['doc_spec'] = $this->doctors_model->doc_spec($id);
	    $data['doc_edu'] = $this->doctors_model->doc_edu($id);
	    $data['doc_review'] = $this->doctors_model->doc_review($id);
	    $data['doc_timing'] = $this->doctors_model->doc_timeing($id);

	    $this->load->view('detailpage',$data);
    }

    public function booking(){

	    $this->load->view('booking');
    }

    public function login(){
	    $this->load->view('login');
    }
    public function register(){
	    $this->load->view('registerpatient');
    }

    public function registernewpatient(){

        $this->load->model("patient_model");

        $data = array(
            "user_name"     =>$this->input->post("username"),
            "name"     =>$this->input->post("fname"),
            "user_phoneno"          =>$this->input->post("phoneno"),
            "user_email"          =>$this->input->post("email"),
            "user_address"          =>$this->input->post("address"),
            "user_password"          =>$this->input->post("password"),
            "user_type"          =>"patient"

        );

        if($this->patient_model->insert_data($data)){
            $this->load->view('successregister');
        }

    }

    public function successregister(){
        $this->load->view('successregister');
    }

    public function login_validation(){
        $this->load->model("patient_model");

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');


            $user_type = $this->patient_model->can_login($username, $password);
            $user_profile_prcture = $this->patient_model->profile_pic($username);
            if($user_profile_prcture == ""){
                $user_profile_prcture = "./images/dummy.png";
            }
                $session_data = array(
                    'username' => $username,
                    'user_type' => $user_type,
                    'profile_picture' => $user_profile_prcture
                );
                $this->session->set_userdata($session_data);
                $this->index();
        }
        else{
            $this->login();
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url()."welcome");

    }
    public function book(){
        $this->load->model("appointment");

        $appid = time().'-'.mt_rand();

        $count = count($_FILES['pic']['name']);
        echo $count;
        $data = "";
        for($i=0; $i<$count; $i++){
            $type = explode('.',$_FILES['pic']['name'][$i]);
            $type = $type[count($type) - 1];
            $url = "./images/".uniqid(rand()).'.'.$type;
            if(in_array($type, array("jpg","jpeg","gif","png"))){
                if(is_uploaded_file($_FILES['pic']['tmp_name'][$i])){
                    if(move_uploaded_file($_FILES['pic']['tmp_name'][$i],$url)){
                        $data = array(
                            "appointment_id" => $appid,
                            "user_name" => $_SESSION['username'],
                            "url" => $url
                        );
                        $this->appointment->prevreport($data);
                    }
                }
            }
        }



	    $data2 = array(
	        "appointment_id" => $appid,
	        "user_id" => $_SESSION['username'],
            "doctor_id" => $this->input->post('ids'),
            "appointment_date" => $this->input->post('datepick'),
            "appointment_time" => $this->input->post('radio_time')
        );

	    if($this->appointment->bookapp($data2)){
            $this->load->view('confirm');
        }


    }

    public function con(){
	    $this->load->view('confirm');
    }
    public function searchdoc(){
        $this->load->model('doctors_model');

        $keyword = $this->input->post('searchquery');



        $data['doclist'] = $this->doctors_model->search($keyword);
        $this->load->view('list',$data);
    }

    public function postreview(){
        $this->load->model('doctors_model');
        $data = array(
            "review_text"     =>$this->input->post("message"),
            "doctor_id"     =>$this->input->post("docid"),
            "review_writer"     =>$_SESSION['username'],
            "rating"     =>2
        );
        if($this->doctors_model->insertreview($data)){
            redirect(base_url()."welcome/doclist");
        }
    }

}
