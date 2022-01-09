

<section>
    <div id="booking" class="booking" style="font-size: 2rem;">
        <div class="booking-center">
            <div class="container center-booking">
                    <div class="row booking-form" data-aos="zoom-out">
                        <div class="col-12 col-md-6" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="350">
                            <div class="booking-bg" style="background-image: url(<?= Yii::$app->request->baseUrl; ?>/resources/vendor/images/booking-pic.jpg);">
                                <div class="booking-form-header">
                                    <h2 data-aos="zoom-in-up" data-aos-delay="1000" data-aos-duration="500">Make your reservation</h2>
                                    <p data-aos="zoom-in-up" data-aos-delay="1100" data-aos-duration="600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 booking-inner-form">
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
    </div>
</section>