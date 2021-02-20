{{-- HEADER --}}

<header id="main-header" class="header-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img class="img-fluid" src="images/logo.png" alt="img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-btn d-inline-block" id="menu-btn">
<span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        </span>
                        <span class="ion-navicon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{Request::is('/')? 'active' : ''}}" href="/">Home</a>
                            </li>
                            <li class="nav-item  {{Request::is('about-us')? 'active' : ''}} dropdown">
                                <a class="nav-link  {{Request::is('about-us')? 'active' : ''}} " href="/about-us">About Us</a>
                                {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown-1">
                                    <a class="dropdown-item active" href="/about-us">About Us</a>
                                </div> --}}
                            </li>
                            <li class="nav-item {{Request::is('services')||Request::is('team')||Request::is('pricing')||Request::is('clients')||Request::is('faq')? 'active' : ''}} dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                                    <a class="dropdown-item {{Request::is('services')? 'active' : ''}}" href="/services">Services</a>
                                    <a class="dropdown-item {{Request::is('team')? 'active' : ''}}" href="/team">Team</a>
                                    <a class="dropdown-item {{Request::is('pricing')? 'active' : ''}}" href="/pricing">Pricing Plan</a>
                                    <a class="dropdown-item {{Request::is('clients')? 'active' : ''}}" href="/clients">Clients</a>
                                    <a class="dropdown-item {{Request::is('faq')? 'active' : ''}}" href="/faq">FAQ</a>
                                </div>
                            </li>
                            <li class="nav-item {{Request::is('public-cloud-pricing')? 'active' : ''}} dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pricing</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-3">
                                    <a class="dropdown-item {{Request::is('public-cloud-pricing')? 'active' : ''}}" href="/public-cloud-pricing">Public Cloud</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  {{Request::is('web-hosting')||Request::is('domain-names')? 'active' : ''}} dropdown-toggle" href="javascript:void(0)" id="navbarDropdown-4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Web Cloud</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-4">
                                    <a class="dropdown-item  {{Request::is('domain-names')? 'active' : ''}}" href="/domain-names">Domain Names</a>
                                    <a class="dropdown-item  {{Request::is('web-hosting')? 'active' : ''}}" href="/web-hosting">Web Hosting</a>
                                </div>
                            </li>
                            <li class="nav-item  {{Request::is('contact-us')? 'active' : ''}} dropdown">
                                <a class="nav-link" href="/contact-us" >Contact Us</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="sub-main">
                        <ul>
                            <li class="d-inline"><a href="javascript:void(0)" class="login iq-button iq-btn-outline iq-btn-round" target="_blank">Login</a></li>
                            <li class="d-inline"><a href="javascript:void(0)" class="signup iq-button default iq-btn-round" target="_blank">Sign Up</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
{{-- HEADER END --}}