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
           $this->lespages('visiteur/afficheresultat',$data);
            
           
        }else {
       
           $data['titre']='titre';

            $this->lespages('visiteur/accueil',$data);
        }
     

    }

   public function afficheoeuvre($idoeuvre){
    $data['oeuvre']=$this->modeleOeuvre->Oeuvre($idoeuvre);
    
    $this->lespages('visiteur/afficheoeuvre',$data);
    
   }

   public function afficheauteur($nomauteur){
   $data['auteurOeuvres']=$this->modeleOeuvre->Auteur($nomauteur);

   }
   
   public function afficheEditeur($nomediteur){
       
   }
    public function lespages($pagesprincipal,$data) 
    {
      $this->load->view('Templates/entete');
      $this->load->view($pagesprincipal,$data);
      $this->load->view('Templates/piedpage');
        
    }
}
