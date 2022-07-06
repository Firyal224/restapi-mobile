@extends('layouts.index')
@section('css')
     <link rel="stylesheet" href="{{asset('css/landingpage.css')}}">
    <link rel="stylesheet" href="{{asset('css/paginationDocumentation.css')}}">
    <link rel="stylesheet" href="{{asset('css/tutorProfil.css')}}">
@stop

@section('content')
    <section>
        <div class="hero">
          <div class="content-hero">
            <h1>Class <span class="spn">COURSES</span></h1>
            <div class="newslatter">
              <form>
                <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                <input type="submit" name="submit" value="Lets Start">
              </form>
            </div>
          </div>
        </div>
    </section>
    <section class="container section-slider">
      <div class="container">
        <input type="radio" name="dot" id="one">
        <input type="radio" name="dot" id="two">
        <div class="main-card">
          <div class="cards">
            <div class="card">
             <div class="content">
               <div class="img">
                  <img src="{{asset('images/img1.jpg')}}" alt="">
               </div>
               <div class="details">
                 <div class="name">Firyal</div>
                 <div class="job">Web Designer</div>
               </div>
               <div class="media-icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
             </div>
            </div>
            <div class="card">
             <div class="content">
               <div class="img">
                 <img src="{{asset('images/img1.jpg')}}" alt="">
               </div>
               <div class="details">
                 <div class="name">Firyal</div>
                 <div class="job">UI Designer</div>
               </div>
               <div class="media-icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
             </div>
            </div>
            <div class="card">
             <div class="content">
               <div class="img">
                  <img src="{{asset('images/img1.jpg')}}" alt="">
               </div>
               <div class="details">
                 <div class="name">Firyal</div>
                 <div class="job">Web Devloper</div>
               </div>
               <div class="media-icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
             </div>
            </div>
          </div>
          <div class="cards">
            <div class="card">
             <div class="content">
               <div class="img">
                  <img src="{{asset('images/img1.jpg')}}" alt="">
               </div>
               <div class="details">
                 <div class="name">Firyal</div>
                 <div class="job">Web Designer</div>
               </div>
               <div class="media-icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
             </div>
            </div>
            <div class="card">
             <div class="content">
               <div class="img">
                  <img src="{{asset('images/img1.jpg')}}" alt="">
               </div>
               <div class="details">
                 <div class="name">Firyal</div>
                 <div class="job">UI Designer</div>
               </div>
               <div class="media-icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
             </div>
            </div>
            <div class="card">
             <div class="content">
               <div class="img">
                  <img src="{{asset('images/img1.jpg')}}" alt="">
               </div>
               <div class="details">
                 <div class="name">Nicole Lewis</div>
                 <div class="job">Web Devloper</div>
               </div>
               <div class="media-icons">
                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                 <a href="#"><i class="fab fa-twitter"></i></a>
                 <a href="#"><i class="fab fa-instagram"></i></a>
                 <a href="#"><i class="fab fa-youtube"></i></a>
               </div>
             </div>
            </div>
          </div>
        </div>
        <div class="button">
          <label for="one" class=" active one"></label>
          <label for="two" class="two"></label>
        </div>
      </div>
    
    </section>
    <main class="full-main">
      <div class="highlight-content">
        <div class="left">
          <div class="data-container"></div>
         <div id="pagination-demo1">
        </div>

        </div>
        <div class="list-populer">
          <div id="cover">
            <form method="get" action="">
              <div class="tb">
                <div class="td"><input type="text" placeholder="Search" required></div>
                <div class="td" id="s-cover" >
                  <button type="submit" style="margin-bottom: 60px;" >
                    <div id="s-circle" style="margin-bottom: 60px;"></div>
                    <span ></span>
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div class="title">
            <h3>Popular Post</h3>
          </div>
          <div class="box-list">
            <div class="card-list-content">
              <div class="image-list-content"><img src="{{asset('images/description.png')}}" width="20px"/></div>
              <div class="coloumn">
                <a href="#" class="link-class">Mengenal Sistem Otentikasi API berbasis</a>
                <div class="info-class">
                    <span><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right: 8px;"></i>
                      h1</span>
                    <span><i class="fa fa-book" aria-hidden="true"style="margin-right: 8px;"></i>
                    h1</span>
                </div>
                <span>Rp.5000</span>
                
              </div>
            </div>
            <div class="card-list-content">
              <div class="image-list-content"><img src="{{asset('images/description.png')}}" width="20px"/></div>
              <div class="coloumn">
                <a href="#" class="link-class">Mengenal Sistem Otentikasi API berbasis</a>
                <div class="info-class">
                    <span><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right: 8px;"></i>
                      h1</span>
                    <span><i class="fa fa-book" aria-hidden="true"style="margin-right: 8px;"></i>
                    h1</span>
                </div>
                <span class="ldr">Rp.5000</span>
                
              </div>
            </div>
            <div class="card-list-content">
              <div class="image-list-content"><img src="{{asset('images/description.png')}}" width="20px"/></div>
              <div class="coloumn">
                <a href="#" class="link-class">Mengenal Sistem Otentikasi API berbasis</a>
                <div class="info-class">
                    <span><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right: 8px;"></i>
                      h1</span>
                    <span><i class="fa fa-book" aria-hidden="true"style="margin-right: 8px;"></i>
                    h1</span>
                </div>
                <span class="ldr">Rp.5000</span>
                
              </div>
            </div>
            <div class="card-list-content">
              <div class="image-list-content"><img src="{{asset('images/description.png')}}" width="20px"/></div>
              <div class="coloumn">
                <a href="#" class="link-class">Mengenal Sistem Otentikasi API berbasis</a>
                <div class="info-class">
                    <span><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right: 8px;"></i>
                      h1</span>
                    <span><i class="fa fa-book" aria-hidden="true"style="margin-right: 8px;"></i>
                    h1</span>
                </div>
                <span class="ldr">Rp.5000</span>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @section('javascript')
           <script src="{{asset('js/paginationDocumentation.js')}}"></script>
           <script src="{{asset('js/landingpage.js')}}"></script>
    <script>
    $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    });

    function formatDate(value) {
                        let date = new Date(value);
                        const day = date.toLocaleString('default', { day: '2-digit' });
                        const month = date.toLocaleString('default', { month: 'short' });
                        const year = date.toLocaleString('default', { year: 'numeric' });
                        return day + '-' + month + '-' + year;
    }
     $(document).ready(function () {
             $.ajax({
                type:'get',
                url:"/konten",
                success:function(data){
                   
                  console.log(data);

                  
                   
                    $(function() {
                                (function(name) {
                                var container = $('#pagination-' + name);
                                var sources = function () {
                                    var result = [];
                            
                                    for (var i = 1; i <= data.length; i++) {
                                    result.push(i);
                                    }
                            
                                    return result;
                                }();
                            
                                var options = {
                                    dataSource: sources,
                                    callback: function (response, pagination) {
                                    window.console && console.log(response, pagination);
                            
                                    var dataHtml = '';
                            
                                    $.each(response, function (index, item,harga) {
                                        dataHtml += '<div class="card-content" ><img src="../images/'+data[index].images+'"/><div class="tentor"><span><i class="fa fa-check-circle" aria-hidden="true"></i></span></div><h3>'+data[index].judul+'</h3>'+'<p>'+data[index].konten+'</p><div class="wrap-info-class"><div class="info-class"><span><i class="fa fa-bar-chart" aria-hidden="true" style="margin-right: 8px;"></i>8 likes</span><span><i class="fa fa-book" aria-hidden="true"style="margin-right: 8px;"></i>30 modul</span></div><span ><i class="fa fa-clock-o" aria-hidden="true" style="margin-right: 10px;"></i>Post: <time datetime="2018-07-07">'+formatDate(data[index].created_at)+'</time></span></div><div class="part-price"><h4>Basic</h4></div></div>';
                                    });
                            
                            
                                    container.prev().html(dataHtml);
                                    }
                                };
                            
                                //$.pagination(container, options);
                            
                                container.addHook('beforeInit', function () {
                                    window.console && console.log('beforeInit...');
                                });
                                container.pagination(options);
                            
                                container.addHook('beforePageOnClick', function () {
                                    window.console && console.log('beforePageOnClick...');
                                    //return false
                                });
                                })('demo1');
                    })
                }
            });
    });
   
    </script>
    @stop
    
@endsection

