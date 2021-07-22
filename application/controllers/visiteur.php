<?php
class Visiteur extends CI_Controller
{

    public function __construct()
     {
         parent::__construct();
         $this->load->helper('url');
     }

    public function Accueil(){
        if ($this->input->post('Btnrecherche')) {
           
           $Recherche=array(
            'Recherche' => $this->input->post('txtRecherche'),
             'filtre'=>$this->input->post('filtre')
            ); 
         


        
           $data['lesoeuvres']=$this->modeleOeuvre->Recherche($Recherche)->result_array();
           
           $this->load->view('Templates/entete');
           $this->load->view('visiteur/afficheresultat',$data);
           $this->load->view('Templates/piedpage');
         
        
           
          
           
        }else {
             $this->load->view('visiteur/accueil');  
        }
     

    }

   public function afficheoeuvre($idoeuvre){
    $data['oeuvre']=$this->modeleOeuvre->Oeuvre($idoeuvre);


   }

    public function lespages($pagesprincipal,$data) 
    {
      $this->load->view('Templates/entete');
      $this->load->view($pagesprincipal,$data);
      $this->load->view('Templates/piedpage');
        
    }
}
