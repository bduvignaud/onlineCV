<!doctype html>

<html lang='fr'>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Benoit Duvignaud</title>
  <link href='res/Lato/latofonts.css' rel='stylesheet' type='text/css'>
  <script  src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="main_css_bduvignaud.css">
</head>

<body>
  <div class="container">
    <div class="content" id="header" >
      <img id="me" src="res/Me.jpg" class="img-circle"> <br>
      <div class="title">Benoit Duvignaud</div>
      <div class="catgrp">
        <div class="cat" id="ed_btn"><p>My Education</p></div>
        <div class="cat" id="exp_btn"><p>My Experiences</p></div>

        <div class="cat" id="pf_btn"><p>Portfolio</p></div>
        <div class="cat" id="ct_btn"><p>Contact</p></div>
      </div>
      <div id="btn_scroll">\/<br>\/</div>
    </div>
  </div>

  <div class="container"> 
    <div class="content" id="panel-1">
      <div class="panel-content">
        <img id="tse" src="res/logo_tse.png" class="">
        <h2 style="text-align: left"><strong>TELECOM Saint-Etienne</strong></h2>
        <h2 style="text-align: left">Master in Computer Science - 2015</h2>
        <p style="text-align: left">Specialized in software and web development. <br>
          I also studied image processing and image analysis. <br>
          I have learnt <i>PHP, HTML5/CSS3, JavaScript, Java/J2EE</i>.
          and some of their framework/library (Laravel-PHP ; Bootstrap-HTML5/CSS3 ; JQuery ; D3JS) <br>
          I was also introduced to Agile methodology, more particularly the Scrum method 
          and some usefull tools like Git/GitHub.
        </p>
        <br>
        <img id="ujm" src="res/tse-ujm.png" class="">
        <h2 style="text-align:right"><strong>Saint-Etienne University</strong></h2>
        <h2 style="text-align:right">2-YEAR Technical Degree - 2012</h2>
        <p style="text-align:right">
          Specialized in Computer and Electronic Sciences. <br>
          In partnership with TELECOM Saint-Etienne, to prepared the entry in Engineering School. <br>
          I learnt the base of program writing, with  C and C++
        </p>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="content panel" id="panel-2">
      <div class="panel-content">
        <img id="hlt" src="res/haulotte.png" class="">
        <h2 style="text-align:left">Web Developer & Project Manager</h2>
        <h3 style="margin-top:5px; text-align: left">November 2014 - January 2016</h3>
        <h4 style="text-align:left">L'Horme, France</h4>
        <p style="text-align:left">
          Website for internal usage, using HTML5‘s SVG and JavaScript library for data visualizations <br>
        </p>
        <br>
        <img id="cardiff" src="res/cardiff.jpg" class="">
        <h2 style="text-align:right">2-Month Internship</h2>
        <h3 style="text-align:right" style="margin-top:5px;">July 2014 - August 2014</h3>
        <h4 style="text-align:right">Cardiff, Wales, UK</h4>
        <p style="text-align:right">
          Improvement of a Matlab Program, using face recognition, and simple face modelling
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="content panel" id="panel-3">
      <div class="panel-content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent purus massa, lacinia at mauris eu, placerat vestibulum velit. Praesent quis facilisis augue, eu interdum magna. Morbi in pretium ligula. Vivamus faucibus sem eu gravida blandit. Vestibulum pharetra lacus ac vehicula interdum. Sed vulputate sed magna id placerat. Aenean tortor libero, finibus eu nisl at, placerat accumsan justo. Aliquam tristique eleifend lacus, eu pulvinar nibh fermentum et. Proin fermentum ipsum in ornare vestibulum. Praesent dignissim tristique nisi ornare egestas. Aliquam varius enim ac placerat tempor. Proin mauris ex, elementum nec odio ut, bibendum ullamcorper purus.
      </div>
    </div>
  </div>

  <div class="container">
    <div class="content panel" id="panel-4">
      <div class="panel-content">
        Praesent aliquam placerat libero, quis varius sem molestie a. Nunc non ptium enim. Aenean fermentum augue a ligula suscipit faucibus. Fusce magna erat, ornare eget ultricies eget, faucibus at lacus. Sed vehicula dolor nunc, tempus finibus magna suscipit eu. Etiam a nisl eget nibh eleifend scelerisque. Maecenas porta consequat leo ut lobortis. Duis consectetur in lectus eu sollicitudin. Nunc sagittis, eros in sollicitudin cursus, erat ipsum condimentum turpis, nec viverra mauris diam nec tellus. Suspendisse mollis risus cursus felis facilisis scelerisque.
      </div>
    </div>
  </div>


</body>




<script type="text/javascript">

  var lastScrollTop = 0;
  var initPos = {};

  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    console.log(st);
    if(st>10){
      $("#btn_scroll").fadeOut('fast');
    }
    else {
      $("#btn_scroll").fadeIn('slow');
    }

    /*$(".content").each(function(index, element){ 
      if(st>=initPos[index]) {
        $(element).css({"top":st+"px"})
      }
    })
    */
    lastScrollTop = st;
  });


  $(document).ready(resize_content);

  $(window).resize(resize_content);

  function resize_content() {

    vpw = $(window).width();
    vph = $(window).height();

    cth = $('.container').height(vph);
    ctw = $('.container').width(vpw);

    ch = $('.content').height(vph);
    cw = $('.content').width(vpw);


  };

  $(window).load(function(){
    $("html, body").animate({ scrollTop: 0 }, 100);
    $(".content").each(function(index, element){
      initPos[index] = parseInt($(element).css("top"));
    });
  });


  $("#ed_btn").click(function(){
    $("html, body").animate({ scrollTop: $(window).height() }, 300,function(){
      $("#ed").css({"background":"none", "color":"white"});
    });
  });

  $("#exp_btn").click(function(){
    $("html, body").animate({ scrollTop: 2*$(window).height() }, 600, function(){
      $("#tr").css({"background":"none", "color":"white"});
    });
  });

  $("#pf_btn").click(function(){
    $("html, body").animate({ scrollTop: 3*$(window).height() }, 900, function(){
      $("#contact").css({"background":"none", "color":"white"});
    });
  });

  $("#ct_btn").click(function(){
    $("html, body").animate({ scrollTop: 4*$(window).height() }, 1200, function(){
      $("#contact").css({"background":"none", "color":"white"});
    });
  });


</script>


</html>
