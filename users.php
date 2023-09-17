<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
</head>
<body>
    <div>
        <br>
        <a href="index.php">Index Page</a>
        <a href="users.php">Users Page</a> <br><br>
    </div>

    
    <?php
    if(isset($_POST['submit'])){
    $username = $_POST['username'];
	$name = $_POST['name'];
	$sex = $_POST['sex'];

    switch($sex) {
        case('M'):
            $sex = "Male";
            break;
        case('F'):
            $sex = "Female";
            break;
        default:
            $sex = "N/A";
    }

     echo '<table class="table table-bordered">
                <tr>
                    <td>
                        Username: <label>'.$username.'</label>
                    </td>
                </tr>
                <tr>
                    <td> 
                        Name: <label>'.$name.'</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        Sex: <label>'.$sex.'</label>
                    </td>
                </tr>
    </table>';
    }
    ?>
</body>
</html>