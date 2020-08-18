@extends('layouts.app')

@section('content')
<div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{asset('public/storage/images/bg/bg3.jpg')}}">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white">About</h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active text-gray-silver">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Section: About -->
    <section id="about">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h2 class="text-theme-color-sky line-bottom">Welcome To <span class="text-theme-color-red">La Maisonnette</span></h2>
              <p>We are a bilingual daycare/preschool for 3 months to 5 years old located in Gbagada, Lagos.<br>
              We also run an Afterschool and Weekend French Club for children up to 10 years old.<br>We run a parallel curriculum; a French language programme and the EYFS curriculum which is  British based for our preschoolers.</p>
            </div>
            <div class="col-md-6">
              <div class="video-popup">
                <a>
                  <img alt="" src="{{asset('public/storage/images/about/6.png')}}" class="img-responsive img-fullwidth">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-40">
          <div class="col-md-12">
            <h3 class="text-theme-color-blue mb-20">Why Bilingual? </h3>
            <p>A foreign language is one of the best gifts you can give your child!
            <br>Young children are natural language learners.  Whilst adults may struggle with language acquisition, children have the innate ability to learn several languages seamlessly and simultaneously.  Not only can children process a new language effortlessly, they also inherently acquire native pronunciation.</p>
            <p>Studies have shown there are many additional benefits to the exposure of a second language in early childhood beyond the acquisition of the language itself.  Bilingual children have demonstrated increased problem solving abilities, better working memory and improved capacity for abstract thinking, among other benefits.  Having the opportunity to experience a foreign language environment also expands children’s multi-cultural awareness, stimulates their curiosity about other parts of the world and fosters an appreciation for understanding multiple points of view. <br>Our pupils do not need to have had any previous French language exposure before they can fit into our school environment. Our program at La Maisonnette Bilingual Preschool is not an immersion experience;rather, French is seamlessly blended into activities throughout the day.  This approach enables the children to acquire the language in a natural manner.</p>
          </div>
          <div class="col-md-6">
            <h3 class="text-theme-color-blue mb-20">Vision:</h3>
            <blockquote class="bg-silver-light">
          <p>• To create a safe haven where every child feels loved, respected and encouraged to develop to their fullest capacity.
          <br>• To be a learning place that encourages children to be bilingual.
          <br>• To foster multi-cultural awareness in children.
          <br>• To create a solid foundation emotionally, socially and intellectually.
          <br>• To deliver an excellent early years education to children.</p>
            </blockquote>
          </div>
          <div class="col-md-6">
            <h3 class="text-theme-color-blue mb-20">Mission</h3>
            <blockquote class="bg-silver-light">
              <p>Our mission is to provide high quality bilingual education and childcare in a safe, respectful and inclusive environment that builds a foundation for life-long learning.</p>
            </blockquote>
          </div>
        </div>
      </div>
      <div>
      </div>
    </section>

    <!-- Section: Features -->
    <section class="" data-bg-img="{{asset('public/storage/images/bg/p2.jpg')}}">
      <div class="container pb-0">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="line-bottom-center mt-0">Our Core Values </h2>
              <div class="title-flaticon">
                <i class="flaticon-charity-alms"></i>
              </div>
              <p></p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="row features-style1">
                <div class="col-sm-12">
                  <div class="icon-box left media p-0 mb-sm-10 mt-30 mt-sm-0"> <a href="#" class="icon icon-circled icon-lg border-1px bg-theme-color-red pull-right flip mr-0 ml-30"><i class="fa fa- text-white"></i></a>
                    <div class="media-body text-right">
                      <h4 class="text-theme-color-blue">LOVE</h4>
                      <p>La Maisonnette is a happyland where a love for learning and preschool life is fostered.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="icon-box left media p-0 mb-sm-10"> <a href="#" class="icon icon-circled icon-lg border-1px bg-theme-color-yellow  pull-right flip mr-0 ml-30"><i class="fa text-white"></i></a>
                    <div class="media-body text-right">
                      <h4 class="text-theme-color-sky">CREATIVITY</h4>
                      <p>We love creativity and we love arts. At La Maisonnette, we believe that Art is as natural as sunshine and as vital as nourishment.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="icon-box left media p-0 mb-sm-10"> <a href="#" class="icon icon-circled icon-lg border-1px bg-theme-color-lemon  pull-right flip mr-0 ml-30"><i class="fa fa- text-white"></i></a>
                    <div class="media-body text-right">
                      <h4 class="text-theme-color-red">TEAMWORK</h4>
                      <p>The adults and children in our environment collaborate to achieve great results. Alone we are smart. Together we are brilliant. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <img src="{{asset('public/storage/images/about/a1.png')}}" alt="">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="row features-style1">
                <div class="col-sm-12">
                  <div class="icon-box left media p-0 mb-sm-10 mt-30 mt-sm-30"> <a href="#" class="icon icon-circled icon-lg border-1px bg-theme-color-red  pull-left flip"><i class="fa fa- text-white"></i></a>
                    <div class="media-body">
                      <h4 class="text-theme-color-blue">RESPECT</h4>
                      <p>The children and adults in our environment care enough to think about the feelings of others before they act.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="icon-box left media p-0 mb-sm-10"> <a href="#" class="icon icon-circled icon-lg border-1px bg-theme-color-yellow pull-left flip"><i class="fa text-white"></i></a>
                    <div class="media-body">
                      <h4 class="text-theme-color-sky">RESPONSIBILITY</h4>
                      <p>We learn to be in control of our behaviour, to be trusted with important jobs, to finish our task on time and to do our part when working together.</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="icon-box left media p-0 mb-sm-10"> <a href="#" class="icon icon-circled icon-lg border-1px bg-theme-color-lemon pull-left flip"><i class="fa fa--square-o text-white"></i></a>
                    <div class="media-body">
                      <h4 class="text-theme-color-red">DIVERSITY</h4>
                      <p>Differences in languages, dress, food, place of birth, religion are not only allowed but accepted as important.</p>
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
            <div class="owl-carousel-2col testimonial style2 dots-white" data-dots="false">
              <div class="item">
                <div class="testimonial-wrapper">
                  <div class="content bg-theme-color-orange p-30 pb-40">
                    <p class="font-15 text-white font-weight-600"></p>
                    <i class="fa fa-quote-right mt-10 text-white"></i>
                    <h4 class="author text-white mt-20 mb-0"></h4>
                    <h6 class="title text-white mt-0 mb-15"></h6>
                    <div class="thumb mt-20"><img class="img-circle" alt="" src=""></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper">
                  <div class="content bg-theme-color-lemon p-30 pb-40">
                    <p class="font-15 text-white font-weight-600"></p>
                    <i class="fa fa-quote-right mt-10 text-white"></i>
                    <h4 class="author text-white mt-20 mb-0"></h4>
                    <h6 class="title text-white mt-0 mb-15"></h6>
                    <div class="thumb mt-20"><img class="img-circle" alt="" src=""></div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-wrapper">
                  <div class="content bg-theme-color-red p-30 pb-40">
                    <p class="font-15 text-white font-weight-600"></p>
                    <i class="fa fa-quote-right mt-10 text-white"></i>
                    <h4 class="author text-white mt-20 mb-0"></h4>
                    <h6 class="title text-white mt-0 mb-15"></h6>
                    <div class="thumb mt-20"><img class="img-circle" alt="" src=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>
@endsection
