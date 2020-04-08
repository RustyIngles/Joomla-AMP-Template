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
    <style>
      a,
table {
    background-color: transparent
}

html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
    display: block
}

a {
    color: #337ab7;
    text-decoration: none
}

a:active,
a:hover {
    outline: 0
}

b,
strong {
    font-weight: 700
}

h1 {
    margin: .67em 0
}

img {
    border: 0;
    vertical-align: middle
}

button,
input,
optgroup,
select,
textarea {
    color: inherit;
    font: inherit;
    margin: 0
}

button {
    overflow: visible
}

button,
select {
    text-transform: none
}

button,
html input[type=button],
input[type=reset],
input[type=submit] {
    -webkit-appearance: button;
    cursor: pointer
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

.dropdown-menu,
body {
    background-color: #fff
}

td,
th {
    padding: 0
}

*,
:after,
:before {
    box-sizing: border-box
}

html {
    font-size: 10px;
    -webkit-tap-highlight-color: transparent
}

body {
    line-height: 1.428571429;
    color: #333
}

button,
input,
select,
textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

a:focus,
a:hover {
    color: #23527c
}

figure {
    margin: 0
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit
}

.h1,
.h2,
.h3,
h1,
h2,
h3 {
    margin-top: 20px;
    margin-bottom: 10px
}

.h4,
.h5,
.h6,
h4,
h5,
h6 {
    margin-top: 10px;
    margin-bottom: 10px
}

.h1,
h1 {
    font-size: 36px
}

.h2,
h2 {
    font-size: 30px
}

.h4,
h4 {
    font-size: 18px
}

p {
    margin: 0 0 10px
}

.small,
small {
    font-size: 85%
}

.text-right {
    text-align: right
}

.text-center {
    text-align: center
}

ol,
ul {
    margin-top: 0;
    margin-bottom: 10px
}

ol ol,
ol ul,
ul ol,
ul ul {
    margin-bottom: 0
}

blockquote {
    padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 17.5px;
    border-left: 5px solid #eee
}

blockquote .small,
blockquote footer,
blockquote small {
    display: block;
    font-size: 80%;
    line-height: 1.428571429;
    color: #777
}

blockquote .small:before,
blockquote footer:before,
blockquote small:before {
    content: '\2014 \00A0'
}

.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}

.container:after,
.container:before {
    content: " ";
    display: table
}

.container:after {
    clear: both
}

@media (min-width:768px) {
    .container {
        width: 750px
    }

    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9 {
        float: left
    }
}

@media (min-width:992px) {
    .container {
        width: 970px
    }
}

@media (min-width:1200px) {
    .container {
        width: 1170px
    }
}

.row {
    margin-left: -15px;
    margin-right: -15px
}

.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px
}

@media (min-width:992px) {

    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9 {
        float: left
    }

    .col-md-2 {
        width: 16.6666666667%
    }

    .col-md-10 {
        width: 83.3333333333%
    }
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    margin: 2px 0 0;
    list-style: none;
    font-size: 14px;
    text-align: left;
    border: 1px solid #ccc;
    border: 1px solid rgba(0, 0, 0, .15);
    border-radius: 4px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    background-clip: padding-box
}

.navbar-header:after,
.navbar-header:before {
    content: " ";
    display: table
}

.navbar-header:after {
    clear: both
}

@media (min-width:768px) {
    .navbar-header {
        float: left
    }
}

.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: .2;
    filter: alpha(opacity=20)
}

.animated {
    animation-duration: 1s;
    animation-fill-mode: both
}

.rubberBand {
    animation-name: rubberBand
}

.bounceInUp {
    animation-name: bounceInUp
}

footer .copyline,
header {
    background-color: #3498db;
    margin: 0 auto 10px;
    padding: 20px
}

header,
header menu#mobile-menu {
    background-color: #fff;
    top: 0;
    width: 100%
}

header nav ul.desktop-nav>li:not(:last-child):not(:nth-child(3)):not(:nth-child(4)):not(.bun):after {
    border-right: 1px solid #ddd;
    content: " ";
    display: block;
    float: right;
    height: 34px;
    margin-left: 16px
}

header menu#mobile-menu>ul li a:before,
main section.attributes article ul li:nth-child(1) a i.fa-key,
main section.attributes article ul li:nth-child(2) a i.fa-coffee,
main section.attributes article ul li:nth-child(3) a i.fa-paint-brush,
main section.attributes article ul li:nth-child(4) a i.fa-home,
main section.attributes article ul li:nth-child(5) a i.fa-life-ring,
main section.attributes article ul li:nth-child(6) a i.fa-university,
main section.attributes article ul li:nth-child(7) a i.fa-plane,
section.useful-links article ul li:nth-child(1) a i.fa-briefcase,
section.useful-links article ul li:nth-child(2) a i.fa-question-circle,
section.useful-links article ul li:nth-child(3) a i.fa-phone {
    box-shadow: 0 2px 8px -4px rgba(0, 0, 0, .8);
    transform: translateY(1px);
    transition: transform .2s ease-out;
    transform: translate3d(0, 0, 0)
}

header {
    z-index: 201;
    height: 105px;
    margin: 0 auto;
    padding: 0 80px;
    position: relative
}

header .logo {
    display: block
}

header.fixed {
    box-shadow: 0 4px 16px -4px rgba(0, 0, 0, .6);
    left: 0;
    position: fixed
}

header.fixed nav {
    width: 100%
}

header.fixed~.hero-panel {
    margin-top: 104px
}

header.fixed menu#mobile-menu {
    left: 0;
    position: fixed;
    top: 0;
    z-index: 300
}

header menu#mobile-menu {
    height: auto;
    margin: 0;
    opacity: 0;
    padding: 0;
    position: fixed;
    left: 0;
    visibility: hidden;
    z-index: 201;
    transition: opacity .5s
}

header menu#mobile-menu>ul li a,
header nav ul.desktop-nav>li a {
    color: #000;
    transition: color .1s ease-out;
    cursor: pointer
}

header menu#mobile-menu>ul {
    height: 105px;
    padding: 10px 0;
    margin: 0;
    width: 100%
}

header menu#mobile-menu>ul li {
    display: inline-block;
    font-size: 1.3em;
    list-style-type: none;
    height: 88px;
    text-align: center;
    vertical-align: top;
    width: 106px
}

header menu#mobile-menu>ul li:last-child {
    height: 100%;
    width: auto;
    transform: translateY(14%)
}

header menu#mobile-menu>ul li:last-child a {
    background-color: #f4f4f4;
    border: none;
    border-radius: 0;
    color: #000;
    font-size: 1.2em;
    text-decoration: none
}

header menu#mobile-menu div.close {
    background-color: #fff;
    opacity: 1;
    position: absolute;
    top: 11px;
    right: -10px
}

header menu#mobile-menu div.close a {
    color: #000;
    cursor: pointer;
    font-size: .8em;
    text-decoration: none
}

header nav {
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    transform: translateY(80%)
}

header nav ul {
    display: inline;
    padding: 0
}

header nav ul.mobile-nav {
    float: right
}

header nav ul.mobile-nav,
header nav ul.mobile-nav li:last-child {
    display: none
}

header nav ul.desktop-nav {
    float: right;
    margin: 0 90px
}

header nav ul.desktop-nav>li {
    display: inline-block;
    font-family: 'Open Sans';
    font-display: swap;
    font-size: 1.5em;
    height: 34px;
    letter-spacing: -.3px;
    line-height: 2;
    padding-left: 16px;
    vertical-align: middle
}

header nav ul.desktop-nav>li a:hover {
    color: #ddd;
    text-decoration: none
}

header nav ul.desktop-nav>li a.retrieve {
    background-color: #f4f4f4;
    border: 1px solid #e6e6e6;
    border-radius: 0;
    color: #000;
    display: inline-block;
    font-size: 1em;
    letter-spacing: .7px;
    line-height: 1;
    margin: 0;
    padding: 10px 30px
}

header figure,
header.mini-bar div.logo {
    display: none
}

header nav ul.desktop-nav>li a.retrieve:hover {
    background-color: #e6e6e6;
    border: 1px solid #e6e6e6;
    color: #000
}

header.mini-bar {
    height: 41px;
    transition: height .3s ease-in
}

header.mini-bar~.hero-panel {
    margin-top: 45px
}

header.mini-bar~.hero-panel article div.get.fixed {
    top: 46px
}

header.mini-bar nav {
    transform: translateY(5px)
}

header.mini-bar nav ul.desktop-nav li:nth-child(5) ul.dropdown-menu {
    top: 40px
}

header nav ul.desktop-nav>li.mega-dropdown {
    position: static
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger {
    display: block;
    position: relative
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger:hover {
    cursor: pointer;
    -webkit-opacity: .45;
    -moz-opacity: .45;
    -khtml-opacity: .45;
    -o-opacity: .45;
    -ms-opacity: .45;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha($opacity=$opacityvalue*100)";
    filter: alpha(opacity=45);
    opacity: .45
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger.toggled ul.buns li.bun:nth-child(2) {
    -webkit-opacity: 0;
    -moz-opacity: 0;
    -khtml-opacity: 0;
    -o-opacity: 0;
    -ms-opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha($opacity=$opacityvalue*100)";
    filter: alpha(opacity=0);
    opacity: 0
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger.toggled ul.buns li.bun:last-child {
    top: -7px;
    transform: rotate(-45deg) translateZ(0)
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger ul.buns {
    color: #fff;
    height: 31px;
    list-style: none;
    padding: 0;
    position: absolute;
    top: -3px;
    width: 31px;
    transform 1s cubic-bezier(0.23, 1, 0.32, 1): color 1s cubic-bezier(.23, 1, .32, 1);
    transform: translateZ(0)
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger ul.buns li.bun {
    display: block;
    height: 2px;
    background-color: #000;
    margin: 5px 0;
    position: relative;
    width: 31px;
    transform 1s cubic-bezier(0.23, 1, 0.32, 1): background-color 1s cubic-bezier(.23, 1, .32, 1)
}

header nav ul.desktop-nav>li.mega-dropdown a.target-burger span {
    display: inline-block;
    font-size: .8em;
    transform: translateY(16px)
}

header nav ul.desktop-nav>li.mega-dropdown ul.dropdown-menu {
    background: 0 0;
    border-radius: 0;
    border-top: 17px solid #fff;
    margin: 0;
    padding: 0;
    position: absolute;
    top: 55px;
    width: 100%
}

.hero-panel,
.hero-panel .homepage-hero-module .video-container,
body {
    position: relative
}

header nav ul.desktop-nav>li.mega-dropdown ul.mega-dropdown-menu {
    background-size: cover;
    background-color:rgba(0,0,0,0.95);
    /*background-image: url(/templates/jfhomeprotecthomepage/video/31263096.png);*/
    background-position-y: 51px;
    background-repeat: no-repeat;
    border: 1px;
    border-radius: 0;
    height: 100vh;
    padding: 66px 20px 20px;
    top: 74px;
    width: 100%;
    -o-box-shadow: none;
    -ms-box-shadow: none;
    box-shadow: none
}

body,
main section.features ul.tick {
    padding: 0
}

body {
    font: 400 100%/1.5 'Open Sans';
    height: 100%;
    margin: 0;
    width: 100%;
    overflow-x: hidden;
    font-display: swap;
}

.hero-panel article h1,
.hero-panel article p {
    font-family: "Open Sans";
    font-weight: 300;
    font-display: swap;
}

.hero-panel .homepage-hero-module {
    height: 640px;
    overflow: hidden
}

.hero-panel .homepage-hero-module .video-container .filter {
    background-attachment: fixed;
    background-color: rgba(0, 0, 0, .5);
    background-image: url(/templates/jfhomeprotecthomepage/images/filter.png);
    background-repeat: repeat;
    height: 640px;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1
}

.hero-panel .homepage-hero-module .video-container .home-image {
    background-image: url(/templates/jfhomeprotecthomepage/images/specialist-home-insurance-header.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    height: 640px;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.hero-panel article {
    color: #fff;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 200
}

.hero-panel article h1 {
    font-size: 2.5em;
    margin: 50px auto 0;
    max-width: 354px
}

.hero-panel article p {
    font-size: 1.7em;
    line-height: 1.2;
    margin: 20px auto
}

.hero-panel article .get.fixed {
    display: block;
    top: 103px;
    position: fixed;
    width: 100%;
    z-index: 501
}

.hero-panel article .get.fixed .stage-one {
    background-position-x: 0;
    background-position-y: 0;
    border: 5px solid #26ab5f;
    border-top: none;
    transition: all 3s ease-out
}

.hero-panel article .quote {
    border-radius: 25px;
    font-family: eagle, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 1.7em;
    line-height: 1.6;
    margin: 0;
    width: 247px
}

main section.attributes article h2,
main section.features h2,
main section.features ul.tick li {
    font-family: "Open Sans";
    font-weight: 300;
    font-display: swap;
}

.hero-panel article .quote:focus,
.hero-panel article .quote:hover {
    background-color: rgba(255, 255, 255, .3);
    color: #fff;
    text-decoration: none
}

main {
    margin-bottom: 80px;
    position: relative;
    top: 0;
    width: 100%
}

main section.features {
    background-color: #3498db;
    margin: 0;
    padding: 0;
    position: relative;
    z-index: 2
}

main section.features:after,
main section.features:before {
    content: "";
    display: block;
    left: 0;
    position: absolute;
    overflow: hidden;
    width: 100%
}

main section.features:before {
    border-top: 80px solid transparent;
    border-right: 50vw solid #3498db;
    border-bottom: 80px solid #3498db;
    border-left: 50vw solid #3498db;
    top: -120px
}

main section.features:after {
    border-top: 80px solid #3498db;
    border-right: 50vw solid transparent;
    border-bottom: 80px solid transparent;
    border-left: 50vw solid transparent;
    bottom: -159px;
    z-index: -1
}

main section.features h2 {
    color: #fff;
    font-size: 2.5em;
    margin: 0 auto 30px;
    position: relative;
    text-align: center
}

main section.features ul {
    margin: 0 auto;
    width: 40%
}

main section.features ul.tick li {
    color: #fff;
    display: table;
    font-size: 1.9em;
    letter-spacing: 1px;
    line-height: 1.25;
    list-style: none;
    margin-bottom: 20px;
    width: 100%
}

main section.features ul.tick li i.fa-check {
    border: 2px solid #fff;
    border-radius: 20px;
    box-shadow: 0 6px 22px -4px rgba(0, 0, 0, .7);
    color: #fff;
    display: inline-block;
    float: left;
    font-size: 1.2em;
    line-height: 1;
    margin: 0 20px 20px;
    padding: 7px 6px;
    vertical-align: middle
}

main section.attributes {
    background-color: #fff;
    height: 350px;
    margin: 0;
    padding: 0;
    position: relative
}

main section.attributes article {
    position: relative;
    text-align: center
}

main section.attributes article:after,
main section.attributes article:before {
    content: "";
    display: block;
    left: 0;
    position: absolute;
    overflow: hidden;
    width: 100%
}

main section.attributes article:before {
    border-top: 80px solid transparent;
    border-right: 50vw solid transparent;
    border-bottom: 80px solid #fff;
    border-left: 50vw solid transparent;
    top: -159px
}

main section.attributes article:after {
    border-top: 80px solid #fff;
    border-right: 50vw solid #fff;
    border-bottom: 80px solid transparent;
    border-left: 50vw solid #fff;
    bottom: -160px;
    z-index: -1
}

main section.attributes article h2 {
    color: #26ab5f;
    margin: 0 auto 30px
}

main section.attributes article ul {
    margin: 0 auto;
    padding: 0
}

main section.attributes article ul li {
    display: inline-block;
    font-size: 1.8em;
    list-style-type: none;
    text-align: center;
    vertical-align: top;
    width: 128px
}

main section.attributes article ul li a {
    color: #26ab5f;
    transition: all .3s east-out
}

main section.attributes article ul li a i {
    border-radius: 64px;
    clear: both;
    color: #26ab5f;
    display: block;
    font-size: 2em;
    height: 64px;
    line-height: 64px;
    width: 64px;
    transition: all .3s ease-out
}

main section.attributes article ul li:nth-child(1) a i.fa-key,
main section.attributes article ul li:nth-child(2) a i.fa-coffee,
main section.attributes article ul li:nth-child(3) a i.fa-paint-brush,
main section.attributes article ul li:nth-child(4) a i.fa-home,
main section.attributes article ul li:nth-child(5) a i.fa-life-ring,
main section.attributes article ul li:nth-child(6) a i.fa-university,
main section.attributes article ul li:nth-child(7) a i.fa-plane {
    margin: 8% 25%
}

section.useful-links {
    background-color: #ff0870;
    margin: 0;
    padding: 0;
    position: relative;
    z-index: 3
}

section.useful-links:after,
section.useful-links:before {
    display: block;
    position: absolute;
    width: 100%;
    content: "";
    left: 0;
    overflow: hidden
}

section.useful-links:before {
    border-top: 80px solid transparent;
    border-right: 50vw solid transparent;
    border-bottom: 80px solid #ff0870;
    border-left: 50vw solid transparent;
    top: -159px
}

section.useful-links:after {
    border-top: 80px solid #ff0870;
    border-right: 50vw solid #ff0870;
    border-bottom: 80px solid transparent;
    border-left: 50vw solid #ff0870;
    bottom: -140px;
    z-index: -1
}

section.useful-links article {
    margin: 0 auto;
    width: 673px
}

section.useful-links article h2 {
    display: none
}

section.useful-links article ul {
    margin: 0 auto;
    padding: 0;
    position: relative
}

section.useful-links article ul li {
    display: inline-block;
    font-size: 1.8em;
    height: 99px;
    list-style-type: none;
    text-align: center;
    vertical-align: top;
    width: 155px
}

section.useful-links article ul li a i {
    border: 2px solid #fff;
    border-radius: 25px;
    clear: both;
    color: #fff;
    display: block;
    font-size: 2.7em;
    height: 44px;
    margin: 0 auto 10px;
    width: 44px
}

section.useful-links article ul li:nth-child(2) a i.fa-question-circle {
    border: none;
    line-height: .94
}

section.useful-links article ul li:nth-child(3) a i.fa-phone {
    font-size: 1.5em;
    padding-top: 8px
}

section.useful-links article ul li a,
section.useful-links article ul li a:active,
section.useful-links article ul li a:hover,
section.useful-links article ul li a:link {
    color: #fff;
    font-family: "Open Sans";
    font-weight: 300;
    text-decoration: none;
    font-display: swap;
}

.button {
    background-color: #3498db;
    border: 1px solid #3498db;
    border-radius: 3px;
    box-shadow: 0 2px 8px -4px rgba(0, 0, 0, .8);
    color: #fff;
    display: inline-block;
    letter-spacing: 1.2px;
    font-family: eagle, sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 1.5em;
    margin: 6px 0;
    padding: 5px 15px;
    transition: transform .2s ease-out;
    transform: translate3d(0, 0, 0)
}

.button:hover {
    background-color: rgba(255, 255, 255, .3);
    border: 1px solid #3498db;
    box-shadow: 0 4px 16px -4px rgba(0, 0, 0, .6);
    color: #fff;
    cursor: pointer;
    text-decoration: none;
    transition: background-color .2s ease-out;
    transition: box-shadow .2s ease-out;
    transform: translate3d(0, -2px, 0)
}

.button i.fa-chevron-right {
    transform: translateY(10%) translateX(25%)
}

footer {
    background-color: #fff;
    margin-top: 130px;
    position: relative;
    z-index: 2
}

footer section.social-channels:before {
    content: "";
    display: block;
    border-top: 80px solid transparent;
    border-right: 50vw solid transparent;
    border-bottom: 80px solid #fff;
    border-left: 50vw solid transparent;
    left: 0;
    position: absolute;
    overflow: hidden;
    width: 100%;
    top: -159px
}

footer section.social-channels ul {
    margin: 10px auto;
    padding: 0;
    width: 261px
}

footer section.social-channels ul li {
    display: inline-block;
    height: 32px;
    list-style-type: none;
    margin: 0 10px;
    overflow: hidden;
    padding: 0;
    position: relative
}

footer section.social-channels ul li a i {
    color: #7e7f7f;
    display: block;
    font-size: 3.5em;
    transition: color .1s ease-out
}

footer nav.business-links ul.footer-menu {
    margin: 0 auto;
    padding: 0;
    width: 70%;
    transform: translateX(8%)
}

footer nav.business-links ul.footer-menu li {
    display: inline-block;
    vertical-align: top;
    width: 24%
}

footer nav.business-links ul.footer-menu li h4 {
    color: #ff0870;
    font-size: 1.2em;
    margin: 0 0 5% 10%;
    text-transform: uppercase
}

footer nav.business-links ul.footer-menu li ul {
    margin: 0 10%;
    padding: 0
}

footer nav.business-links ul.footer-menu li ul li {
    display: block;
    font-size: 1.15em;
    list-style-type: none;
    white-space: nowrap
}

footer nav.business-links ul.footer-menu li ul li:last-child {
    margin-bottom: 5%
}

footer nav.business-links ul.footer-menu li ul li a,
footer nav.business-links ul.footer-menu li ul li a:link,
footer nav.business-links ul.footer-menu li ul li a:visited {
    color: #7f8c8d;
    text-decoration: none
}

footer nav.business-links ul.mobile-footer-menu {
    margin: 30px 0;
    padding: 0;
    width: 100%
}

footer nav.business-links ul.mobile-footer-menu li {
    display: none;
    line-height: 1.2;
    list-style-type: none;
    text-align: center;
    vertical-align: top;
    width: 19%
}

footer section.copy-line {
    width: 100%
}

footer section.copy-line h4 {
    display: none
}

footer section.copy-line ul {
    margin: 0 22.25%;
    padding: 0;
    width: 77.5%
}

footer section.copy-line ul li {
    display: inline-block;
    list-style-type: none;
    vertical-align: top
}

footer section.copy-line ul li:nth-child(1) {
    min-width: 136px;
    width: 12%
}

footer section.copy-line ul li:nth-child(2) {
    width: 62%
}

footer section.copy-line ul li figure {
    float: left;
    margin: 0 5px 5px 0
}

footer section.copy-line ul li figcaption {
    float: left;
    font-size: .9em;
    font-weight: bolder;
    line-height: 1.2;
    width: 87px
}

footer section.copy-line ul li small {
    clear: both;
    color: #7f8c8d;
    display: inline-block;
    float: left;
    font-size: .9em
}

@media (max-width:1100px) {
    main section.testimonials article ul {
        width: 70%
    }
}

@media (max-width:1024px) {
    header>nav>ul.desktop-nav>li.mega-dropdown.open>ul>li.cover.animated.bounceInRight>ul>li:nth-child(5) {
        top: -33px
    }

    header.mini-bar nav ul.mmm {
        margin: 0 55px
    }

    header nav ul.desktop-nav>li.mega-dropdown.open>ul>li>ul>li>h2 {
        font-size: 1.2em
    }

    header nav ul.desktop-nav>li.mega-dropdown.open>ul>li>ul>li>ul>li:first-child>a,
    header nav ul.desktop-nav>li.mega-dropdown.open>ul>li>ul>li>ul>li>a {
        font-size: 1.1em
    }

    header nav ul.desktop-nav>li.mega-dropdown.open>ul>li>ul>li>p {
        font-size: .9em
    }

    .hero-panel .homepage-hero-module .video-container .poster {
        background-position: -318px -140px
    }

    .carousel-control .glyphicon-chevron-left,
    .carousel-control .icon-prev {
        left: 37%
    }

    .carousel-control .glyphicon-chevron-right,
    .carousel-control .icon-next {
        right: 37%
    }
}

a,
a:focus,
a:hover {
    text-decoration: none
}

.container {
    padding: 0;
    margin: 0;
    width: 100%
}

@media (max-width:500px) {
  header nav ul.desktop-nav>li#yourPolicy{
    display:none;
  }
}
    </style>


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
