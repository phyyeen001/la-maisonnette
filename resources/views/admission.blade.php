@extends('layouts.app')
@section('content')
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('public/storage/images/bg/bg3.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-color-yellow font-36">Admission</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Admission</li>
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
            <p></p></div>
        <div class="row">
          <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title">Personal information (student)</h4>
            </div>
            <form action="{{ url('admission') }}" method="POST">
              <div class="row">
                <div class="form-group col-md-8">
                  <label>Name in full:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-4">
                  <label>Gender:</label>
                  <input type="email" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>Address:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
                <div class="row">
                <div class="form-group col-md-6">
                  <label>Date of birth:</label>
                <!-- Datepicker Markup -->
              <div class="input-group date">
                <input type="text" class="form-control date-picker" value="12-02-2012">
                <div class="input-group-addon">
                  <span class="glyphicon glyphicon-th"></span>
                </div>
              </div>
              <!-- Datepicker Script -->
              <script type="text/javascript">
                $('#example-component .input-group.date').datepicker({
                });
              </script>
                </div>
                <div class="form-group col-md-6">
                  <label>Religion:</label>
                  <input type="text" class="form-control">
                </div>
              </div>
          </div>
        <div class="col-md-6">
            <div class="heading-line-bottom">
              <h4 class="heading-title"></h4>
            </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label>How did you hear about us?</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="row">
               <div class="form-group col-md-12">
                 <label>How would you like to be contacted?</label>
                  <select class="form-control">
                    <option>Phone Calls</option>
                    <option>Text Messages</option>
                    <option>Whatsapp Messages</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default">Enroll</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
