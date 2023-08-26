<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>Business | New Requests</title>

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
                                    <h1 class="page-title w-text">New Request List</h1>
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
                                    <table id="myTable"
                                        class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="w30">&nbsp;</th>
                                                <th onclick="sortTable(0)">Business Name <i class="fa fa-level-up"></i>
                                                </th>
                                                <th onclick="sortTable(1)">Service Description <i class="fa fa-level-up"></i>
                                                </th>
                                                <th onclick="sortTable(2)">Locality <i class="fa fa-level-up"></i>
                                                </th>
                                                <th onclick="sortTable(3)">City <i class="fa fa-level-up"></i>
                                                </th>
                                                <th onclick="sortTable(4)">Mobile <i class="fa fa-level-up"></i>
                                                </th>
                                                <th>Action</th>
                                                
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
                                            </tr>
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
                                            </tr>
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
                                            </tr>
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
                                            </tr>
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
                                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#addtask"><i class="fa fa-plus"></i></button></td>
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

        <!-- Add New Task -->
        <div class="modal fade" id="addtask" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="title" id="defaultModalLabel">Add Task</h6>
                    </div>
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Customer Name" disabled>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Customer M-Code"
                                        value="565hhtrAA" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder=" Customer Description &amp; Reason"
                                        disabled></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control"
                                        placeholder=" Business Information &amp; Message"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option>Select Driver | Mechanics</option>
                                        <option>John Smith ID:D238824</option>
                                        <option>Claire Peters ID:D233524</option>
                                        <option>Allen Collins ID:D233324</option>
                                        <option>Cory Carter ID:MECH241324</option>
                                        <option>Rochelle Barton ID:MECH237724</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option>Select Status</option>
                                        <option>Accept</option>
                                        <option>Deny</option>
                                    </select>
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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <script src="assets/bundles/lib.vendor.bundle.js"></script>

        <script src="assets/bundles/counterup.bundle.js"></script>
        <script src="assets/bundles/knobjs.bundle.js"></script>
        <script src="assets/bundles/c3.bundle.js"></script>

        <script src="assets/js/core.js"></script>
        <script src="assets/js/page/project-index.js"></script>

        <script src="../css/table.js"></script>
</body>

</html>