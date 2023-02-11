<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
    .col {
        margin: auto;
        width: 50%;
    }

    #button+label:before {
        content: "\f06e";
    }

    #button:checked+label:before {
        content: "\f070";
    }
</style>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col text-light">

                    <div class="px-5 my-5 ms-4">
                        <img src="<?= base_url() ?>/images/RhodesLogo.png" alt="RhodesLogo" style="width: 70px;">
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 32rem;" action="plogin" method="POST">

                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                <div class="alert alert-outline-light text-light">
                                    <?php echo session()->getFlashdata('error'); ?>
                                </div>
                            <?php endif ?>

                            <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 2px;"> Please Log in ! !</h3>

                            <div class="form-outline mb-4">
                                <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username..." autocomplete="off" />
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password..." autocomplete="off" /><br>
                                <input id="button" class="form-check-input" type="checkbox" onclick="myFunction()">
                                <label for="button" class="fas"></label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-outline-light btn-lg btn-block" type="submit">Login</button>
                            </div>

                            <p>Don't have an account? <a href="/register" class="link-info">Register here</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-7 px-0 d-none d-sm-block">
                    <img src="<?= base_url() ?>/images/login.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
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