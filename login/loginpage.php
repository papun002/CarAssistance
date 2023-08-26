<?php
session_start();
require 'db.php';

if (isset($_SESSION['b_logid'])) {
    Header("Location: ../Business/b-dashboard.php");
    echo "<script>
    window.location.href = '../Business/b-dashboard.php';
        </script>";
}else{
?>

<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>Login</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme1.css" />

</head>

<body class="font-montserrat">

    <div class="auth">
        <div class="auth_left">
            <div class="card">
                <div class="text-center mb-2">
                    <a class="header-brand"><i class="fa fa-car brand-logo"></i></a>
                </div>
                <div class="card-body">
                    <div class="card-title">Login to your account</div>
                    <form method="post" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" name = "username" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
                        <div class="form-group">
                             <label class="form-label">Password<a href="forgot-password.html" class="float-right small">Forgot password ?</a></label>
                            <input type="password" class="form-control" name = "password" id="passwd" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-label">Remember me</span>
                            </label>
                        </div>

                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block" name= "submit" id="login"
                                title="">Sign
                                in</button>
                        </div>
                    </form>
                </div>
                <div class="text-center text-muted">
                    Don't have account yet? <a href="signup.php">Sign up</a>
                </div>
            </div>
        </div>
        <div class="auth_right full_img"></div>
    </div>

    <!-- Sweetalert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
    <script src="../css/sweetalert.js"></script>

    <script src="assets/bundles/lib.vendor.bundle.js"></script>
    <script src="assets/js/core.js"></script>

    <script>
        // var a = 5;
        // function verifyPassword() {
        //     var uname = document.getElementById("email").value;
        //     var pass = document.getElementById("passwd").value;

        //     if ((uname == "User" || uname == "user") && pass == "user@123") {
        //         Swal.fire({
        //             position: 'top-end',
        //             icon: 'success',
        //             title: uname + ' Login Successfully',
        //             showConfirmButton: false,
        //             timer: 1500
        //         }).then((result) => {
        //             window.location.href = "../User/User_dashboard.php";

        //         })
        //     } else if ((uname == "Driver" || uname == "driver") && pass == "driver@123") {
        //         Swal.fire({
        //             position: 'top-end',
        //             icon: 'success',
        //             title: uname + ' Login Successfully',
        //             showConfirmButton: false,
        //             timer: 1500
        //         }).then((result) => {
        //             window.location.href = "../Driver/d-dashboard.php";

        //         })

        //     } else if ((uname == "Business" || uname == "business") && pass == "business@123") {
        //         Swal.fire({
        //             position: 'top-end',
        //             icon: 'success',
        //             title: uname + ' Login Successfully',
        //             showConfirmButton: false,
        //             timer: 1500
        //         }).then((result) => {
        //             window.location.href = "../Business/b-dashboard.php";

        //         })
        //     }else {
        //         a--;
        //         Swal.fire({
        //             position: 'top-end',
        //             icon: 'error',
        //             title: ' Login Faild',
        //             text: a + ' More You have',
        //             showConfirmButton: false,
        //             timer: 1500
        //         })
        //         if (a == 0) {
        //             Swal.fire({
        //                 position: 'top-end',
        //                 icon: 'error',
        //                 title: 'You attempted 3 times try again after 1 hour',
        //                 showConfirmButton: false,
        //                 timer: 1500
        //             })

        //             document.getElementById("email").disabled = true;
        //             document.getElementById("passwd").disabled = true;
        //             document.getElementById("login").disabled = true;
        //         }
        //     }
        // }
    </script>



<?php
if (isset($_POST['submit'])){
    $uname = $_POST['username'];
    $passwd = $_POST['password'];
    $pass = md5 ($passwd);

    $sql = "SELECT * FROM `b_car` where `b_user` = '$uname'; ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result )>0){
        $row=mysqli_fetch_assoc($result);
        $sql1 = "SELECT `b_pass` FROM `b_car` where `b_pass` = '$pass'; ";
        $result1 = mysqli_query($con,$sql1);
            if(mysqli_fetch_array($result1)>0){
                $b_id = $row['b_id'];
                $_SESSION['b_logid'] = $row['b_id'];
                $_SESSION['b_name'] = $row['b_name'];
                $_SESSION['b_user'] = $row['b_user'];
                // next page script 
                header("location: ../Business/b-dashboard.php");
                echo "<script> window.location.href = '../Business/b-dashboard.php'; </script>";   
                exit();
            }else{
            ?>
            <script>
            Swal.fire({
                position: 'top-end',
                text: 'Incorrect Password',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                window.location.href = "loginpage.php";
            })
            </script>
            <?php
        }

    }else{
        ?>
            <script>
            Swal.fire({
                position: 'top-end',
                text: 'Account doesnt exits',
                showConfirmButton: false,
                timer: 1500
            }).then((result) => {
                window.location.href = "loginpage.php";
            })
            </script>
            <?php

    }
   
}

?>

</body>
</html>
<?php
}
?>