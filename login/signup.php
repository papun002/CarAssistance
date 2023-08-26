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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>

</head>

<body class="font-montserrat">

    <div class="auth">
        <div class="auth_left">
            <div class="card">
                <div class="text-center mb-2">
                    <a class="header-brand"><i class="fa fa-car brand-logo"></i></a>
                </div>
                <div class="card-body">
                    <div class="card-title">Sign Up to your account</div>
                    <form method="post" action="signup.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                                placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="email" aria-describedby="emailHelp"
                                placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password"
                                required>
                            <small class="mt-1" id="message" style="display: none; color: red;"><i
                                    class="fa fa-warning"></i> Password must content A-Z and a-z and Secical
                                Character and Number.. </small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="cpwd" id="cpwd"
                                placeholder="Enter Re-Password" required>
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" />
                                <span class="custom-control-label">Remember me</span>
                            </label>
                        </div>

                        <div class="form-footer">
                            <input type="submit" name="submit" class="btn btn-primary btn-block"
                                onclick="verifyPassword()" value="Sign in">
                        </div>
                    </form>
                </div>
                <div class="text-center text-muted">
                    Have account ? <a href="loginpage.php">Login</a>
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
        var myInput = document.getElementById("pwd");
        var message = document.getElementById("message");
        var pass = document.getElementById("pwd").value;
        var cpass = document.getElementById("cpwd").value;


        myInput.onkeyup = function () {
            var lowerCaseLetters = /[a-z]/g;
            var upperCaseLetters = /[A-Z]/g;
            var numbers = /[0-9]/g;
            if (!myInput.value.match(lowerCaseLetters && upperCaseLetters && numbers)) {
                document.getElementById("message").style.display = "block";
            } else {
                document.getElementById("message").style.display = "none";
            }
        }
    </script>
</body>

</html>

<?php
include('db.php');

if(isset($_POST['submit'])){
    $bname = $_POST['name'];
    $uname = $_POST['username'];
    $bemail = $_POST['email'];
    $password = $_POST['pwd'];
    $pass = md5($password);
    $repassword = $_POST['cpwd'];

    if( !($password ==  $repassword)){
        ?>
    <script>
    Swal.fire({
        position: 'top-end',
        icon: 'info-circle',
        text: 'Password does not match',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
    <?php
    }else{
        
        $sql = "INSERT INTO `b_car` values ('','$bname', '$bemail', '$uname','$pass')";
        $result = mysqli_query($con,$sql);
        if($result){
            ?>
    <script>
    Swal.fire({
        position: 'top-end',
        icon: 'Success',
        text: 'Sign Up Successfully',
        showConfirmButton: false,
        timer: 1500
    }).then((result) => {
        window.location.href = "loginpage.php";
    })
    </script>
    <?php
        }
    }
}
?>