<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo css_url('afficheoeuvre'); ?>">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
  <?php

  echo '<div class="page-header">';

  echo '<h2 class="detntc-tn">'.$oeuvre['titre'].'</h2>';
  echo '</div>';
  ?>


</br>
<div class="col-sm-12">
  <div class="relative">
  <div class="bloc-material">
   <div class="row">
  

     <div class="col-sm-3">
 <div class="blc-vignette relative">
   <div class="vignette">
     <img width="25%" src="'.<?php echo img_url($oeuvre['couverture']);?>.'"></td>  
    </div>
  
   </div>

  </div>
 <div class="col-sm-9">
  
  <div class="bloccontainer">
  
   <div class="detntc-contentpro row-fluid">

   <div class="detntc-content">
  
    <span class="ntc-champ-label"> auteur:<?php echo $oeuvre['nomauteur'] ?> </span>
  
    <br>
    <span class="ntc-champ-label"> titre:<?php echo $oeuvre['titre'] ?> </span>
   <br>
   <span class="ntc-champ-label"> Editeur:<?php echo $oeuvre['nomediteur'] ?> </span>
  <br>
  <span class="ntc-champ-label"> Resume:<?php echo $oeuvre['resume'] ?> </span>


   </div>
    

   </div>


  </div>


 </div>

</div>
<div class="col-sm-12">
<div class="clearfix">


</div>
</div>
<br>
<br>

  <div class="col-sm-12">

   <div class="detntc-ligne-formfasicule nofilterfas nomarge">
   </div>

   <div class="bloc-ex bloc-ntc">
   <div>
   <h3 class="inline">Exemplaires</h3>
   <table class="table table-condensed">
    <thead>
      <tr>
    <th scope="col" id="coldmt_rsv"> <span class="sr-only"> réserver </span> </th>
     <th scope="col" id="coldmt_mediatheque">  mediatheque </th>
     <th scope="col" id="coldmt_espace">  espace </th>
     <th scope="col" id="coldmt_localisation">  localisation </th>
     <th scope="col" id="coldmt_cote">  cote </th>
     <th scope="col" id="coldmt_disponibilité">  disponibilité </th>
      </tr>
    </thead>
    <tbody>
  
   <?php foreach($lesdisponibilites as $undispo):
  echo '<tr class="sit1">
  <td headers="row1 coldmt_rsv"> 
  <div class="inlinebloc">
  '.anchor('Compte/Reservation/'.$undispo['idoeuvre'],'Reservé').'
  </div> 
 </td>

  <td headers="row1 coldmt_rsv">
  <div class="inlinebloc">
   '.$undispo['nom'].'
  </div> 
  </td>

  <td headers="row1 coldmt_rsv">
  <div class="inlinebloc">
   '.$undispo['nomespace'].'
  </div> 
  </td>

  <td headers="row1 coldmt_rsv">
  <div class="inlinebloc">
   '.$undispo['nomlocalisation'].'
  </div> 
  </td>
  
  
  <td headers="row1 coldmt_rsv">
  <div class="inlinebloc">
   '.$undispo['isbn'].'
  </div> 
  </td>

  <td headers="row1 coldmt_rsv">
  <div class="inlinebloc">
   '.$undispo['disponibilité'].'
  </div> 
  </td>


  </tr>'; endforeach ?>


    </tbody>

   </table>

   </div>

   </div>




  </div>

 <div class="col-sm-12">
</div>
<div class="col-sm-12">
</div>
  <div class="col-sm-12 blocfull-desc">
    <div class="bloc-enri bloc-desc" style="display: block;">
    <h3>Biographie</h3>
     <p>
       <?php echo $oeuvre['biographie']?>
     </p>

   </div>
    </div>
  </div>

</body>
</html>