@extends('layouts.article')

@section('title','Article')

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
        <h2 class="tm-section-header tm-header-floating">Windows 11 TPM requirements — Microsoft finally clears up confusion</h2>  
    @endsection    

    @section('article1') 
    <p>The announcement of Windows 11’s system requirements could have gone better. Microsoft certainly could have done more to communicate what TPM 2.0 was, and why the operating system required it.</p>
    <p>But now we’re in the run-up to the Windows 11 October 5 launch, Microsoft seems to be trying to clear up all the confusion. That involves actually telling people what TPM 2.0 is, and how it can be activated.</p>  
    <p>A TPM is one of those things the majority of people have never even heard of, which caused a lot of confusion when Windows 11’s system requirements were announced. It didn’t help that some manufacturers, like ASUS, were updating older hardware that seemingly bypassed the TPM 2.0 requirement altogether.</p>
    <p>Microsoft tweeted out a response to the confusion, with a link to a support page explaining some of the basics of TPM 2.0 and how to make sure it’s enabled.</p>
    <p>The support page clarifies that “most PCs” that shipped over the past five years are capable of running the TPM 2.0 module. However, not all of them are actually set up to run the module, and it may be up to the user to check whether it’s been enabled or not. </p>
    <p>As the page points out, a lot of retail motherboards, often used by people building their own PCs from scratch, have a TPM but ship with it switched off. The support page explains different ways the TPM module can be activated, though Microsoft points out that anyone unfamiliar with this “level of technical detail” should “consult your PC manufacturer’s support information for more instructions specific to your device”.</p>
    <p>However anyone hoping to use a virtual machine with Windows 11 better be quite selective with how they go about it. Virtual machine owners have started reporting that the latest pre-release builds of Windows 11 are locking them out for not meeting the TPM requirements. Because virtual machines don't have physical TPM hardware to refer to.</p>
    <p>So if you plan on using Windows 11 virtually, be sure to use virtual machine software that can simulate a TPM. Unfortunately those appear to cost money.</p>
    <h2>Why is TPM even required for Windows 11?</h2>
    <p>Microsoft has explained that the TPM 2.0 module is needed as an “important building block” for a number of Windows 11’s features. Features like identity protection with Windows Hello, BitLocker and so on.</p>
    <p>The TPM also helps encrypt crucial data, so if your machine ever gets stolen all the information on your hard drive is kept safe. This is provided the TPM is still enabled, which explains why Windows 11 is requiring it at a system level.</p>
    <p>However, since a lot of TPMs may not be enabled by default, it means users may well need to go beyond their comfort zone to activate them in the BIOS. And one wrong move could end up with some pretty disastrous consequences, like a bricked machine. </p>    
    <p>So if you don’t know what you’re doing, take your computer to someone who does. A licensed computer technician should be able to handle activating a dormant TPM. And if they mess it all up, then that’s their problem to deal with and not yours.</p>
@endsection


@section('footer')
    Copyright &copy; 2020 New Vision 
                
    - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">TemplateMo</a>
@endsection