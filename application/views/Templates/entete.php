<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> bibliotheque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo css_url('Entete'); ?>">
    <script>
 
    
    
    
    
     </script>
</head>
<body>
<nav class="navbar">
<div class="container-fluid">
<ul class="nav navbar-nav">
<?php if($this->session->profil==null) : ?>
    <li><a href="<?php echo site_url('Visiteur/Accueil') ?>">Accueil</a></li>
    <li><a id="myBtn">Connexion</a></li>
       <?php endif; ?>

       <?php if ($this->session->profil=='C') : ?>>
        <li><a href="<?php echo site_url('Visiteur/Accueil') ?>">Accueil</a></li>
        <li><a href="<?php echo site_url('Compte/afficheCompte') ?>">Compte</a></li>
        <li class="active  navbar-text"><a href="<?php echo site_url('Deconnexion') ?>">Se déconnecter</a>&nbsp;&nbsp;</li>
        <?php endif;?>
    </ul>
</div>
</nav>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" id="close">&times;</span>
      <h2>Connexion</h2>
    </div>
    <div class="modal-body">
        <?php
        echo  form_open('Compte/connexion');
        echo form_label('Mail', 'lbxMail').'<BR>';
        echo form_input(array('name'=>'txtMail','value'=>'','id'=>'mail','required'=>'required','type'=>'email')).'<BR>';
        echo form_label('Mdp', 'lbxMdp').'<BR>';
        echo form_password(array('name'=>'txtMdp','value'=>'','id'=>'mdp', 'minlength'=>"1",'required'=>'required')).'<BR>';
        echo form_submit(array('name'=>'BtnConnexion','value'=>'Connexion','class'=>"btn btn-primary",'id'=>'Connexion'));
        
        echo form_close();
        
        
        ?>
    </div>
  </div>

</div>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
    span= modal.style.display = "none";
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



</script>




</body>


</html>