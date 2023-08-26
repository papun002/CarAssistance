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
                                    <h1 class="page-title w-text"> New Tasks List</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade show active" id="list" role="tabpanel">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="table-responsive" id="users">
                                        <table
                                            class="table table-hover table-vcenter text-nowrap table_custom border-style list">
                                            <thead>
                                                <th>&nbsp;</th>
                                                <th>Name</th>
                                                <th>Mobile No</th>
                                                <th>Pickup Address</th>
                                                <th>Service</th>
                                                <th>&nbsp;</th>
                                            </thead>
                                            <tbody>
                                                <tr class="">
                                                    <td class="hidden-xs">
                                                        <a href="javascript:void(0);" class="mail-star love"><i
                                                                class="fa fa-heart"></i></a>
                                                    </td>
                                                    <td>
                                                        <div class="from"><a href="javascript:void(0);">Sara Hopkins</a>
                                                        </div>
                                                        <div class="text-muted">C-Code: 775gffhgfuBy</div>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <div class="text-muted">+91 8567937738</div>
                                                    </td>
                                                    <td class="hidden-sm">
                                                        <div class="text-muted">Phagwara, Punjab</div>
                                                    </td>
                                                    <td>
                                                        <div class="text-muted">Toyota Car Ac Leakage</div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Phone"><i
                                                                class="fa fa-phone"></i></a>
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="modal" data-target="#addtask"><i
                                                                class="fa fa-envelope"></i></a>
                                                        <a class="btn btn-sm btn-link hidden-xs js-sweetalert"
                                                            data-type="confirm" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Delete"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class="hidden-xs">
                                                        <a href="javascript:void(0);" class="mail-star active"><i
                                                                class="fa fa-star"></i></a>
                                                    </td>

                                                    <td>
                                                        <div class="from"><a href="javascript:void(0);">Andrew
                                                                Patrick</a></div>
                                                        <div class="text-muted">C-Code: ubbsCy78</div>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <div class="text-muted">+91 8567937738</div>
                                                    </td>
                                                    <td class="hidden-sm">
                                                        <div class="text-muted">Phagwara, Punjab
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-muted">Toyota Car Ac Leakage</div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Phone"><i
                                                                class="fa fa-phone"></i></a>
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="modal" data-target="#addtask"><i
                                                                class="fa fa-envelope"></i></a>
                                                        <a class="btn btn-sm btn-link hidden-xs js-sweetalert"
                                                            data-type="confirm" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Delete"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class="hidden-xs">
                                                        <a href="javascript:void(0);" class="mail-star"><i
                                                                class="fa fa-star"></i></a>
                                                    </td>

                                                    <td>
                                                        <div class="from"><a href="javascript:void(0);">Claire
                                                                Peters</a></div>
                                                        <div class="text-muted">C-Code: nnhhg667DT5</div>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <div class="text-muted">+91 8567937738</div>
                                                    </td>
                                                    <td class="hidden-sm">
                                                        <div class="text-muted">Phagwara, Punjab</div>
                                                    </td>
                                                    <td>
                                                        <div class="text-muted">Toyota Car Ac Leakage</div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Phone"><i
                                                                class="fa fa-phone"></i></a>
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="modal" data-target="#addtask"><i
                                                                class="fa fa-envelope"></i></a>
                                                        <a class="btn btn-sm btn-link hidden-xs js-sweetalert"
                                                            data-type="confirm" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Delete"><i
                                                                class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class="hidden-xs">
                                                        <a href="javascript:void(0);" class="mail-star"><i
                                                                class="fa fa-star"></i></a>
                                                    </td>

                                                    <td>
                                                        <div class="from"><a href="javascript:void(0);">Allen
                                                                Collins</a></div>
                                                        <div class="text-muted">C-Code: hhkwrvc8</div>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <div class="text-muted">+91 8567937738</div>
                                                    </td>
                                                    <td class="hidden-sm">
                                                        <div class="text-muted">Phagwara, Punjab
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-muted">Toyota Car Ac Leakage</div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Phone"><i
                                                                class="fa fa-phone"></i></a>
                                                        <a class="btn btn-sm btn-link" href="javascript:void(0)"
                                                            title="Message" data-toggle="modal"
                                                            data-target="#addtask"><i class="fa fa-envelope"></i></a>
                                                        <a class="btn btn-sm btn-link hidden-xs js-sweetalert"
                                                            data-type="confirm" href="javascript:void(0)"
                                                            data-toggle="tooltip" title="Delete"><i
                                                                class="fa fa-trash"></i></a>
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
                                        placeholder=" Driver or Mechanics Information &amp; Message" ></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control show-tick">
                                        <option>Select Status</option>
                                        <option>On the Way</option>
                                        <option>Reject</option>
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



        <script src="assets/bundles/lib.vendor.bundle.js"></script>

        <script src="assets/bundles/apexcharts.bundle.js"></script>
        <script src="assets/bundles/counterup.bundle.js"></script>
        <script src="assets/bundles/knobjs.bundle.js"></script>
        <script src="assets/bundles/c3.bundle.js"></script>

        <script src="assets/js/core.js"></script>
        <script src="assets/js/page/project-index.js"></script>
</body>

</html>