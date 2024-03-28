<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Formulario registro</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="css/style_registro.css">
  </head>

  <body style="display:flex; align-items:center; justify-content:center;">
  <div class="login-page">
    <div class="form">

      <form class="login-form" action="registrar_armamento.php" method="post">
        <h2><i class="fas fa-lock"></i> Registro armamento</h2>

        <input type="text" name="id_arma" placeholder="ID del arma" required />
        <input type="text" name="nombre" placeholder="Nombre del arma" required/>
        <input type="text" name="tipo_arma" placeholder="Tipo de arma" required />
        <input type="text" name="tipo_municion" placeholder="Tipo de munición" required />
        <input type="text" name="fabricante" placeholder="Fabricante" required/>
        <input type="number" name="stock" placeholder="Stock" required/>

        <button type="submit" name="guardar" value="guardando">Registrar</button>
        <button type="submit" name="mostrar" value="mostrar"><a href="mostrar_armamento.php">Mostrar</a></button>
      </form>

    </div>
  </div>
  </body>

  </html>
