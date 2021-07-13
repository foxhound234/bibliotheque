<?php
class Visiteur extends CI_Controller
{

    public function __construct()
     {
         parent::__construct();
        
     }

    public function test(){
       
        $this->load->view('visiteur/accueil');
    }
}
