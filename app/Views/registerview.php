<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User - Register</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    body {
        background-color: black;
        background: url('<?= base_url() ?>/images/lungmen.jpg');
        background-size: cover;
        filter: blur(80%);
    }

    #container {
        border: solid black 2px;
        background: rgba(56, 255, 255, 0.1);
    }

    #button{
        width: 30px;
        height: 30px;
    }

    #button+i:before {
        content: "\f06e";
    }

    #button:checked+i:before {
        content: "\f070";
    }
</style>

<body>
    <section class="vh-100">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;" id="container">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center text-light mb-5">Create an account</h2>

                                <form id="box" action="register" method="post">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="nama" class="form-control form-control-lg" placeholder="Full Name..." autocomplete="off" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="nik" class="form-control form-control-lg" placeholder="NIK..." autocomplete="off" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="username" class="form-control form-control-lg" placeholder="Username..." autocomplete="off" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="telp" class="form-control form-control-lg" placeholder="Phone Number..." autocomplete="off" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control form-control-lg" placeholder="Password..." autocomplete="off" />
                                        <input id="button" class="form-check-input mt-2" type="checkbox" onclick="myFunction()">
                                        <i for="button" class="fas fa-2x mt-2"></i>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-dark btn-block btn-lg text-light">Register</button>
                                    </div>

                                    <p class="text-center text-light mt-5 mb-0">Have already an account? <a href="/login" class="fw-bold text-light"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="<?= base_url() ?>/js/bootstrap.min.js"></script>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>