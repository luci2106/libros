<?php
session_start();
include "prueba.php";

if (isset($_SESSION["user"])) {
    header("Location: user.php"); // Si el usuario ya está autenticado, redirígelo a la página de usuario
    exit();
}

if (isset($_POST["email"])) {
    include("conexion.php");
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from user where email=? and password=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1,$email);
    $stmt->bindParam(2,$password);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $_SESSION["user"] = $email;
        $_SESSION["datos"] = "otros datos";
        header("Location: portada.php"); // Redirige al usuario a la página de portada después del inicio de sesión exitoso
        exit();
    } else {
        $error = "Email or password incorrect";
    }
}
?>

<?php include("./templates/header.php");?>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets\img\lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">yes , we can</h4>
                </div>

                <form action="" method="POST">

  <!-- Añade el atributo name a los campos de entrada para que puedan ser identificados en PHP -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example11" class="form-control" name="email" placeholder="Phone number or email address" />
    <label class="form-label" for="form2Example11">Username</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example22" class="form-control" name="password" />
    <label class="form-label" for="form2Example22">Password</label>
  </div>

  <!-- Cambia el tipo de botón a submit para que envíe los datos del formulario -->
  <div class="text-center pt-1 mb-5 pb-1">
    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
    <a class="text-muted" href="#!">Forgot password?</a>
  </div>

</form>

                

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Hola,!!!!PELIGRO ¡¡¡¡¡¡ 
                        ESTA EN UNA PÁGINA EN LA QUE SE PUEDEN ENCONTRAR UNA SERIE DE LIBROS PARA LOS QUE QUIERAN  EMPEZAR A SUMERGIRSE  EN EL MUNDO DE LA NEUROPSICCOLOGÍA
                   estás entrando en el mundo de la neuropsicología, cuidado, aún que no parezaca es apasionante</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
<?php include("./templates/footer.php");?>