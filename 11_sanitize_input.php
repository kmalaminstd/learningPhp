<?php
  /* --- Sanitizing Inputs -- */

  /*
    Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
  */

  if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // $name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
    // echo $age;
  }



?>


  <br><br>

  <!-- Pass data through a form -->
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <div>
  <label>Name: </label>
  <input type="text" name="name">
  </div>
  <br>
  <div>
      <label>Age:</label>
      <input type="text" name="age">
  <!-- <label>Password: </label>
  <input type="password" name="password"> -->
  </div>
  <br>
  <input type="submit" name="submit" value="Submit">
  </form>

  