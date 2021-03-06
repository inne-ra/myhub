  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img class="media-object" src="{{asset('img/logo-6-mini.png')}}" height="50px" alt="logo"  >/span></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img class="media-object" src="{{asset('img/logo-6.png')}}" height="50px" alt="logo"  >/span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        @include('templates.adminlte.menu.top.mainnav')
        
      </div>
      <!-- /.navbar-collapse -->
      
      <div class="navbar-custom-menu">
        @include('templates.adminlte.menu.top')
      </div>
    </nav>
  </header>