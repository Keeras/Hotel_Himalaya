<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<section class="no-padding-top">
   <div data-aos="zoom-out" data-aos-duration="600">
      <div class="carousel-index carousel slide" id="index-carousel-slider" data-ride="carousel">
               <div class="carousel-inner">
                  <div  class="carousel-item active">
                     <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/slider/image-slider-1.jpg" class="d-block w-100" alt="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/slider-11.jpg">
                     <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/slider/image-slider-2.jpg" class="d-block w-100" alt="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/slider-22.jpg">
                     <div class="carousel-caption d-none d-md-block">
                     </div>
                  </div>
                  <div class="carousel-item">
                     <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/slider/image-slider-1.jpg" class="d-block w-100" alt="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/slider-33.jpg">
                     <div class="carousel-caption d-none d-md-block">
                     </div>
                  </div>
               </div>
               <ul class="carousel-indicators">
                  <li data-target="#index-carousel-slider" data-slide-to="0" class="active"></li>
                  <li data-target="#index-carousel-slider" data-slide-to="1"></li>
                  <li data-target="#index-carousel-slider" data-slide-to="2"></li>
               </ul>
               <a class="carousel-control-prev" href="#index-carousel-slider" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#index-carousel-slider" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
            </div>
   </div>
</section>
<div class="page-header index-second-header">
    <div class="container-fluid">
        <div class="row page-header-items">
            <div data-aos="zoom-in" data-aos-duration="600" data-aos-anchor-placement="bottom-bottom"  class="col head-second-item">
                <a class="text-white">Html Project</a>
                <div class="my-head-title"><h2>Index Page</h2></div>
            </div>
        </div>
    </div>
</div>
    <!-- Grid container -->
<section>
    <div class="container">
        <!-- Section: Images -->
        <div class="pic-index">
            <div class="row">
                <div data-aos="fade-down" data-aos-duration="600" data-aos-anchor-placement="center-bottom" class="col-xs-12 col-md-6 col-lg-3">
                    <div class="bg-image ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/image-down-gym.jpg" class="border-radius-15 image-zoom w-100"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(18, 102, 241, 0.5);"></div></a>
                    </div>
                </div>
                <div data-aos-delay="150" data-aos="fade-down" data-aos-duration="800" data-aos-anchor-placement="center-bottom" class="col-xs-12 col-md-6 col-lg-3">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/image-down-pool.jpg" class="border-radius-15 image-zoom w-100"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
                <div data-aos-delay="300" data-aos="fade-down" data-aos-duration="800" data-aos-anchor-placement="center-bottom" class="col-xs-12 col-md-6 col-lg-3">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/image-down-dinning.jpg" class="border-radius-15 image-zoom w-100"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
                <div data-aos-delay="450" data-aos="fade-down" data-aos-duration="800" data-aos-anchor-placement="center-bottom" class="col-xs-12 col-md-6 col-lg-3">
                    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
                        <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/image-down-tv.jpg" class="border-radius-15 image-zoom w-100"/>
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding-top">
    <div data-aos="zoom-in" data-aos-duration="800" data-aos-anchor-placement="center-bottom" class="container">
        <div class="row">
            <div class="index-text-parg col-lg-12 col-md-12">
                <p class="text-dark">The great advantage of a hotel is that it is a refuge from Home life.</p>
            </div>
        </div>

    </div>
</section>

<section class="">
        <div class="container">
            <div class="row">
                <div data-aos="flip-left" data-aos-duration="1000" data-aos-anchor-placement="top-center" class="index-pic-fade col-12 col-lg-6">
                    <div id="carousel-index-fade-2" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner border-radius-15">
                            <div class="carousel-item active">
                                <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/slider/image-index-pool-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/slider/image-index-pool-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/index/slider/image-index-pool-3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-index-fade-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-index-fade-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <div class="index-pic-fade col-12 col-lg-6" data-aos-delay="200" data-aos="zoom-in" data-aos-duration="800" data-aos-anchor-placement="top-center">
                    <p class="index-text-justify text-dark">And, of course, beaches are far from your only options with the kids,
                        though you can’t ever go wrong with an all-inclusive, family-friendly resort, especially one in Hawaii.
                        You can explore America’s rich history in every single state and take advantage of the wonderful things
                        the locals love—from enjoying free museums and outdoor concerts to strolling through a destination’s
                        cobblestone streets or national parks. You can also find similar options in Mexico, the Caribbean, and
                        Canada, once the border reopens. In short, we’ve got just the vacation for you, no matter what you and
                        your family would like to do.</p>
                </div>
            </div>
        </div>
    </section>



