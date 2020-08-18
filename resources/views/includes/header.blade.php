<header id="header" class="header">
    <div class="header-top sm-text-center bg-theme-color-sky">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <div class="widget m-0 mt-5 no-border">
              <ul class="list-inline text-right sm-text-center">
                <li class="pl-10 pr-10 mb-0 pb-0">
                  <div class="header-widget text-white"><i class="fa fa-phone"></i> +2349033538230 </div>
                </li>
                <li class="pl-10 pr-10 mb-0 pb-0">
                  <div class="header-widget text-white"><i class="fa fa-envelope-o"></i> info@lamaisonnette.com.ng </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 text-right flip sm-text-center">
            <div class="widget m-0">
              <ul class="styled-icons icon-dark icon-circled icon-theme-color-green icon-sm">
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lighter">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default mb-20 no-bg"> <a class="menuzord-brand pull-left flip" href="{{url('/')}}"><img src="{{asset('public/storage/images/logo-wide.png')}}" alt=""></a>
            <div id="side-panel-trigger" class="side-panel-trigger"><a href="#"></i></a></div>
            <ul class="menuzord-menu dark">
              <li  @if(Request::url()==url('/'))
              class="active"
              @endif
              ><a href="{{url('/')}}">Home</a></li>
              <li @if(Request::url()==url('about'))
              class="active"
              @endif
              ><a href="{{url('about')}}">About</a></li>
              <li @if(Request::url()==url('admission'))
              class="active"
              @endif
              ><a href="{{url('admission')}}">Admission</a></li>
              <li @if(Request::url()==url('curriculum'))
              class="active"
              @endif
              ><a href="{{url('curriculum')}}">Curriculum</a></li>
              <li @if(Request::url()==url('gallery'))
              class="active"
              @endif
              ><a href="#">Gallery</a></li>
              <li @if(Request::url()==url('health') || Request::url()==url('parents-guardians') || Request::url()==url('emergency-contact'))
              class="active"
              @endif
              ><a href="#home">Forms</a>
                <ul class="dropdown">
                  <li><a href="{{url('health')}}">Health information</a></li>
                  <li><a href="{{url('parents-guardians')}}">Parents/guardians information</a></li>
                  <li><a href="{{url('emergency-contact')}}">Emergency contact information (2)</a></li>
                </ul>
              </li>
              <li @if(Request::url()==url('contact'))
              class="active"
              @endif><a href="{{url('contact')}}">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
