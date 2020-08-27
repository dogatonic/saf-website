<nav class="navbar bg-light navbar-light navbar-expand-lg">
	<div class="container">
	<a href="/" class="logolink">Suburban Alcoholic Foundation</a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="/" class="nav-link <?= setActiveNav('home'); ?>">Home</a></li>
			<li class="nav-item"><a href="/about" class="nav-link <?= setActiveNav('about'); ?>">About</a></li>
			<li class="nav-item"><a href="/meetings" class="nav-link <?= setActiveNav('meetings'); ?>">Meetings</a></li>
			<li class="nav-item"><a href="/resources" class="nav-link <?= setActiveNav('resources'); ?>">Resources</a></li>
			<li class="nav-item"><a href="/find_us" class="nav-link <?= setActiveNav('find_us'); ?>">Find&nbsp;Us</a></li>
		</ul>
	</div>

	</div>
</nav>