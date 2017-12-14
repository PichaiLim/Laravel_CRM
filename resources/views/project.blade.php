<?php
/**
 * Created by PhpStorm.
 * User: pichailim
 * Date: 8/12/2017 AD
 * Time: 15:28
 */
?>
@extends('layouts.app')

@section('content')

    <section class="container container-fixtop">
        <aside class="row">
            <div class="col-xs-12">
                <h3 class="page-header text-warning-2">ตัวอย่างผลงาน</h3>
            </div>
        </aside>

        <div class="row">

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/Justklass/canvasRegisterTeacher_ByJustklass.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web Site: Justklass.com</strong>
                    <br>
                    งานฟรีเลนช์ปี 2017 <br/>
                    [ PHP Yii Framework & AngularJs ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/Justklass/canvasJustklass.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web Site: Justklass.com</strong>
                    <br/>
                    งานฟรีเลนช์ปี 2017 <br/>
                    [ PHP Laravel Framework & Jquery ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/ActiveLine/canvasActiveLine.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web Site: Active Line</strong>
                    <br/>
                    โดยนาม P-Soft ปี 2017 <br/>
                    [ HTML + CSS Framework + PHP OOP ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/WebApp_ODOO/canvasODOO.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web Application: Modify ODOO to PHP</strong>
                    <br/>
                    งานฟรีเลนช์ปี 2017 <br/>
                    [ PHP Yii Framework & AngularJs ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/WebApp_BookingAtBangna/canvasBangna.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web Application: Booking Apartment @Bangna</strong>
                    <br/>
                    โดยนาม P-Soft ปี 2016 <br/>
                    [ PHP Yii Framework & AngularJs ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/All2Sale/canvas_all2sale.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web site backend: All2Sale.com</strong>
                    <br/>
                    งานฟรีเลนช์ปี 2016 <br/>
                    [ PHP Yii Framework ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/Jintai_Jewelry_Group/canvasJintaiJewelry.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web site: JintaiJewelry.com</strong>
                    <br>
                    ใดยนาม Jintai Jewelry Group ปี 2016 <br/>
                    [ HTML & AngularJs ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/Monavie/canvasMonavie.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web site: Monavie</strong>
                    <br/>
                    งานฟรีเลนช์ปี 2013 <br/>
                    [ PHP Yii framework & Css2 & Jquery ]
                </p>
            </div>

            <div class="col-xs-12 col-sm-6 text-center">
                <picture><img src="{{ asset('image/portfolio/CrossSuper/canvasCrossSuper.png') }}" alt="" class="img-responsive img-thumbnail img-project"></picture>
                <p class="chapter-image">
                    <strong>Web Application: CrossSupper ( ERP )</strong>
                    <br>
                    งานฟรีเลนช์ปี 2009 <br/>
                    [ PHP & Css2 & Jquery ]
                </p>
            </div>

        </div>
    </section>

@endsection
