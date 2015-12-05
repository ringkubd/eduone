<!DOCTYPE html>
<html ng-app="App">
    <head>
        <title>Uniform @yield('title')</title>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/assets/css/app.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/assets/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
        <script type="text/javascript" src="https://code.angularjs.org/1.4.7/angular-resource.min.js"></script>
        <script type="text/javascript" src="/assets/js/ui-bootstrap-tpls-0.14.3.min.js"></script>
        <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/assets/js/sortable.js"></script>
        <script type="text/javascript" src="/assets/js/tg.dynamic.directive.js"></script>
        <script type="text/javascript" src="/assets/js/app.js"></script>
        <script type="text/javascript">
        var APP_URL = 'http://uniform.dev/';
        // before loading pace.js
        window.paceOptions = {
          target: 'main'
        };

        $(function(){
          $('.dropdown-menu').click(function(e) {
            e.stopPropagation();
          });
        });
        </script>
                <script type="text/javascript" src="/assets/js/pace.min.js"></script>

        @yield('header')
    </head>
    <body>
      
        <div class="container-fluid" id="wrapper">
            <div class="row row-offcanvas row-offcanvas-left">
                <aside id="sidebar" class="sidebar-offcanvas">
                    <header id="header">
                        <h1><a href="/">binaty</a></h1>
                    </header>
                    
                    <nav id="main-menu">
                        {!! App\Menu::render() !!}
                    </nav>
                </aside>          
              
                <main id="main">
                    
                    <button type="button" class="btn btn-default btn-offcanvas visible-sm visible-xs" data-toggle="offcanvas"><i class="fa fa-bars"></i></button>
                    
                    <nav id="navbar-top" class="navbar navbar-default">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <a class="navbar-brand" href="#">@yield('main_title')</a>
                        </div>

                        <div id="main-button">@yield('main_button')</div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://avatars2.githubusercontent.com/u/9004445?v=3&s=20" alt="Edit Profile"> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Signed in as <strong>Tan Nguyen</strong></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('/profiles')}}">My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('/sign-out')}}">Sign out</a></li>
                                </ul>
                            </li>
                        </ul>

                       <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-form navbar-right" role="search">
                            @yield('search_box')
                        </div>
                            
                      </div><!-- /.container-fluid -->
                    </nav>

                    <div class="container-fluid">
                        
                        @if (! empty(session('message')))
                        <header class="row" id="messages">    
                            <div class="alert alert-warning col-md-12">
                                {!! session('message') !!}
                            </div>
                        </header>
                        @endif

                        <section class="row" id="content">
                            <div class="col-md-12">
                                @yield('content')
                            </div>
                        </section>

                        <footer class="row" id="footer">
                            <div class="col-md-12">
                                Copyright &copy; 2015 <a href="https://binaty.org">Binaty</a>
                            </div>
                        </footer>
                    </div>
                </main>
            </div><!--.rơ-->
        </div><!--.container-fluid-->

        @yield('footer')
    </body>
</html>
