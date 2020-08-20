@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Testimonials</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Input -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @include('includes.messages')
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>Enter Testimony</strong>
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
                        <h2 class="card-inside-title"></h2>
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="loginmain">
                                    <div class="formCard">
                                        <div class="wrapper">


                                            <form action="{{ url('admin/testimonials') }}" method="POST">
                                                @csrf
                                                 <div>
                                                    <input type="text" class="roundInput" name="name" required>
                                                    <label>Name</label>
                                                </div>
                                                <div>
                                                    <textarea type="text" class="roundInput" name="message" required></textarea>
                                                    <label>Message</label>
                                                </div>
                                                <button class="btn-hover color-7">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
