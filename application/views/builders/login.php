<?php  

  $this->load->view('_structure/docBegin'); 
    $this->load->view('_structure/head');
    $this->load->view('_structure/bodyBegin'); 
        // $this->load->view('_structure/header'); 
            if (count($views)>0){
              foreach($views as $view){
               $this->load->view($view);
              } 
            } 
        // $this->load->view('_structure/footer');
      $this->load->view('_structure/bottomScripts');
    $this->load->view('_structure/bodyEnd');
  $this->load->view('_structure/docEnd');

  ?>