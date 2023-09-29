<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT Waroeng Koding</title>

    <!-- Custom fonts for this template-->
    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="template/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<br><br> <br>

<body class="bg-gradient-info">

    <div class="container">
        <!-- Outer Row -->

        <div class="d-flex justify-content-center py-4">
            <a href="http://karyasiswa.site/" class="logo d-flex  w-auto">
                <img src="http://karyasiswa.site/public/assets/img/logo.png" alt="">
                <span>PT Waroeng Koding</span>
            </a>

        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-8 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-2">

                    <div class="card-body p-0">
                        <div class="card-mb-3">
                            <div class="card-body">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><b>Register</b></h1>
                                </div>
                                <form class="row g-3 need-validation" method="post" action="dashboard.php">
                                    <div class="col-12 has-validation">
                                        <label for="nama" class="form-label"><b>Nama Lengkap</b></label>
                                        <input type="text" name="namalengkap" class="form-control" id="yourname" value="">
                                    </div>
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label"><b>Email</b></label>
                                        <input type="email" name="email" class="form-control" id="yourEmail" value="">
                                        <div class="invalid-feedback">Please a valid Email adddress!</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label"><b>Username</b></label>
                                        <input type="text" name="username" class="form-control" id="yourusername" value="">
                                        <div class="invalid-feedback">Please choose a username</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="token" class="form-label"><b>Password</b></label>
                                        <div class="input-group has-validation">
                                            <input type="password" name="password" class="form-control" id="password" value="">
                                            <div class="invalid-feedback">Please enter your password!.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label"><b>Tempat Lahir</b></label>
                                        <input type="text" name="tempatlahir" class="form-control" id="youraddres" value="">
                                    </div>
                                    <div class="col-12">
                                        <label for="konfirpassword" class="form-label"><b>Tanggal Lahir</b></label>
                                        <input type="date" name="tanggal" class="form-control" id="" value="">
                                        <div class="invalid-feedback">Masukkan Tanggal Lahir</div>
                                    </div> <br>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
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

    <!-- Bootstrap core JavaScript-->
    <script src="template/vendor/jquery/jquery.min.js"></script>
    <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

</body>

</html>