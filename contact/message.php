<?php require_once '../menu.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contactez-Nous!</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    
    
    <body>
        
       <div class="container">
            <div class="divider"></div>
            <div class="heading">
                <h2 style="text-transform: uppercase; font-weight: bold; color: #fff;">Contactez-nous</h2>
            </div>
                
           <div class="row">
               <div class="col-lg-10 col-lg-offset-1">
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="firstname">Prénom <span class="red">*</span></label>
                                <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name">Nom <span class="red">*</span></label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email <span class="red">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" placeholder="Votre Email">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone">Téléphone</label>
                                <input id="phone" type="tel" name="phone" class="form-control" placeholder="Votre Téléphone">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <label for="message">Message <span class="red">*</span></label>
                                <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"></textarea>
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-12">
                                <p class="red"><strong>*Ces informations sont requises</strong></p>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="button1">Envoyer</button>
                            </div>    
                        </div>
                    </form>
                </div>
           </div>
        </div>
        <br><br>

        <?php require_once '../footer.php'; ?>     
    </body>

</html>