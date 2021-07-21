<?php

class modeleOeuvre extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }


    public function Recherche($donneesrecherche)    
    {
    
       
        if ($donneesrecherche['filtre']=='tout') {

       $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
            FROM oeuvre,editeur,auteur,ecrire 
            WHERE oeuvre.idediteur=editeur.idediteur
            and ecrire.idoeuvre=oeuvre.idoeuvre
            and ecrire.idauteur=auteur.idauteur
            and nomauteur LIKE '".$donneesrecherche['Recherche']."'
            or titre LIKE '".$donneesrecherche['Recherche']."'
            ";   
        }
        elseif ($donneesrecherche['filtre']=='auteur') {
            $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
            FROM oeuvre,editeur,auteur,ecrire 
            WHERE oeuvre.idediteur=editeur.idediteur
            and ecrire.idoeuvre=oeuvre.idoeuvre
            and ecrire.idauteur=auteur.idauteur
            and nomauteur LIKE '".$donneesrecherche['Recherche']."'
            ";   
           
        }
        else {
            $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
            FROM oeuvre,editeur,auteur,ecrire 
            WHERE oeuvre.idediteur=editeur.idediteur
            and ecrire.idoeuvre=oeuvre.idoeuvre
            and ecrire.idauteur=auteur.idauteur
            and titre LIKE '".$donneesrecherche['Recherche']."'
            ";  
         
        }
            
            return  $query=$this->db->query($requete);
        
     
    }

    

}
?>