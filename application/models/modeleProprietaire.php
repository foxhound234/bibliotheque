<?php
class modeleProprietaire extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function Connexion($putilisateur){
        
        $requete="
        select * from propriétaires 
        WHERE 
        idpropriétaire='".$putilisateur."'";

        $query=$this->db->query($requete);
        return $query->row_array();
        // retour sous forme d'objets
    }
   
}
