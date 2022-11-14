<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form action="/plogin" method="post">
                    <div class="card px-5 py-5" id="form1">
                        <?php if (!empty(session()->getFlashdata('gagal'))) : ?>
                            <div class="alert alert-success">
                                <?php session()->getFlashdata('gagal');?>
                            </div>
                        <?php endif ?>
                        <div class="form-data" v-if="!submitted">
                            <div class="forms-inputs mb-4"> <span>Username</span> <input autocomplete="off" type="text" class="form-control" id="username" name="username">
                                <div class="invalid-feedback">A valid username is required!</div>
                            </div>
                            <div class="forms-inputs mb-4"> <span>Password</span> <input autocomplete="off" type="password" class="form-control" id="password" name="password">
                                <div class="invalid-feedback">Password must be 8 character!</div>
                            </div>
                            <div class="mb-3"> <button type="submit" class="btn btn-outline-dark w-100">Login</button> </div>
                        </div>
                        <div class="success-data">
                            <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">Don't Have Account?<a href="/register"><br> Register Now!!</a> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url()?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url()?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url()?>/js/sb-admin-2.min.js"></script>

</body>

</html>