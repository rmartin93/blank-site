<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


  public function index(){
    // $this->pData['function'] = "index";    
    // $jData = json_encode($this->pData);  
    // $loggly = toLoggly($jData);  

    $this->data['views']['view1'] = 'pages/login';

    $this->load->view('builders/login', $this->data);
  }  

}