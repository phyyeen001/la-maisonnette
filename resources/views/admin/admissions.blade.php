@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Admissions</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('includes.messages')
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Record</strong> Table</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="#" onClick="return false;" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons"></i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#" onClick="return false;"></a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;"></a>
                                    </li>
                                    <li>
                                        <a href="#" onClick="return false;"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table id="tableExport"
                                class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                <thead>
                                    <tr>
                                        <th>Admission No</th>
                                        <th>Name</th>
                                        <th>Gender</th>

                                        <th>Date of Reg</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($admissions??[] as $admission)
                                    <tr>
                                        <td><a href="{{ url('admin/admissions/'.$admission->id) }}">
                                            @if(strlen($admission->id)==2)
                                            0{{$admission->id}}
                                            @elseif(strlen($admission->id)==1)
                                            00{{$admission->id}}
                                            @endif</td>
                                        <td>{{ $admission->name }}</td>
                                       <td>{{ $admission->gender }}</td>

                                        <td>{{ $admission->created_at }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>Admission No</th>
                                        <th>Name</th>
                                        <th>Gender</th>

                                        <th>Date of Reg</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
@endsection
