<!-- NOW THIS IS THE BACKEND LOGIN  -->
<?php
session_start();
include('./admin/incs/connection.php');
if(isset($_POST['submitt']) && $_POST['submitt'] == 'sub') {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    // SQL query to find the user by username
    $sql = "SELECT * FROM admin_login WHERE user_name = '$user_name' AND user_password = '$user_password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // If a user is found
    if ($num == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: admin/index.php"); // Redirect to admin page
        exit;
    } else {
        $loginError = "Invalid username or password!"; // Set error message
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/admin_login.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- sweet alert message | -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php require_once('incs/navbar.php') ?>
    <div class="main-w3layouts wrapper">
        <h1 style="color:white;">Login Admin</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="login.php" method="POST">
                    <input class="text w3lpass" type="text" name="user_name" placeholder="Username" required="">
                    <input class="text w3lpass" type="password" name="user_password" placeholder="Password" required="">
                    <button type="submit" class="btn btn-primary" name="submitt" value="sub">Login</button>
                </form>
            </div>
        </div>
    </div>
     <!-- jab hamray pass message username or password correct na hn to uay error show hnga swwet alert messgae main -->
     <?php if (!empty($loginError)) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: '<?php echo $loginError; ?>',
                confirmButtonColor: '#00246B'
            });
        </script>
    <?php endif; ?>
</body>

</html>