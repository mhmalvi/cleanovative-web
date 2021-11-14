<!--====== BREADCRUMB PART START ======-->
<section class="breadcrumb-area service-breadcrumb-area" style="background-image: url({{ asset('images/breadcrumb.jpg') }});">
    <div class="container">
        <div class="breadcrumb-text text-center col-md-8 mx-auto pb-25 pt-25">
            <h1 class="page-title text-dark">
                {{ isset($banner_title) ? $banner_title : "Service Details" }}
            </h1>
            <div class="service-banner-content">
                {!! $content !!}
            </div>
        </div>
    </div>
</section>
<!--====== BREADCRUMB PART END ======-->
