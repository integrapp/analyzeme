<html>
  <head>
    <meta charset="UTF-8">
    <title>Analyze Me</title>

    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <style type="text/css">
      .demo-container {
        box-sizing: border-box;
        width: 100%;
        height: 450px;
        padding: 20px 15px 15px 15px;
        margin: 15px auto 30px auto;
        border: 1px solid #ddd;
        background: #fff;
        background: linear-gradient(#f6f6f6 0, #fff 50px);
        background: -o-linear-gradient(#f6f6f6 0, #fff 50px);
        background: -ms-linear-gradient(#f6f6f6 0, #fff 50px);
        background: -moz-linear-gradient(#f6f6f6 0, #fff 50px);
	      background: -webkit-linear-gradient(#f6f6f6 0, #fff 50px);
        box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        -o-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        -ms-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        -moz-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        -webkit-box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      }

      .demo-placeholder {
        width: 100%;
        height: 100%;
        font-size: 14px;
        line-height: 1.2em;
      }

      .legend table {
        border-spacing: 5px;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Analyze Me</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              </li>
            </ul>
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Your Weight!</h1>
		    <div class="demo-container">
          <div id="weight-graph" class="demo-placeholder"></div>
        </div>
        <form class="">
              <input class="span2 datepicker" type="text" name="date" placeholder="Date">
              <input class="span2" type="text" name="weight" placeholder="Kg.">
              <button type="submit" class="btn">Añadir peso</button>
        </form>
      </div>

      <div class="hero-unit">
        <h1>Your Diet!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <div class="row">
        <div class="span4">
          <h2>Your Profile</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>

        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>

        <div class="span4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>


    </div>

    <footer>
      <p>&copy; Company 2013</p>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery-1.10.1.js"></script>
    <script src="../js/jquery-ui-1.10.3.js"></script>
	  <script src="../js/jquery.flot.js"></script>
    <script src="../js/bootstrap.js"></script>

    <!-- Graphs -->
    <script type="text/javascript">
      $(function() {
        var d1 = [];
        d1.push([20130601, 80]);
        d1.push([20130602, 79.9]);
        d1.push([20130603, 75]);
        d1.push([20130604, 76]);
        d1.push([20130605, 78]);
        d1.push([20130606, 60]);
        d1.push([20130607, 63]);
        d1.push([20130608, 65]);
        d1.push([20130609, 60]);
        d1.push([20130610, 61]);
        d1.push([20130611, 62]);

        var d2 = [];
        d2.push([20130601, 80]);
        d2.push([20130602, 80]);
        d2.push([20130603, 77.5]);
        d2.push([20130604, 77]);
        d2.push([20130605, 77.5]);
        d2.push([20130606, 73]);
        d2.push([20130607, 70]);
        d2.push([20130608, 68]);
        d2.push([20130609, 65]);
        d2.push([20130610, 63]);
        d2.push([20130611, 63]);


        var data = [d1, d2];

        $.plot("#weight-graph", data);
        $(window).resize(function() {$.plot($('#weight-graph'), data);});
    });
    $(function() {
      $( ".datepicker" ).datepicker({ dateFormat: "yy-mm-dd" });
    });
	</script>
  </body>
</html>
