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
                          VPS Comparison              </h2>
                          
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Cloud</a></li>
                                <li class="breadcrumb-item active">VPS</li>
                                <li class="breadcrumb-item active">VPS comparison</li>
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
        <h2 class="text-center">Technical features of our VPS solutions</h2>
        <br><br>

        <table>
            <tr>
                <td></td>
                <td>Value <br><br>
                    $6.00 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
                <td>Essential<br><br>
                    $11.50 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
                <td>Comfort
                    <br><br>
                    $23.00 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
                <td>Elite
                    <br><br>
                    $31.28 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
            </tr>
            <tr>
                <th>Processor</th>	<td>1 vCore</td>	<td>2 vCore</td>	<td>4 vCore</td><td>  8 vCore</td>
            </tr>
            <tr>
                <th>Memory</th>	<td>2 GB</td>	<td>4 GB</td>	<td>8 GB</td><td>  From 8 GB to 32 GB</td>
            </tr>
            <tr>
                <th>Storage</th>	<td>40 GB SSD NVMe</td>	<td>80 GB SSD NVMe</td>	<td>160 GB SSD NVMe</td><td> From 160 GB to 640 GB SSD NVMe</td>
            </tr>
            <tr>
                <th>Bandwidth</th>	<td>250 Mbps unmetered*</td>	<td>500 Mbps unmetered*</td>	<td>1 Gbps unmetered*</td><td>  2 Gbps unmetered*</td>
            </tr>
        </table>

        <br>
        <h2>Included services</h2>
        <table>
            <tr>
                <th>Anti DDOS</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                
            </tr>
            <tr>
                <th>KVM</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                
            </tr>
            <tr>
                <th>Root access</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                
            </tr>
            <tr>
                <th>API</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                
            </tr>
            <tr>
                <th>IPv4 address</th>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                
            </tr>
            <tr>
                <th>IPv6 address</th>
                <td>/128</td>
                <td>/128</td>
                <td>/128</td>
                <td>/128</td>
               
                
            </tr>
            <tr>
                <th>Location</th>
               <td>8</td>
               <td>8</td>
               <td>8</td>
               <td>8</td>
               
                
            </tr>
            <tr>
                <th>Monitoring and Interventions	</th>
               <td>24/7</td>
               <td>24/7</td>
               <td>24/7</td>
               <td>24/7</td>
                
            </tr>
            <tr>
                <th>SLA	</th>
                <td>99.9%</td>
                <td>99.9%</td>
                <td>99.9%</td>
                <td>99.9%</td>
            </tr>
        </table>

        <h2>Available options</h2>
        <table>
            <tr>    
            <th>IPv4 adress</th>
                <td colspan="4"> $2.24 /IP
                </td>
            </tr>
            <tr>
                <th>Snapshot</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Additional Disks</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Automated Backups</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
        </table>

        <h2>OS and applications</h2>
        <table>
            <tr>
                <th>Archlinux</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Centos</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>cPanel</th>
                <td>Optional</td>
                <td>Optional</td>
                <td>Optional</td>
                <td>Optional</td>
            </tr>
            <tr>
                <th>Plesk</th>
                <td>Optional</td>
                <td>Optional</td>
                <td>Optional</td>
                <td>Optional</td>
            </tr>
            <tr>
                <th>CoreOS</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Docker</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>OpenVPN</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Vestacp</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Virtualmin</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Wordpress</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Debian</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Fedora</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Ubuntu</th>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
                <td><img src="{{URL::asset('images/dark-cloud/check.png')}}" alt=""></td>
            </tr>
            <tr>
                <th>Window Server</th>
                <td>Optional</td>
                <td>Optional</td>
                <td>Optional</td>
                <td>Optional</td>
            </tr>
            <tr>
                <td></td>
                <td>Value <br><br>
                    $6.00 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
                <td>Essential<br><br>
                    $11.50 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
                <td>Comfort
                    <br><br>
                    $23.00 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
                <td>Elite
                    <br><br>
                    $31.28 /month <br><br>
                    <a href="" class="btn btn-primary">Order now</a></td>
            </tr>
        </table>

</section>

    
    
 <!-- Faq Start -->
 <section class="iq-pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center iq-title-box iq-title-default iq-title-box-2">
                    <div class="iq-title-icon">
                    </div>
                    <span class="iq-subtitle">Faq</span>
                    <h2 class="iq-title">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-accordion  iq-accordion-semi-round iq-accordion-classic">

                    <div class="iq-accordion-block  1 accordion-active">
                        <div class="iq-accordion-title" style="">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                How do I choose my DarkCloud VPS?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> To pick out the VPS that best suits your needs, it is important to consider the following factors:
                                <br>
                                - the quantity of resources required (processor, memory, disk space, bandwidth, etc.)
                                <br>
                                - the operating system required (Linux or Windows)
                                <br>
                                - the technical requirements that are essential for the application to work properly (e.g. a database needs high read/write speed)
                                <br>
                                This will help you make the right choice from our VPS solutions.
                                <br>
                                - Starter VPS: An entry-level server range, to test out our solution (with a Linux distribution only, and no web hosting control panel).
                                <br>
                                - Value, Essential and Comfort VPS: Perfect for hosting websites, e-commerce services, and monitoring systems.
                                <br>
                                - Elite VPS: Specially adapted for e-commerce websites and applications that require more CPU and memory resources.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   2">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Is the VPS compatible with vRack?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Our VPS ranges are not compatible with the vRack private network. If you would like to use this service, our Public Cloud instances may be a better option for you.</p>

                        </div>
                    </div>


                    <div class="iq-accordion-block   3">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Is the bandwidth allocated to my VPS guaranteed?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">The bandwidth listed on our solution pages is guaranteed. It is the minimum amount allocated to you.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   4">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Which operating systems are compatible with a VPS?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> All of our operating systems are listed on our website. This list is updated in real time, depending on the distributions tested on our VPS.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   5">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What are web hosting control panels like Plesk or cPanel used for?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Web hosting control panels are used to simplify the way you manage multiple websites and services hosted on a single server. Administration actions are managed by these applications. You just need knowledge of how to use and configure the web hosting control panel.
                                We offer licences for these web hosting control panels when you purchase an DarkCloud VPS.</p>

                        </div>
                    </div>
                    <div class="iq-accordion-block   6">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What is DarkCloud Anti-DDoS protection, and what is it used for?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">This is our system to protect against distributed denial-of-service (DDoS) attacks. The aim of these attacks is to compromise a number of servers, and force them to saturate others with requests. The targeted infrastructure is then overwhelmed with several thousands of connection requests per second, making it unavailable as a result.

                                DDoS attacks are becoming more widely used by malicious parties, but DarkCloud is working hard to stop them from having an impact on services.
                                
                                DarkCloud Anti-DDoS protection is not optional — it's included with all of our servers.</p>

                        </div>
                    </div>
                    <div class="iq-accordion-block   7">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Where are the VPS servers located? Where is my data hosted?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Our servers are hosted in our own datacentres. For each range, we offer eight sites spread across several continents.
                                <br>
                                - Europe: France (Roubaix and Strasbourg), Germany (Frankfurt), the UK (London), Poland (Warsaw)
                                <br>
                                - North America: Canada (Beauharnois)
                                <br>
                                - Asia-Pacific: Australia (Sydney) and Singapore</p>

                        </div>
                    </div>
                    <div class="iq-accordion-block   8">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                Is my VPS backed up?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">DarkCloud does not take backups of the data hosted on your VPS. You are responsible for ensuring that your VPS is backed up.
                                To take backups, you can use the following options: manual backup (snapshots), or automated backup.</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq End -->



@endsection