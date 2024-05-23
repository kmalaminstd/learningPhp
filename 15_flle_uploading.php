<?php

    $allowed_ext = array('jpg', 'png', 'jpeg', 'gif');

    if(isset($_POST['submit'])){
        
        if(!empty($_FILES['upload']['name'])){
            // print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_temp = $_FILES['upload']['tmp_name'];

            // targeted directory
            $target_directory = "uploads/$file_name";

            // get file ext
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            // echo $file_ext;
            // validate file data
            if(in_array($file_ext, $allowed_ext)){
                // validate file size
                if($file_size <= 1000000){
                    move_uploaded_file($file_temp, $target_directory);

                    $message = '<p style="color: lightgreen;">File uploaded successfully</p>';
                }else{
                    $message = '<p style="color: red;">File size exceed</p>';
                }
            }else{
                $message = '<p style="color: red;">File type is not allowed</p>';
            }

        }else{
            $message = '<p style="color: red;">Please choose a file</p>';
        }
        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $message ?? null ?>
    <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
        ); ?>" method="post" enctype="multipart/form-data">
        
            <label for="upload">Select an image to upload:</label><br>
            <input type="file" name="upload"> <br> 
            <input type="submit" value="Submit" name="submit">
        

    </form>
</body>
</html>