<!doctype html>
<html lang="en">
<head>
  <title> Iniciar sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles_form.css">
</head>
<body>
  <div class="section">

    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Registrar un rol </span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">

                    <div class="section text-center">
                      <form action="registrar_roles.php" method="post">
                    
                      <h4 class="mb-3 pb-3">Registrar el rol</h4>
                        <div class="form-group">
                          <input type="text" class="form-style" placeholder="Nombre completo" name="nombre">
                          <i class="input-icon uil uil-user"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="email" class="form-style" placeholder="Email" name="correo">
                          <i class="input-icon uil uil-at"></i>
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" class="form-style" placeholder="Password" name="pass">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>

                        <div class="form-group mt-2">
                            <select name="tipo">
                                <option value="">--------------</option>
                                <option value="admin"> Admin</option>
                                <option value="user"> User</option>
                                <option value="estudiante"> Estudiante</option>
                            </select>
                        </div>

                        <button type="submit" class="btn mt-4" name="send">Registrar</button>
                      </form>

                    </div>

                  </div>
                </div>


                <div class="card-back">
                  <div class="center-wrap">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>