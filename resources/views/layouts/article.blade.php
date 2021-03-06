<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../NewVision/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../NewVision/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../NewVision/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../NewVision/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../NewVision/css/templatemo-new-vision.css">
  
  
    
    <title>Halaman @yield('title')</title>
</head>
<body>
    @section('header')
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">                        
                       @yield('headerTitle')
                    </div>
    @show

    @section('sidebar')
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        @yield('navbar')
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    @yield('profiles')
                                </li>
                                <li class="nav-item active">
                                    @yield('articles')
                                </li>                         
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                        
                    </div>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg tm-services-bg"></div>        
            </div>
        </div>
    @show

    @section('content')
        <!-- Main -->
        <main>
            <!-- Welcome section -->
            <section class="tm-welcome">
                <div class="row">
                    <div class="col-12">
                        @yield('articleTitle')   
                    </div>
                </div>
                
                <div class="row tm-welcome-row">
                    <div class="tm-about">
                        <div class="col-12 tm-media tm-media-v-center">                        
                            <div>
                                @yield('article1')
                            </div>
                        </div>
                        <!-- <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-air-freshener tm-about-icon"></i>
                            <div>
                                <p>Curabitur et viverra purus, in ornare sem. Donec eu imperdiet felis, sed interdum leo. Mauris nisl mi, bibendum eu venenatis at, condimentum et dui. Proin mi enim, dapibus at metus semper, hendrerit faucibus nisi.</p>
                            </div>
                        </div>
                        <div class="col-12 tm-media tm-media-v-center">
                            <i class="fas fa-5x fa-fire-alt tm-about-icon"></i>
                            <div>
                                <p>Duis accumsan dolor feugiat dapibus ultrices. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst.</p>
                            </div>
                        </div>     -->
                    </div>
                </div>                               
            </section>                            
       
        </main>
    @show          
        @section('footer')                        
        @show
    </div>
    <script type="text/javascript" src="../NewVision/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../NewVision/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../NewVision/js/templatemo-script.js"></script>
    <script type="text/javascript" src="../NewVision/slick/slick.min.js"></script>
</body>
</body>
</html>