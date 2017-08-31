<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://v4-alpha.getbootstrap.com/examples/sticky-footer-navbar/sticky-footer-navbar.css">
        <script>
                $(document).ready(function () {
                    $('.nav li').click(function(){
                    $('.nav li').removeClass('active');
                    $(this).addClass('active');
                    })
                })
               </script>
        <title>McNight's Blog</title>

    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Logo -->
            <div class="navbar-hearder">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                    
                </button>
                <a href="#" class="navbar-brand">McNight's Blog</a>
            </div>

            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>

                    <!-- drop down menu -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ect. <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Stuff 1</a></li>
                            <li><a href="#">Stuff 2</a></li>
                            <li><a href="#">Stuff 3</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- right align -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Login</a></li>
                </ul>

                
            </div>
        </div>
    </nav>            
                
            
                
    <div class="container">
        <!-- Test -->
    @yield('content')
    </div>
    <footer class="footer">
        <div class="container">
          <span class="text-muted">&#169Copyright Sometime in August by McNight Thao</span>
        </div>
    </footer>
      
    </body>
      
</html>