<?php
/**
 * Created by PhpStorm.
 * User: pichailim
 * Date: 11/12/2017 AD
 * Time: 01:26
 */
?>

@extends('layout.app')

@section('content')

    <section class="container container-fixtop">
        <aside class="row">
            <div class="col-xs-12">
                <h3 class="page-header text-warning-2">สนใจทำเว็บไซต์?</h3>
                <p>
                    การทำเว็บไซต์นั้นมีหลากหลายของเขตงาน ซึ่งทางเราใส่ใจทุกรายละเอียดของการทำงานตามที่ลูกค้าต้องการ
                    และพร้อมที่จะศึกษาข้อมูล แบ่งความรู้ที่เท่าเรามีให้กับลูกค้า ทั้งนี้ทางเรามีบริการหลาย
                </p>
                <ul class="list-unstyled" style="padding-left: 2rem;">
                    <li>
                        <b class="text-info">1. Frontend: &nbsp;</b>
                        งานดีไซน์เพื่อตอบสนองต่อความต้องการของผู้ใช้งานสูงสุด
                        และมีแนวทางที่ชัดเจนในการออกแบบที่เป็นมาตราฐาน
                    </li>
                    <li>
                        <b class="text-info">2. Backend: &nbsp;</b>
                        ตอบสนองการเชื่อมต่อทุก Device รองรับระบบแบบ Real-Time มีความปลอดภัยในการเข้าถึงระบบ
                    </li>
                </ul>
                
                <blockquote class="">
                    <p class="text-warning">
                    <small>
                        <strong> หมายเหตุ:</strong> การันตีการทำงานที่สามารถทำงานเป็นทีมหรือส่งต่องานให้ทีมอื่นได้ด้วยโค๊ดที่อ่านเข้าใจง่าย และเป็นมิตรต่อโปรแกรมเมอร์ด้วยกันที่ไม่ต้องมานั่งปวดหัวกุมขมับว่าตัวแปรนี้มันเชี้ยไรวะเนี่ย ในงานด้านออกแบบใช้เครื่องมือที่มีคุณภาพในการทำงานที่เป็นทีมได้ดีและมีการ comment ในแต่ละส่วนว่ามันคือมันอะไร
                    </small>
                    </p>
                </blockquote>
            </div>
        </aside>

        <div class="clearfix clearfix-padding">&nbsp;</div>

        <aside class="row bg-color5" style="border: 2px solid rgba(0,0,0, 0.2); border-radius: 5px;">
            <div class="col-xs-12 col-sm-8 col-md-9">
                <h3 class="page-header text-info">
                    <strong>1. Frontend:</strong>
                    <span class="pull-right">
                        <a href="#" class="btn btn-success btn-sm">สนใจคลิก <i class="fa fa-arrow-right"></i></a>
                    </span>
                </h3>

                <p>
                    งานดีไซน์ที่ออกแบบมาเพื่อตอบสนองต่อความต้องการของผู้ใช้อย่างหลากหลาย
                    และรองรับทุกขนาดของหน้าจอที่มากับพร้อมเครื่องมือในการออกแบบมีมาตราฐานระดับโลกซึ่งทำให้มั่นใจได้ว่าสามารถทำงานร่วมกันได้มากกว่า
                    1 คนและถูกลิขสิทธิ์ทุกชิ้น
                </p>

                <p>
                    <a href="{{route('project')}}" class="btn btn-link">ตัวอย่างผลงาน</a>
                </p>

                <p>
                    โดยปกติจะใช้เวลาสำหรับขึ้นระบบทดสอบประมาณ 1 เดือน ดีไซน์ประมาณ 1 เดือน และได้ประมาณ 1 เดือน
                    หรือเร็วกว่านั้นตามระยะงานที่ได้รับมาก รับงานไม่เกิน 2 งาน
                </p>

                <p>
                    เว็บทุกเว็บที่สร้างนั้น รองรับการแสดงผลบนมือถือและแท็บเบล็ต และมีโครงสร้างถูกต้องตามหลัก SEO
                    ทำให้ติด Google ได้โดยธรรมชาติและยังยืน
                </p>

                <div class="clearfix-padding"></div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-3" style="padding-top: 2rem; padding-right: 0;">
                <h4 class="well well-lg">
                    <strong>
                        2 - 5 หมื่นบาท
                    </strong>
                    <br><a href="{{route('project')}}" class="btn btn-link">ตัวอย่างผลงาน</a>
                    <small><a href="#" class="discount">ขอส่วนลด</a></small>
                </h4>

            </div>
        </aside>

        <div class="clearfix">&nbsp;</div>

        <aside class="row bg-color5" style="border: 2px solid rgba(0,0,0, 0.2); border-radius: 5px;">
            <div class="col-xs-12 col-md-9">
                <h3 class="page-header text-info">
                    <strong>2. Backend:</strong>
                    <span class="pull-right">
                        <a href="#" class="btn btn-success btn-sm">สนใจคลิก <i class="fa fa-arrow-right"></i></a>
                    </span>
                </h3>

                <p>
                การเชื่อมต่อระบบที่หลากหลายอย่างลงตัวด้วย Restful API และมีความปลอดภัยในการเข้าถึงระบบการใช้งานในการติดต่อสื่อสารระหว่าง Device ที่จะเข้ามาเชื่อต่อกับระบบและการ Query Data ที่เร็วแม่นยำด้วยประสบการที่สั่งสบมานาน
                </p>

                <p>
                    <a href="{{route('project')}}" class="btn btn-link">ตัวอย่างผลงาน</a>
                </p>
                
                <p>
                โดยปกติใช้เวลาในการออกแบบระบบ 1 เดือน ลงมือทำระยะเวลาประมาณ 2 เดือน ทดสอบระบบ 1 เดือน และได้ประมาณ 3 เดือน หรือเร็วกว่านั้นตามระยะงานที่ได้รับมาก รับงานไม่เกิน 2 งาน
                </p>

                <p>
                    เว็บทุกเว็บที่สร้างนั้น รองรับการเชื่อมต่อที่หลายหลายและมีความปลอดภัยในระบบที่คุณพอใจ
                </p>
            </div>
            <div class="col-xs-12 col-md-3" style="padding-top: 2rem; padding-right: 0;">
                <h4 class="well well-lg">
                    <strong>
                        5 - 9 หมื่นบาท
                    </strong>
                    <br><a href="{{route('project')}}" class="btn btn-link">ตัวอย่างผลงาน</a>
                    <small><a href="#" class="discount">ขอส่วนลด</a></small>
                </h4>
            </div>
        </aside>
    </section>

@endsection
