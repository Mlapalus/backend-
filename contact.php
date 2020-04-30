<?php include 'header.php' ?>


    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>Nous Contacter</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Acceuil<span>/</span>Nous Contacter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
        </script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entrer en Contact</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" 
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <label for="message"></label>
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    placeholder='Entrer votre message' required ></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="name"></label>
                  <input class="form-control" name="name" id="name" type="text" placeholder='Entrer votre nom' required >
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label for="email"></label>
                  <input class="form-control" name="email" id="email" type="email" placeholder='Entrer votre email' required >
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <label for="subject"></label>
                  <input class="form-control" name="subject" id="subject" type="text" placeholder='Le sujet de votre message' required >
                </div>
              </div>
            </div>
            <div class="load_btn">
              <input type="submit" class="btn_1"></input>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>23 rue de Verdun</h3>
              <p>Chatenay-Malabry, 92290</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>(+33)6 95 42 46 38</h3>
              <p>Tous les jours de 9h à 19h</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>bibichelington@gmail.com/h3>
              <p>Mail à envoyer à toute heure</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php include 'footer.php' ?>