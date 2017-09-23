@extends('frontEnd.home.master')
@section('title')
Portfolio
@endsection
@section('content')
   <body>
      @include('frontEnd.includes.menu')
      <!-- end top-aria -->
      <div class="about-text-aria section-padding" id="About">
         <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="about-text text-center">
                @foreach($pages as $page)
                     <h2 class="section-title ingre-title" id="effect">
                    {{$page->ptitle}}
                     </h2>
                     <img src="{{ asset($page->pimage)}}" height="100px" width="100px">
    <p uk-scrollspy="cls: uk-animation-fade;delay:500;">
                      {{$page->pcontent}}
                     </p>
                     @endforeach
                  </div>
               </div>
            </div>
            <hr>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 800" class="row">
               <div class="col-md-6 col-sm-6">
                  <h2 class="section-title ingre-title"> 
                     Academic Qualification:
                  </h2>
                  <div class="education_icon">
                     <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <table class="education">
                     <tr>
                        <td>2013-2016</td>
                        <td>
                           B.S.C( Bachelor of Science )<br>
                           <span>Computer Science and Engineering</span>
                           <br>
                           Dhaka International University
                        </td>
                     </tr>
                     <tr>
                        <td>2008-12</td>
                        <td>
                           Diploma in Engineering
                           <br>
                           <span>Computer Technology</span><br>
                           Dhaka International University
                        </td>
                     </tr>
                     <tr>
                        <td>2015</td>
                        <td>
                           
                              Web Application development using Php
                          
                           <span>IDB_BISEW IT SCHOLARSHIP FAST TRACK
                           </span><br>
                           Duration :&nbsp;
                              3 MONTH   
                           
                        </td>
                     </tr>
                  </table>
               </div>
            </div>
            <hr>
            <div  class="row">
               <div class="col-md-6 col-sm-6">
                  <h2 class="section-title ingre-title"> 
                     My Expertise are
                  </h2>
                  <div class="expert">
                     <i class="glyphicon glyphicon-hand-right"></i>
                  </div>
               </div>
               <div uk-scrollspy="cls: uk-animation-slide-right; delay: 700; repeat: false" class="col-md-6 col-sm-6">
                  <div class="language-list">
                     <div class="progress">
                       <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress-bar progress-bar-striped active" role="progressbar"
                       aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                         Html & Css
                       </div>

                     </div>
                     <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar  progress-bar-success progress-bar-striped" role="progressbar"
                       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                        Jquery
                       </div>

                     </div>
                     <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar progress-bar-warning  progress-bar-striped active" role="progressbar"
                       aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                         Php
                       </div>

                     </div>
                     <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                       aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:70px">
                         Bootstrap & Responsive
                       </div>

                     </div>
                     <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar progress-bar-default progress-bar-striped active" role="progressbar"
                       aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%; height:70px">
                        Php Framework
                       </div>
                       </div>
                       <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
                       aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:70px">
                         Mysql Databse
                       </div>
                     </div>
                       <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
                       aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%; height:70px">
                         Adobe Photoshop CC
                       </div>
                       </div>
                     <div uk-scrollspy="cls: uk-animation-slide-top; delay: 500; repeat: false" class="progress">
                       <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
                       aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%; height:70px">
                         Adobe Illustrator CC
                       </div>
                     </div>

                     </div>
                  </div>
               </div>
               <!-- end language ist -->
            </div>
            <!-- end col-md-6 -->
         </div>
      <!-- end about-text -->
      <!-- service  -->
      <div class="project-aria section-padding" id="service">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
          <i class="fa fa-list"></i>
          <h3 class="counter">
                500
          </h3>
          <p><strong> Project Done</strong></p>
          </div>
          <div class="col-sm-3">
          <i class="fa fa-smile-o"></i>
          <h3 class="counter">
          
                450
          </h3>
          <p><strong> Happy Clients</strong></p>
          </div>
         <div class="col-sm-3">
          <i class="fa fa-info"></i>
          <h3 class="counter">
          
                250
          </h3>
          <p><strong> Work Hours</strong></p>
          </div>
         <div class="col-sm-3">
          <i class="fa fa-clock-o"></i>
          <h3 class="counter">
          
                150
          </h3>
          <p><strong> Cups of Coffe</strong></p>
          </div>

        </div>
        {{-- end row project --}}
        <br>
        <hr>
        <div class="row">
          <div class="service-list" style="padding: 20px 0">
            <h3>All features</h3>

          <p>There are many variations of passages of Lorem Ipsum available, but the majority have 
          suffered alteration in some form, by injected humour.</p>
   
        <div class="col-sm-3">
           <i class="fa fa-edit"></i>
           <h3>Web Design</h3>
           <p>There are many variations of passages of Lorem Ipsum available.</p>
        </div>
        <div class="col-sm-3">
           <i class="fa fa-edit"></i>
           <h3>Web Development</h3>
           <p>There are many variations of passages of Lorem Ipsum available.</p>
        </div>
        <div class="col-sm-3">
           <i class="fa fa-edit"></i>
           <h3>Responsive Design</h3>
           <p>There are many variations of passages of Lorem Ipsum available.</p>
        </div>
        <div class="col-sm-3">
           <i class="fa fa-edit"></i>
           <h3>Apps Development</h3>
           <p>There are many variations of passages of Lorem Ipsum available.</p>
        </div>
          </div>
        </div>
      </div>
        
      </div>
      
      <!-- end service -->

      <div class="portfolio-aria section-padding" id="portfolio">
         <div class="container">
          <h2 uk-scrollspy="cls:uk-animation-fade;" class="section-title text-center">Latest Works
               </h2>
               <h3 class="text-center">
                  What I have created
               </h3>
      <div class="row">
        <div class="container  portfolio-menu text-center">
          <ul class="nav  nav-pills">
          <li class="active" style="display: inline-block">
          <a data-toggle="pill" href="#all">All</a></li>
          <li><a data-toggle="pill" href="#menu1">Laravel</a></li>
          <li><a data-toggle="pill" href="#menu2">Raw Php</a></li>
          <li><a data-toggle="pill" href="#menu3">Javascript</a></li>
          <li><a data-toggle="pill" href="#menu4">Wordpress</a></li>
          <li><a data-toggle="pill" href="#menu5">One Page</a></li>
          
        </ul>
        </div>
      </div>

<div class="tab-content">
  <div id="all" class="tab-pane fade in active">
    <h3>All</h3>
    @foreach($portfolios->chunk(4) as $items)
            <div class="row">
              <hr>

               @foreach($items as $portfolio)
            <div uk-scrollspy="cls: uk-animation-slide-left; delay: 500; " class="portfolio col-md-3 col-sm-3 col-xs-6">
               <h4 style="text-align: center;font-size: 15px;color: white; font-family: georgia">
               {{$portfolio->title}}
               </h4>

 <a title="To find out more &lt;a href=&quot;{{$portfolio->link}}&quot; target=&quot;_blank&quot; &gt;click here&lt;/&gt;" href="{{$portfolio->image}}" rel="prettyPhoto" title="{{$portfolio->discription}}"> 
    <img src="{{ asset($portfolio->image)}}" width="60" height="60" alt="{{$portfolio->title}}" title="{{$portfolio->title}}" />
  </a>

                  <div class="portfolio_hover"></div>   
               </div>
               @endforeach
            </div>
         @endforeach
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Laravel</h3>
    
            <div class="row">
               @foreach($portfolios as $portfolio)
                @if($portfolio->planguage == '1')
            <div uk-scrollspy="cls: uk-animation-slide-left; delay: 500; " class="portfolio col-md-3 col-sm-3 col-xs-6">
               <h4 style="text-align: center;font-size: 15px;color: white; font-family: georgia">
               {{$portfolio->title}}
               </h4>

 <a title="To find out more &lt;a href=&quot;{{$portfolio->link}}&quot; target=&quot;_blank&quot; &gt;click here&lt;/&gt;" href="{{$portfolio->image}}" rel="prettyPhoto" title="{{$portfolio->discription}}"> 
    <img src="{{ asset($portfolio->image)}}" width="60" height="60" alt="{{$portfolio->title}}" title="{{$portfolio->title}}" />
  </a>

                  <div class="portfolio_hover"></div>   
               </div>
               @endif
               @endforeach
            </div>
         
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Raw Php</h3>
    @foreach($portfolios->chunk(8) as $items)
            <div class="row">
               @foreach($items as $portfolio)
                @if($portfolio->planguage == '0')
            <div uk-scrollspy="cls: uk-animation-slide-left; delay: 500; " class="portfolio col-md-3 col-sm-3 col-xs-6">
               <h4 style="text-align: center;font-size: 15px;color: white; font-family: georgia">
               {{$portfolio->title}}
               </h4>

 <a title="To find out more &lt;a href=&quot;{{$portfolio->link}}&quot; target=&quot;_blank&quot; &gt;click here&lt;/&gt;" href="{{$portfolio->image}}" rel="prettyPhoto" title="{{$portfolio->discription}}"> 
    <img src="{{ asset($portfolio->image)}}" width="60" height="60" alt="{{$portfolio->title}}" title="{{$portfolio->title}}" />
  </a>

                  <div class="portfolio_hover"></div>   
               </div>
               @endif
               @endforeach
            </div>
         @endforeach
  </div>
  <div id="menu3" class="tab-pane fade">
    <h3>Javascript</h3>
    @foreach($portfolios->chunk(8) as $items)
            <div class="row">
               @foreach($items as $portfolio)
                @if($portfolio->planguage == '3')
            <div uk-scrollspy="cls: uk-animation-slide-left; delay: 500; " class="portfolio col-md-3 col-sm-3 col-xs-6">
               <h4 style="text-align: center;font-size: 15px;color: white; font-family: georgia">
               {{$portfolio->title}}
               </h4>

 <a title="To find out more &lt;a href=&quot;{{$portfolio->link}}&quot; target=&quot;_blank&quot; &gt;click here&lt;/&gt;" href="{{$portfolio->image}}" rel="prettyPhoto" title="{{$portfolio->discription}}"> 
    <img src="{{ asset($portfolio->image)}}" width="60" height="60" alt="{{$portfolio->title}}" title="{{$portfolio->title}}" />
  </a>

                  <div class="portfolio_hover"></div>   
               </div>
               @endif
               @endforeach
            </div>
         @endforeach
  </div>
  <div id="menu4" class="tab-pane fade">
    <h3>Wordpress</h3>
    @foreach($portfolios->chunk(8) as $items)
            <div class="row">
               @foreach($items as $portfolio)
                @if($portfolio->planguage == '4')
            <div uk-scrollspy="cls: uk-animation-slide-left; delay: 500; " class="portfolio col-md-3 col-sm-3 col-xs-6">
               <h4 style="text-align: center;font-size: 15px;color: white; font-family: georgia">
               {{$portfolio->title}}
               </h4>

 <a title="To find out more &lt;a href=&quot;{{$portfolio->link}}&quot; target=&quot;_blank&quot; &gt;click here&lt;/&gt;" href="{{$portfolio->image}}" rel="prettyPhoto" title="{{$portfolio->discription}}"> 
    <img src="{{ asset($portfolio->image)}}" width="60" height="60" alt="{{$portfolio->title}}" title="{{$portfolio->title}}" />
  </a>

                  <div class="portfolio_hover"></div>   
               </div>
               @endif
               @endforeach
            </div>
         @endforeach
  </div>
  {{-- end menu --}}
  <div id="menu5" class="tab-pane fade">
    <h3>One Page</h3>
    @foreach($portfolios->chunk(8) as $items)
            <div class="row">

               @foreach($items as $portfolio)
                @if($portfolio->planguage == '5')
            <div uk-scrollspy="cls: uk-animation-slide-left; delay: 500;" class="portfolio col-md-3 col-sm-3 col-xs-6">
               <h4 style="text-align: center;font-size: 15px;color: white; font-family: georgia">
               {{$portfolio->title}}
               </h4>

 <a title="To find out more &lt;a href=&quot;{{$portfolio->link}}&quot; target=&quot;_blank&quot; &gt;click here&lt;/&gt;" href="{{$portfolio->image}}" rel="prettyPhoto" title="{{$portfolio->discription}}"> 
    <img src="{{ asset($portfolio->image)}}" width="60" height="60" alt="{{$portfolio->title}}" title="{{$portfolio->title}}" />
  </a>

                  <div class="portfolio_hover"></div>   
               </div>
               @endif
               @endforeach
            </div>
         @endforeach
  </div>
  {{-- end menu --}}
</div>  
{{-- end tab content --}}

         
            <hr>
         </div>
      </div>
      <!-- end Ingredients-text -->
<div class="contact-aria section-padding" id="contact">

            
     <div class="container">

  <div class="row">
     <div class="col-md-5 col-sm-5" uk-scrollspy="cls: uk-animation-slide-left; delay: 500;">
        <h3>You Can Connect Any time Anywhere</h3>
        <ul class="contact-list">
           <li>
              <i class="glyphicon glyphicon-map-marker">
              </i> 
              Dhaka, Bangladesh
           </li>
           <li>
              <i class="fa fa-phone"></i>
              01918329829
           </li>
           <li>
              <i class="fa fa-envelope"></i>
              md.imran1200@gmail.com
           </li>
           <li>
              <i class="fa fa-user"></i>
              <a href="http://imranweb-bd.com" target="blank">
              imranweb-bd.com
              </a>
           </li>
           <li>
              <i class="fa fa-facebook"></i>
              <a href="https://www.facebook.com/imran.rahman.338" target="blank">
              facebook.com
              </a>
           </li>
        </ul>
     </div>
     <div class="col-md-7  col-sm-7"  uk-scrollspy="cls: uk-animation-slide-right; delay: 500; repeat: false">
        <h3 class="contact-title">You can Contact Us</h3>
        <div class="contact-form text-center">
           <div class="row">
              <div class="col-md-5">
                 <label for="">Name</label>
                 <input type="text" name="">
              </div>
              <div class="col-md-5">
                 <label for="">Email</label>
                 <input type="text" name=""> 
              </div>
           </div>
           <div class="row">
              <div class="col-md-7">
                 <label for="">Subject</label>
                 <br>
                 <textarea rows="5" cols="60"></textarea>   
              </div>
           </div>
           <div class="row">
              <div class="col-md-5">
                 <button class="text-center">  
                 Send Message
                 </button>
              </div>
              <div class="col-md-5">
              </div>
           </div>
        </div>
     </div>
  </div>
</div>
              
       
</div>
@endsection