@extends('layouts.app')


@section('content')
 <!-- Breadcrumb Start -->
 <div class=" main-bg">
    <div class="container-fluid p-0">
        <div class="text-left iq-breadcrumb-one
              iq-bg-over black     ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title">
                          VPS Operating Systems             </h2>
                          
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Cloud</a></li>
                                <li class="breadcrumb-item active"><a href="/vps">VPS</a></li>
                                <li class="breadcrumb-item active">VPS operating systems</li>
                            </ol>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<section>
    <div class="container">
        <h2 class="text-center">Available operating systems and software programs for your VPS</h2>
        <p>We offer operating systems, applications, and web hosting control panels pre-installed on your VPS.</p>
        <br><br>

        <h3>Operating Systems</h3>
        <ul>
            <li>Archlinux</li>
            <li>Centos 7</li>
            <li>Centos 8</li>
            <li>Debian 9</li>
            <li>Debian 10</li>
            <li>Fedora 32</li>
            <li>Fedora 33</li>
            <li>FreeBSD 12 ZFS</li>
            <li>Ubuntu 16.04</li>
            <li>Ubuntu 18.04</li>
            <li>Ubuntu 20.04</li>
            <li>Ubuntu 20.10</li>
            <li>Windows Server 2016 Standard (Desktop)</li>
            <li>Windows Server 2019 Standard (Desktop)</li>
        </ul>
        <h3>Panels</h3>
        <ul>
            <li>Centos 7 - Plesk</li>
            <li>Centos 7 - cPanel</li>
            <li>Centos 8 - Virtualmin</li>
            <li>Debian 10 - Plesk</li>
           
        </ul>

        <h3>Operating Systems with application</h3>
        <ul>
            <li>Centos 7 - VestaCP</li>
            <li>Centos 8 - Docker</li>
            <li>Centos 8 - Drupal</li>
            <li>Centos 8 - GitLab</li>
            <li>Centos 8 - joomla</li>
            <li>Centos 8 - OpenVPN</li>
            <li>Centos 8 - Wordpress</li>
            <li>Centos 8 - Prestashop</li>
            <li>Debian 10 - Docker</li>
        </ul>

    </div>


@endsection