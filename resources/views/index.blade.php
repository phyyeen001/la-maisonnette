@extends('layouts.app')

@section('content')
<div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider layer-overlay overlay-dark-4 parallax" data-bg-img="{{asset('public/storage/images/bg/bg4.jpg')}}">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pt-200 pb-200">
            <div class="row">
              <div class="col-md-12 text-center">
                <h1 class="tagline text-white font-64">
                  <span class="typed-text-carousel" data-speed="90" data-back_delay="500" data-loop="true">
                    <span>Welcome to La Maisonnette</span>
                    <span>Preschool</span>
                    <span>A safe haven for every child</span>
                  </span>
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- Section: home-boxed -->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row"  data-margin-top="-150px">
            <div class="col-md-4">
              <div class="icon-box iconbox-border bg-theme-color-green text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-color-red icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-book text-white"></i>
                </a>
                <h4 class="icon-box-title mt-50 text-white">Programs</h4>
                <p class="text-white mb-30">We run a parallel curriculum; a French language programme and the EYFS curriculum which is British based for our preschoolers.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box iconbox-border bg-theme-color-red text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-color-sky icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-eye text-white"></i>
                </a>
                <h4 class="icon-box-title mt-50 text-white">Focus</h4>
                <p class="text-white mb-30">Providing a unique, high-quality early learning experience for children between the age of 3months to 5 years old..</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="icon-box iconbox-border bg-theme-color-sky text-center p-40 mb-sm-50">
                <a class="icon icon-lg icon-top bg-theme-color-red icon-rounded icon-border-effect effect-rounded" href="#">
                  <i class="fa fa-user text-white"></i>
                </a>
                <h4 class="icon-box-title mt-50 text-white">Our Believe</h4>
                <p class="text-white mb-30">We believe that every child is a gem; unique, with limitless potential, ready to shine. Each gem is special, with his or her own talents, strengths, hopes and dreams. </p>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Section:about-->
    <section>
      <div class="container pb-0">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="meet-doctors">
                <h2 class="text-theme-color-sky line-bottom">Welcome To <span class="text-theme-color-red">La Maisonnette</span></h2>
                <p>We are a bilingual daycare/preschool for 3 months to 5 years old located in Gbagada, Lagos.<br>
              We also run an Afterschool and Weekend French Club for children up to 10 years old.<br>We run a parallel curriculum; a French language programme and the EYFS curriculum which is  British based for our preschoolers.</p>
              </div>
              <div class="row">
                <div class="col-md-10">
                    <h2 class="text-theme-color-sky line-bottom">Why <span class="text-theme-color-red">Bilingual ?</span></h2>
                    <p class="text-gray">A foreign language is one of the best gifts you can give your child! <br>Young children are natural language learners.  Whilst adults may struggle with language acquisition, children have the innate ability to learn several languages seamlessly and simultaneously.  Not only can children process a new language effortlessly, they also inherently acquire native pronunciation.<br>Studies have shown there are many additional benefits to the exposure of a second language in early childhood beyond the acquisition of the language itself.</p>
                    <a href="{{url('about')}}" class="btn btn-flat btn-colored btn-theme-color-blue mt-15 mr-15">Read More</a><a href="tel:+2349033538230" class="btn btn-flat btn-colored btn-theme-color-yellow mt-15">Speak to Us</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img alt="" src="{{asset('public/storage/images/about/6.png')}}" class="img-responsive img-fullwidth">
            </div>
          </div>
        </div>
      </div>
      <div>
          <img alt="" src="{{asset('public/storage/images/bg/f2.png')}}" class="img-responsive img-fullwidth">
      </div>
    </section>

<!-- Section: Our Courses -->
    <section class="" data-bg-img="{{asset('public/storage/images/bg/p2.jpg')}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Our <span class="text-theme-color-red">Curriculum</span></h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-12 col-lg-12 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-blue" href="{{url('curriculum#section-one')}}">French Curriculum </a></h3>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-12 col-lg-12 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-blue" href="{{url('curriculum#section-two')}}">Kindergarten and preschool readiness</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="{{url('curriculum#section-three')}}">Letters and numbers</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="{{url('curriculum#section-four')}}">Knowledge and understanding of the world</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-orange" href="{{url('curriculum#section-five')}}">Think and do activities</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-orange" href="{{url('curriculum#section-six')}}">Practical life exercises</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-lemon" href="{{url('curriculum#section-seven')}}">Motor skills development</a></h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="course-details-box bg-white border-1px clearfix mb-30">
                <div class="col-md-7 col-lg-7 p-0">
                  <div class="course-details-2 clearfix p-20 pt-15">
                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-lemon" href="{{url('curriculum#section-eight')}}">After school programme</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


   <!-- Section: Our Features -->
    <section class="">
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-red">Core Values</span></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-red border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-love text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-white mb-10">LOVE</h4>
                  <p class="text-white">La Maisonnette is a happyland where a love for learning and preschool life is fostered.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-green border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-love text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-white mb-10">TEAMWORK</h4>
                  <p class="text-white">The adults and children in our environment collaborate to achieve great results. </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-lemon border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-love text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-white mb-10">RESPECT</h4>
                  <p class="text-white">The children and adults in our environment care enough to think about the feelings of others before they act.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-sky border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-love text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-white mb-10">RESPONSIBILITY</h4>
                  <p class="text-white">We learn to be in control of our behaviour, to be trusted with important jobs, to finish our task on time and to do our part when working together.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-blue border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-love text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-white mb-10">DIVERSITY</h4>
                  <p class="text-white">Differences in languages, dress, food, place of birth, religion are not only allowed but accepted as important. </p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box left bg-theme-color-yellow border-radius-15px media p-20 pr-15 pl-15 mb-40"> <a class="media-left pull-left flip p-10" href="#"><i class="fa fa-love text-white font-42"></i></a>
                <div class="media-body">
                  <h4 class="media-heading heading text-white mb-10">CREATIVITY</h4>
                  <p class="text-white">We love creativity and we love arts. At La Maisonnette, we believe that Art is as natural as sunshine and as vital as nourishment. <br>Alone we are smart. Together we are brilliant. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Section: Our Gallery -->
    <section>
      <div class="container pb-70">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Conducive <span class="text-theme-color-red" href="{{url('curriculum')}}">learning environment</span></h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
              <p></p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mb-30">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/storage/images/gallery/1.png')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade red"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/storage/images/gallery/1.png')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/storage/images/gallery/2.png')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade yellow"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/storage/images/gallery/2.png')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/storage/images/gallery/3.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/storage/images/gallery/3.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row mb-30">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/storage/images/gallery/4.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade green"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/storage/images/gallery/4.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/storage/images/gallery/5.jpg')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade blue"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/storage/images/gallery/5.jpg')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="gallery-block">
                <div class="gallery-thumb">
                  <img alt="project" src="{{asset('public/storage/images/gallery/7b.png')}}" class="img-fullwidth">
                </div>
                <div class="overlay-shade yellow"></div>
                <div class="icons-holder">
                  <div class="icons-holder-inner">
                    <div class="gallery-icon">
                      <a href="{{asset('public/storage/images/gallery/7.png')}}"  data-lightbox-gallery="gallery"><i class="pe-7s-science"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Divider: testimonials -->
    <section class="divider" data-bg-img="{{asset('public/storage/images/bg/b1.jpg')}}">
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Happy<span class="text-theme-color-sky"> Parent's Say</span></h2>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            @if( ! Auth::guest() )
              @include('includes.messages')
              @endif
            <div class="owl-carousel-2col testimonial style2 dots-white" data-dots="false">
                @foreach($testimonials as $testimonial)
                <div class="item">
                    <div class="testimonial-wrapper">
                      <div class="content bg-theme-color-{{array('blue','green','red','orange','yellow')[rand(0,4)]}} p-30 pb-40">

                        <p class="font-15 text-white font-weight-600">Testimonial</p>
                        <i class="fa fa-quote-right mt-10 text-white"></i>
                        <h4 class="author text-white mt-20 mb-0">{{ $testimonial->message }}</h4>
                        <h6 class="title text-white mt-0 mb-15">{{ $testimonial->name }}</h6>

                        <div class="thumb mt-20"><img class="img-circle" alt="" src=""></div>
                      </div>
                    </div>
                    @if( ! Auth::guest() )<h6 class="title text-white mt-0 mb-15">  <form style="z-index:10000; padding:20px;" action="{{ url('admin/testimonials/'. $testimonial->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form></h6>@endif
                  </div>
                @endforeach



            </div>
          </div>
        </div>
      </div>
    </section>


  <!-- end main-content -->
  </div>
@endsection
