<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>User | Request Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

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
                                    <h1 class="page-title w-text">My Request</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="Company_Settings">
                                    <div class="card mt-3">
                                        <div class="card-header">
                                            <h3 class="card-title">REQUEST FORM FOR ASSISTANCE</h3>
                                            <div class="card-options">
                                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                        class="fe fe-chevron-up"></i></a>
                                                <a href="#" class="card-options-fullscreen"
                                                    data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                                <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                        class="fe fe-x"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Generate C-Code</label>
                                                            <input class="form-control" type="text" id="txt_usrid"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Full Name <span class="text-danger">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Louis Pierce">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Mobile Number <span
                                                                    class="text-danger">*</span></label>
                                                            <input class="form-control" value="+1 882-635-7531"
                                                                type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i
                                                                            class="icon-envelope"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control"
                                                                    value="LouisPierce@example.com" type="email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Pickup Date</label>
                                                            <input class="form-control" type="datetime">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="form-group">
                                                            <label>Pickup Address</label>
                                                            <textarea class="form-control"
                                                                placeholder="44 Shirley Ave. West Chicago, IL 60185"
                                                                aria-label="With textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="form-group">
                                                            <label>Destination Address</label>
                                                            <textarea class="form-control"
                                                                placeholder="44 Shirley Ave. West Chicago, IL 60185"
                                                                aria-label="With textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 ">
                                                        <div class="form-group">
                                                            <label>Reason</label>
                                                            <textarea class="form-control" placeholder="Reason"
                                                                aria-label="With textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label>Choose Near Services</label>
                                                            <select class="form-control">
                                                                <option value="">-- Select Near Services --</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 text-right m-t-20">
                                                        <button type="button" class="btn btn-primary" onclick="myfunctionRequest();">SAVE</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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

    <script>
        // generate code

        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }
        window.onload = function () {
            document.getElementById("txt_usrid").value = generateString(10);
        }
    </script>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../css/sweetalert.js"></script>
</body>

</html>