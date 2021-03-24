<?php
    require_once("dbconfig.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <table class="table table-dark table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
            </tr>
        </thead>
        <?php
            $sql = "SELECT `id` , `name` , `email` , `subject` , `message` , `created_at`FROM contact WHERE `id` >= 0";
            $query = $connect->prepare($sql);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $id = 0;
            if ($query->rowCount() > 0 ){
                foreach($results as $result){
                    ++$id;
                ?>
            


        
        <tr>
            <td style="color:#ccffbd;"><?php echo htmlentities($id) ?> </td>
            <td><?php echo htmlentities($result->name) ?></td>
            <td><?php echo htmlentities($result->email) ?></td>
            <td><?php echo htmlentities($result->subject) ?></td>
            <td><?php echo htmlentities($result->message) ?></td>
        </tr>
        <?php
                }
            }
        ?>
    </table>
</body>
</html>