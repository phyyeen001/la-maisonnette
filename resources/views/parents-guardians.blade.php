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
              <h2 class="text-theme-color-yellow font-36">Forms</h2>
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
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Father/guardian name:</h4>
            </div>
            <form action="{{ url('parents-guardians') }}" method="POST">
                <div class="row">
                <div class="form-group col-md-8">
                  <label>Admission No:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-7">
                  <label>Father/guardian name:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-5">
                  <label>Phone Number:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Home Address:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label>Occupation:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Email:</label>
                  <input type="email" class="form-control">
                </div>
              </div>
          </div>
        <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title"></h4>
            </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Work Address:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
               <div class="form-group col-md-6">
                <label>Religion:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Mother/guardian name:</h4>
            </div>
            <form action="#">
              <div class="row">
                <div class="form-group col-md-7">
                  <label>Father/guardian name:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-5">
                  <label>Phone Number:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Home Address:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label>Occupation:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Email:</label>
                  <input type="email" class="form-control">
                </div>
              </div>
          </div>
        <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title"></h4>
            </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Work Address:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
               <div class="form-group col-md-6">
                <label>Religion:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
