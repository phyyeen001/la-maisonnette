@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Admission Details</h4>
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
                            <strong>@if(strlen($admission->id)==2)
                                0{{$admission->id}}
                                @elseif(strlen($admission->id)==1)
                                00{{$admission->id}}
                                @endif</strong>
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

                                <p>Name In Full :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Gender :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->gender }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Address :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->address }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Date of Birth :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->date }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Religion :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->religion??'None' }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Heard About 'La Maisonnette' from  :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->heard_from }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Contact Me By  :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $admission->contact_by }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:50px ">
                    <form action="{{ url('admin/admissions/'. $admission->id) }}" method="POST">
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
