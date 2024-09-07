<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RWMR - E.P.E.T. N°5</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-dark bg-dark">
            <h1 class="navbar-brand ps-3">RWMR - Crear mesas</h1>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Crear mesas</h1>
                        <br>
                        <br>
                        <form method="POST">
<?php
include ("php/conection.php");
include ("php/crearmesas.php");
$curso = $conexion->query("SELECT id, year, division from curso where division = 'A' or division = 'B' or division = 'C' ORDER BY division, year ASC");
?>
                                    <div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="curso" id="curso">
                                            <option>Seleccionar</option>
                                                <?php while($row = $curso->fetch_assoc()){?>
                                                    <option value="<?php echo $row['id'];?>"><?php echo $row['year']." - ".$row['division'];?></option>
                                                <?php } ?>
                                            </select>
                                            <label>Seleccione el curso</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="nombre" id="nombre">
                                                    <option>Seleccionar</option>
                                            </select>
                                            <label>Seleccione la asignatura</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="date" id="date" name="date">
                                            <label for="">Fecha:</label>
                                        </div>
                                        <br>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <input class="btn btn-primary" type="submit" value="Crear mesa" name="cmesa">
                                                </div>
                                            </div>
                                    </div>
                        </form>
                        <div id="layoutAuthentication_footer">
        <br>
        <br>
        <br>
        <br>
        <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Grupo RWMR</div>
                            <div>
                                <a href="https://www.facebook.com/p/EPET-N-5-Fray-Luis-Beltr%C3%A1n-100045363685354/?_rdr">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,256,256">
                                        <g fill-opacity="0" fill="#dddddd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM37,19h-2c-2.14,0 -3,0.5 -3,2v3h5l-1,5h-4v15h-5v-15h-4v-5h4v-3c0,-4 2,-7 6,-7c2.9,0 4,1 4,1z"></path></g></g>
                                        </svg>
                                </a>
                                <a href="https://www.instagram.com/epet5misiones/?hl=es-la">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 50 50">
                                        <path d="M 16 3 C 8.83 3 3 8.83 3 16 L 3 34 C 3 41.17 8.83 47 16 47 L 34 47 C 41.17 47 47 41.17 47 34 L 47 16 C 47 8.83 41.17 3 34 3 L 16 3 z M 37 11 C 38.1 11 39 11.9 39 13 C 39 14.1 38.1 15 37 15 C 35.9 15 35 14.1 35 13 C 35 11.9 35.9 11 37 11 z M 25 14 C 31.07 14 36 18.93 36 25 C 36 31.07 31.07 36 25 36 C 18.93 36 14 31.07 14 25 C 14 18.93 18.93 14 25 14 z M 25 16 C 20.04 16 16 20.04 16 25 C 16 29.96 20.04 34 25 34 C 29.96 34 34 29.96 34 25 C 34 20.04 29.96 16 25 16 z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        <script src="js/RWMR_C_peticiones.js"></script>
    </body>
</html>
