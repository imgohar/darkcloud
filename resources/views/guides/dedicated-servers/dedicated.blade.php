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
                                    Dedicated servers                     </h2>
                                <ol class="breadcrumb main-bg">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Guides</a></li>
                                    <li class="breadcrumb-item active"> Dedicated Servers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Icon-box Start -->
    <section class="iq-pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                        <div class="iq-title-icon">
                        </div>
                        <span class="iq-subtitle">Guides</span>
                        <h2 class="iq-title">
                            How to use your DarkCloud dedicated server </h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2>Getting Started</h2>
                    <br>
                    <p class="bg-light p-2"><a href="/dedicated-servers/guide/getting-started-with-dedicated-server">Getting Started with a dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Securing a dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Getting started with SSH</a></p>
                    <p class="bg-light p-2"><a href="">Using the IPMI with dedicated servers</a></p>

                    <h2>Security</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Creating SSH keys</a></p>

                    <h2>Diagnostics and rescue mode</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Activating and using rescue mode</a></p>
                    <p class="bg-light p-2"><a href="">Replacing a defective disk</a></p>
                    <p class="bg-light p-2"><a href="">Hardware diagnostics</a></p>
                    <p class="bg-light p-2"><a href="">Hot Swap - Raid Hard</a></p>
                    <p class="bg-light p-2"><a href="">Finding the serial number of a hard disk</a></p>
                    <p class="bg-light p-2"><a href="">Installing Real Time Monitoring (RTM)</a></p>
                    <p class="bg-light p-2"><a href="">Installing an OVH SSH key</a></p>

                    <h2>RAID and disks</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Hot-swapping a disk on a server with a software RAID configuration</a></p>
                    <p class="bg-light p-2"><a href="">Configuring MegaRAID for RAID Level 0</a></p>
                    <p class="bg-light p-2"><a href="">Managing Hardware RAID</a></p>
                    <p class="bg-light p-2"><a href="">Configuring software RAID</a></p>
                    <p class="bg-light p-2"><a href="">Creating a Windows partition on a server with hardware RAID</a></p>


                    <h2>Tutorial</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Moving and retrieving data on a dedicated server via SFTP</a></p>
                    <p class="bg-light p-2"><a href="">Copying data from one dedicated server to another using rsync</a></p>
                    <p class="bg-light p-2"><a href="">Setting up a LAMP server in Debian 9 and Ubuntu 18</a></p>
                    <p class="bg-light p-2"><a href="">Optimising the sending of emails</a></p>
                    <p class="bg-light p-2"><a href="">Configuring pfSense network bridge</a></p>
                    <p class="bg-light p-2"><a href="">Backing up data and databases on a Storage Server</a></p>


                </div> 
                <div class="col-lg-6 col-md-12">
                    <h2>Server Management</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Changing the root password on a dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Changing the admin password on a Windows dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Starting your server on an OVH kernel</a></p>
                    <p class="bg-light p-2"><a href="">Using backup storage on a dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Changing a Windows Server product key</a></p>

                    <h2>Network management</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Configuring the Network Firewall</a></p>
                    <p class="bg-light p-2"><a href="">Configuring a network bridge</a></p>
                    <p class="bg-light p-2"><a href="">What are the IP addresses of the OVH monitoring ?</a></p>
                    <p class="bg-light p-2"><a href="">Configuring IP aliasing</a></p>
                    <p class="bg-light p-2"><a href="">Configuring IPv6 on dedicated servers</a></p>
                    <p class="bg-light p-2"><a href="">Assigning a Virtual MAC to a Failover IP</a></p>

                    <h2>Advanced use</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Configuring DarkCloud Secondary DNS on a dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Upgrading your Cisco ASA firewall</a></p>
                    <p class="bg-light p-2"><a href="">How to use the Bring Your Own Image feature</a></p>
                    <p class="bg-light p-2"><a href="">Installing CUDA on a dedicated GPU server</a></p>
                    <p class="bg-light p-2"><a href="">Choosing the disk group to install an operating system</a></p>
                    <p class="bg-light p-2"><a href="">Updating the kernel on a dedicated server</a></p>
                    <p class="bg-light p-2"><a href="">Securing a server with a Memcached service</a></p>
                    <p class="bg-light p-2"><a href="">How to Configure Your NIC for DarkCloud Link Aggregation in CentOS 7</a></p>
                    <p class="bg-light p-2"><a href="">How to Configure Your NIC for DarkCloud Link Aggregation in Debian 9</a></p>
                    <p class="bg-light p-2"><a href="">Configuring DarkCloud Link Aggregation in the DarkCloud Control Panel</a></p>
                    <p class="bg-light p-2"><a href="">How to Configure Your NIC for DarkCloud Link Aggregation in Windows Server 2019</a></p>
                    <p class="bg-light p-2"><a href="">How to Configure Managing Intel SGX on an Infrastructure server</a></p>
                    <p class="bg-light p-2"><a href="">AMD SME/SEV on Ubuntu 20</a></p>

                    <h2>vRack</h2>
                    <br>
                    <p class="bg-light p-2"><a href="">Configuring Jumbo Frames in vRack</a></p>
                    <p class="bg-light p-2"><a href="">Configuring an IP block in a vRack</a></p>
                    <p class="bg-light p-2"><a href="">Configuring the vRack between the Public Cloud and a Dedicated Server</a></p>
                    <p class="bg-light p-2"><a href="">Creating multiple vLANs in a vRack</a></p>
                    <p class="bg-light p-2"><a href="">Change the announcement of an IP block in vRack</a></p>
                    <p class="bg-light p-2"><a href="">Configuring the vRack on your dedicated servers</a></p>

                </div>
            </div>
        </div>
    </section>
    <!-- Icon-box End -->
@endsection