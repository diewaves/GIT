<?php
require "comun/header.php";
require_once "control/funciones.php";
?>
        <header id="header" class="cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <h1>Disfruta de<br> la mejor carne<br> a la brasa</h1>
                                <div class="empty-espace"></div>
                                <p><a href="#reservas" class="btn btn-primary btn-outline">Reserva tu mesa</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="about" class="section scroll-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center heading animate-box fadeInUp animated-fast">
                        <h2>EL CHULETÓN PERFECTO</h2>
                        <p> Lo primero es la materia prima. Si se quiere disfrutar de un buen chuletón, pregunte a su carnicero si tiene carne de buey o en su defecto de "vaca vieja". No se deje engañar por el nombre, en los montes vascos se denomina así al animal que pasa una media de diez a veinte años engordando en pastos naturales. De hecho, es el símil actual del casi extinto buey.</p>
                        <p> El grosor de la chuleta y la altura a la que se sitúa la parrilla en la lumbre son de gran importancia. Lo ideal es que estos chuletones tengan un grosor de unos 4 o 5 centímetros y que la parrilla se sitúe a un palmo de alto de las brasas.</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="carta" class="section scroll-section">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center heading animate-box">
                        <h2>CARTA</h2>
                        <p>Por supuesto que somos expertos en parrilla, seguro que lo has visto cuando has entrado por la puerta. Pero también hacemos un montón de cosas más. ¡Échale un ojo a todo lo que podrás probar con nosotros!</p>
                    </div>
                </div>
                <div class="empty-espace"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="carta animate-box">
                            <img src="<?php getData(1,0) ?>" title="<?php getData(1,1) ?>" alt="<?php getData(1,2) ?>" class="carta-bg"></img>
                            <div class="carta-text">
                                <h3>Entrantes</h3>
                                <p><?php echo getCarta($carta,0,7) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="carta animate-box">
                            <img src="<?php getData(2,0) ?>" title="<?php getData(2,1) ?>" alt="<?php getData(2,2) ?>" class="carta-bg"></img>
                            <div class="carta-text">
                                <h3>Parrilla</h3>
                                <p><?php echo getCarta($carta,7,14) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="carta animate-box">
                            <img src="<?php getData(3,0) ?>" title="<?php getData(3,1) ?>" alt="<?php getData(3,2) ?>" class="carta-bg"></img>
                            <div class="carta-text">
                                <h3>Bebidas</h3>
                                <p><?php echo getCarta($carta,14,21) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="reservas" class="section scroll-section">
            <div class="container">
                <div class="row">
                    <div id="restaurantes" class="col-md-12 heading animate-box">
                        <h2>Nuestros restaurantes</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <p>No sólo podrás disfrutar de una comida deliciosa, sino que disponemos de una variedad de ambientes dependiendo de qué momento del día estés disfrutando. Además, para esas cálidas tardes de verano, nuestra terraza será la guinda del pastel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 item-wrap animate-box">
                        <div class="item">
                            <img src="images/valladolid.jpeg" class="img-responsive" alt="">
                            <h3>ALCHEMY VALLADOLID</h3>
                            <p>C/ de la Estación 5<br> Valladolid
                                <br>
                                <span class="phone-number">983 000 000</span></p>
                            <p><a href="reserva.php?res=0" class="btn btn-primary btn-outline">Reservar</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 item-wrap animate-box">
                        <div class="item margin_top">
                            <img src="images/castellana.jpeg" class="img-responsive" alt="">
                            <h3>ALCHEMY LA CASTELLANA</h3>
                            <p>P/ de la Castellana 5<br> Madrid
                                <br>
                                <span class="phone-number">916 000 000</span></p>
                            <p><a href="reserva.php?res=1" class="btn btn-primary btn-outline">Reservar</a></p>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block visible-xs-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 item-wrap animate-box">
                        <div class="item">
                            <img src="images/granvia.jpeg" class="img-responsive" alt="">
                            <h3>ALCHEMY GRAN VÍA</h3>
                            <p>C/ Gran Vía 5<br> Madrid
                                <br>
                                <span class="phone-number">915 000 000</span></p>
                            <p><a href="reserva.php?res=2" class="btn btn-primary btn-outline">Reservar</a></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 item-wrap animate-box">
                        <div class="item margin_top">
                            <img src="images/gijon.jpeg" class="img-responsive" alt="">
                            <h3>ALCHEMY GIJÓN</h3>
                            <p>Av/ Argentina 5<br> Gijón
                                <br>
                                <span class="phone-number">985 000 000</span></p>
                            <p><a href="reserva.php?res=3" class="btn btn-primary btn-outline">Reservar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="contacto" class="section scroll-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                        <img src="images/contact_1.jpg" alt="">
                        <div class="empty-espace"></div>
                    </div>
                    <div class="col-md-5 col-md-push-1 animate-box">
                        <div class="section-heading">
                            <h2>Contacto</h2>
                            <p>Puede ponerse en contacto con nosotros a través del siguiente formulario</p>
                            <form id="form-wrap" method="post">
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <textarea name="mensaje" id="message" cols="30" rows="8" class="form-control" placeholder="Mensaje" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                <div id="loading" style="display:none"><img src="images/ajax-loader.gif" alt="loading" /> Un momento, por favor...</div>
                                <div class="success">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary btn-outline btn-lg submit" value="Enviar">
                                    </div>
                                </div>
                                </div>
                                <div class="error"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
require "comun/footer.php";
?>
       <!-- Llamada a función de ajax diseñada para el envío del formulario de forma asíncrona, evitando el reenvio al refrescar -->
       <script>contactmail();</script>