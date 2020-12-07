<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alumno</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/main-login-profesor.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="https://cbtis8.gnomio.com/">
            <img src="<?php echo base_url();?>/assets/images/ch.png" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-auto">
                <a href="<?php echo base_url();?>">
                    <img src="<?php echo base_url();?>/assets/images/Icon open-account-login.png" alt="logo" style="width:40px;">
                </a>

            </li>

        </ul>
    </nav>
    <div class="wrapper d-flex align-items-stretch">
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5" id="divbotones">
            <h2 class="mb-4">Iniciar Sesión como Alumno</h2>
            <div id="Menu" class="container">
                <form action="/action_page.php" class="was-validated">
                    <div class="form-group">
                        <label for="uname" class="text-body">Usuario:</label>
                        <input type="text" class="form-control bg-secondary" id="uname" placeholder="Enter username" name="pswd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd" class="text-body">Password:</label>
                        <input type="password" class="form-control bg-secondary" id="pwd" placeholder="Enter password" name="pswd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="location.href='<?php echo base_url();?>/index.php/Home/Alumno'">Ingresar</button>
                </form>

            </div>

        </div>
    </div>
