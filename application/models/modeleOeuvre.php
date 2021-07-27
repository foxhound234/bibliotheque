<?php

class modeleOeuvre extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }


    public function Recherche($donneesrecherche)    
    {
       
       
     if ($donneesrecherche['filtre']='tout') {
         
         $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
         FROM oeuvre,editeur,auteur,ecrire 
         WHERE oeuvre.idediteur=editeur.idediteur
         and ecrire.idoeuvre=oeuvre.idoeuvre
         and ecrire.idauteur=auteur.idauteur
         and nomauteur = '".$donneesrecherche['Recherche']."'
         or titre='".$donneesrecherche['Recherche']."'
         ";  
        

         return $this->db->query($requete);

     }elseif ($donneesrecherche['filtre']='auteur') {
        $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
        FROM oeuvre,editeur,auteur,ecrire 
        WHERE oeuvre.idediteur=editeur.idediteur
        and ecrire.idoeuvre=oeuvre.idoeuvre
        and ecrire.idauteur=auteur.idauteur
        and nomauteur = '".$donneesrecherche['Recherche']."'
        ";  
      
        return $this->db->query($requete);
     }else {
        $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
        FROM oeuvre,editeur,auteur,ecrire 
        WHERE oeuvre.idediteur=editeur.idediteur
        and ecrire.idoeuvre=oeuvre.idoeuvre
        and ecrire.idauteur=auteur.idauteur
        and titre = '".$donneesrecherche['Recherche']."'
       ";

        return $this->db->query($requete);
        
     }
     
    }

 public function Oeuvre($idoeuvre)
     {
     
        $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
        FROM oeuvre,editeur,auteur,ecrire 
        WHERE oeuvre.idediteur=editeur.idediteur
        and ecrire.idoeuvre=oeuvre.idoeuvre
        and ecrire.idauteur=auteur.idauteur
        and oeuvre.idoeuvre = '".$idoeuvre."'
       ";

      return $this->db->query($requete);
   
     }

  public function Auteur($nomauteur)
  {
    $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
    FROM oeuvre,editeur,auteur,ecrire 
    WHERE oeuvre.idediteur=editeur.idediteur
    and ecrire.idoeuvre=oeuvre.idoeuvre
    and ecrire.idauteur=auteur.idauteur
    and nomauteur = '".$nomauteur."'
    ";  

    return $this->db->query($requete);
  }

  public function Editeur($nomediteur)
  {
    $requete="select oeuvre.idoeuvre,titre,parution,'format',genre,nbpages,isbn,prix,'resume',couverture,langue,nomediteur,nomauteur,datemort,datenaiss
    FROM oeuvre,editeur,auteur,ecrire 
    WHERE oeuvre.idediteur=editeur.idediteur
    and ecrire.idoeuvre=oeuvre.idoeuvre
    and ecrire.idauteur=auteur.idauteur
    and nomediteur='".$nomediteur."'
    ";  
    return $this->db->query($requete);

  }

  


}
?>