<?php

    /* ------------ Sessions ------------ */

    /*
    Sessions are a way to store information (in variables) to be used across multiple pages.
    Unlike cookies, sessions are stored on the server.
    */

    session_start();

    if(isset($_POST['submit'])){
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

        $password = $_POST['password'];

        echo $username;
        echo $password;
    
        if($username == 'alamin' && $password == 'password'){
            $_SESSION['username'] = $username;
            header('Location: /learnphptravm/extras/dashboard.php');
        }else{
            echo "Incorrect login";
            echo '<a href="/learnphptravm/13_sessions.php">Home</a>';
        }
      }
    
    
    
?>
    
    
      <br><br>
    
      <!-- Pass data through a form -->
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      <div>
      <label>Username: </label>
      <input type="text" name="username">
      </div>
      <br>
      <div>
          <!-- <label>Age:</label>
          <input type="text" name="age"> -->
      <label>Password: </label>
      <input type="password" name="password">
      </div>
      <br>
      <input type="submit" name="submit" value="Submit">
      </form>
