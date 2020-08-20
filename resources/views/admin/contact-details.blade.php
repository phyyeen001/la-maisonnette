@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Contact Details</h4>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>


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
                                    {{ $contact->name }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Subject :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $contact->subject??'none' }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Message  :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $contact->message }}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Phone :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $contact->phone??'none' }}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                                <p>Email :</p>
                                <div type="text" class="btn btn-primary">
                                    {{ $contact->email??'None' }}
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:50px ">
                    <form action="{{ url('admin/contacts/'. $contact->id) }}"  method="POST">
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
