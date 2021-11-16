<!--====== APPOINTMENT PART START ======-->
<section class="appointment-section pt-90 pb-130">
    <div class="container">
        <div class="contact-info-boxes">
            <div class="row">
                <div class="col-md-4 offset-md-2">
                    <!-- Single Boxes -->
                    <div class="card pt-25 pb-25 text-center mt-25 bg-theme-extra-light shadow-sm border-second-color">
                        <div class="card-body">
                            <span class="icon h2">
                                <img src="{{ asset('images/icons/contact.png') }}" alt="phone">
                            </span>
                            <h6 class="title py-2">Phone Number</h6>
                            <p class="info"><a href="tel:0401396554">0401396554</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Single Boxes -->
                    <div class="card pt-25 pb-25 text-center mt-25 bg-theme-extra-light shadow-sm border-second-color">
                        <div class="card-body">
                        <span class="icon h2">
                            <img src="{{ asset('images/icons/mail.png') }}" alt="email">
                        </span>
                        <h6 class="title py-2">Email Address</h6>
                        <p class="info">
                            <a href="mailto:info.cleanovative@gmail.com">
                                info.cleanovative@gmail.com
                            </a>
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-60 pt-5">
            <div class="col-md-6 pt-50 pb-5">
                <div class="section-title left-border mb-30">
                    <h2 class="pt-0">Say Hello</h2>
                    <p class="title-tag">Leave A Message</p>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="form-group col-12">
                            <input type="text" class="form-control" placeholder="Your Name*" required>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="form-control" placeholder="Your Business name">
                        </div>
                        <div class="form-group col-12">
                            <input type="tel" class="form-control" placeholder="Your Phone Number*">
                        </div>
                        <div class="form-group col-12">
                            <input type="email" class="form-control" placeholder="Your Email*">
                        </div>
                        <div class="form-group col-12">
                            <textarea class="form-control" placeholder="Brief comment about your enquiry" rows="8"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="main-btn"> Send <i class="fal fa-plus"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 pt-50 pb-15 order-first order-md-last">
                <img src="{{asset('images/contact-us.jpg')}}" alt="contact us" class="img-thumbnail">
            </div>
        </div>
    </div>
</section>
<!--====== APPOINTMENT PART END ======-->
