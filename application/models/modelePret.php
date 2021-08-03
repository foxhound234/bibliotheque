<?php
class modelePret extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function Reservation($DonnesReservation)
    {
     
        $this->db->insert('pret',$DonnesReservation);
        return $this->db->insert_id();
    }
    
    public function Pretutilisateur($noadherent)
    {
    
        $requete="
        select * from pret 
        WHERE 
        idpropriétaire='".$noadherent."'";

        $query=$this->db->query($requete);
        return $query->row_array();

    }
}
