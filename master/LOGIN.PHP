<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container justify-content-center">
        <div class="col-sm-10 col-md-10 col-lg-10">
            <div class="card shadow mt-5">
                    <h2 class="display-6 text-center mt-2">Registro de usuario</h2>
                    <form action="<?php echo $_SERVER ?>" method="POST">
                    <div class="row mt-2 justify-content-center">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <input type="text" name="Usuario" id="usuario"  class="form-control" placeholder="usuario" >
                        </div>

                    </div>
                    <div class="row mt-2 justify-content-center">
                    <div class="col-sm-10 col-md-10 col-lg-10">
                        <input type="password" name="Pass" id="pass"  class="form-control" placeholder="Password" >
                        </div>

                    </div>
                    <div class="login-btn text-center">
                     <a href="include\login.php"><button type="button" class="btn btn-primary">Iniciar Sesion</button></a>
                     </div>
    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.min.css"></script>
</body>
</html>