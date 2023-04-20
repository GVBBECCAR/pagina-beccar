<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BECCAR</title>
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/estilos_full_2.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="shortcut icon" href="media/logos/Beccar_Logo-Transparente.png">
  <!--FONTAWESOME-->
  <script src="https://kit.fontawesome.com/a7b929be8c.js" crossorigin="anonymous"></script>
  <!--ANIMATE-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<body>

  <header>
            <div class="nav-bar">
                  <a href="" class="logo"><img src="media/logos/logo_blanco.png" height="50px"></a>
                  <div class="navigation">
                    <div class="nav-items">
                          <i class="uil uil-times nav-close-btn"></i>
                          <a href="index.html">Inicio</a>
                          <a href="nosotros.html">Nosotros</a>
                          <a href="unidades.html">Unidades</a>
                          <a href="servicios.html">Servicios</a>
                          <a href="contacto.html">Contacto</a>
                    </div>
                  </div>
                  <i class="uil uil-apps nav-menu-btn"></i>
            </div>
  </header>

  <section class="about section">
        <div class="content">
                <div class="contact-wrapper">
                    <div class="contact-form">
                            <h3>Contáctanos</h3>
                            <form action="">
                                    <p>
                                        <label for="nombre">Nombre completo</label>
                                        <input type="text" name="nombre" id="nombre" onkeypress="return letras(event)">
                                    </p>
                                    <p>
                                        <label>Teléfono</label>
                                        <input type="telefono" name="telefono" onkeypress="return numeros(event)">
                                    </p>
                                    <p>
                                        <label >Correo electrónico</label>
                                        <input type="email" name="correo" id="correo">
                                    </p>

                                    <p>
                                        <label>Área dirigida</label>
                                        <select name="area">
                                                <option>Seleccionar área</option>
                                                <option value="Compras">Compras</option>
                                                <option value="Recursos Humanos">Recursos Humanos</option>
                                                <option value="Ventas">Ventas</option>
                                        </select>
                                    </p>

                                    <p>
                                        <label>Pais</label>
                                        <input type="text" value="pais" onkeypress="return letras(event)">                                     
                                    </p>
                                    <p>
                                        <label>Estado</label>
                                        <select name="estado">
                                        <option>Seleccionar estado</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="CDMX">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Estado de México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                    </p>
                                    <p class="block">
                                        <label>Mensaje</label>
                                        <textarea name="mensaje" rows="3" id="ta"></textarea>
                                    </p>
                                    <p class="block">
                                        <button type="submit" onclick="return correo()">
                                                Enviar
                                        </button>
                                    </p>
                            </form>                        
                    </div>
                </div>
        </div>
  </section>


<footer class="footer">
    <div class="container-footer-all">
            <div class="container-body">
                    <div class="column-1">
                            <div class="row_f">
                                  <a href="index.html"><img src="media/logos/logo_blanco.png"></a>
                            </div>
                    </div>

                    <div class="column-2">
                            <div class="row_f">
                                  <a href="nosotros.html"><h1>NOSOTROS</h1></a>
                            </div>
                    </div>

                    <div class="column-3">
                          <div class="row_f">
                                 <a href="unidades.html"><h1>UNIDADES</h1></a>
                          </div>
                    </div>

                    <div class="column-4">
                          <div class="row_f">
                                <a href="servicios.html"><h1>SERVICIOS</h1></a>
                          </div>
                    </div>

                    <div class="column-5">
                        <div class="row_f">
                              <a href="contacto.html"><h1>CONTACTO</h1></a>
                        </div>
                    </div>
            </div>
    </div>
    
    <div class="container-redes">
          <div class="redes">
               <div class="icon-red">
                     <a href="#"><img src="media/iconos/facebook.png"></a>
               </div>
               <div class="icon-red">
                     <a href="#"><img src="media/iconos/instagram.png"></a>
               </div>
               <div class="icon-red">
                     <a href="#"><img src="media/iconos/twitter.png"></a>
               </div>
          </div>
    </div>
    
    <div class="container-footer">
          <div class="footer_b">
                <div class="copyright">
                    © 2023 Todos los derechos reservados |<a href="">BECCAR</a>
                </div>

                <div class="information">
                        |<a href="privacidad.html">Política de privacidad</a>
                </div>
          </div>
    </div>
</footer>

  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/validar.js"></script>

</body>
</html>