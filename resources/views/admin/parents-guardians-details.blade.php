@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Parent Guardian Details</h4>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2> Admission NO -


                            <strong><a href="{{ url('admin/admissions/'.$pg->admission_id) }}">@if(strlen($pg->admission_id)==2)
                                0{{$pg->admission_id}}
                                @elseif(strlen($pg->admission_id)==1)
                                00{{$pg->admission_id}}
                                @endif</a></strong>
                        </h2>
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

                        <div class="row clearfix js-sweetalert">

                            <!-- #START# Basic Modal -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Name :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->name }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Phone Numbers:</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->phone??'none' }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Email :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->email }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Home Address :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->home_address??'none' }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Work Address :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->work_address??'none' }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Ocupation  :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->occupation}}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Religion  :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $pg->religion}}
                                </div>
                            </div>




                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:50px ">
                    <form action="{{ url('admin/parents-guardians/'. $pg->id) }}"  method="POST">
                        @csrf
                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
