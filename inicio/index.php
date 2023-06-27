<?php 
//manda a llamar el encabezado de pagina
include_once "../footer-header/header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Poder Judicial del Estado de Durango</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap"
    rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <!-- Libraries Stylesheet -->
  <link href="../lib1/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="../lib1/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/index.css" />
</head>

<body>
  <!-- Carousel Start -->
  <div class="container-fluid mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade row" data-ride="carousel">
      <div class="carousel-inner mx-2 mt-5">
        <div class="carousel-item position-relative active" style="height: 70vh; min-height: 400px;">
          <img class="position-absolute w-100 h-100" src="../img/banner1.jpg" style="object-fit: cover;" />
          <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
            <div class="p-3" style="max-width: 900px;">
              <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">
                Poder Judicial del Estado de Durango
              </h4>
              <h3 class="display-2 text-capitalize text-white mb-4">
                Tribunal superior de justicia
              </h3>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
          <div class="btn btn-lg btn-secondary btn-lg-square">
            <span class="carousel-control-prev-icon"></span>
          </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
          <div class="btn btn-lg btn-secondary btn-lg-square">
            <span class="carousel-control-next-icon"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="../img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <h2 class="position-relative text-center bg-white text-primary rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 350px; margin-left: -205px;">25 Years Experience</h2>
                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">We Provide Reliable And Effective Legal Services</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div> -->
  <!-- About End -->

  <!-- Services Start -->
  <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    <h6 class="text-uppercase">Our Practice</h6>
                    <h1 class="mb-4">Our Practice Areas</h1>
                    <p>Invidunt lorem justo clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-primary mt-2">More Services</a>
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Takim stet justo elitr sea eirmod vero ipsum. Sed Stet clita sit duo dolor stet at at. Tempor dolor sit ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Services End -->

  <!-- Appointment Start -->
  <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Get An Appointment</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="date" id="date" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Date" data-target="#date" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="time" id="time" data-target-input="nearest">
                                                <input type="text" class="form-control border-0 p-4 datetimepicker-input" placeholder="Select Time" data-target="#time" data-toggle="datetimepicker"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Get An Appointment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Appointment End -->

  <!-- Features Start -->
  <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="../img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        <h6 class="text-uppercase">Our Features</h6>
                        <h1 class="mb-4">Why Choose Us</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Best Law Practices</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Efficiency & Trust</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <h5>Results You Deserve</h5>
                                <p class="m-0">Ipsum duo tempor elitr rebum stet magna amet kasd. Ipsum magna ipsum ipsum stet ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Features End -->

  <!-- Action Start -->
  <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-action rounded" style="height: 500px;">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-white mb-4">Let's get started. Call us now for a Free Consultation</h1>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#">Call Us Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
  <!-- Action End -->

  <!-- Contenedor de acontecimientos recientes -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="text-center pb-2">
        <h6 class="text-uppercase">
          Consulte los acontecimientos más recientes del Poder Judicial del
          Estado de Durango
        </h6>
        <h1 class="mb-4">Acontecimientos recientes</h1>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="rounded" style="height: 200px; background-color: #919191;"></div>
          <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
            <a href="https://tusitio.com/tu_pagina_destino" target="_blank" style="text-decoration: none;">
              <div class="team-item text-center rounded overflow-hidden pt-4 p-2" id="team-item">
                <h5 class="mb-2 px-2 text-justify">
                  Se integran dos nuevos magistrados al Pleno del Tribunal
                  Superior de Justicia del Poder Judicial del Estado de
                  Durango
                </h5>
                <p class="mb-3 px-4 text-center p-2 text-dark" style="color: #000000;">
                  2023
                </p>
                <div class="team-img position-relative">
                  <img class="img-fluid rounded" src="../img/noti1.jpeg" alt="" />
                </div>
              </div>
            </a>
            <a href="https://tusitio.com/tu_pagina_destino" target="_blank" style="text-decoration: none;">
              <div class="team-item text-center rounded overflow-hidden pt-4 p-2" id="team-item">
                <h5 class="mb-2 px-2 text-justify">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab
                  pariatur quae animi minus hic eligendi accusantium
                  accusamus, quod ipsam eius velit sunt id laudantium
                  distinctio itaque quia numquam maiores. Quis?
                </h5>
                <p class="mb-3 px-4 text-center p-2 text-dark" style="color: #000000;">
                  2023
                </p>
                <div class="team-img position-relative">
                  <img class="img-fluid rounded" src="../img/noti1.jpeg" alt="" />
                </div>
              </div>
            </a>

            <!-- <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="../img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="../img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="../img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Attorney Name</h5>
                            <p class="mb-3 px-4">Practice Area</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="../img/team-5.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin de contenedor de acontecimientos recientes -->

  <!-- Testimonial Start -->
  <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-5">
                <h6 class="text-uppercase">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="../img/testimonial-1.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="../img/testimonial-2.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="../img/testimonial-3.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="testimonial-text position-relative bg-secondary text-light rounded p-5 mb-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr clita lorem
                    </div>
                    <div class="d-flex align-items-center pt-3">
                        <img class="img-fluid rounded-circle" src="../img/testimonial-4.jpg"
                            style="width: 80px; height: 80px;" alt="">
                        <div class="pl-4">
                            <h5>Client Name</h5>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> -->
  <!-- Testimonial End -->
  <!-- Contenedor redes sociales y sitios de interes -->
  <article style="background-color: #f0f0f0;">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 my-3 px-5 justify-content-center text-center">
          <div class="text-center justify-content-center mb-5">
            <h1 class="mb-2 my-3">Red social Twitter</h1>
            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"
              class="justify-content-center shadow" style="
                  visibility: visible;
                  display: block;
                  height: 400px;
                  width: 100%;
                " title="Twitter Timeline"
              src="https://syndication.twitter.com/srv/timeline-profile/screen-name/PJDGO?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfdGltZWxpbmVfbGlzdCI6eyJidWNrZXQiOltdLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2ZvbGxvd2VyX2NvdW50X3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9iYWNrZW5kIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19yZWZzcmNfc2Vzc2lvbiI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfZm9zbnJfc29mdF9pbnRlcnZlbnRpb25zX2VuYWJsZWQiOnsiYnVja2V0Ijoib24iLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X21peGVkX21lZGlhXzE1ODk3Ijp7ImJ1Y2tldCI6InRyZWF0bWVudCIsInZlcnNpb24iOm51bGx9LCJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3RlYW1faG9sZGJhY2tfMTE5MjkiOnsiYnVja2V0IjoicHJvZHVjdGlvbiIsInZlcnNpb24iOjExfSwidGZ3X3Nob3dfYmlyZHdhdGNoX3Bpdm90c19lbmFibGVkIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19kdXBsaWNhdGVfc2NyaWJlc190b19zZXR0aW5ncyI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdXNlX3Byb2ZpbGVfaW1hZ2Vfc2hhcGVfZW5hYmxlZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdmlkZW9faGxzX2R5bmFtaWNfbWFuaWZlc3RzXzE1MDgyIjp7ImJ1Y2tldCI6InRydWVfYml0cmF0ZSIsInZlcnNpb24iOm51bGx9LCJ0ZndfbGVnYWN5X3RpbWVsaW5lX3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9mcm9udGVuZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9fQ%3D%3D&amp;frame=false&amp;hideBorder=false&amp;hideFooter=false&amp;hideHeader=false&amp;hideScrollBar=false&amp;lang=es&amp;maxHeight=400px&amp;origin=https%3A%2F%2Fwww.pjecz.gob.mx%2F&amp;sessionId=6b7f8ff170e769bd70d9b566a454fdcb9b356e28&amp;showHeader=true&amp;showReplies=false&amp;siteScreenName=PJCoah&amp;transparent=false&amp;widgetsVersion=aaf4084522e3a%3A1674595607486"></iframe>
            <script async="" src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>

          <h1 class=" mb-2 my-3">Red social Facebook</h1>
          <div id="fb-root"></div>
          <div class="fb-page shadow" data-href="https://www.facebook.com/PJDGO" data-tabs="timeline" align="center"
            style="width: 100%;" data-width="500" data-height="450" data-small-header="true"
            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/PJDGO" class="fb-xfbml-parse-ignore"></blockquote>
          </div>
        </div>
        <div class="col-lg-6 text-center justify-content-center my-3">
          <div>
            <h1 class=" mb-2 my-3">Enlaces de interés</h1>
            <table class="table">
              <thead>
                <tr>
                  Sitios de interés
                </tr>
              </thead>
              <tbody class="my-3 text-justify">
                <tr class="sitios unidad-transparencia" onclick="transparencia()">
                  <td class="align-middle">
                    <img src="../img/transparencia.jpg" alt="" width="100%" />
                  </td>
                  <td class="">
                    <h3>Unidad de transparencia</h3>
                    <h6 class="fechas">2023</h6>
                    Las unidades de transparencia tendrán como finalidad
                    transparentar el ejercicio de la función que realicen los
                    sujetos obligados y coadyuvar con el efectivo ejercicio
                    del derecho de acceso a la información pública.
                  </td>
                </tr>
                <tr class="sitios unidad-contable" onclick="contables()">
                  <td class="align-middle">
                    <img src="../img/contables.jpg" alt="" width="100%" />
                  </td>
                  <td class="">
                    <h3>
                      información contable, presupuestaria y programática
                    </h3>
                    <h6 class="fechas">2022</h6>
                    Información contable, presupuestaria y programática en
                    cuenta pública de la entidad federatica de Durango.
                  </td>
                </tr>
                <tr class="sitios unidad-sevac" onclick="sevac()">
                  <td class="align-middle">
                    <img src="../img/sevac.png" alt="" width="100%" />
                  </td>
                  <td class="">
                    <h3>SEVAC Durango</h3>
                    <h6 class="fechas">2023</h6>
                    SEVAC Durango. Primer trimestre de cuenta pública.
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </article>
  <!-- fin de contenedor de redes sociales y sitios de interes -->

  <!-- contenedor de enlaces a orgnismos externos -->
  <div class="container p-5 text-center my-5">
    <h1 class="text-center">Enlaces a otros organismos</h1>
    <h3 style="color: #646464;" class="border-bottom border-top">Organismos federales</h3>
    <div class="row my-2 mx-5 align-items-center" id="enlaces-organos">
      <div class="col-sm-4 d-flex flex-row">
        <div class="otros-enlaces" onclick="window.open('https://www.gob.mx','_blank');">
          <h4 class=" border-bottom">Gobierno de México</h4>
          <img src="../img/enlace1.jpeg" class="img-enlaces w-50 rounded-circle">
        </div>
      </div>
      <div class="col-sm-4 d-flex flex-row">
        <div class="otros-enlaces" onclick="window.open('https://web.diputados.gob.mx/inicio','_blank');">
          <h4 class=" border-bottom">Cámara de diputados</h4>
          <img src="../img/enlace2.png" class="img-enlaces w-50 rounded">
        </div>
      </div>
      <div class="col-sm-4 d-flex flex-row">
        <div class="otros-enlaces" onclick="window.open('https://www.senado.gob.mx/65/','_blank');">
          <h4 class=" border-bottom">Senado de la república</h4>
          <img src="../img/enlace3.png" class="img-enlaces w-50 rounded">
        </div>
      </div>
    </div>
    <h3 style="color: #646464;" class="border-bottom border-top">Organismos estatales</h3>
    <div class="row my-2 mx-5 border-bottom align-items-center" id="enlaces-organos">
      <div class="col-sm-4 d-flex flex-row">
        <div class="otros-enlaces" onclick="window.open('https://www.durango.gob.mx','_blank');">
          <h4 class=" border-bottom">Gobierno del estado de Durango</h4>
          <img src="../img/enlace4.jpg" class="img-enlaces w-50 rounded-circle">
        </div>
      </div>
      <div class="col-sm-4 d-flex flex-row">
        <div class="otros-enlaces" onclick="window.open('https://durangodigital.gob.mx','_blank');">
        <h4>Durango digital</h4>
          <img src="../img/enlace6.png" alt="Durango digital" class="img-enlaces w-75 rounded-cicle">
        </div>
      </div>
      <div class="col-sm-4 d-flex flex-row">
        <div class="otros-enlaces" onclick="window.open('https://congresodurango.gob.mx/inicio','_blank');">
          <h4 class=" border-bottom">Congreso del estado de Durango</h4>
          <img src="../img/enlace5.png" class="img-enlaces w-75 rounded">
        </div>
      </div>

    </div>
  </div>

  <!-- fin de contenedor a enlaces externos -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="../lib1/easing/easing.min.js"></script>
  <script src="../lib1/waypoints/waypoints.min.js"></script>
  <script src="../lib1/owlcarousel/owl.carousel.min.js"></script>
  <script src="../lib1/tempusdominus/js/moment.min.js"></script>
  <script src="../lib1/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="../lib1/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v17.0"
    nonce="ZjgztQQw"></script>
  <!-- Contact Javascript File -->
  <script src="../mail/jqBootstrapValidation.min.js"></script>
  <script src="../mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="../js/main.js"></script>
  <script src="enlaces_interes.js"></script>
</body>

</html>

<?php 
include_once "../footer-header/footer.php";

?>
