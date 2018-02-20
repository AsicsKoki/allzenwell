@extends('layouts.main')

@section('content')
<div class="site-wrapper">

<div class="site-wrapper-inner">

  <div class="cover-container">

	<div class="masthead clearfix">
	  <div class="inner">
		<h3 class="masthead-brand pull-left">AllZenWell</h3>
		<nav>
		  <ul class="nav masthead-nav">
			<li class="active"><a href="#">About</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Log In</a></li>
			<li><a id="add_retreat" href="#">Add Retreat</a></li>
		  </ul>
		</nav>
	  </div>
	</div>

	<div class="inner cover">
	  <h1 class="cover-heading">UNPLUG. DE-STRESS. RECHARGE.</h1>
	  <p class="lead">Discover the best handpicked yoga retreats and yoga teacher trainings on the planet</p>
	  <p class="lead">
		<a href="#" class="btn btn-lg btn-default">Learn more</a>
	  </p>
	</div>
	<div class="sections_header_split">
		<div class="section_header_split_left">
			<div class="registration_form_container">
				<h3>Register Now</h3>
				<label for="username">
					Username:
				</label>
				<input type="text" name="username">
				<label for="password">
					Password:
				</label>
				<input type="password" name="password">
				<button class="btn btn-default">GO!</button>
			</div>
		</div>
		<div class="section_header_split_right">
		<h3>Choose a destination now</h3>
			<a href="#" class="show_submenu">Destination</a>
			<a href="#" class="show_submenu">Popular</a>
			<a href="#" class="show_submenu">Yoga Types</a>
			<input type="date"> <span>from</span>
			<input type="date"> <span>to</span>
		</div>
	</div>
	
	<div class="mastfoot">
	  <div class="inner">
		<p>Proudly powered by <a href="http://booproweb.com">Booproweb &trade;</a></p>
	  </div>
	</div>

  </div>

</div>

</div>