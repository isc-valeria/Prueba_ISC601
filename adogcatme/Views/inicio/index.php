<?php
?>
<section id="carrsuel">

    <div id="carrusel -Home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carrusel -Home" data-slide-to="0" class="active"></li>
            <li data-target="#carrusel -Home" data-slide-to="1"></li>
            <li data-target="#carrusel -Home" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="Public/imagenes/gatos.jpg" alt="adopta">
                <div class="carousel-caption">
                    <h3>Ellos no tiene la culpa</h3>
                    <p>Fotografia liva</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="Public/imagenes/refugios.jpg" alt="adopta">

                <div class="carousel-caption">
                    <h3>Adoptalos no los abandones</h3>
                    <p>Fotografia liva</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="Public/imagenes/adopcion.jpg" alt="adopta">
                    <div class="carousel-caption">
                    <h3>Ellos no tiene la culpa</h3>
                    <p>Fotografia liva</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="Public/imagenes/perro.jpg" alt="adopta">

                <div class="carousel-caption">
                    <h3>El cariño viene del hogar</h3>
                    <p>Fotografia animamundi</p>
                </div>
            </div>



            <a class="carousel-control-prev" href="#carrusel -Home" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carrusel -Home" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

</section>

</section>

<section id="adopcion">
    <div class="contenido-seccion">
        <div class="container text-white">
            <h2>
                Acerca de adopciones
            </h2>
            <p class="lead text-white" >Adoptar no se debe tomar a la ligera, debemos de estar seguros que
                podemos con esta responsabilidad, es por eso que muchos lugares de adopción para asegurarse que
                la mascota va a estar bien cuidada hacen visitas a la casa en donde va a vivir para ver que sea un lugar seguro
                y en donde pueda vivir cómodamente</p>
            <br>


            <div class="row">
                <div-col-sm class="12">
                    <div class="card-group">
                        <div class="card">
                            <div class="container-fluid">
                                <div class="row">
                                    <main role="main" class="col-md-12">

                                        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                            <h5 class="text-dark">Animales disponibles para adopción</h5>
                                        </div>
                                        <div class="container text-dark" >
                                            <div class="row">
                                                <?php
                                                require_once ("tabla.php");
                                                ?>
                                            </div>
                                        </div>

                                    </main>

                                </div>
                            </div>




                    </div>
            </div>
        </div>

    </div>
    </div>

    </div>

</section>
<br>

<br>

