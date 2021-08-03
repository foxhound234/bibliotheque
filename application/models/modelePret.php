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
    
    public function Connexion($DonnesReservation)
    {
        
        $requete=$this->db->get_where('propriétaires',$DonnesReservation);
        return $requete->row();

    }
}
