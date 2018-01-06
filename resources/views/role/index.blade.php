@extends('layouts.admin.app')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Role List
                        <small>Some examples to get you started</small>
                    </h3>
                </div>

                <div class="title_right">
                    <form action="{{ route('admin.role.search') }}" method="get" enctype="text/plain" role="role">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" role="button">Go!</button>
                                </span>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Role List
                            <small>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                                        data-target="#myModal-AddRole" role="button">
                                    <i class="fa fa-plus"></i> Add Role
                                </button>
                            </small>
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
                            {{--<li><a class="close-link"><i class="fa fa-close"></i></a></li>--}}
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        {{--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>--}}
{{--{{dd($role->admin->id)}}--}}
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th>
                                        <input type="checkbox" id="check-all" class="flat">
                                    </th>
                                    <th class="column-title">Name</th>
                                    <th class="column-title">Description</th>
                                    <th class="column-title">Created_at</th>
                                    <th class="column-title">Updated_at</th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                    <th class="bulk-actions" colspan="5">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($role as $item => $value)
                                    <tr class="{{ (($item %2) ==0)?'odd':'even' }}  pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">{{ $value->name }}</td>
                                        <td class=" ">{{ $value->description }}</td>
                                        <td class=" ">{{ date('Y M d H:i:s', strtotime($value->created_at)) }}</td>
                                        <td class=" ">{{ date('Y M d H:i:s', strtotime($value->updated_at)) }}</td>
                                        <td class=" ">
                                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                                                <a href="{{ route('admin.role.edit', ['id'=>$value->id]) }}"
                                                   role="button" class="btn btn-outline-warning"><i
                                                            class="fa fa-edit"></i></a>
                                                <a href="{{ route('admin.role.delete', ['id'=>$value->id]) }}"
                                                   role="button" class="btn btn-outline-danger"><i
                                                            class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /page content -->
@endsection
@push('modal')
    @include('role._modal_create');
@endpush