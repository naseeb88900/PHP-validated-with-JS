<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/update.css" />
</head>

<body >
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="update_process.php" method="post">
                <h2 class="text-center">
                    <strong>Update Your Information</strong>
                </h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" value="<?php echo $_SESSION["user_name"]?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" value="<?php echo $_SESSION["user_email"]?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" value="<?php echo $_SESSION["user_password"]?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="phone" value="<?php echo $_SESSION["user_phone"]?>" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="number" name="age" value="<?php echo $_SESSION["user_age"]?>" />
                </div>
                <div class="form-group">
                    <input type="submit" name="update" value="Update" />
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>