<?php
class modeleProprietaire extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function Connexion($putilisateur){
        $requete = $this->db->get_where('propriétaires',$pclient);
        return $requete->row(); // retour d'une seule ligne !
        // retour sous forme d'objets
    }
    
}
