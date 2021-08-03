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
 
            $utilisateur=$this->modeleProprietaire->Connexion($Connexion);
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
       
      $Compte=$this->modeleProprietaire->Connexion($this->session->Noadherent);
      $NombredePret=$this->modelePret->Pretutilisateur($this->session->Noadherent);
      $Reservationattente=$this->modeleReservation->Reservationattente($this->session->Noadherent);
      $ReservationDisponible=$this->modeleReservation->ReservationDisponible($this->session->Noadherent);
    
     
      if ($Reservationattente===null) {
        $data['nbattente']=0;
      }else {
        $data['nbattente']=$Reservationattente->num_rows();
      }

      if ($ReservationDisponible===null) {
        $data['nbdisponible']=0;
      }else {
        $data['nbdisponible']=$ReservationDisponible->num_rows();
      }
       
     if ($NombredePret===null) {

      $data['nbpret']=0;
     }else {
      $data['nbpret']=$NombredePret->num_rows();
     }
     
       $data['Compte']=$Compte;

       $this->lespages('compte/affichecompte',$data);

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
