<?php
//defined('BASEPATH') || exit('No direct script access allowed');

class News extends Home_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('application');
		$this->load->library('Template');
		$this->load->library('Assets');
		$this->lang->load('application');
		$this->load->library('events');
        $this->load->model('news_model', null, true);
    }


    public function index()
    {
        $news = $this->news_model->get_news();
        Template::set('news', $news);
		Template::render();
    }

    public function read_more(){
        $id = $this->uri->segment('2');
        $news_detail = $this->news_model->get_news_by_id($id);
        Template::set('news_detail', $news_detail);
        Template::set_view('news_detail');
        Template::render();
    }
}

/* End of file Cabang_controller.php */
