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

      <form class="login-form" action="registrar_implemento.php" method="post">
        <h2><i class="fas fa-lock"></i> Registro implementos</h2>

        <input type="text" name="id_implemento" placeholder="ID del implemento" required />
        <input type="text" name="nombre" placeholder="Nombre del implemento" required/>
        <input type="text" name="tipo_implemento" placeholder="Tipo de implemento" required />
        <input type="text" name="marca" placeholder="Marca del implemento" required />
        <input type="text" name="precio" placeholder="precio" required/>
        <input type="number" name="stock" placeholder="Stock" required/>

        <button type="submit" name="guardar" value="guardando">Registrar</button>
      </form>

    </div>
  </div>
  </body>

  </html>
