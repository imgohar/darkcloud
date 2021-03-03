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
                           Operating Systems                 </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Game</a></li>
                                    <li class="breadcrumb-item active"> OS</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
  <div class="container">
      <h2 class="m-2">Distributions, operating systems and software available with your dedicated server</h2>
      <p>Find optimised version that are compatible with your server via the DarkCloud Control Panel.*</p>
     
      <h4>Operating Systems</h4>
      <h5 class="mt-5">Linux/Unix</h5>
      <ul>
        <li>Red Hat Enterprise Linux 7</li>
        <li> Red Hat Enterprise Linux 8</li>
        <li>CentOS 6</li>
        <li>CentOS 7</li>
        <li>CentOS 8</li>
        <li>Debian 9</li>
        <li>Debian 10</li>
        <li>Fedora 31</li>
        <li>Fedora 32</li>
        <li>Ubuntu</li>
        <li>Ubuntu 16.04</li>
        <li>Ubuntu 18.04</li>
        <li>Ubuntu 20.04</li>
        <li>Xubuntu Desktop 16.04</li>
        <li>FreeBSD 11 Root on ZFS</li>
        <li>OpenSUSE 42</li>
        <li>Arch Linux 2018</li>
        <li>Cloud Linux 7</li>
        <li>Gentoo 2018</li>
        
      </ul>

      <h5>Windows</h5>
      <ul>
        <li>Windows Server 2016 Standard edition</li>
        <li> Windows Server 2016 Datacenter edition</li>
        <li>Windows Server 2019 Standard edition</li>
        <li> Windows Server 2019 Datacenter edition</li>
      </ul>
      <h5>Databases</h5>
      <ul>
        <li>Microsoft SQL Server 2012 Standard edition</li>
        <li> Microsoft SQL Server 2012 Web edition</li>
        <li> Microsoft SQL Server 2014 Standard edition</li>
        <li>Microsoft SQL Server 2014 Web edition</li>
        <li>Microsoft SQL Server 2016 Standard edition</li>
        <li>Microsoft SQL Server 2016 Web edition</li>
        <li>Microsoft SQL Server 2017 Standard edition</li>
        <li>Microsoft SQL Server 2017 Web edition</li>
        <li>Microsoft SQL Server 2019 Standard edition</li>
        <li>Microsoft SQL Server 2019 Web edition</li>
      </ul>

      <h5>Administration interface</h5>
      <ul>
        <li>cPanel CentOS 6</li>
        <li> cPanel CentOS 7</li>
        <li>Linux Plesk 17 CentOS 7</li>
        <li>Linux Plesk 17 Debian 9</li>
        <li> DirectAdmin CentOS 7</li>
        <li>ISPconfig3 Debian 9</li>
      </ul>

      <h5>Virtualisation
    </h5>
    <ul>
     <li>   VMware ESXi 6.0</li>
     <li>  VMware ESXi 6.5</li>
     <li>  VMware ESXi 6.7</li>
     <li>  Citrix Xen Server 7</li>
     <li>  Citrix Xen Server 7.4</li>
     <li>  Windows Hyper-V Server 2016</li>
     <li>  Windows Hyper-V Server 2019</li>
     <li>  Proxmox VE 5</li>
     <li>  Proxmox VE 5 ZFS</li>
     <li>  Proxmox VE 6</li>
     <li>  CoreOS</li>
     <li>  SolusVM Master</li>
     <li>  SolusVM Slave</li>
    </ul>



  </div>

@endsection