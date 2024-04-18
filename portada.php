<!DOCTYPE html>
<html>
<head>
    <title>Mi Vista con portada</title>
<link rel="stylesheet" href="assets/css/portada.css">
</head>
<body>

<h1>Mi Vista con Imagen</h1>

<
<div class="galeria">
    <!-- Imagen 1 enlazada a PDF -->
    <div class="imagen">
        <a href="assets/pdf/Diccionario_de_Neuropsicologia.pdf" target="_blank">
            <img src="assets/img/Captura.jpg" alt="Descripción de la imagen 1">
        </a>
    </div>

    <!-- Imagen 2 enlazada a PDF -->
    <div class="imagen">
        <a href="assets/pdf/Educ_especial_aportaciones_de_la_neurops.pdf" target="_blank">
            <img src="assets/img/Captura2.jpg" alt="Descripción de la imagen 2">
        </a>
    </div>

    <!-- Imagen 3 enlazada a PDF -->
    <div class="imagen">
        <a href="assets/pdf/Guia_TDAH.pdf" target="_blank">
            <img src="assets/img/Captura3.jpg" alt="Descripción de la imagen 3">
        </a>
    </div>

    <!-- Imagen 4 enlazada a PDF -->
    <div class="imagen">
        <a href="assets/pdf/Introduccion_a_La_Neuropsicologia.pdf" target="_blank">
            <img src="assets/img/Captura4.jpg" alt="Descripción de la imagen 4">
        </a>
    </div>

    <!-- Imagen 5 enlazada a PDF -->
    <div class="imagen">
        <a href="assets/pdf/NEURODIVERSIDAD_VOLUMEN_2_f_10_11_15_1.pdf" target="_blank">
            <img src="assets/img/Captura5.jpg" alt="Descripción de la imagen 5">
        </a>
    </div>

    <!-- Imagen 6 enlazada a PDF -->
    <div class="imagen">
        <a href="assets/pdf/Neuropsicologia_Clinica.pdf" target="_blank">
            <img src="assets/img/Captura6.jpg" alt="Descripción de la imagen 6">
        </a>
    </div>
</div>





<h2>Formulario para Añadir Libros</h2>

<form action="register.php" method="post">
    <label for="titulo">Título del libro:</label>
    <input type="text" id="titulo" name="titulo" required><br><br>
    
    <label for="autor">Autor del libro:</label>
    <input type="text" id="autor" name="autor" required><br><br>
    
    <label for="anio">Año de publicación:</label>
    <input type="number" id="anio" name="anio" required><br><br>
    
    
    
    <!-- Agrega más campos según sea necesario (por ejemplo, sinopsis, editorial, etc.) -->
    
    <input type="submit" value="Añadir Libro">
</form>

<form action="register.php" method="post">
    <label for="titulo">Título del libro:</label>
    <input type="text" id="titulo" name="titulo" required><br><br>
    
    <label for="autor">Autor del libro:</label>
    <input type="text" id="autor" name="autor" required><br><br>
    
    <label for="anio">Año de publicación:</label>
    <input type="number" id="anio" name="anio" required><br><br>
    
    <label for="genero">Género del libro:</label>
    <input type="text" id="genero" name="genero" required><br><br>
    
    <!-- Agrega más campos según sea necesario (por ejemplo, sinopsis, editorial, etc.) -->
    
    <input type="submit" value="Añadir Libro">
</form>

<!-- Botón para volver a la página de registro -->
<a href="formulario_registro.html">Volver al Formulario de Registro</a>







</body>
</html>