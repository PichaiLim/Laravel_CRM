@extends('layouts.admin.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User Form Elements</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>User Form Design
                                <small>different form elements</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form action="{{ route('admin.user.create.submit') }}" method="post" id="my-form" data-parsley-validate class="form-horizontal form-label-left" role="form">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name" class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Full Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name"
                                               class="form-control col-md-7 col-xs-12"
                                               id="name" required="required" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email"
                                               class="form-control col-md-7 col-xs-12"
                                               id="email" required="required" value="{{ old('email') }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password"
                                           class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" name="password"
                                               class="form-control col-md-7 col-xs-12"
                                               id="password" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation"
                                           class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Confirm Password
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password"
                                               name="password_confirmation"
                                               class="form-control col-md-7 col-xs-12"
                                               id="password_confirmation" required="required" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">
                                        Address
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="address" id="address" class="form-control col-md-7 col-xs-12"
                                                  role="textbox">{{old('address')}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone" class="control-label col-md-3 col sm-3 col-xs-12">
                                        Phone
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-sm-12">
                                        <input type="tel" name="phone"
                                               class="form-control col-md-7 col-xs-12"
                                               id="phone" value="{{ old('phone') }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="gender" id="gender" class="form-control col-md-7 col-xs-12">
                                            @foreach($gender as $item => $value)
                                                @if(old('gender') === $item)
                                                    <option value="{{ $item }}" selected="selected">{{ $value }}</option>
                                                @else
                                                    <option value="{{ $item }}">{{ $value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button role="button" class="btn btn-primary" type="button" onclick="javascript:window.history.back();">Cancel</button>
                                        <button role="button" class="btn btn-primary" type="reset" onclick="javascript:confirm('Are you sure reset data Yes or No?');">Reset</button>
                                        <button role="button" type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->
@endsection