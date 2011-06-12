<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Scaling PHP in the Cloud</title>
  <meta name="DC.title" content="Scaling PHP in the Cloud"/>
  <meta name="description" content="A one day conference on developing and deploying PHP apps in the cloud">
  <meta name="author" content="HasGeek">

  <link rel="icon" href="img/favicon.ico"/>
  <link rel="shortcut icon" href="img/favicon.ico"/>

  <!-- Stylesheets -->
  <link href="css/screen.css" rel="stylesheet" type="text/css" />
  <!--[if IE]>
      <link href="css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
  <script src="js/libs/modernizr-1.6.min.js"></script>
  <script type="text/javascript" src="http://use.typekit.com/ivx8saq.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-19123154-12']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>
<body>
  <a id="top" name="top"></a>
  <div id="container" class="container">
    <header>
      <h1 id="site-title">Scaling PHP in the Cloud</h1>
      <p>
        <span class="cloud"><span>July 9, 2011, Bangalore. Watch this space.</span></span>
      </p>
      <p>
        <span class="cloud"><span>Speakers, prepare your abstracts.</span></span>
        <span class="cloud"><span><a href="http://funnel.hasgeek.in/phpcloud/">Call for Speakers is now open.</a></span></span>
      </p>
      <p>
        <span class="cloud"><span><a href="http://phpcloud.doattend.com/">Early bird registration is also open.</a></span></span>
        <span class="cloud"><span>Official website goes up on Monday.</span></span>
      </p>
    </header> <!--
    <?php /*
      <ul id="main-navigation">
        <li><a href="#top">Top</a></li>
        <li><a href="#agenda">Agenda</a></li>
        <li><a href="#register">Register</a></li>
        <li><a href="#schedule">Schedule</a></li>
        <li><a href="#sponsors">Sponsors</a></li>
        <li><a href="#venue">Venue</a></li>
        <li><a href="#credits">Credits</a></li>
      </ul>
      */ ?> -->
    <!--
    <? php /*
    <div id="main">
      <article id="agenda"></article>
      <article id="register"></article>
      <article id="schedule">
        <p>
          Event schedule will be announced closer to event date.
        </p>
      </article>
      <article id="sponsors"></article>
      <article id="venue">
        <h2>Venue</h2>
        <p>
          Dharamaram College, inside Christ University campus, Dairy Circle, Bangalore.
        </p>
        <p>[Map]</p>
        <h3>Directions</h3>
        <p>
          Enter from Christ University's gate and drive straight down to Dharmaram College.
          If you are approaching from Dairy Circle, you will have to pass Christ towards
          Forum for a U-turn.
        </p>
      </article>
      <article id="credits"></article>
    </div>
    */ ?> -->
    <div id="main_footer"></div>
  </div> <!-- end of #container -->
  <footer>
    <p id="hasgeek">
      <a href="http://hasgeek.in/">HasGeek</a>
    </p>
  </footer>

  <script type="text/javascript" src="js/libs/jquery-1.5.1.min.js"></script>

  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->

  <script type="text/javascript">
    $(window).load(function() {
        $("input:checkbox").click(function() {
            if($(this).is(':checked')) {
               $(this).next('label').addClass('checked');
            } else {
               $(this).next('label').removeClass('checked');
            }
        });
        $("input:checkbox").hide();
    });
    $(function() {
        var cloud = function(canvas1, canvas2, canvas3) {
            var circle = function(ctx, x, y, radius) {
                ctx.arc(x, y, radius, 0, Math.PI*2, false);
            };
            var cheight = canvas1.height-4;
            var cwidth = canvas1.width-6;
            var filldia = cheight/2;
            var fillradius = cheight/4;

            var ctx1 = canvas1.getContext("2d");
            var ctx2 = canvas2.getContext("2d");
            var ctx3 = canvas3.getContext("2d");
            ctx1.translate(3,0);
            ctx2.translate(3,0);
            ctx3.translate(3,0);
            gradient1 = ctx1.createLinearGradient(0, 0, 0, cheight);
            gradient1.addColorStop(0, '#ffffff');
            gradient1.addColorStop(0.75, '#f9f9f9');
            gradient1.addColorStop(1, '#e0e0e0'); //'#f0f0f0');
            ctx1.fillStyle = gradient1; //"#ffffff";
            gradient2 = ctx2.createLinearGradient(0, 0, 0, cheight);
            gradient2.addColorStop(0, '#ffffff');
            gradient2.addColorStop(0.75, '#f9f9f9');
            gradient2.addColorStop(1, '#e0e0e0');
            ctx2.fillStyle = gradient2; //"#eeeeee";
            gradient3 = ctx3.createLinearGradient(0, 0, 0, cheight);
            gradient3.addColorStop(0, '#eeeeee');
            gradient3.addColorStop(0.75, '#d9d9d9');
            gradient3.addColorStop(1, '#c0c0c0');
            ctx3.fillStyle = gradient3; //"#dddddd";
            ctx1.shadowOffsetX = 0;
            ctx1.shadowOffsetY = 1;
            ctx1.shadowBlur    = 4;
            ctx1.shadowColor   = 'rgba(0, 0, 0, 0.3)';
            ctx2.shadowOffsetX = 0;
            ctx2.shadowOffsetY = 1;
            ctx2.shadowBlur    = 4;
            ctx2.shadowColor   = 'rgba(0, 0, 0, 0.3)';
            ctx3.shadowOffsetX = 0;
            ctx3.shadowOffsetY = 1;
            ctx3.shadowBlur    = 4;
            ctx3.shadowColor   = 'rgba(0, 0, 0, 0.3)';

            ctx1.beginPath();
            ctx2.beginPath();
            ctx3.beginPath();

            var rand;
            ctx1.rect(fillradius, filldia, cwidth-filldia, filldia);
            ctx2.rect(fillradius, filldia, cwidth-filldia, filldia);
            ctx3.rect(fillradius, filldia, cwidth-filldia, filldia);
            circle(ctx1, fillradius, filldia+fillradius, fillradius);
            circle(ctx2, fillradius, filldia+fillradius, fillradius);
            circle(ctx3, fillradius, filldia+fillradius, fillradius);
            rand = Math.random()*fillradius/2+fillradius/2;
            circle(ctx1, fillradius, filldia, rand);
            circle(ctx2, fillradius, filldia, rand);
            circle(ctx3, fillradius, filldia, rand);

            var stepsize = (cwidth+filldia)/Math.floor((cwidth+filldia)/filldia);
            var position = stepsize;

            while (position <= cwidth-stepsize) {
                rand = Math.random()*fillradius+fillradius;
                circle(ctx1, position, filldia, rand);
                circle(ctx2, position, filldia, rand);
                circle(ctx3, position, filldia, rand);
                position += stepsize;
            }

            rand = Math.random()*fillradius/2+fillradius/2;
            circle(ctx1, cwidth-fillradius, filldia, rand);
            circle(ctx2, cwidth-fillradius, filldia, rand);
            circle(ctx3, cwidth-fillradius, filldia, rand);
            circle(ctx1, cwidth-fillradius, filldia+fillradius, fillradius);
            circle(ctx2, cwidth-fillradius, filldia+fillradius, fillradius);
            circle(ctx3, cwidth-fillradius, filldia+fillradius, fillradius);

            ctx1.closePath();
            ctx2.closePath();
            ctx3.closePath();
            ctx1.fill();
            ctx2.fill();
            ctx3.fill();

        };
        $(".cloud").each(function() {
            var canvas1 = document.createElement('canvas');
            var canvas2 = document.createElement('canvas');
            var canvas3 = document.createElement('canvas');
            canvas1.className = 'base';
            canvas2.className = 'hover';
            canvas3.className = 'checked';
            canvas1.width = $(this).width();
            canvas1.height = $(this).height()*2+5;
            canvas2.width = canvas1.width;
            canvas2.height = canvas1.height;
            canvas3.width = canvas1.width;
            canvas3.height = canvas1.height;
            $(this).append(canvas1);
            $(this).append(canvas2);
            $(this).append(canvas3);
            cloud(canvas1, canvas2, canvas3);
        });
    });
  </script>

</body>
</html>
