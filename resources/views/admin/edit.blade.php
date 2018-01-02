@extends('layouts.admin.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Elements</h3>
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
                            <h2>Form Design
                                <small>different form elements</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    {{--<ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>--}}
                                </li>
                                <li><a href="{{ URL::previous() }}" class="close-link" role="link"><i
                                                class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form action="{{ route('admin.edit.admin.submit', ['id'=>$admin->id]) }}" method="post" id="my-form" data-parsley-validate
                                  class="form-horizontal form-label-left" role="form" onautocomplete="false">

                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="admin_id" value="{{ $admin->id }}">
                                <input type="hidden" name="roleUser" id="roleUser" value="{{ $admin->roleUser->id }}">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                                        Name
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" id="name" required="required"
                                               class="form-control col-md-7 col-xs-12" autofocus="true" value="{{ $admin->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" required="required"
                                               class="form-control col-md-7 col-xs-12" value="{{ $admin->email }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="roles" class="control-label col-md-3 col-sm-3 col-xs-12">Roles </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select name="roles" id="roles" class="form-control" required="required">
                                            @foreach($roles as $item => $value)
                                                @if($value->id === $roleSelected)
                                                    <option value="{{ $value->id }}" selected="selected">{{ $value->name }}</option>
                                                @else
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button class="btn btn-primary" type="button" role="button"
                                                onclick="javascript:history.back();">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success" role="button">Submit</button>
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