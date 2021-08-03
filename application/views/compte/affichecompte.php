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
</head>

<body>
    <div id="content_link">
  
     <div id="colctre">
      
      <main role="main">
    
      <div class="page-header">

      <h2>Mon Compte</h2>


      </div>

    <div class="clearfix">
    </div>
    <ul class="nav nav-tabs">
     <li class="active"> 
     <a id="panel-1tab" href="" data-toggle="tab" aria-controls="panel-1" aria-expanded="true">Coordonnées</a>

     </li>
     <li class="active"> 
     <a id="panel-2tab" href="" data-toggle="tab" aria-controls="panel-2" aria-expanded="true">Pret-Reservation</a>
     </li>
    </ul>
   
    <div class="tab-content" id="tabDynformContent">

      <div id="panel-1" class="tab-pane  active">
          <table class="table coordonnées">
          <tbody>
         <tr class="dataligne">
          <td>
              <label class="fiche-lib" for="lbl_34"> NOM </label>

          </td>
          <td>
          <?php echo $Compte['prenom']?>
          
          </td>
          <td>
          <label class="fiche-lib" for="lbl_35"> PRENOM </label>
          </td>
          <td>
          <?php echo $Compte['nom']?>

          </td>
         </tr>

         <tr class="dataligne">
  
          <td>
        <label class="fiche-lib" for="lbl_36"> ADRESSE 1 </label>
          </td>
      
          <td>
          <?php echo $Compte['adresse']?>
          </td>
         <td>
        <label class="fiche-lib" for="lbl_37"> Adresse 2 </label>
          </td>
          <td> 

          </td>
         </tr>

         <tr class="dataligne">
         <td>
        <label class="fiche-lib" for="lbl_38"> code postal </label>
          </td>
        <td>
        <?php echo $Compte['Codepostal']?>
        </td>
        <td>
        <label class="fiche-lib" for="lbl_39"> Ville </label>
          </td>
          <td>
          <?php echo $Compte['ville']?>
            </td>
         </tr>

          <tr class="dataligne">
          <td>
            <label class="fiche-lib" for="lbl_40"> Telephone </label>
          </td>
          
          <td> 
          <?php echo $Compte['telephone']?>
          </td>

           
         </tr>


          <tr class="dataligne">

          <td>
            <label class="fiche-lib" for="lbl_41"> né le </label>
          </td>
          <td>
          <?php echo $Compte['dateNaissance']?>
          </td>

            <td>
            <label class="fiche-lib" for="lbl_42"> Email </label>
          </td>
        <td>
        <?php echo $Compte['mail']?>
        </td>

        </tr>


          </tbody>

          </table>
      </div>  

      <div id="panel-2" class="tab-pane">
          <table class="table coordonnées">
           <tbody>
           <tr class="dataligne">
           <td> <label class="fiche-lib" for="lbl_43"> Nombre total de prêts </label> </td>
            <td> <?php echo $nbpret ?> </td>
           </tr>
           <tr class="dataligne">
           <td> <label class="fiche-lib" for="lbl_43">Reservation en attente  </label> </td>
           <td> <?php echo $nbattente ?> </td>
           </tr>

           <tr class="dataligne">
           <td> <label class="fiche-lib" for="lbl_43">Reservation en disponible </label> </td>
           <td> <?php echo $nbdisponible?> </td>
           </tr>
           </tbody>

          </table>
      </div>  




    </div>
      </main>


    </div>




</body>

<Html>