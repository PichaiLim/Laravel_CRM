<!-- navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {{{ (Request::is('project') ? 'class=active' : '') }}}>
                    <a href="{{ route('project') }}">ตัวอย่างผลงาน</a>
                </li>

                <li {{{ (Request::is('service') ? 'class=active' : '') }}}>
                    <a href="{{ route('service') }}">สนใจทำเว็บไซต์?</a>
                </li>

                <li>
                    <a href="#">บันทึก</a>
                </li>

                <li>
                    <a href="#">บทเรียนออนไลน์</a>
                </li>

                <li>
                    <a href="#contactUs">ติดต่อเรา</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!-- /.navbar -->
