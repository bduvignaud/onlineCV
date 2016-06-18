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
        <div class="cat" id="ed_btn"><p>Education</p></div>
        <div class="cat" id="exp_btn"><p>Experiences</p></div>
        <div class="cat" id="pf_btn"><p>Portfolio</p></div>
        <div class="cat" id="ctc_btn"><p>Contact</p></div>
      </div>
      <div id="btn_scroll"><img id="scroll_logo" src="res/scroll_logo.png"></div>
    </div>
  </div>

  <div class="container">
    <div class="content" id="edu">
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
    <div class="content panel" id="exp">
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
    <div class="content panel" id="pf">
      <div class="panel-content">
        <a class="pf_link" id="pf_1" title="Soon"><img src="res/08.jpg" alt=""></a>
        <a class="pf_link" id="pf_2" title="Soon"><img src="res/load_chart.jpg" alt=""></a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="content panel" id="ctc">
      <div class="panel-content">
        <div class="ct_btn_grp">
          <a class="ct_btn" id="tw" href="https://twitter.com/BenoitDuvignaud"><img src="res/tw_logo.png"></a>
          <a class="ct_btn" id="in" href="https://fr.linkedin.com/in/benoitduvignaud"><img src="res/in_logo.png"></a>
          <a class="ct_btn" id="em" href="mailto:contact@benoitduvignaud.com"><img src="res/em_logo.png"></a>
        </div>
      </div>
    </div>
  </div>


</body>




<script type="text/javascript">

  var lastScrollTop = 0;
  var initPos = {};

  $(window).scroll(function(event){
    var st = $(this).scrollTop();
    if(st>10){
      $("#btn_scroll").stop(true, false);
      $("#btn_scroll").fadeTo(200, 0);
    }
    else {
      $("#btn_scroll").fadeTo(600, 1);
      loop();
    }
    lastScrollTop = st;
  });


  $(document).ready(resize_content);

  $(window).resize(resize_content);

  function resize_content() {

    vpw = $(window).width();
    vph = $(window).height();

    cth = $('.container').css('min-height', vph);
    ctw = $('.container').width(vpw);

    ch = $('.content').css('min-height', vph);
    cw = $('.content').width(vpw);

    $('#btn_scroll').css('margin-top', vph/10);

  };

  $(window).load(function(){
    loop();
    $("html, body").animate({ scrollTop: 0 }, 100);
    $(".content").each(function(index, element){
      initPos[index] = parseInt($(element).css("top"));
    });
  });

  $("#ed_btn").click(function(){
    $("html, body").animate({ scrollTop: $("#edu").offset().top }, 300);
  });

  $("#exp_btn").click(function(){
    $("html, body").animate({ scrollTop: $("#exp").offset().top }, 600);
  });

  $("#pf_btn").click(function(){
    $("html, body").animate({ scrollTop: $("#pf").offset().top }, 900);
  });

  $("#ctc_btn").click(function(){
    $("html, body").animate({ scrollTop: $("#ctc").offset().top }, 1200);
  });

  function loop(){
    $('#btn_scroll')
      .animate({paddingTop:40, paddingBottom:0},2000)
      .animate({paddingTop:0, paddingBottom:40},500, loop);
  }





</script>


</html>
