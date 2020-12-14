<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    private $upload_path = "./uploads";

    public function index()
    {
        $this->load->view("index");
    }

    public function upload()
    {
        if ( ! empty($_FILES))
        {
            $config["upload_path"]   = $this->upload_path;
            $config["allowed_types"] = "gif|png|pdf|jpg";
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload("file")) {
                echo "failed to upload file(s)";
            }
        }
    }
}