<?php
  session_start();

  // Flash message helper
  // EXAMPLE - flash('register_success', 'You are now registered');
  // DISPLAY IN VIEW - echo flash('register_success');
  function flash($last_name = '', $message = '', $class = 'alert alert-success'){
    if(!empty($last_name)){
      if(!empty($message) && empty($_SESSION[$last_name])){
        if(!empty($_SESSION[$last_name])){
          unset($_SESSION[$last_name]);
        }

        if(!empty($_SESSION[$last_name. '_class'])){
          unset($_SESSION[$last_name. '_class']);
        }

        $_SESSION[$last_name] = $message;
        $_SESSION[$last_name. '_class'] = $class;
      } elseif(empty($message) && !empty($_SESSION[$last_name])){
        $class = !empty($_SESSION[$last_name. '_class']) ? $_SESSION[$last_name. '_class'] : '';
        echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$last_name].'</div>';
        unset($_SESSION[$last_name]);
        unset($_SESSION[$last_name. '_class']);
      }
    }
  }

  function isLoggedIn(){
    if(isset($_SESSION['id_user'])){
      return true;
    } else {
      return false;
    }
  }
