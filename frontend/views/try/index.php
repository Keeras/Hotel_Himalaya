<section>
   <div class="booking-all">
      <div class = "container d-flex justify-content-center">
         <div class = "row booking-main">
            <div class = "col-12 col-md-6 col-lg-6 booking-image-main">
               <div class="booking-image" style="background-image: url(<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/booking-pic.jpg)">
                  <div class="booking-image-header">
                     <h2 class="text-white">Make your reservation</h2>
                     <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
                  </div>
               </div>
            </div>
            <div class = "col-12 col-md-6 col-lg-6 booking-form-main">
               <form>
                  <div class="row">
                     <div class="booking-label-1 col-md-6">
                        <div class="form-group">
                           <span class="form-label">Check In</span>
                           <input class="form-control" type="date" required>
                        </div>
                     </div>
                     <div class="booking-label-2 col-md-6">
                        <div class="form-group">
                           <span class="form-label">Check Out</span>
                           <input class="form-control" type="date" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="booking-label-3 col-md-6">
                        <div class="form-group">
                           <span class="form-label">Adults</span>
                           <select class="form-control">
                              <option class="booking-option">1</option>
                              <option class="booking-option">2</option>
                              <option class="booking-option">3</option>
                           </select>
                           <span class="select-arrow"></span>
                        </div>
                     </div>
                     <div class="booking-label-4 col-md-6">
                        <div class="form-group">
                           <span class="form-label">Children</span>
                           <select class="form-control">
                              <option class="booking-option">0</option>
                              <option class="booking-option">1</option>
                              <option class="booking-option">2</option>
                           </select>
                           <span class="select-arrow"></span>
                        </div>
                     </div>
                  </div>
                  <div class="booking-label-5 form-group">
                     <span class="form-label">Room Type</span>
                     <select class="form-control" required>
                        <option value="" selected hidden>Select room type</option>
                        <option class="booking-option">Private Room (1 to 2 People)</option>
                        <option class="booking-option">Family Room (1 to 4 People)</option>
                     </select>
                     <span class="select-arrow"></span>
                  </div>
                  <div class="booking-label-btn form-btn booking-button">
                     <button class="submit-btn">Check availability</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!--line-and-icon-->
<section>
   <div class = "container-fluid">
      <div class = "row">
         <div class = "line-with-icon">
            <div class = "icon-with-line">
               <a><img src = "<?= Yii::$app->request->baseUrl;?>/resources/vendor/images/logo/logo-1.png" alt = ""></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--line-and-icon-->
<section>
   <div class = "container">
      <div class = "row">
         <div class = ""></div>
      </div>
   </div>
</section>
