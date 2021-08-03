<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class modeleReservation extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }

    public function Reservationattente($noadherent)
    {
        $requete="select *
        FROM reservation 
        WHERE idpropriétaire='".$noadherent."'
        and disponible ='0'
       ";
       
       $query=$this->db->query($requete);
       return $query->row_array();


    }
    public function ReservationDisponible($noadherent)
    {
        $requete="select *
        FROM reservation 
        WHERE idpropriétaire='".$noadherent."'
        and disponible ='1'
       ";
       $query=$this->db->query($requete);
       return $query->row_array();
    }

}

/* End of file ModelName.php */
