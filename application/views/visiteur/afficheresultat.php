<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo css_url('letest'); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>

   
  
  </script>
</head>
<body>
 <div class="table-responsive">

    <table class='table'>

       <thead>
       <tr>
        <th> couverture </th>
        <th> description </th>
        </tr>
       </thead>

      <tbody>
      <?php foreach($lesoeuvres as $unoeuvre):
        echo '<tr>
        <td><img width="25%" src="'.img_url($unoeuvre['couverture']).'"></td>
        <td>'.anchor('Visiteur/afficheoeuvre/'.$unoeuvre['idoeuvre'],$unoeuvre['titre']).'<p/> 
        <br/> Titre   :'. anchor('Visiteur/afficheoeuvre/'.$unoeuvre['idoeuvre'],$unoeuvre['titre']).'
        <br/> Auteur  :'.anchor('Visiteur/afficheauteur/'.$unoeuvre['nomauteur'],$unoeuvre['nomauteur']).'
        <br/>Editeur :'.anchor('Visiteur/afficheEditeur/'.$unoeuvre['nomediteur'],$unoeuvre['nomediteur']).'
        <br/>date editions :'.$unoeuvre['parution'].'</td> 
        </tr>';
      endforeach ?>

      </tbody>

    </table>

    <p> <?php echo $lienspagination; ?> </p>



 </div>


</body>
</html>