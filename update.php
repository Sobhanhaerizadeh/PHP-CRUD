<?php

    require_once('dbconfig.php');  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update Record</title>
</head>
<body>  
    <?php
    // Update a Record !
        $id = $_REQUEST["id"];
        $sql = "SELECT `name` , `email` , `subject` , `message` FROM contact WHERE `id`=:id";
        $query = $connect->prepare($sql);
        $query->bindParam(":id" , $id , PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ);
    ?>
    <form method="POST">
        <div class="form-control">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $result->name ?>"/> <br/>
        <labe>Email</labe>
        <input type="email" name="email" class="form-control" value="<?php echo $result->email ?>" /> <br/>
        <label> Subject </label>
        <input type="text" name="subject" class="form-control" value="<?php echo $result->subject ?>"> <br/>
        <label>Message</label>
        <textarea name="message" rows="4" class="form-control" >
            <?php echo $result->message ?>
        </textarea> <br/>
        <button type="submit" class="btn btn-success" name="btnUpdate" onClick="return confirm('Are you sure to update this record?')">Update</button>
        <input type="reset" class="btn btn-warning" value="Reset"/>
        </div>
    </form>
</body>
</html>

<?php
    if (isset($_POST["btnUpdate"])){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message= $_POST['message'];
            $sql = "UPDATE contact SET `name`=:name, `email`=:email, `subject`=:subject, `message`=:message WHERE `id`=:id";
            $qu = $connect->prepare($sql);
            $qu->bindParam(":name" , $name , PDO::PARAM_STR);
            $qu->bindParam(":email" , $email , PDO::PARAM_STR);
            $qu->bindParam(":subject",  $subject , PDO::PARAM_STR);
            $qu->bindParam(":message" , $message , PDO::PARAM_STR);
            $qu->bindParam(":id" , $id , PDO::PARAM_STR);
            $qu->execute();
            echo "<script> alert('Your record has been updated!') </script>";
            echo "<script> window.location.href = 'messages.php' </script>";
    }

?>