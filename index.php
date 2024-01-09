
<?php 

//session_start();


?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/favicon.png">
  <link rel="stylesheet" href="style.css/index.css">
  <link rel="stylesheet" href="style.css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>T-SHIRT</title>

</head>

<body 
translate="no" >

  <section class="containerLogin">
    <div class="containerFormLogin">
      <h1 class="title">Login</h1>

      <form action="../remeras/inicio/inicio.php" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Administrador </label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese usuario          *" required
            onkeyup="validarEmail()">
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese contraseña   *"
            required onkeyup="validarPassword()">
          <br>
          <div>
            Campos requeridos ( * )
          </div>

        </div>
        <input class="btn btn-success m-1" id="btnLogin" type="submit" value="Ingresar">
        <a class="btn btn-warning m-1" href="./paginaPrincipal/paginaPrincipal.php"> Volver al Catálogo</a>
      </form>

      <div class="advertencia">
        <p class="text-danger" id="passwordErr" style="display: none;"> La contraseña debe tener de 8 a 20 caracteres.
        </p>
        <p class="text-danger" id="emailErr" style="display: none;"> Complete formato para validar.</p>
      </div>
    </div>
  </section>

  <script>
    const email = document.getElementById("email");
    const emailErr = document.getElementById("emailErr");
    const password = document.getElementById("password");
    const passwordErr = document.getElementById("passwordErr");

    let validForm = [false, false];

    function navegarAlHome() {
      window.location.href = "http://localhost/remeras/inicio/inicio.php";
    }
    function validarEmail() {
      const regexEmail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (regexEmail.test(email.value)) {
        validForm[0] = true;
        email.className = "form-control is-valid";
        emailErr.style.display = "none";
      } else {
        validForm[0] = false;
        email.className = "form-control is-invalid";
        emailErr.style.display = "block";
      }
      validarForm();
    }

    function validarPassword() {
      let valor = password.value;
      if (typeof valor == "string" && valor.length > 7 && valor.length <= 20) {
        validForm[1] = true;
        password.className = "form-control is-valid";
        passwordErr.style.display = "none";
      } else {
        validForm[1] = false;
        password.className = "form-control is-invalid";
        passwordErr.style.display = "block";
      }
      validarForm();
    }

    function validarForm() {
      const isValid = validForm.filter(element => element == true);
      if (isValid.length == 2) {
        btnLogin.disabled = false;
      } else {
        btnLogin.disabled = true;
      }
    }

  </script>

</body>

</html>