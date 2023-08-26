<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>Business | Requested List</title>

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
                                    <h1 class="page-title w-text">Business Requested List</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="col-lg-1 col-md-3 col-sm-2">
                                                    <div class="form-group">
                                                        <!--		Show Numbers Of Rows 		-->
                                                        <select class="form-control" name="" id="maxRows">
                                                            <option value="5">5</option>
                                                            <option value="10">10</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                            <option value="5000">Show All</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <div class="input-group">
                                                        <input type="text" id="myInput" onkeyup="myFunction()"
                                                            class="form-control search show-tick"
                                                            placeholder="Search for names..">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap"
                                        id="myTable">
                                        <thead>
                                            <tr>
                                                <th class="w30"><label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label></th>
                                                <th onclick="sortTable(0)">Customer Name <i class="fa fa-level-up"></i>
                                                </th>
                                                <th onclick="sortTable(1)">Service Desc <i class="fa fa-level-up"></i>
                                                </th>
                                                <th onclick="sortTable(2)">Locality <i class="fa fa-level-up"></i></th>
                                                <th onclick="sortTable(3)">City <i class="fa fa-level-up"></i></th>
                                                <th onclick="sortTable(4)">Mobi <i class="fa fa-level-up"></i></th>
                                                <th onclick="sortTable(5)">Status <i class="fa fa-level-up"></i></th>
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
                                                <td><span>JK Tyres and Repair</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Punjab</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><span class="tag tag-danger">Done</span></td>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><span>JK Tyres and Repair</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Punjab</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><span class="tag tag-success">Reject</span></td>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><span>JK Tyres and Repair</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Punjab</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><span class="tag tag-default">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">&nbsp;</span>
                                                    </label>
                                                </td>
                                                <td><span>Ask</span></td>
                                                <td><span>Tyre and Reparing</span></td>
                                                <td><span>Udala</span></td>
                                                <td><span>Phagwara</span></td>
                                                <td>885663555</td>
                                                <td><span class="tag tag-default">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--		Start Pagination -->
                                <div class='pagination-container mt-3'>
                                    <nav>
                                        <ul class="pagination p-table">

                                            <li data-page="prev">
                                                <span class="sr-only1">
                                                    <i class="fa fa-chevron-left"></i> <span
                                                        class="sr-only sr">(current)
                                                    </span></span>
                                            </li>
                                            <!--	Here the JS Function Will Add the Rows -->
                                            <li data-page="next" id="prev">
                                                <span class="sr-only1"> <i class="fa fa-chevron-right"></i> <span
                                                        class="sr-only sr">(current)</span></span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="assets/bundles/lib.vendor.bundle.js"></script>

    <script src="assets/bundles/counterup.bundle.js"></script>
    
    <script src="assets/bundles/c3.bundle.js"></script>

    <script src="assets/js/core.js"></script>

    <script src="../css/table.js"></script>
</body>

</html>