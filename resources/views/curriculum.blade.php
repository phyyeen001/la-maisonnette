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
              <h2 class="text-theme-color-yellow font-36">Our Curriculum</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">Curriculum</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group scrolltofixed">
              <a href="#section-one" class="list-group-item smooth-scroll-to-target">FRENCH CURRICULUM</a>

              <a href="#section-two" class="list-group-item smooth-scroll-to-target">KINDERGARTEN AND PRESCHOOL READINESS </a>

              <a href="#section-three" class="list-group-item smooth-scroll-to-target">LETTERS AND NUMBERS </a>

              <a href="#section-four" class="list-group-item smooth-scroll-to-target">KNOWLEDGE AND UNDERSTANDING OF THE WORLD </a>

              <a href="#section-five" class="list-group-item smooth-scroll-to-target">THINK AND DO ACTIVITIES</a>

              <a href="#section-six" class="list-group-item smooth-scroll-to-target">PRACTICAL LIFE EXERCISES</a>

              <a href="#section-seven" class="list-group-item smooth-scroll-to-target">MOTOR SKILLS DEVELOPMENT</a>

              <a href="#section-eight" class="list-group-item smooth-scroll-to-target">AFTER SCHOOL PROGRAMME</a>
            </div>
          </div>
          <div class="col-md-9">
            <div id="section-one" class="mb-30">
              <h2>FRENCH CURRICULUM</h2>
              <hr>
              <p class="mb-20">For our French Curriculum, the children are first of all introduced to concepts that they are familiar with in English. Our themes include, but are not limited to the following:
          <br>• Les Salutations/Greetings: The children are taught everyday greetings and phrases associated with greeting.  The children are greeted in French as they arrive in the morning and when they depart.  The children are paired up in class and create imaginary situations in which they will exchange French greetings.
          <br>• Ma famille/ My family: Our preschoolers are spoken to about their parents, relatives and friends. We have an illustrated chart showing a family and point who is who in French.
          <br>• Les jours de la semaine/ Days of the week: This lesson is entwined into their day to day lesson. We teach the days of the week one day at a time.  On Monday, for example, we tell them that today is Lundi, on Tuesday it is Mardi and also ask what was yesterday.
          <br>• Les Chiffres/ Numbers: Teaching number, like all the rest is easier because preschoolers are already acquainted with numbers in English language.
          <br>• Les Couleurs/Colours: Children are usually very fascinated with colours, so this is concept is usually a breeze through.
          <br>• Les Fruits/  Fruits: Learning the fruit names in French by the children is done by very hands on activities, with actual fruits or faux fruits.
          <br>• Les noms de nourriture/ Names of Food: This theme is usually introduced to the children by naming the foods they eat or those that they are familiar with and also by having a pretend meal where they get to use those words.
          <br>• Les animaux/ Animals:  This lesson could be divided into under the sea animals, farm animals or animals in the wild depending on the age of the children.
          <br>• Ma maison/ My house: The children are introduced to everyday household objects that they are familiar with.
          <br>• Les objets de la classe / Objects in the classroom: Preschoolers are taught names of familiar classroom objects. For better understanding, we point at different objects in the classroom, the children follow suit by saying and repeating the names out loud. </p>
            </div>
            <div id="section-two" class="mb-30">
              <h2>KINDERGARTEN AND PRESCHOOL READINESS</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
            <div id="section-three" class="mb-30">
              <h2>LETTERS AND NUMBERS</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
            <div id="section-four" class="mb-30">
              <h2>KNOWLEDGE AND UNDERSTANDING OF THE WORLD</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
            <div id="section-five" class="mb-30">
              <h2>THINK AND DO ACTIVITIES</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
             <div id="section-six" class="mb-30">
              <h2>PRACTICAL LIFE EXERCISES</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
             <div id="section-seven" class="mb-30">
              <h2>MOTOR SKILLS DEVELOPMENT</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
             <div id="section-eight" class="mb-30">
              <h2>AFTER SCHOOL PROGRAMME</h2>
              <hr>
              <p class="mb-20"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
@endsection
