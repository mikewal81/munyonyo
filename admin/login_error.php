<?php
 require('../libs/login_check.php');

 $error = $_GET['error'];
 $user_name = $_GET['user_name'];
 $password = $_GET['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munyonyo Church Choir</title>
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/admin-style.css">
</head>
<body class="form-page">
<div class="container">
    <div class="form-wrapper">

        <form class="form" action="../libs/post_login.php" method="post" enctype="multipart/form-data">
            <h2 class="form-title">Munyonyo Parish Church Choir</h2><br><br><br>
            <h3><span class="form-error"><?php echo $error ?></span></h3><br>
            <label class="form-label" for="user_name">User Name : </label>
            <input type="text" id="user_name" name="user_name" class="form-control"  placeholder="<?php echo $user_name ?>" required><br>
            <label class="form-label" for="password">Password (12 characters maximum) : </label>
            <input type="password" inputmode="numeric" maxlength="12" placeholder="<?php echo $password ?>" id="password" name="password" class="form-control" required><br>
            <input type="submit" class="form-control btn-green" value="submit">
            <a href="../home.php" class="form-link">Back to Home Page</a>
        </form>
    </div>
</div>
</body>
</html>

