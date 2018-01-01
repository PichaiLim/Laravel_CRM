@extends('layouts.admin.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>User Contact</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="{{ route('admin.search') }}" method="get" role="form">
                            <div class="input-group">
                                <input type="search" name="search" id="txt_search" class="form-control"
                                       placeholder="Search for name">
                                <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Go!</button>
                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <a href="{{ route('admin.create.admin') }}" class="btn btn-primary btn-sm"
                                       role="button"><i class="fa fa-plus"></i> Add User</a>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    {{ $adminAll->appends(['search' => Request::get('search'), 'page'=>Request::get('page')])->links() }}
                                </div>

                                <div class="clearfix"></div>

                                @foreach($adminAll as $item => $value)
                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                            <div class="col-sm-12">
                                                {{--  <h4 class="brief"><i>{{ $value->name }}</i></h4>  --}}
                                                <div class="left col-xs-7">
                                                    <h2>{{ $value->name }}</h2>
                                                    <p><strong>Email: </strong> {{ $value->email}} </p>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-building"></i> Address:</li>
                                                        <li><i class="fa fa-phone"></i> Phone #:</li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <img src="http://lorempixel.com/128/128/" alt="{{ $value->name }}"
                                                         class="img-circle img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <p class="ratings">
                                                        <a>4.0</a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                    </p>
                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-success btn-xs"><i
                                                                class="fa fa-user">
                                                        </i> <i class="fa fa-comments-o"></i></button>
                                                    <a href="{{ route('admin.show', ['id'=>$value->id]) }}"
                                                       class="btn btn-primary btn-xs" role="link">
                                                        <i class="fa fa-user"> </i> View Profile
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    {{ $adminAll->appends(['search' => Request::get('search'), 'page'=>Request::get('page')])->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection