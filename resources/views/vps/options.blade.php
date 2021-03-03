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
                          VPS Options              </h2>
                          
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><i class="fa fa-home mr-2"></i>Bare Metal Cloud</a></li>
                                <li class="breadcrumb-item active">VPS</li>
                                <li class="breadcrumb-item active">VPS options</li>
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
        <h2 class="text-center">Options available with your VPS</h2>

        <div class="row">
            <div class="col-lg-3 border text-center shadow">
                <h4>FAILOVER IP</h4>
                <h3>$2.24</h3>
                /IP <br>
                <button class="btn btn-primary">Control panel</button>
                <p>Hosting without interruptions</p>
            </div>
            <div class="col-lg-9">
                <p class="mt-5">With a VPS, you can use a failover IP to host your projects, SSL certificates, and more. The failover IP can be switched from one server to another in just a few seconds. An account with a failover IP works without interruptions, and is the best solution for handling hardware failures, overloaded applications, and other infrastructure problems.</p>
            </div>
            
            <div class="col-lg-3 mt-5 border text-center shadow">
                <h4>Geolocated IP</h4>
                <h3>$2.24</h3>
                /IP <br>
                <button class="btn btn-primary">Control panel</button>
                <p>Optimise your global SEOs</p>
            </div>
            <div class="col-lg-9 mt-5">
                <p class="mt-5">Add up to 16 geolocated IP addresses in France, Germany, Italy, Spain, the UK, Poland, Portugal, Ireland, the Czech Republic, the Netherlands, Finland, Lithuania and Belgium. You can attach IPs from several countries to a single VPS, whatever the model.</p>
            </div>
            <div class="col-lg-3 mt-5 border text-center shadow">
                <h4>Load Balancer</h4>
                <h3>$22.99</h3>
                /month <br>
                <button class="btn btn-primary">Control panel</button>
                <p>Guaranteed flexibility</p>
            </div>
            <div class="col-lg-9 mt-5">
                <p class="mt-5">The DarkCloud Load Balancer balances the load between services spread across multiple datacentres. It ensures that your infrastructure can be scaled to handle high volumes of traffic, boosts fault tolerance, and offers optimal response times. All of this is offered with a zero-downtime service level.</p>
            </div>

        </div>
    </div>
    

</section>

    <div class="container">
        <h3>An external storage space</h3>
        <p>The external additional disks for our VPS solutions are highly resilient, since the data is replicated three times within our infrastructures. This disks can be enabled on demand, and you can scale them up. This way, your data is always protected in the event of any service interruptions.</p>
        <table>
            <tr>
                <td>50GB</td>
                <td>$5.70 /month</td>
            </tr>
            <tr>
                <td>100GB</td>
                <td>$11.30 /month</td>
            </tr>
            <tr>
                <td>200GB</td>
                <td>$17.00 /month</td>
            </tr>
            <tr>
                <td>500GB</td>
                <td>$33.90 /month</td>
            </tr>
        </table>
    </div>


    <section>
        <div class="container">
            <h2>VPS backups</h2>
            <p>Backing up your data is vital to guarantee a smooth recovery in the event of a technical failure or configuration error. We offer two methods for backing up your data:</p>
    
            <div class="row">
                <div class="col-lg-3 border text-center shadow">
                    <h4>AUTOMATIC BACKUP</h4>
                    <h3>$3.40</h3>
                    /month <br>
                    <button class="btn btn-primary">Control panel</button>
                    <p>Keep your data safe and protected</p>
                </div>
                <div class="col-lg-9">
                    <p class="mt-5">The auto-backup option helps you avoid this complexity. A backup of your VPS (excluding your additional disks) is scheduled daily, exported, then replicated three times before it becomes available in the DarkCloud Control Panel.</p>
                </div>
                
                <div class="col-lg-3 mt-5 border text-center shadow">
                    <h4>MANUAL BACKUP</h4>
                    <h3>$1.10</h3>
                    /month <br>
                    <button class="btn btn-primary">Control panel</button>
                    <p>Create and restore your snapshot</p>
                </div>
                <div class="col-lg-9 mt-5">
                    <p class="mt-5">For an efficient, affordable backup strategy, you can take snapshots of your virtual machine. Unlike a full backup, you do not need to lock your data to stop it from being modified over the course of the procedure. This means you will always have an integral restore point.</p>
                </div>
                
            </div>
        </div>
        
    
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
                                What are additional IP addresses used for?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> With additional IP addresses, you can have one domain name for each IP. This will boost their SEO ranking, and ensure that any messages you send are not marked as spam.
                                Our VPS solutions are delivered with an IPv4 and IPv6 address. However, you can add up to 16 additional IPv4 addresses.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   2">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                How does the Snapshot option work?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">Snapshots are instantaneous images of your VPS, taken at a specific time. They can be compared to restore points.
                                You can create a snapshot via the DarkCloud Control Panel, save it, then use it to restore your VPS. Your VPS will then be restored back to the state it was in when the snapshot was taken.
                                Please note that when you restore a VPS from a snapshot, the snapshot is then deleted.</p>

                        </div>
                    </div>


                    <div class="iq-accordion-block   3">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                How does the Automated Backup option work?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">You can use Automated Backup to schedule backups of your VPS (excluding additional disks). These backups are taken every day, for a rolling period of seven days.
                                Your backups are exported to our infrastructure, and replicated three times across different servers. You can then use them at any time to restore your VPS.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   4">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                How does the additional space option work?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text"> It is a storage space that is separate to your VPS. You can use it to copy data — often backups — from your virtual private server.
                                The additional space option can be compared to a USB drive that you plug into a computer, and copy sensitive data onto.
                                If you would like to automate backups of your data, you are responsible for configuring the system that will take the backups. You can choose to access this service via NFS or CIFS protocols.</p>

                        </div>
                    </div>

                    <div class="iq-accordion-block   5">
                        <div class="iq-accordion-title">
                            <div class="iq-icon-right"><i aria-hidden="true" class="ion ion-minus-round active"></i><i aria-hidden="true" class="ion ion-plus inactive"></i></div>
                            <h5 class="mb-0 accordion-title">
                                What are the differences between Snapshot Backup and Automated Backup?

                </h5>
                        </div>

                        <div class="iq-accordion-details">

                            <p class="iq-content-text">The Automated Backup option takes a daily backup of your VPS, which is replicated three times. You will always have access to seven different backups, corresponding to the most recent seven days of use.
                                Snapshots are taken manually, at a specific point, by you. When a snapshot is used to restore your VPS, it is erased at the end of the process.</p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq End -->



@endsection