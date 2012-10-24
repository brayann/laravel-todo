<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ Asset::container('bootstrapper')->styles(); }}
	<title>Todo List - Edukee</title>
</head>
<body>
  {{Anbu::render();}}
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Edukee Todo</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">{{ HTML::link('dashboard', 'Home') }}</li>
              <li>{{ HTML::link('dashboard/new', 'Novo Todo') }}</li>
            </ul>
          </div><!--/.nav-collapse -->

          <div style="float:right;">
            <div class="btn-group" style="float:right;">
              <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> <?php echo Auth::user()->name; ?></a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to_action('auth@logout'); }}"><i class="icon-trash"></i>&nbsp;Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<div class="container">
		
		@yield('conteudo')

	</div>

	{{ Asset::container('bootstrapper')->scripts(); }}
</body>
</html>