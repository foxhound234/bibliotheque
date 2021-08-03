<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo css_url('Accueil'); ?>">
  <script>
$(document).ready(function(){

 $('#search-oeuvre').keyup(function() 
 {
  txtRecherche = document.getElementById("search-oeuvre").value;
  txtfiltre= document.getElementById("txtfiltre").value;
  donnes=JSON.stringify(txtRecherche,txtfiltre);
   
$.ajax({ 
           url:'Rechercheajax',
           Type: 'POST',
           data: {txtRecherche:txtRecherche,txtfiltre:txtfiltre},
           error: function() {
              alert(txtfiltre);
           },
           success: function(data) {
             var test=data.length;
             

             alert(test);
             
                

                 
           }
        });
    
        
     
   
   
 })
 


})
  

  </script>
</head>
<body>

<h1> La Bibliotheque de Saint brieuc Agglomération</h1>
<div class='form-group'>
<?php

$options = array(
  'tous'=>'tout',
  'auteur'=> 'auteur',
  'titre'=> 'Titre');

echo  form_open('Visiteur/Accueil');

echo form_input(array('name'=>'txtRecherche','value'=>'','pattern'=>'[a-zA-Z]*','id'=>'search-oeuvre','required'=>'required'));
echo form_dropdown('filtre', $options, '', 'class="my_class" id="txtfiltre"');
echo form_submit(array('name'=>'Btnrecherche','value'=>'recherché','class'=>"btn btn-primary"));

echo form_close();

?>
</div>
<div style="margin-top:20px">
  <div id="result-search"></div>
 </div>

 <?php echo 'eee';?>
 <?php if ($Erreur!=null) {?>
    <script>
    alert(<?php echo'<h1>Erreur de Connexion</h1>';?>)
    </script>
 <?php }?>
 
</body>
</html>