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
            <p></p>
          </div>
        <div class="row">
          <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Health information</h4>
            </div>
            <form action="{{ url('health') }}" method="POST">
                <div class="row">
                <div class="form-group col-md-8">
                  <label>Admission No:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                 <label>Does your child have any medical condition?</label>
                  <select class="form-control">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>If yes, pls state in full details.</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Also state if there is a special way/first aid rendered during crisis </label>
                  <input type="text" class="form-control">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-12">
                 <label>Does your child have any allergies?</label>
                  <select class="form-control">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>
                <div class="form-group col-md-12">
                  <label>If Yes, pls specify </label>
                  <input type="text" class="form-control">
                </div>
              </div>
          </div>
        <div class="col-md-6">
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Is your child on any medication?</label>
                  <select class="form-control">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>
              </div>
              <div class="row">
               <div class="form-group col-md-12">
                 <label>If Yes, specify</label>
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
