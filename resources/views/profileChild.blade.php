@extends('layouts.profile')

@section('title','Profile')

@section('headerTitle')    
    <h1 class="tm-site-name">My Profile</h1>
@endsection

@section('sidebar')
    @section('navbar')
       @section('profiles')           
       <a class="nav-link tm-nav-link" href="index.html">Profile <span class="sr-only">(current)</span></a>
       @endsection
       @section('articles')
       <a class="nav-link tm-nav-link" href="#">Article</a>
       @endsection
@endsection

@section('content')
    @section('about')
        <h2 class="tm-section-header tm-header-floating">About Me</h2>  
    @endsection    

    @section('bio') 
        <p>Name: M. Afada Nur Saiva Syahira</p>
        <p>DOB: October 9th, 2001</p>
        <p>Hobby: Games</p>
        <p>Address: Jember</p>
    @endsection
    
    @section('academicTitle')
        <h2 class="tm-section-header tm-section-header-small mb-4">Academics</h2>     
    @endsection

    @section('elementary')
        <img src="../NewVision/img" alt="Image" class="img-fluid mb-5">
        <p class="tm-article-text">SD Negeri 1 Wonorejo</p>
        <p>Bertempat di Desa Wonorejo, Kecamatan Kencong, Kabupaten Jember</p>
        <p>Tahun Ajar 2008-2014</p>  
    @endsection

    @section('middle')
        <img src="../NewVision/img/SMP.jpg" alt="Image" class="img-fluid mb-5">
        <p class="tm-article-text">SMP Negeri 1 Kencong</p>
        <p></p>
        <p>Tahun Ajar 2014-2017</p>  
    @endsection

    @section('high')
        <img src="../NewVision/img/SMA.png" alt="Image" class="img-fluid mb-5">
        <p class="tm-article-text">SMA Negeri 2 Lumajang</p>
        <p></p>
        <p>Tahun Ajar 2017-2020</p>  
    @endsection  

    @section('now')
        <img src="../NewVision/img/polinema.png" alt="Image" class="img-fluid mb-5">
        <p class="tm-article-text">Politeknik Negeri Malang</p>
        <p></p>
        <p>Tahun Ajar 2020-now</p>  
    @endsection                                     

    @section('skill')
        <h2 class="tm-section-header tm-section-header-small mb-3">Skills</h2>   
    @endsection

    @section('java')   
        <h2>JAVA</h2>
    @endsection

    @section('csharp')   
        <h2>C#</h2>
    @endsection

    @section('ps')   
        <h2>PHOTOSHOP</h2>
    @endsection

    @section('ai')   
        <h2>ILLUSTRATOR</h2>
    @endsection

    @section('unity')   
        <h2>UNITY 3D</h2>
    @endsection

    @section('eng')   
        <h2>ENGLISH</h2>
    @endsection

    @section('jp')   
        <h2>JAPANESE</h2>
    

@endsection


@section('footer')
    Copyright &copy; 2020 New Vision 
                
    - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
@endsection