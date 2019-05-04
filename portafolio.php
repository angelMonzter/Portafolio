<?php 
require 'templates/header.php';
 ?>

<!--body/container-->
    <section>
      <br>
      <div>
          <div class="large-3 columns">
            <br>
            <div class="imagenes wow bounceInLeft animated" data-wow-delay=".3s">
                  <img src="img/index1.jpg" alt="Portafolio">
                  <img src="img/index4.jpg" alt="Portafolio">
                  <img src="img/index5.jpg" alt="Portafolio">
                  <img src="img/index6.jpg" alt="Portafolio">
                  <img src="img/index9.jpg" alt="Portafolio">
            </div>
          </div>
          <div class="large-9 columns">
            <div class="contenido">
                  <br>
                  <h2 class="titulo wow bounceInDown animated" data-wow-delay="1.1s">Angel Velazquez</h2>
                  <p class="texto wow bounceIn animated" data-wow-delay="1.8s"><i class="color fas fa-magic"></i> Desarrollador Web</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis fugit harum, facere laudantium quasi rerum officia, eligendi doloribus ratione nemo quam incidunt unde mollitia, labore saepe alias consequuntur impedit facilis.</p>
                  <a href="#" class="button" download="">Curriculum <i class="fas fa-file-download"></i></a>
            </div>

            <br>
            <h2 class="titulo wow bounceInDown animated" data-wow-delay="1.1s">Trabajos</h2>
            <p class="texto wow bounceIn animated" data-wow-delay="1.8s"><i class="color fas fa-project-diagram"></i> Proyectos</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius dolorum illo sequi nihil eos accusamus iusto iste libero officiis iure vitae, laborum est fugit velit veniam illum! Adipisci, magnam atque?</p>

             <div class="responsive">
              <div class="large-5 medium-6 small-12 columns">
                <div align="center">
                  <a href="#">
                    <img src="img/logo5.png" alt="Portafolio">
                  </a>
                  <h5 class="texto">Diseño Responsivo</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur magnam similique praesentium ipsum, libero qui, tempore porro eligendi </p>
                </div>
              </div>
              <div class="large-7 medium-6 small-12 columns">
                <img class="wow bounceInLeft animated" data-wow-delay=".3s" src="img/responsive.png" alt="Portafolio">
              </div>
            </div>

            <div align="center" class="logos_trabajos">
              <div class="large-2 medium-4 small-12 columns">
                <a href="trabajo.php">
                  <img class="wow bounceInLeft animated" data-wow-delay=".3s" src="img/logos/logo2.png" alt="Portafolio">
                </a>
              </div>
              <div class="large-2 medium-4 small-12 columns">
                <a href="#">
                  <img class="wow bounceInLeft animated" data-wow-delay=".5s" src="img/logos/logo3.png" alt="Portafolio">
                </a>
              </div>
              <div class="large-2 medium-4 small-12 columns">
                <a href="#">
                  <img class="wow bounceInLeft animated" data-wow-delay=".7s" src="img/logos/logo8.png" alt="Portafolio">
                </a>
              </div>
              <div class="large-2 medium-4 small-12 columns">
                <a href="#">
                  <img class="wow bounceInLeft animated" data-wow-delay=".9s" src="img/logos/logo4.png" alt="Portafolio">
                </a>
              </div>
              <div class="large-2 medium-4 small-12 columns">
                <a href="#">
                  <img class="wow bounceInLeft animated" data-wow-delay="1.1s" src="img/logos/logo6.png" alt="Portafolio">
                </a>
              </div>
              <div class="large-2 medium-4 small-12 columns">
                <a href="#">
                  <img class="wow bounceInLeft animated" data-wow-delay="1.3s" src="img/logos/logo7.png" alt="Portafolio">
                </a>
              </div>
            </div>
            <hr>
            
            <div>
              <h2 class="titulo wow bounceInDown animated" data-wow-delay="1.1s">Contacto</h2>
              <p class="texto wow bounceIn animated" data-wow-delay="1.8s"><i class="color fas fa-user"></i> Freelance</p>
              
              <div class="contacto">
                <div class="large-7 medium-12 columns">
                  <form action="">
                    <label class="info" for="">Nombre:
                      <input type="text" placeholder="Nombre Completo">
                    </label>
                    <label class="info" for="">Asunto:
                      <input type="text" placeholder="Asunto">
                    </label>
                    <label class="info" for="">Mensaje:
                      <textarea name="" id="" cols="10" rows="1" placeholder="Mensaje"></textarea>
                    </label>
                    <input type="submit" class="button expanded small">
                  </form>
                </div>
                
                <div class="large-5 medium-12 columns texto" >
                  <br>
                  <ul>
                    <li class="wow bounceInUp animated" data-wow-delay=".5s">
                      <i class="color fas fa-map-marker-alt"></i>  Toluca, Mex.
                    </li>
                    <li>
                      <hr>
                    </li>
                    <li class="wow bounceInUp animated" data-wow-delay=".5s">
                      <i class="color fas fa-mobile"></i>  7223579214
                    </li>
                    <li>
                      <hr>
                    </li>
                    <li class="wow bounceInUp animated" data-wow-delay=".5s">
                      <i class="color far fa-envelope"></i>  angelmonztr2000@hotmail.com
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> 
      </div>
    </section>
    <br>
    <hr>
<!--body/container-->

<?php 
	require 'templates/footer.php';
 ?>