@extends('layouts.article')

@section('title','Profile')

@section('headerTitle')    
    <h1 class="tm-site-name">Articles</h1>
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
    @section('articleTitle')
        <h2 class="tm-section-header tm-header-floating">Games</h2>  
    @endsection    

    @section('article1') 
        <p>Games</p>
        <p>DOB: October 9th, 2001</p>
        <p>Hobby: Games</p>
        <p>Address: Jember</p>
        

@endsection


@section('footer')
    Copyright &copy; 2020 New Vision 
                
    - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
@endsection