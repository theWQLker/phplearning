<?php




?>
<!DOCTYPE html>
<html lang="fr/en">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Website du zoo Arcadia" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="liste\ss.css" />

  <title>Parc zoologique d'Arcadia</title>
</head>

<body>
  <div class="main-content layout-full">
    <div class="h1-container">
      <h1> Zoo Arcadia </h1>
    </div>
    <header>
      <a class="navbar-brand" href="/">
        <img src="images\ide-verte.png" alt="Logo Zoo Arcadia" style="height: 70px;">
      </a>

      <!-- Contenu de la barre de navigation -->
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="/">Parc zoologique d'ARCADIA</a>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="liste/habitat.html">Habitats <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="liste/service.html">Service & Horraire </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="liste/contact.html">Contact</a>
            </li>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="liste/submit_avis">Soumettre un avis</a>
            </li>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="liste/rapport">Rapport véterinaire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Admin</a>
            </li>


          </ul>
        </div>
      </nav>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-inteval="5500">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/lions.jpg" alt="First slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="./images/giraffe.jpg" alt="Second slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="./images/parc.jpg" alt="Third slide">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
  </div>
  </header>




  <main>



    <!-- Contenu principal de la page -->
    <section>


      <div class="h2-container">
        <h2> Parc zoologique d'Arcadia </h2>

        <hr class="separator-line">

        <div class="card-group">
          <ul class="cards">
            <li class="cards__item">
              <div class="card">
                <div class="card__image card__image--gi"></div>
                <div class="card__content">
                  <div class="card__title">Nos animaux</div>
                  <p class="card__text">Chaque animal bénéficie d'une attention méticuleuse à sa santé, avec des
                    contrôles
                    vétérinaires quotidiens et une alimentation précisément dosée. Le zoo, autonome en énergie,
                    promeut
                    activement l'écologie.</p>
                  <a href="./liste/habitat.html" class="button2-link">
                    <button class="button2">Animaux</button>
                  </a>
                </div>
              </div>
            </li>
            <li class="cards__item">
              <div class="card">
                <div class="card__image card__image--ele"></div>
                <div class="card__content">
                  <!-- <img src="./images/giraffe.jpg" class="card-img-top" alt="animaux"> -->
                  <div class="card__title">Nos habitats</div>
                  <p class="card__text">Découvrer tout nos habitats respectueux de l'environement et de nos animaux,
                    notre
                    prac posséde plus de 15 hectarts.</p>
                  <a href="liste/habitat" class="button2-link">
                    <button class="button2">Animaux</button>
                  </a>
                </div>
              </div>
            </li>
            <li class="cards__item">
              <div class="card">
                <div class="card__image card__image--train"></div>
                <div class="card__content">
                  <!-- <img src="./images/giraffe.jpg" class="card-img-top" alt="animaux"> -->
                  <div class="card__title">Nos services</div>
                  <p class="card__text">Le Zoo Arcadia enrichit l'expérience des visiteurs avec une variété de
                    services :
                    des zones de restauration pour se rafraîchir, des tours en petit train pour explorer
                    confortablement
                    les différents habitats.</p>
                  <a href="liste/habitat" class="button2-link">
                    <button class="button2">Animaux</button>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <hr class="separator-line">
      <div class="texte">
        <p>Avec une autonomie complète en énergies renouvelables, Arcadia illustre son engagement écologique, non
          seulement dans la gestion du parc mais également à travers le développement d'une
          application web destinée à promouvoir ses initiatives en matière de conservation.
          Arcadia enrichit l'expérience visiteur avec une gamme de services, incluant une
          restauration variée et des visites guidées permettant une immersion totale dans
          le monde animal. Le zoo veille également à la santé et au bien-être de ses pensionnaires
          grâce à des soins vétérinaires quotidiens. Envisageant de lancer une application web
          pour approfondir la connaissance des visiteurs sur ses animaux et services, Arcadia
          s'engage fermement en faveur de l'éducation environnementale. Visiter le Zoo Arcadia,
          c'est soutenir un futur où la coexistence respectueuse entre l'homme et la nature prévaut,
          sous la vision éclairée de son directeur, José.Arc</p>
        <!-- carte du zoo -->
        <hr class="separator-line">


      </div>
      <div class="h2-avis">
        <h2>Avis de nos clients</h2>
      </div>
      <div class="avis-slider">
        {% for avis in avis_liste %}
        <div class="avis-card">
          <img src="images\ide-verte.png" alt="Image Avis" class="avis-image">
          <div class="avis-content">
            <h3>{{ avis.pseudo }}</h3>
            <p>{{ avis.commentaire }}</p>
          </div>
        </div>
        {% endfor %}
      </div>


      <!--img svg footer-->
      <div class="svg-image"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#282d32" fill-opacity="1" d="M0,160L80,160C160,160,320,160,480,181.3C640,203,800,245,960,250.7C1120,256,1280,224,1360,208L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
          </path>
        </svg></div>

    </section>


  </main>
  <footer>
    <!-- Contenu du pied de page -->


    <div class="footer-dark">
      <footer>

        <div class="container-media">
          <div class="row">
            <div class="col-sm-6 col-md-3 item">
              <h3>Services</h3>
              <ul>
                <li><a href="#"> Cafétéria </a></li>
                <li><a href="#"> Hotel </a></li>
                <li><a href="#"> tramsport </a></li>
              </ul>
            </div>

            <div class="col-sm-6 col-md-3 item">
              <h3>A propos</h3>
              <ul>
                <li><a href="#">Véterinaire</a></li>
                <li><a href="#">Nos équipes</a></li>
                <li><a href="#">Nos animaux</a></li>
              </ul>
            </div>
            <div class="col-md-6 item text">
              <h3>Zoo Arcadia</h3>
              <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula.
                Vivamus ac sem lacus. Ut vehicula rhoncus elementum.
                Etiam quis tristique lectus. Aliquam in arcu eget velit
                pulvinar dictum vel in justo.</p>
            </div>
            <div>
              <ul class="text-center">
                <li>
                  <a class="facebook" href="https://www.facebook.com/votrepagefacebook" target="_blank">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>

                <li>
                  <a class="instagram" href="https://www.instagram.com/votrepageinstagram" target="_blank">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                  </a>
                </li>

              </ul>

              <div class="col item social">
                <a href="#"><i class="icon ion-social-facebook"></i></a>
                <a href="#"><i class="icon ion-social-instagram"></i></a>
              </div>
              <p class="copyright">Zoo Arcadia ©2024</p>
            </div>
      </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const slider = document.querySelector('.avis-slider');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
          isDown = true;
          startX = e.pageX - slider.offsetLeft;
          scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
          isDown = false;
        });

        slider.addEventListener('mouseup', () => {
          isDown = false;
        });

        slider.addEventListener('mousemove', (e) => {
          if (!isDown) return;
          e.preventDefault();
          const x = e.pageX - slider.offsetLeft;
          const walk = (x - startX) * 2; //scroll-speed
          slider.scrollLeft = scrollLeft - walk;
        });
      });


      if (window.da2a) da2a.script_load();
    </script>

</body>

</html>