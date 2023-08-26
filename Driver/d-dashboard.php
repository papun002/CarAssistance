<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>Driver | Mechanics Dashboard</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Plugins css -->
    <link rel="stylesheet" href="assets/plugins/charts-c3/c3.min.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme1.css" />

    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        <?php include 'components/top_nav.php'; ?>

        <?php include 'components/leftSide_bar.php'; ?>

        <div class="page">
            <div class="section-body mt-3">
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <h4>Welcome Driver &amp; Mechanics!</h4>
                                <small>Have a good work and good day!</a></small>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix row-deck">
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Incomming Task</h3>
                                </div>
                                <div class="card-body bg-g">
                                    <h5 class="number mb-0 font-32 counter">2</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Task Completed</h3>
                                </div>
                                <div class="card-body bg-o">
                                    <h5 class="number mb-0 font-32 counter">17</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ongoing Task</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="number mb-0 font-32 counter">1</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Feedback List</h3>
                                </div>
                                <div class="card-body bg-t">
                                    <h5 class="number mb-0 font-32 counter">25</h5>
                                    <span class="font-12 w-text">Good:<h5 class="number mb-0 font-15 counter">15</h5>
                                        </span>
                                    <span class="font-12 w-text">Bad:<h5 class="number mb-0 font-15 counter">10</h5>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-3 col-md-6">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#addtask" class="a"><div class="card">
                                <div class="card-header">
                                    <h3 class="card-title b-text">Currently Working Task</h3>
                                </div>
                                <div class="card-body b-text bg-g">
                                    <h5 class="number mb-0 font-16">Customer Name: <span class="font-15">Rohit Kumar Rana</span></h5>
                                    <h5 class="number mb-0 font-16 mt-2">Status: <span class="font-15">Accepted</span></h5>
                                    <span class="font-12 mt2">If You Completed Task then Click here to Update!</span>
                                    
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Add New Task -->
     <div class="modal fade" id="addtask" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="title" id="defaultModalLabel">Add Task</h6>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder=" Customer Description &amp; Reason"
                                    disabled></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control"
                                    placeholder=" Driver or Mechanics Information &amp; Message" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <select class="form-control show-tick">
                                    <option>Select Status</option>
                                    <option>Completed</option>
                                    <option>Reject</option>
                                    <option>Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-info">Send OTP</button>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Enter OTP"> 
                                <span class="font-12 ml-2">OTP verify! <i
                                    class="fe">&checkmark;</i></span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sumbit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/counterup.bundle.js"></script>
    <script src="assets/bundles/knobjs.bundle.js"></script>
    <script src="assets/bundles/c3.bundle.js"></script>

    <script src="assets/js/core.js"></script>
    <script src="assets/js/page/project-index.js"></script>
</body>

</html>