<?php
class compte extends CI_Controller
{

    public function __construct()
     {
         parent::__construct();
         $this->load->helper('url');
     }


  
     public function Reservation(){

       
           $DonnesReservation= 
           array('idoeuvre' => $idoeuvre,
                 'idmediatheque'=>$idmedia,
                 'idpropriétaire'=>$this->session->idproprio  
                );
            
                $this->modelePret->Reservation($DonnesReservation);
                $this->load->view('Templates/entete');
                $this->load->view($pagesprincipal,$data);
                $this->load->view('Templates/piedpage');
                  
        
     }
     public function connexion(){
       if ($this->input->post("BtnConnexion")) {
        
        $Connexion=array(
            'mail' => $this->input->post('txtMail'),
             'mdp'=>$this->input->post('txtMdp')
            ); 
 
            $utilisateur=$this->modelePret->Connexion($Connexion);
         if ($utilisateur===null) {
          $data['Erreur']='Erreur  de Connexion';
          $this->lespages('Visiteur/Accueil',$data);
        
           }else{
         
          $this->session->Email=$utilisateur->mail;
          $this->session->Noadherent=$utilisateur->idpropriétaire;
          $this->session->identifiant=$utilisateur->prenom;
          $this->session->profil=$utilisateur->profil;

          $data['tt']='esef';

           $this->lespages('compte/connexionReussie',$data);

         

         }

       }

     }

     public function afficheCompte(){
      $Reservation=$this->modelePret->Connexion($Connexion);
      $Pret=$this->modelePret->Connexion($Connexion);

     }

     public function Deconnexion(){
      $this->session->sess_destroy();
      redirect('Visiteur/Accueil');

     }

     public function lespages($pagesprincipal,$data) 
     {
       $this->load->view('Templates/entete');
       $this->load->view($pagesprincipal,$data);
       $this->load->view('Templates/piedpage');
         
     }

     





}
