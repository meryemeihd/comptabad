

<?php

//si on est authentifié 


//si on est pas authentifé formulaire de connexion
?>
   <!--
        
   <form action='/authentification/verification' method=post>
             <center><input type='text' id='loginUser' size=32 class='form-control loginconnect' placeholder='Pseudo' name='login' required></center>
            <center><input type='password' id='passwordUser' size='32' class='form-control passwordconnect' placeholder='******' name='mdp' required></center>
            <center><button type='submit' class='btn btn-primary connectbt'><i class='fa fa-connectdevelop fa-lg'  aria-hidden='true'></i>Se connecter </button></center>
        </form>  
   -->
    
    <form action='/contact/formulaire' method=post>
            <div id="wrapper"> 
                <div id="box">
                    <div class="header">
                    <h4> FORMULAIRE </h4>
                    </div>
                <h6> NOM </h6>
                <input type="text"  placeholder="Nom" name="nom">
                <h6> EMAIL </h6>
                <input type="text" placeholder="ex@mm.ff" name="mail">
                <h6> MESSAGE</h6>
                <input type="text" name="message" placeholder="votre message"> 
                <input type='submit'>
            </div>
            </div>
    </form>
    </body>
</html>



            
