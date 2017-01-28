
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet">

    <link href="<?=base_url('assets/css/animate.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <?php
                if(isset($errors)) :
            ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?=$errors?>
                </div>
            <?php
                endif;
            ?>
            <form class="m-t" role="form" action="<?=base_url('login')?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="identity" placeholder="E-mail" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Senha" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=base_url('assets/js/jquery-2.1.1.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

</body>

</html>
