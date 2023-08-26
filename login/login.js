var a = 3;
function verifyPassword() {
    a=3;
    var uname = document.getElementById("email").value;
    var pass = document.getElementById("passwd").value;

    if ((uname == "User" || uname == "user") && pass == "user@123") {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: uname + ' Login Successfully',
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            window.location.href = "../User/User_dashboard.php";

        })
        return false;
    } else if ((uname == "Business" || uname == "business") && pass == "business@123") {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: uname + ' Login Successfully',
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            window.location.href = "../Business/b-dashboard.php";

        })

    } else if ((uname == "Driver" || uname == "driver") && pass == "driver@123") {
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: uname + ' Login Successfully',
            showConfirmButton: false,
            timer: 1500
        }).then((result) => {
            window.location.href = "../Driver/d-dashboard.php";

        })

    } else {
        a= a-1;
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: a+' Login Faild',
            showConfirmButton: false,
            timer: 1500
        })

        if (a == 0) {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'You attempted 3 times try again after 1 hour',
            showConfirmButton: false,
            timer: 1500
        })

        document.getElementById("email").disabled = true;
        document.getElementById("passwd").disabled = true;

    }
    }
}
