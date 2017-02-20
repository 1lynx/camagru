<?php

namespace App;

class User_function {

    public function get_connexion() {
      $ret = ("<center><form method='post' action='?p=connexion_post' class='connexion'>
          <p>
                <label for='login'>login</label><br />
      	        <input type='text'
                          name='login'
                          size='30'
                          name : 'login '/>
      					<br /><br />
      	        <label for='password'>Mot de passe</label><br />
      	        <input type='password'
                          name='password'
                          size='30'
                          name : 'password'/>
      					<br /><br />
                <input type='submit' name='connexion' value='Connexion'>
      					<br /><br />
      					<a href='?p=inscription'>Vous Inscrire !</a>
          </p>
      </form></center>
      ");
      return $ret;
    }

    public function get_inscription() {
      $ret = ("<center><form method='post' action='?p=inscription_post' class='inscription'>
          <p>
                <label for='login'>login</label>
                <br />
      	        <input type='text' name='login' id='login' size='30' />
                <br /><br />
                <label for='email'>Email</label>
                <br />
      	        <input type='text' name='email' id='email' size='30' />
                <br /><br />
      	        <label for='password'>Mot de passe</label>
      	        <br />
      	        <input type='password'
                          name='password'
                          id='password'
                          size='30' />
                <br /><br>
                <label for='password_confirm'>Confirmez votre mot de passe</label><br />
      	        <input type='password'
                          name='password_confirm'
                          id='password_confirm'
                          size='30' />
                <br />
                <h4>Un mail de confirmation vous sera envoyé!</h4>
      	        <input type='submit' value='Valider' class='valider' />
          </p>
      </form><center>");
      return $ret;
    }


    public function get_admin() {
        $ret = ("<center><form method='post' action='?p=admin'>
          <p>
                <label> Tapez votre ancien mot de passe: </label> 
                <br />
                <input type='password' id='pwd' name='pwd'/> 
                <br /><br />
                <label> Confirmez votre ancien mot de passe: </label>
                 <br />
                <input type='password' id='confirm' name='confirm'/> 
                <br /> <br />
                <label> Tapez votre nouveau mot de passe: </label>
                 <br />
                <input type='password' id='new_pwd' name='new_pwd'/> 
                <br /> <br />
                <input type='submit' id='submit' name='submit' value='OK' /> 
                <br />
         </p>
    </form></center>");
    return $ret;
    }

}
?>
