<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*public function index($page = 'home', $subPage = NULL) {
        $data = $this->getData($page, $subPage);
        
        if ($page == 'home')
            $data['events'] = $this->getFBEvents();

        $page = isset($subPage) ? $page .= '/'.$subPage : $page;

        if ($page = $this->isPathValid($page)) { // check if requested page exists
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        } else {
            show_404();
        }
    }*/

    function error_404() {
        $this->output->set_status_header('404');
        echo "404 - not found";
    }
}