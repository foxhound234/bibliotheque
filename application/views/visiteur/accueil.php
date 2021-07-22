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
    <script src="main.js"></script>
</head>
<body>
<div class='form-group'>
<?php
$options = array(
  'tous'=>'tout',
  'auteur'=> 'auteur',
  'titre'=> 'Titre');

echo  form_open('Visiteur/Accueil');

echo form_input(array('name'=>'txtRecherche','value'=>'','pattern'=>'[a-zA-Z]*','required'=>'required','class'=>'form-control'));
echo form_dropdown('filtre', $options,'Filtre');
echo form_submit(array('name'=>'Btnrecherche','value'=>'recherché','class'=>"btn btn-primary"));

echo form_close();
?>
</div>
</body>
</html>