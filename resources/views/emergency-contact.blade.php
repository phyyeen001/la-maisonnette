@extends('layouts.app')

@section('content')
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('public/storage/images/bg/bg3.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-color-yellow font-36">Emergency Contact Information</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Forms</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('includes.messages') </div>
        <div class="row">
          <div class="col-md-12">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Emergency contact information </h4>
            </div>
            <form action="{{ url('emergency-contacts') }}" method="POST">
                @csrf
              <div class="row">
                <div class="form-group col-md-8">
                  <label>Admission No:</label>
                  <input type="text" class="form-control" name="admission_id">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-8">
                  <label>Name in full:</label>
                  <input type="text" class="form-control" name="name">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                  <label>Address:</label>
                  <input type="text" class="form-control" name="address">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label>Phone number:</label>
                  <input type="text" class="form-control" name="phone">
                </div>
              </div>
            <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title"></h4>
            </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Relationship to child:</label>
                  <input type="text" class="form-control" name="relationship_to_child">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
