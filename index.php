<?php defined( '_JEXEC' ) or die;
$doc =JFactory::getDocument(); 
$meta_description = $doc->getMetaData("description"); 
$title = $doc->getTitle();
?>

<!doctype html>
<html ⚡ lang="en-uk">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <script src="https://cdn.ampproject.org/v0.js" async></script>
    <meta name="description" content="<?php echo "$meta_description"; ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://www.homeprotect.co.uk/images/social/social_homeprotect_logo.png">
    <meta name="twitter:site" content="@homeprotect_uk" />
    <meta name="twitter:creator" content="@homeprotect_uk" />
    <meta name="twitter:title" content="<?php echo "$title" ?>" />
    <meta name="twitter:description" content="<?php echo "$meta_description"; ?>" />
    <meta property="og:title" content="<?php echo "$title" ?>" />
    <meta property="og:description" content="<?php echo "$meta_description"; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.homeprotect.co.uk" />
    <meta property="og:site_name" content="HomeProtect | Property Insurance | Specialist Home Insurance Quotes" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:image" content="https://www.homeprotect.co.uk/images/social/social_homeprotect_logo.png" />
    <meta name="google-site-verification" content="3GQRUzXvuIvLCeu_lo8yM7M9LJpvReNJlgWFjkitfHg"/>
    <title><?php echo "$title" ?></title>
    <link rel="canonical" href="https://www.homeprotect.co.uk">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
     <!-- Import other AMP Extensions here -->
    <!-- Load Open Sans font from Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">
    <!-- Load Eagle font from Adobe fonts-->
    <link rel="stylesheet" href="https://use.typekit.net/bim3xal.css">
    <!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/inline.css">-->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/inline.min.css">
    <!--<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/main.css">-->
    <link rel="preload stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/main.min.css">
    <link rel="preload stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/breakpoints.min.css">
    <!--Eagle Book font from Adobe-->
    <link rel="stylesheet" href="https://use.typekit.net/bim3xal.css">
    <!-- Anti-flicker snippet (recommended)  -->
    <style>.async-hide { opacity: 0 !important} </style>
    <script async>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
        h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
        (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
        {'GTM-MRGVM6':true});</script>
    <!-- Google Tag Manager -->
    <script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MRGVM6');</script>
    <!-- End Google Tag Manager -->
</head>
  <!-- <body data-template-base="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>" onload="chkWidth();chkMode();"> -->
  <body data-template-base="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>">

    <!--[if lt IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MRGVM6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager --> <amp-analytics config="https://www.googletagmanager.com/amp.json?id=GTM-MRBVFX8&gtm.url=SOURCE_URL" data-credentials="include"></amp-analytics>  
    <div class="container">
      <header class="fixed">
        <menu id="mobile-menu">
          <ul class="mobile-header-menu" role="menu">
            <li role="listitem" class="contact-us"><a href="/contact-us"><i class="fa fa-phone" aria-hidden="true"></i>Contact us</a></li>
            <li role="listitem"><a href="/about-homeprotect">About us</a></li>
            <li role="listitem" class="retrieve-quote"><a class="button retrieve" href="https://quote.homeprotect.co.uk/i/quote/SavedQuoteLogin.aspx">Retrieve a quote</a></li>
          </ul>
          <div class="close">
            <a href="#">Close</a>
          </div>
        </menu>
        <div class="logo">
          <span></span>
        </div>
        <nav role="navigation" class="navbar-header">
          
        <ul class="tablet-nav" role="menu">
            <li role="listitem"><a href="/contact-us">Contact us</a></li>
            <li role="listitem"><a href="/about-homeprotect">About us</a></li>
        </ul>
          <ul class="desktop-nav" role="menu">
            <li role="listitem"><a href="/contact-us">Contact us</a></li>
            <li role="listitem"><a href="/about-homeprotect">About us</a></li>
            <li id="retrieveQuote" role="listitem"><a class="button retrieve" href="https://quote.homeprotect.co.uk/i/quote/SavedQuoteLogin.aspx">Retrieve a quote</a></li>
            <li id="yourPolicy" role="listitem"><a class="button retrieve" href="https://customer.homeprotect.co.uk/documents/">Your policy documents</a></li>
            <li role="listitem" class="mega-dropdown">
              <a class="target-burger" href="#" class="dropdown-toggle">
                <ul class="buns">
                  <li class="bun"></li>
                  <li class="bun"></li>
                  <li class="bun"></li>
                </ul>
                <span>Menu</span>
              </a><!--  animated bounceInUp -->
              <ul class="dropdown-menu row mega-dropdown-menu animated bounceInUp">
                <span class="search-homeprotect">
                  <form id="mod-finder-searchform" action="<?php echo $this->baseurl ?>/search" class="form-search">
                    <input type="text" name="q" id="mod-finder-searchword" class="search-query input-medium" size="25" value="" placeholder="Search HomeProtect ...">
                    <button class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </form>
                </span>
                <div id="carousel" class="carousel" data-ride="carousel" data-interval="false" data-wrap="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                                    <div class="item active cover animated bounceInRight">
                                        <div class="row-fluid">
                                            <div class="hidden-sm hidden-xs col-md-3">
                                                <h2>We’ll protect your property, inside and out...</h2>
                                                <p>You work hard to afford your home and possessions, so of course you want to protect them. With HomeProtect, you can get a quick online home insurance quote.</p>
                                            </div>
                                            <div class="col-md-3"> 
                                                <h2>Our cover</h2>
                                                <ul>
                                                    <li><a href="/why-choose-homeprotect">Why choose HomeProtect</a></li>
                                                    <li><a href="/policy-booklet">Policy booklet</a></li>
                                                    <li><a href="https://customer.homeprotect.co.uk/documents/">Get your policy documents</a></li>
                                                    <li><a href="/faqs">FAQs</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h2 class="hidden-sm hidden-xs">&nbsp;</h2>
                                                <ul>
                                                    <li><a href="/specialist-home-insurance">Specialist home insurance</a></li>
                                                    <li><a href="/buildings-insurance">Buildings insurance</a></li>
                                                    <li><a href="/contents-insurance">Contents insurance</a></li>
                                                    <li><a href="/lost-keys-insurance">Lost keys cover</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h2 class="hidden-sm hidden-xs">&nbsp;</h2>
                                                <ul>
                                                    <li><a href="/accidental-damage-cover">Accidental damage cover</a></li>
                                                    <li><a href="/home-emergency-cover">Home emergency cover</a></li>
                                                    <li><a href="/legal-expenses-insurance">Legal expenses cover</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item situation animated bounceInRight">
                                        <div class="row-fluid">
                                            <div class="hidden-sm hidden-xs col-md-3">
                                                <h2>Regardless of personal circumstances</h2>
                                                <p>Finding insurance when you don't fit a "standard" stereotype can be difficult. But HomeProtect can provide home insurance, even if your situation is seemingly quite complex.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h2>I am a...</h2>
                                                <ul>
                                                    <li><a href="/homeowner-insurance">Homeowner</a></li>
                                                    <li><a href="/landlord-insurance">Landlord</a></li>
                                                    <li><a href="/lodgers-insurance">Live-in landlord</a></li>
                                                    <li><a href="/tenant-insurance">Tenant</a></li>
                                                    <li><a href="/shared-occupancy-insurance">Flatmate</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h2 class="hidden-sm hidden-xs">Your circumstances</h2>
                                                <ul>
                                                    <li><a href="/refused-insurance">Insurance refused</a></li>
                                                    <li><a href="/previous-claims-insurance">Previous claims</a></li>
                                                    <li><a href="/criminal-convictions-insurance">Convictions</a></li>
                                                    <li><a href="/financial-problems-insurance">Financial problems</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h2 class="hidden-sm hidden-xs">Your occupation</h2>
                                                <ul>
                                                    <li><a href="/home-business-insurance">Business at home</a></li>
                                                    <li><a href="/bed-breakfast-insurance">B&amp;B owner</a></li>
                                                    <li><a href="/foster-carer-insurance">Foster carer</a></li>
                                                    <li><a href="/high-risk-occupation-insurance">High risk occupation</a></li>
                                                    <li><a href="/home-business-insurance/childminding-insurance">Childminder</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item property animated bounceInRight">
                                        <div class="row-fluid">
                                            <div class="hidden-sm hidden-xs col-md-3">
                                                <h2>Even if your home is a little unusual</h2>
                                                <p>Do you live in a log cabin or a HUF house? Has it got a flat roof or is it underpinned? We love unusual homes, so we're sure we can help.</p>
                                            </div>
                                            <div class="col-md-3">
                                                <h2>Property type</h2>
                                                <ul>
                                                    <li><a href="/non-standard-construction-insurance">Non standard construction</a></li>
                                                    <li><a href="/listed-building-insurance">Listed buildings</a></li>
                                                    <li><a href="/large-property-insurance">Larger home</a></li>
                                                    <li><a href="/timber-frame-house-insurance">Timber frame home</a></li>
                                                    <li><a href="/converted-barn-insurance">Converted barn</a></li>
                                                    <li><a href="/flat-roof-insurance">Flat roof</a></li>
                                                    <li><a href="/heritage-home-insurance">Heritage home</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h2 class="hidden-sm hidden-xs">Property situation</h2>
                                                <ul>
                                                    <li><a href="/subsidence-insurance">Subsidence</a></li>
                                                    <li><a href="/underpinned-house-insurance">Underpinned</a></li>
                                                    <li><a href="/flood-risk-insurance">Flood risk</a></li>
                                                    <li><a href="/high-theft-area-insurance">High theft area</a></li>
                                                    <li><a href="/renovation-insurance">Renovation</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h2 class="hidden-sm hidden-xs">Property usage</h2>
                                                <ul>
                                                    <li><a href="/unoccupied-property-insurance">Unoccupied</a></li>
                                                    <li><a href="/probate-insurance">Probate</a></li>
                                                    <li><a href="/holiday-home-insurance">Holiday home</a></li>
                                                    <li><a href="/second-home-insurance">Second homes</a></li>
                                                    <li><a href="/landlord-insurance/buy-to-let-insurance">Buy to let</a></li>
                                                    <li><a href="/bed-breakfast-insurance">B&amp;B and guesthouse</a></li>
                                                    <li><a href="/airbnb-insurance">Airbnb</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                              
                    </div>
                    <!-- Controls -->
                    
                    <a href="javascript:;" class="left carousel-control" role="button" data-target='#carousel' data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="javascript:;" class="right carousel-control" role="button" data-target='#carousel' data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
              </ul>
            </li>
          </ul>
          <ul class="mobile-nav" role="menu">
            <li role="listitem"><a href="/contact-us">Contact us</a></li>
            <li role="listitem"><a href="/about-homeprotect">About us</a></li>
            <li role="listitem">
              <i class="fa fa-user" aria-hidden="true"></i> <a href="https://quote.homeprotect.co.uk/i/myhomeprotect/login.aspx">
              My account</a>
            </li>
            <li role="listitem"><a class="button retrieve" href="https://quote.homeprotect.co.uk/i/quote/SavedQuoteLogin.aspx">Retrieve a quote</a></li>
            <li role="listitem"><a href="#mobile-menu">Menu</a></li>
          </ul>
        </nav>
        <figure class="header-mode"></figure>
      </header>
      <section class="hero-panel">
        <article>
          <span class="intro-panel">
            <h1>Specialist home insurance for a wide range of personal situations and property types</h1>
<p>97% of customers can get an<br />immediate online quote.<br /> Average quote time – 6 minutes.</p>
          </span>
          <div class="get"><a href="https://quote.homeprotect.co.uk/i/questions/aboutyou.aspx" class="button quote animated">Get an online quote <i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
        </article>
        <div data-top="opacity: 1" data--260-top="opacity: 0" class="homepage-hero-module">
          <div class="video-container">
            <div class="filter"></div>
            <div class="home-image"></div>
          </div>
        </div>
      </section>
      <main aria="main">
        <section class="features" menu data-top="opacity: 1" data--400-top="opacity: 0" aria="menulist">
          <h2>Why choose HomeProtect</h2>
          <ul class="tick">
          <li class="active animated rubberBand" aria="menuitem"><i title="Policies underwritten by trusted brands" class="fa fa-check" aria-hidden="true"></i>Policies underwritten by trusted brands, such as AXA</li>
            <li class="animated rubberBand" aria="menuitem" ><i title="Buildings Insurance Rated 5 Star by Defaqto for the sixth consecutive year" class="fa fa-check" aria-hidden="true"></i>Buildings Insurance Rated 5 Star by Defaqto for the sixth consecutive year</li>
            <li class="animated rubberBand" aria="menuitem" ><i title="Rated Great on TrustPilot from over 4,500 reviews" class="fa fa-check" aria-hidden="true"></i>Rated Great on TrustPilot from over 4,500 reviews</li>
            <li class="animated rubberBand" aria="menuitem" ><i title="Basic Legal Expenses and Home Emergency" class="fa fa-check" aria-hidden="true"></i>Basic Legal Expenses and Home Emergency included as standard</li>
          </ul>
        </section>
        <section class="trust-assets">
          <article>
            <h2>HomeProtect rated by customers</h2>
            <ul role="list">
              <li role="listitem">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;
?>/images/trustpilot_logo.png" alt="TrustPilot" longdesc="86% average customer rating for our service (from 2,892 reviews)" /><br />
                <strong>86%</strong> average customer rating for our service (from 4,084 reviews)</li>
              <li role="listitem">
                <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;
?>/images/reviewcentre_logo.png" alt="Review centre: speaking from experience" longdesc="90% average customer rating for our service (from 3,349 reviews)" /><br />
                <strong>91%</strong> average customer rating for our service (from 4,517 reviews)</li>
              <li role="listitem"><img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;
?>/images/reviews_logo.png" alt="Reviews" longdesc="87% average customer rating for our service (from 209 reviews)" /><br />
                <strong>88%</strong> average customer rating for our service (from 279 reviews)</li>
            </ul>
          </article>
        </section>
        <section data-top="opacity: 1" data--600-top="opacity: 0" class="testimonials">
          <article>
            <h2>TrustPilot testimonials for HomeProtect</h2>
            <ul role="list">
              <li role="listitem">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <blockquote cite="https://uk.trustpilot.com/reviews/57e27e190000ff00098a8fdf">
                  <h4>Saved almost 50%</h4>
                  I've saved almost 50% on my previous insurer. They were able to satisfy my unique requirements without fuss and were very easy to deal with..
                  <footer>MB</footer>
                  <i class="fa fa-quote-right" aria-hidden="true"></i>
                </blockquote>
              </li>
              <li role="listitem">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <blockquote cite="https://uk.trustpilot.com/reviews/57e01e4c0000ff000989cb4c">
                  <h4>Very satisfied</h4>
                 Have been a customer now for a few years. I had to make one claim, the process was very easy & the staff very helpful. I would definitely recommend
                  <footer>E Doody</footer>
                  <i class="fa fa-quote-right" aria-hidden="true"></i>
                </blockquote>
              </li>
              <li role="listitem">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <blockquote cite="https://uk.trustpilot.com/reviews/57df0a6c0000ff0009897683">
                  <h4>Excellent, providing great service</h4>
                  I would opt for them again, as they have been brilliant help when my drain collapsed
                  <footer>Mrs Wilson</footer>
                  <i class="fa fa-quote-right" aria-hidden="true"></i>
                </blockquote>
              </li>
              <li role="listitem">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <blockquote cite="https://uk.trustpilot.com/reviews/57ddcb4a0000ff00098937a4">
                  <h4>No problems</h4>
                  Efficient customer service and easy to arrange
                  <footer>Mrs Freeman</footer>
                  <i class="fa fa-quote-right" aria-hidden="true"></i>
                </blockquote>
              </li>
            </ul>
          </article>
        </section>
        <section class="attributes">
          <article>
            <h2 id="cover">Home insurance for everyone</h2>
            <ul role="list">
              <li role="listitem"><a href="/landlord-insurance"><i class="fa fa-key" aria-hidden="true"></i>Landlord</a></li>
              <li role="listitem"><a href="/home-business-insurance"><i class="fa fa-coffee" aria-hidden="true"></i>Working from home</a></li>
              <li role="listitem"><a href="/renovation-insurance"><i class="fa fa-paint-brush" aria-hidden="true"></i>Property renovation</a></li>
              <li role="listitem"><a href="/unoccupied-property-insurance"><i class="fa fa-home" aria-hidden="true"></i>Unoccupied home</a></li>
              <li role="listitem"><a href="/flood-risk-insurance"><i class="fa fa-life-ring" aria-hidden="true"></i>Flood history</a></li>
              <li role="listitem"><a href="/heritage-home-insurance"><i class="fa fa-university" aria-hidden="true"></i>Heritage home</a></li>
              <li role="listitem"><a href="/holiday-home-insurance"><i class="fa fa-plane" aria-hidden="true"></i>Holiday home</a></li>
            </ul>
          </article>
        </section>
        <section class="useful-links">
          <article class='text-center'>
            <h2>Useful Links</h2>
            <ul role="list">
              <li role="listitem"><a href="/policy-booklet"><i style='border-color: transparent;' class="fa fa-file-text" aria-hidden="true"></i>Policy booklet</a></li>
              <li role="listitem"><a href="/faqs"><i class="fa fa-question-circle" aria-hidden="true"></i>FAQs</a></li>
              <li role="listitem"><a href="/contact-us"><i class="fa fa-phone" aria-hidden="true"></i>Contact us</a></li>
            </ul>
          </article>
        </section>
      </main>
      <footer class="homeprotect-footer">
        <section class="social-channels">
        <span itemscope itemtype="http://schema.org/Organization">
          <link itemprop="url" href="https://www.homeprotect.co.uk">
          <ul>
            <li><a itemprop="sameAs"  href="https://www.facebook.com/homeprotect"><i class="fa fa-facebook-square" aria-hidden="true">facebook</i></a></li>
            <li><a itemprop="sameAs"  href="https://twitter.com/homeprotect_uk"><i class="fa fa-twitter-square" aria-hidden="true">twitter</i></a></li>
            <li><a itemprop="sameAs"  href="https://www.pinterest.co.uk/homeprotect/"><i class="fa fa-pinterest-square" aria-hidden="true">Pinterest</i></a></li>
            <li><a itemprop="sameAs"  href="https://www.youtube.com/channel/UCPqpjGPn2lufe7Z3Sm0mTjA"><i class="fa fa-youtube-square" aria-hidden="true">YouTube</i></a></li>
          </ul>
          </span>
        </section>
        <nav class="business-links">
          <ul class="footer-menu">
            <li>
              <h4>Our Products</h4>
              <ul>
                <li><a href="/buildings-insurance">Buildings insurance</a></li>
                <li><a href="/contents-insurance">Contents insurance</a></li>
                <li><a href="/legal-expenses-insurance">Legal expenses</a></li>
                <li><a href="/home-emergency-cover">Home emergency</a></li>
                <li><a href="/lost-keys-insurance">Lost keys</a></li>
                <li><a href="/accidental-damage-cover">Accidental damage</a></li>
              </ul>
            </li>
            <li>
              <h4>HomeProtect</h4>
              <ul>
                <li><a href="/about-homeprotect">About us</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/reviews">Customer reviews</a></li>
                <li><a href="/claims">Claims</a></li>
                <li><a href="/discover/stories/">Stories</a></li>
                <li><a href="/discover/insights/">Insights</a></li>
              </ul>
            </li>
            <li>
              <h4>Work For Us</h4>
              <ul>
                <li><a href="/jobs">Careers</a></li>
                <li><a href="/affiliates-program">Affiliate programme</a></li>
              </ul>
              <h4>Legal</h4>
              <ul>
                <li><a href="/legal-terms-of-use">Legal policy</a></li>
                <li><a href="/security-privacy">Privacy policy</a></li>
                <li><a href="/cookie-policy">Cookie policy</a></li>
              </ul>
            </li>
            <li>
              <h4>Support</h4>
              <ul>
                <li><a href="/contact-us">Contact us</a></li>
                <li><a href="customer-service">Customer services</a></li>
                <li><a href="/faqs">FAQs</a></li>
                <li><a href="/why-choose-homeprotect">Why HomeProtect</a></li>
                <li><a href="/defaqto">What is Defaqto</a></li>
                <li><a href="/policy-booklet">Policy booklet</a></li>
              </ul>
            </li>
          </ul>
          <ul class="mobile-footer-menu">
            <li>
              <a href="/buildings-insurance"><i class="fa fa-dropbox" aria-hidden="true"></i>Products</a>
            </li>
            <li>
              <a href="/about-homeprotect"><i class="fa fa-shield" aria-hidden="true"></i>HomeProtect</a>
            </li>
            <li>
              <a href="/jobs"><i class="fa fa-users" aria-hidden="true"></i>Work for Us</a>
            </li>
            <li>
              <a href="/contact-us"><i class="fa fa-heartbeat" aria-hidden="true"></i>Support</a>
            </li>
            <li>
              <a href="/legal-terms-of-use"><i class="fa fa-gavel" aria-hidden="true"></i>Legal</a>
            </li>
          </ul>
        </nav>
        <section class="copy-line">
          <h4>Copyright</h4>
          <ul>
            <li>
              <figure>
                <img alt="AXA Insurance UK plc" src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;
?>/images/AXA.png" width="44" />
              </figure>
              <figcaption>Underwritten by AXA Insurance and other reputable insurers</figcaption>
            </li>
            <li>
              <small>HomeProtect is a registered trademark and trading style of Avantia Insurance Limited which is authorised and regulated by the Financial Conduct Authority (Company Number 304432). Home Insurance is underwritten by AXA Insurance and other reputable insurers.</small>
              <small>Copyright &copy; <?= date('Y'); ?> Avantia Insurance Limited &#124; www.avantiagroup.co.uk</small>
            </li>
          </ul>
        </section>
      </footer>
    </div>

<jdoc:include type="modules" name="bottom" />


<!-- Defering CSS and Image on load -->
<script async type="text/javascript">
  function deferCss() {
    var homeprotectCSSLink = document.createElement('link');
    homeprotectCSSLink.rel = 'stylesheet';
    //homeprotectCSSLink.href = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/main.css';
    homeprotectCSSLink.href = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/styles/main.min.css';
    homeprotectCSSLink.type = 'text/css';
    var godefer = document.getElementsByTagName('link')[0];
    godefer.parentNode.insertBefore(homeprotectCSSLink, godefer);
  }
  
  function deferImages() {
    //Get all the references of img tag on the given page
    var imgToDefer = document.getElementsByTagName('img');
    
    //loop through all images on the page
    for(var i=0; i<imgToDefer.length; i++) {
      var img = imgToDefer[i]; //setting each image into a variable

      //Getting data-src reference of those images
      if(img.hasAttribute('data-src')) {
        var source = img.getAttribute('data-src');
        img.setAttribute('src', source);
      }
    }
  } 

  window.addEventListener("load", function(event) {
  deferCss();
  deferImages();
});
</script>
<script src="https://use.fontawesome.com/98187831ba.js"></script>
    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/scripts/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/scripts/vendor/bootstrap.min.js" type="text/javascript"></script>-->
    <!--Have stopped 3.3.7 due to vulnerability count
      <script async src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/scripts/skrollr.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/scripts/main.js"></script>
 <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/scripts/complianceCookie.js"></script>
<script type="application/ld+json">
        {
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "url" : "https://www.homeprotect.co.uk/",
            "brand" : "HomeProtect",
            "legalName" : "HomeProtect",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "New Malden",
                "postalCode": " KT3 4HG",
                "streetAddress": " CI Tower, St George’s Square",
                "addressCountry": "GB"
            },
            "sameAs" : ["https://www.facebook.com/homeprotect",
                        "https://twitter.com/homeprotect_uk",
                                                        "https://uk.pinterest.com/homeprotect/",
                                                 "https://www.youtube.com/channel/UCPqpjGPn2lufe7Z3Sm0mTjA"
                                                           ],
            "contactPoint" : [
            {
                "@type" : "ContactPoint",
                "telephone" : "+44 330 660 1000",
                "contactType" : "Sales",
                "areaServed" : "GB"
            },{
                "@type" : "ContactPoint",
                "telephone" : "+44 330 660 0660",
                "contactType" : "Customer Service",
                "areaServed" : "GB"
            }]
        }
        </script>
  </body>
</html>
