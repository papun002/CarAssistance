<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>::User::Dashboard</title>

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
                    <div class="row ">
                        <div class="col-md-12 section-body bg-danger ">
                            <div class="page-header">
                                <div class="left">
                                    <h1 class="page-title w-text"> Near OnRoad Services</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-4 col-sm-6">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-6">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-block"
                                                title="">Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="w30">&nbsp;</th>
                                                <th>Sl No</th>
                                                <th>Business Name</th>
                                                <th>Service Description</th>
                                                <th>Locality</th>
                                                <th>City</th>
                                                <th>Mobile</th>
                                                <th>Book</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><a href="#">1</a></td>
                                                <td><span>JK Tyres and Repair</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Punjab</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><button class="btn btn-primary btn-block"
                                                        onclick="window.location.href='user-request.php';">Book</button>
                                                </td>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><a href="#">1</a></td>
                                                <td><span>JK Tyres and Repair</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Punjab</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><button class="btn btn-primary btn-block"
                                                        onclick="window.location.href='user-request.php';">Book</button>
                                                </td>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><a href="#">1</a></td>
                                                <td><span>JK Tyres and Repair</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Punjab</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><button class="btn btn-primary btn-block"
                                                        onclick="window.location.href='user-request.php';">Book</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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