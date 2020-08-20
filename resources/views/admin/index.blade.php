@extends('admin.layouts.app')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="breadcrumb breadcrumb-style">
                        <li>
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('admin/admissions') }}">
                <div class="card infobox-5">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left card-icon">
                                <i class="material-icons col-green">face</i>
                            </div>
                            <div class="float-right">
                                <p class="text-right" style="color: #bbb;">Admissions</p>
                                <div class="col-green">
                                    <h3 class="text-right mb-0">{{ count($admissions??[]) }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('admin/health') }}">
                <div class="card infobox-5">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left card-icon">
                                <i class="material-icons col-orange">receipt</i>
                            </div>
                            <div class="float-right">
                                <p class="text-right" style="color: #bbb;">Health Info</p>
                                <div class="col-orange">
                                    <h3 class="text-right mb-0">{{ count($health??[]) }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div></a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('admin/parents-guardians') }}">
                <div class="card infobox-5">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left card-icon">
                                <i class="material-icons col-blue">people</i>
                            </div>
                            <div class="float-right">
                                <p class="text-right" style="color: #bbb;"> Guardians Info</p>
                                <div class="col-blue">
                                    <h3 class="text-right mb-0">{{ count($parents_guardians??[]) }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('admin/testimonials') }}">
                <div class="card infobox-5">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left card-icon">
                                <i class="material-icons col-red">receipts</i>
                            </div>
                            <div class="float-right">
                                <p class="text-right" style="color: #bbb;">Testimonials</p>
                                <div class="col-red">
                                    <h3 class="text-right mb-0">{{ count($testimonials??[]) }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('admin/emergency-contacts') }}">
                <div class="card infobox-5">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left card-icon">
                                <i class="material-icons col-red">local_activity</i>
                            </div>
                            <div class="float-right">
                                <p class="text-right" style="color: #bbb;">Emergency Contact Info</p>
                                <div class="col-red">
                                    <h3 class="text-right mb-0">{{ count($emergency_contacts??[]) }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <a href="{{ url('admin/contacts') }}">
                <div class="card infobox-5">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left card-icon">
                                <i class="material-icons col-green">message</i>
                            </div>
                            <div class="float-right">
                                <p class="text-right" style="color: #bbb;">Contact Messages</p>
                                <div class="col-green">
                                    <h3 class="text-right mb-0">{{ count($contacts??[]) }}</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </a>
            </div>
        </div>

    </div>
</section>
@endsection
