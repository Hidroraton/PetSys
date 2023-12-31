<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGENDAR CITAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- INICIO ENCABEZADO -->
    <header>
        <style>
            body {
                background-color: #064276;
            }
        </style>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <img src="img/logo.png" width="50" height="50" alt="">
                    <strong>Angeles de cuatro patas</strong>
                </a>
                <a href="MenuTrabajadores.html">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                    </svg>
                </button>
                </a>
            </div>
        </div>
    </header>
    <!-- FIN ENCABEZADO -->
    
    <!DOCTYPE html>
<html>
<div class="container">
        <main>
            <div>
                <style>
                    h1 {
                        text-align: center;
                        color: white;
                        font-weight: bold;
                        padding-top: 30px;
                    }
                </style>
                <h1>LISTADO DE MASCOTAS</h1>
            </div>
<head>
    <title>Mascotas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <main>
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th><font color="#ffffff">Id</font></th>
                                <th><font color="#ffffff">Nombre</font></th>
                                <th><font color="#ffffff">Raza</font></th>
                                <th><font color="#ffffff">Edad</font></th>
                                <th><font color="#ffffff">Estado</font></th>
                                <th><font color="#ffffff">Ver</font></th>
                                <th><font color="#ffffff">Publicar</font></th>
                                <th><font color="#ffffff">Despublicar</font></th>
                                <th><font color="#ffffff">Editar</font></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $username = "root";
                            $password = "";
                            $database = "appmascotas";
                            $mysqli = new mysqli("localhost", $username, $password, $database);
                            $query = "SELECT id,nombre,raza,edad,estado FROM mascotas";

                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_assoc()) {
                                    $field1name = $row["id"];
                                    $field2name = $row["nombre"];
                                    $field3name = $row["raza"];
                                    $field4name = $row["edad"];
                                    $field5name = $row["estado"];
                                    ?>

                                    <tr>
                                        <td><font color="#ffffff"><?php echo $field1name; ?></font></td>
                                        <td><font color="#ffffff"><?php echo $field2name; ?></font></td>
                                        <td><font color="#ffffff"><?php echo $field3name; ?></font></td>
                                        <td><font color="#ffffff"><?php echo $field4name; ?> años</font></td>
                                        <td><font color="#ffffff"><?php echo $field5name; ?></font></td>
                                        <td>
                                            <button><a href="DetallesMascotaTrabajador.php?id=<?php echo $field1name; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
</svg>
                                                </svg>Ver</a></button>
                                        </td>
                                        <td>
                                            <button><a href="publicar.php?id=<?php echo $field1name; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
</svg>
                                                </svg>Publicar</a></button>
                                        </td>
                                        <td>
                                            <button><a href="despublicar.php?id=<?php echo $field1name; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                                                </svg>Despublicar</a></button>
                                        </td>
                                        <td>
                                            <button><a href="EditarMascota.php?id=<?php echo $field1name; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                                                </svg>Editar</a></button>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                $result->free();
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
