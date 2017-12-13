@extends('layout.app')

@section('content')

<section>

    <!-- canvas -->
    <div id="canvas" class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="color:#f3c223;">
                    <strong>I Am Pichai Limpanitivat.</strong>
                </h3>

                <br/>

                <p style="color:#ffffff; font-weight: 700; font-size: 50px;">I am Developer.</p>

                <br/>

                <a href="#service" class="btn btn-success">
                    <strong>
                        <i class="fa fa-mouse-pointer" aria-hidden="true"></i>&nbsp; Click Get Start
                    </strong>
                </a>
            </div>
        </div>
    </div>
    <!-- ./canvas -->

    <!-- service -->
    <div id="service" class="container clearfix-padding">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="title-header">Our Service</h2>
                <p>
                    I'm professional development Software.
                </p>
            </div>

            <div class="clearfi">&nbsp;</div>

            <div class="col-xs-6 col-sm-4">
                <div class="text-center">
                        <span class="fa-stack fa-lg fa-5x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-globe fa-stack-1x fa-inverse"></i>
                        </span>

                    <h4>
                        <strong>
                            Application
                        </strong>
                    </h4>

                    <p>
                        ตอบสนองทุกความต้องการของผู้ใช้ Web Application
                    </p>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4">
                <div class="text-center">
                        <span class="fa-stack fa-lg fa-5x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
                        </span>

                    <h4>
                        <strong>
                            Web Design
                        </strong>
                    </h4>

                    <p>
                        ออกแบบได้ทุกความต้องการของผู้ใช้งานให้ถูกหลัก UX & UI เพื่อให้เป็นมิตรกับผู้ใช้งาน
                    </p>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="text-center">
                        <span class="fa-stack fa-lg fa-5x">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-code fa-stack-1x fa-inverse"></i>
                        </span>

                    <h4>
                        <strong>
                            Backend Service
                        </strong>
                    </h4>

                    <p>
                        ปรับแต่งระบบภายในเพื่อให้มีความปลอดภัยมากขึ้น และสามารถแก้ไขปัญหาได้ตามที่ต้องการ
                    </p>
                </div>
            </div>

            <div class="clearfix clearfix-padding">&nbsp;</div>

            <!-- button -->
            <div class="col-xs-12 text-center">
                <a href="{{ route('service') }}" class="btn btn-primary">
                    <strong>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        &nbsp; Buy Service
                    </strong>
                </a>
            </div>
            <!-- ./button -->
        </div>
    </div>
    <!-- ./service -->

</section>

<div class="clearfix">&nbsp;</div>

<!-- slide -->
<section class="owl-carousel-container clearfix-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="olw-title">
                    <strong>My Work</strong>
                    <br/>
                    <small>
                        <a href="{{ route('project') }}" style="text-decoration: none; color: rgba(255,255,255,0.5);">Overview <i
                                    class="fa fa-arrow-right"></i></a>
                    </small>
                </h1>
            </div>
        </div>
    </div>

    <div class="clearfix">&nbsp;</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">

                <div class="owl-carousel owl-theme">

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/Justklass/canvasRegisterTeacher_ByJustklass.png') }}"
                                 alt="Web Site: Justklass.com">
                        </picture>
                        <p class="text-center chapter-image">
                            Web Site: Justklass.com
                            <br/>
                            <span class="text-muted">
                                งานฟรีเลนช์ปี 2017 <br/>
                                [ PHP Yii Framework & AngularJs ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/Justklass/canvasJustklass.png') }}"
                                 alt="Web Site: Justklass.com">
                        </picture>
                        <p class="text-center chapter-image">
                            Web Site: Justklass.com
                            <br/>
                            <span class="text-muted">
                                งานฟรีเลนช์ปี 2017 <br/>
                                [ PHP Laravel Framework & Jquery ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/ActiveLine/canvasActiveLine.png') }}"
                                 alt="Web Site: Active Line - QPP">
                        </picture>
                        <p class="text-center chapter-image">
                            Web Site: Active Line
                            <br/>
                            <span class="text-muted">
                                โดยนาม P-Soft ปี 2017 <br/>
                                [ PHP OOP ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/WebApp_ODOO/canvasODOO.png') }}"
                                 alt="Web Application: Modify ODOO">
                        </picture>
                        <p class="text-center chapter-image">
                            Web Application: Modify ODOO to PHP
                            <br/>
                            <span class="text-muted">
                                งานฟรีเลนช์ปี 2017 <br/>
                                [ PHP Yii Framework & AngularJs ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/WebApp_BookingAtBangna/canvasBangna.png') }}"
                                 alt="Web Application: Booking Apartment">
                        </picture>
                        <p class="text-center chapter-image">
                            Web Application: Booking Apartment @Bangna
                            <br/>
                            <span class="text-muted">
                                โดยนาม P-Soft ปี 2016 <br/>
                                [ PHP Yii Framework & AngularJs ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/All2Sale/canvas_all2sale.png') }}"
                                 alt="WebSite: All2Sale.com">
                        </picture>
                        <p class="text-center chapter-image">
                            Web site backend: All2Sale.com
                            <br/>
                            <span class="text-muted">
                                งานฟรีเลนช์ปี 2016 <br/>
                                [ PHP Yii Framework ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/Jintai_Jewelry_Group/canvasJintaiJewelry.png') }}"
                                 alt="WebSite: JintaiJewelry.com">
                        </picture>
                        <p class="text-center chapter-image">
                            Web site: JintaiJewelry.com
                            <br/>
                            <span class="text-muted">
                                ใดยนาม Jintai Jewelry Group ปี 2016 <br/>
                                [ HTML & AngularJs ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/Monavie/canvasMonavie.png') }}"
                                 alt="WebSite: Monavie">
                        </picture>
                        <p class="text-center chapter-image">
                            Web site: Monavie
                            <br/>
                            <span class="text-muted">
                                งานฟรีเลนช์ปี 2013 <br/>
                                [ PHP Yii framework & Css2 & Jquery ]
                            </span>
                        </p>
                    </span>

                    <span class="owl-lazy">
                        <picture>
                            <img class="img-owl img-responsive img-thumbnail"
                                 src="{{ asset('image/portfolio/CrossSuper/canvasCrossSuper.png') }}"
                                 alt="Web Application: CrossSuper">
                        </picture>
                        <p class="text-center chapter-image">
                            Web Application: CrossSupper ( ERP )
                            <br/>
                            <span class="text-muted">
                                งานฟรีเลนช์ปี 2009 <br/>
                                [ PHP & Css2 & Jquery ]
                            </span>
                        </p>
                    </span>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./slide -->


@endsection