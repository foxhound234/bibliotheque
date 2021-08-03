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
            $query=$this->modeleOeuvre->Recherche($Recherche);
            $config=array();
            $config["base_url"] = site_url('Visiteur/afficherresultat');
            $config["total_rows"] =$query->num_rows();
            
            $config["per_page"] = 5;
            $config["uri_segment"] = 3; 
            $config['first_link'] = 'Premier';
        
            $config['last_link'] = 'Dernier';
          
            $config['next_link'] = 'Suivant';
          
            $config['prev_link'] = 'Précédent';
            
            $this->pagination->initialize($config);

            
        
           $data['lesoeuvres']=$this->modeleOeuvre->Recherche($Recherche)->result_array();
           $data["lienspagination"]=$this->pagination->create_links();

           $this->lespages('visiteur/afficheresultat',$data);
            
           
        }else {
       
           $data['titre']='titre';
           $data['Erreur']='';
            $this->lespages('visiteur/accueil',$data);
        }
     

    }
  public function RechercheDynamique(){
    $Recherche=$this->input->post('txtRecherche');
    echo $Recherche;
  }
   public function afficheoeuvre($idoeuvre){
    $data['oeuvre']=$this->modeleOeuvre->Oeuvre($idoeuvre);
    $data['lesdisponibilites']=$this->modeleOeuvre->Disponibilité($idoeuvre)->result_array();
    

    $this->lespages('visiteur/afficheoeuvre',$data);
    
   }

   public function afficheauteur($nomauteur){
   $data['lesoeuvres']=$this->modeleOeuvre->Auteur($nomauteur)->result_array();
   $this->lespages('visiteur/afficheresultat',$data);

   }
   
   public function afficheEditeur($nomediteur){
    $data['lesoeuvres']=$this->modeleOeuvre->Editeur($nomediteur)->result_array();
    $this->lespages('visiteur/afficheresultat',$data); 
   }
    public function lespages($pagesprincipal,$data) 
    {
      $this->load->view('Templates/entete');
      $this->load->view($pagesprincipal,$data);
      $this->load->view('Templates/piedpage');
        
    }

}
