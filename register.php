

<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si los campos requeridos están presentes
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        // Capturar los datos del formulario
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Conectar a la base de datos
        $servername = "localhost"; // Cambia esto si tu base de datos está en otro servidor
        $username_db = "tu_usuario"; // Cambia esto por tu nombre de usuario de la base de datos
        $password_db = "tu_contraseña"; // Cambia esto por tu contraseña de la base de datos
        $dbname = "libros_escan"; // Nombre de tu base de datos
        
        // Crear conexión
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);
        
        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }
        
        // Preparar la consulta SQL para insertar un nuevo registro
        $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        // Vincular parámetros
        $stmt->bind_param("sss", $username, $email, $password);
        
        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Redirigir al usuario a la página de portada
            header("Location: portada.php");
            exit();
        } else {
            echo "Error al registrar usuario: " . $conn->error;
        }
        
        // Cerrar la conexión
        $conn->close();
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>

<?php include("./templates/header.php"); ?>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets/img/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">ARE YOU READ</h4>
                </div>

                <form>
                  <p>Please login to your account</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                      in</button>
                    <a class="text-muted" href="#!">TE OLVIDASTE TU PASSWORD?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Si estas interesado en entrar en el mundo de la neuropsicología puedes registrarte</p>
              </div>


<form action="portada.php" method="post">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Registrarse">
</form>

</body>
</html>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("./templates/footer.php"); ?>