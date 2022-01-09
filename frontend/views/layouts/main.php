<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--    animation_link-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/animation/animate.animation.css">

    <!--    bootstrap_link-->
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/bootstrap-4.6.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/bootstrap-4.6.0-dist/css/bootstrap.css">

    <!--    project_link-->
    <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/css/style.default.css">
    <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/css/header.footer.css">
    <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/css/booking.style.css">
    <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/css/contact.style.css">
    <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/css/about.style.css">
   <link rel = "stylesheet" href = "<?= Yii::$app->request->baseUrl; ?>/resources/vendor/css/blog.default.css">
   <link rel = "stylesheet" href = "/yiitemp/resources/vendor/css/blogtwo.default.css">
   <link rel = "stylesheet" href = "/yiitemp/resources/vendor/css/try.default.css">

    <!--    font_link-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--    footer_link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <?php $this->head() ?>
</head>
<body>
<script> var  baseUrl = "<?= Yii::$app->request->baseUrl; ?>"  </script>

<div class = "container-fluid main-top-header">
   <div class = "row">
      <div class = "co-12 col-md-6">
         <a class="navbar-hotel text-dark" href="#">Hotel Himalaya INN</a>
      </div>
      <div class = "co-12 col-md-6 main-top-icon">
         <div class="row  pull-right top-icon-row">
               <div class="top-icon col-3">
                  <i class="fab fa-twitter text-dark twit"></i>
               </div>
               <div class="top-icon col-3">
                  <i class="fab fa-instagram text-dark insta"></i>
               </div>
               <div class="top-icon col-3">
                  <i class="fab fa-facebook text-dark face"></i>
               </div>
            <div class="top-icon col-3">
               <i class="fab fa-google-plus-g text-dark goog"></i>
            </div>
         </div>
      </div>
   </div>
</div>

<header class="main-header">
   <div class="container">
       <nav id="nav-active" class="site-nav navbar navbar-expand-lg navbar-dark text-dark">
          <a class="navbar-brand" href="#">
             <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/logo/logo-1.png" class="d-block w-100" alt="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/logo/hotel-logo.png" >
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-right collapse navbar-collapse" id="navbarNavAltMarkup">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href = "<?= Yii::$app->request->baseUrl; ?>/" class="nav-link nav-btn">Home
                      <span class="sr-only">(current)</span></a></li>
                <li class="nav-item dropdown drop-nav-main">
                   <a class="nav-btn add-button nav-link dropdown-toggle drop-nav-btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Blog</a>
                   <div class="nav-top-dropdown dropdown-menu drop-nav-item" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item text-white-50" href="<?= Yii::$app->request->baseUrl; ?>/blog/">Blog one</a>
                      <a class="dropdown-item text-white-50" href="<?= Yii::$app->request->baseUrl; ?>/blogtwo/">Blog two</a>
                      <a class="dropdown-item text-white-50" href="#" data-toggle="modal" data-target="#exampleModal">Add Blog one</a>
                      <a class="dropdown-item text-white-50" href="#">Add Blog two</a>
                   </div>
                </li>
                <li class="nav-item"><a href = "<?= Yii::$app->request->baseUrl; ?>/about/" class="nav-link nav-btn">About</a></li>
                <li class="nav-item"><a href = "<?= Yii::$app->request->baseUrl; ?>/contact/" class="nav-link nav-btn">Contact</a></li>
                <li class="nav-item"><a href = "<?= Yii::$app->request->baseUrl; ?>/booking/" class="nav-link nav-btn">Booking</a></li>
                <li class="lang navbar-text"><a href = "#" class="ab">| EN |</a></li>
             </ul>
          </div>
       </nav>
   </div>
</header>
<?php $this->beginBody() ?>
<div class="main-body">
    <?= $content ?>
</div>



    <!-- Footer -->
<section class="no-padding-top">
      <div class="container top-footer">
         <div class="row m-auto top-footer-color">
            <div class="col-12 col-md-7 top-footer-text text-white">
                     <h3>Have any Vacation idea in Mind!! Book Now!!</h3>
                     <p>It’s not glamorous and some people might not even consider
                        it a true vacation but staying with friends or family is an
                        easy cheap vacation idea. Plus, you’ll get to spend time with
                        the people you love!</p>
                  </div>
            <div class="col-12 col-md-5 footer-button text-center">
                     <button class="btn btn-info">Book Now !</button>
                  </div>
         </div>
      </div>
</section>
<div class="footer-image" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/resources/vendor/images/footer_bg.png); background-repeat: no-repeat; background-size: cover;">
      <footer id="page_footer">
         <div class="container">
            <div class="row">
               <div class="col-12 col-md-4">
                  <div class="footer-body">
                     <div class="footer-body-title">
                        <img src="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/images/logo/logo-1.png" class="img-fluid" alt="">
                     <p>
                        You don’t need to wipe out your savings take an amazing trip with your kids & family.
                        These surprisingly affordable destinations will make everyone happy. Follow us on:</p>
                     </div>
                     <ul class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-md-4 text-dark footer-links">
                     <h4 style="margin-left: 2rem;">Links</h4>
                  <ul>
                     <li><a href="" class="active">Home</a></li>
                     <li><a href="">Blog</a></li>
                     <li><a href="">About</a></li>
                     <li><a href="">Contact</a></li>
                     <li><a href="">Booking</a></li>
                  </ul>

               </div>
               <div class="col-12 col-md-4 footer-information">
                     <div class="footer_body_title">
                        <h4 style="margin-left: 1.5rem;">Contact Us</h4>
                     </div>
                     <div class="contact-info" id="contact-information">
                        <div class="row single-info">
                           <div class="col-2 icon text-center">
                              <i class="fa fa-phone-alt"></i>
                           </div>
                           <div class="col-10 info">
                              <p><a href="tel:+9779860573349">+977-9860573349</a></p>
                           </div>
                        </div>
                        <div class="row single-info">
                           <div class="col-2 icon text-center">
                              <i class="fa fa-envelope"></i>
                           </div>
                           <div class="col-10 info">
                              <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNqsdtNbmxFbDmdmHpGBxgwTNxJMtMtfTfpKDwCNZBfwRmWNfHbDVGZFBQrLZKjPFRlqZg">keerasmhz@ gmail. com</a></p>
                           </div>
                        </div>
                        <div class="row single-info">
                           <div class="col-2 icon text-center">
                              <i class="fa fa-map-marker-alt"></i>
                           </div>
                           <div class="col-10 info">
                              <p>27 - Lalitpur, Nepal, <br><span>Sunakothi, Chautara.</span></p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </footer>
   </div>


<section class="no-padding-top">
   <div class="copyright_area" style="background-color: #124773; padding: 1.3rem 0 0.6rem 0; font-size: 1.2rem;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12" style="">
               <div data-aos-anchor-placement="top-bottom" data-aos="zoom-in-down" data-aos-duration="600" class="copyright_text">
                  <p class="text-white text-center">Copyright &copy; 2020 All rights reserved.</p>
               </div>
            </div>
         </div>
      </div>
   </div>

</section>

    <!--    bootstrap_jquery_link-->
    <script src="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/jquery/jquery.min.js"></script>

    <!--bootstrap_link-->
    <script src="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>

    <!--animation_link-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--project_link-->
<script src="<?= Yii::$app->request->baseUrl; ?>/resources/vendor/js/main.default.js"></script>

<script>
    // $.ajaxSetup({
    //     data: {
    //         '_csrf-one': $('meta[name=csrf-token]').prop('content')
    //     }
    // });
</script>
    <script> AOS.init(); </script>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
