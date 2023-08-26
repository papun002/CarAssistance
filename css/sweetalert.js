// Request sent
function myfunctionRequest() {
    Swal.fire(
        'Request Sent',
        'Please wait for response..',
        'success'
      ).then((result)=>{
        window.location.href="../User/User_dashboard.php";
      })
}

//   update
function myfunctionUpdate() {
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Update Successfully',
    showConfirmButton: false,
    timer: 1500
  }).then((result)=>{
    window.location.href="../User/user-profile.php";
  })
}

//   Request Registered
function myFunctionReqRes() {
    swal("Request Registerd!", "Driver | Mechanic Notify Soon!", "success");
}

//   save
function myFunctionSave() {
    swal("saved!", "", "success");
}

//delete
function myFunctionDelete(){
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Poof! Your imaginary file has been deleted!", {
            icon: "success",
          });
        } else {
          swal("Your imaginary file is safe!");
        }
      });
}