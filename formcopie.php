<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>

    <form action="formcopie.php" method="get">
         <p><label for="civilite">Madame</label><input type="radio" name="civilite" id="civilite" checked>
         <label for="civilite">Monsieur</label><input type="radio" name="civilite" id="civilite"></p>
         <p><label for="nom">Nom</label><input type="text" name="name" id="name" value="<?php echo $_GET['name']??''; ?>"></p>
         <p><label for="prenom">Prénom</label><input type="text" name="surname" id="surname" value="<?php echo $_GET['surname']??''; ?>"></p>
         <p><label for="email">Email</label><input type="text" name="email" id="email" value="<?php echo $_GET['email']??''; ?>"></p>

        <p><input type="submit" value="ENVOYER"></p>
    </form>

     <?php
        $answer = '';
        if (!empty($_GET['civilite']) 
         && !empty($_GET['name']) 
         && !empty($_GET['surname']) 
         && !empty($_GET['email']))
        {
           
            if (strlen($_GET['name'])>= 3)
            {
                if (!empty($_GET['email'])){
                        //  if (stristr($_GET['email'],'@'))
                        $pattern = '/[a-z A-Z]+@[a-z A-Z]+\.[a-z A-Z]+/';
                        if (preg_match($pattern, $_GET['email']))
                            
                {
                    
                    $answer = (strtolower($_GET['email'])).' <br>'.(ucfirst($_GET['name'])).' <br>'.(ucfirst($_GET['surname']));
                }else $answer = 'Adresse mail invalide';
            }  
            }
            else $answer = 'Veuillez remplir correctement le formulaire';
        }
    



        
      
       
?>
 <p><?php echo $answer ?></p>



   

</body>

</html>