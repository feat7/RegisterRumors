<!DOCTYPE html>
<html>
<head>
	<title>Rumour Registration</title>
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/codevector.css">
	<script type="text/javascript" src="assets/vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" id="page-top" class="index">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-toggle"><span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i> Menu</button>
				<a href="#page-top" class="navbar-brand">Rumour Registration</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-toggle">
			<ul class="nav navbar-nav navbar-right">
				<li class="page-scroll"><a href="/register">Sign Up</a></li>
				<li class="page-scroll"><a href="/login">Login</a></li>
			</ul>
			</div>
		</div>
	</nav>

	<!-- Main Header -->

	<header class="jumbotron hero" style="min-height: 220%;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="text-center" style="padding-top: 90px;">
                        <a href="#register-rumor" style="text-decoration:none; color:white;">
                        <i class="glyphicon glyphicon-fire" style="font-size: 190px; color: #fb7304;"></a></i>
                        <h2 class="header-heading"><a href="#register-rumor" style="text-decoration:none;color:white;">Register A Rumour</a></h2>
						<h2><small>Save valuable lives.</small></h2>
						<br/>
					</div>
					<div class="text-center" style="display:inline-grid;">
						<h3><i class="glyphicon glyphicon-phone" style="color: black;"></i> From Anywhere<i class="glyphicon glyphicon-magnet" style="color: #cc0000;"></i> Sort out Rumours form Truth.<i class="glyphicon glyphicon-leaf" style="color: #005500;"></i> Less Paperwork.<i class="glyphicon glyphicon-map-marker" style="color: #800000;"></i>Around You.</h3>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="result-holder">
	<h2>Recently registered Rumors</h2><hr/>
		{% for rumor in rumors %}
			<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{rumor.subject}}</h3>
                
                </div>
                <div class="panel-body">
                    {{rumor.message}}<br/>
                    Address: {{rumor.address}}<br/>
                    Pin Code: {{rumor.zipcode}}<br/>
                    Count Yes: {{rumor.count_yes}}<br/>
                    Count No: {{rumor.count_no}}
                </div>

                
            </div>
        </div>
	</div>
</div>
		{% endfor %}
	</section>

	<section id="register-rumor">
	<hr/>
		<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="/register-rumor" method="post">
          <fieldset>
            <legend class="text-center">Register Rumor in your area</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>

            <!-- Subject input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Rumour Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text" placeholder="Rumour Subject" class="form-control">
              </div>
            </div>

            <!-- postal code input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">ZIP Code</label>
              <div class="col-md-9">
                <input id="zipcode" name="zipcode" type="text" placeholder="ZIP Code" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
	</section>

	<!-- clients section -->

	<section id="clients">
		<div class="container">
			<h2>Know the Truth</h2>
			<hr/>
			<div class="text-center">
				<h1 style="font-size: 150px;"><i class="glyphicon glyphicon-briefcase"></i></h1>
				<h3>Are you tired of Rumours around you?</h3>
				<br/>
				<p>Some people enjoy spreading rumours about Diseases that are affecting lives around the globe and You are also in danger.<br>Don't mind if these are mere rumours as we will dig the truth for you.</p>
			</div>			
		</div>
	</section>
	<section class="about-us" id="aboutUs">
		<div class="container">
			<h2>About Us</h2>
			<br/>
			<div class="text-center">
				<h1 style="font-size: 100px;"><i class="glyphicon glyphicon-send"></i></h1>We are here to help.<br>
				Your rumours can harm others and registrating them for evaluation will help to eliminate them.
			</div>
		</div>
	</section>
    <h4>Rumors Registration copyright@2017</h4>

<script type="text/javascript" src="js/codevector.js"></script>
</body>
</html>