$('document').ready(function() {
    chkWidth();
    chkMode();
    if (/Mobi/.test(navigator.userAgent)) {
      $.isMobile = true;
      }else{
          $.isMobile = false;
      }
  
      if($.isMobile){
          $('video').remove();
          $('.replace-video-image').css({display: 'block'});
      }
  });
  
  $(function() {
      if (navigator.userAgent.match(/Trident.*rv\:11\./)) {
          $('html').addClass('ie11');
      }
      if (navigator.userAgent.match(/Trident\/6\./)) {
          $('html').addClass('ie10');
      }
      if (navigator.userAgent.match(/Trident\/5\./)) {
          $('html').addClass('ie9');
      }
  
      $('.target-burger').click(function() {
          $('.mega-dropdown').toggleClass('open');
          $('.target-burger').toggleClass('toggled');
          $('header nav ul.desktop-nav').toggleClass('mmm');
          $('body').toggleClass('menu-showing');
  
          calculateItemHeights();
      });
  
    //   $('.jello').click(function() {
    //       var bid = getUrlParameter('bid');
    //       var orin = 'https://quote.homeprotect.co.uk/i/questions/aboutyou.aspx';
    //       var url = (bid) ? orin + '?bid=' + bid : orin;
    //       window.location = url;
    //   });
      updateLinksHref();
  });
  
  $(window).bind('resize', function() {
      calculateItemHeights();
  });
  
  
  $(window).bind('scroll', function() {
      if ($(window).scrollTop() > 1) {
          $('.container > header').css('height', '46px').addClass('mini-bar');
      } else {
          $('.container > header').css('height', '105px').removeClass('mini-bar');
      }
      if ($(window).scrollTop() > 210) {
          $('.get').addClass('fixed');
      } else {
          $('.get').removeClass('fixed');
      }
      if ($(window).scrollTop() > 545) {
          $('.quote').addClass('stage-one');
      } else {
          $('.quote').removeClass('stage-one');
      }
  });
  
  $('.social-channels ul li a i').text('');
  
  $('.logo').click(function() {
      location.href = '#top';
  });
  
  //$('.mobile-nav li').wrapInner('<span/>');
  
  $('.mobile-nav li:nth-child(5) a').click(function() {
      $('header nav').css('display', 'none');
      $('.logo').css('display', 'none');
  
      $(window).scroll(function() {
          event.preventDefault();
      });
  });
  
  $('menu#mobile-menu div.close a').click(function() {
      $('header nav').css('display', 'block');
      $('.logo').css('display', 'block');
  
      $(window).unbind('scroll');
  });
  
  
  $('.carousel-control, .carousel-indicators li').click(function() {
      calculateItemHeights();
  
  });
  
  
  function calculateItemHeights() {
      if ($('body').hasClass('menu-showing')) {
          var eles = $('.carousel > .carousel-inner > .item');
          $.each(eles, function(i, el) {
              $(el).animate({ scrollTop: 0 }, 800);
          });
  
      }
  }
  
  function updateLinksHref() {
      var bid = getUrlParameter('bid');
      if(bid == undefined ){
        bid = localStorage.getItem('bid');
      }else{
        localStorage.setItem('bid',bid)
      }

      if (bid && bid !== undefined) {
          $.each($('a'), function(i, link) {
              if ($(link).attr('href') !== '' || $(link).attr('href') !== '#' || $(link).attr('href') !== 'javascript:;') {
  
                  $(link).attr('href', $(link).attr('href') + '?bid=' + bid)
              }
          });
      }
  }
  
  var chkWidth = function() {
      var viewportWidth = $(window).width();
      //console.log(viewportWidth);
      //var mobileMode = (viewportWidth <= 945) ? $('.logo > span:first-child').html('Home<br/>Protect') : $('.logo > span:first-child').html('HomeProtect');
      //var situMode = (viewportWidth <= 1091) ? $('#carousel > div > div.item.situation > div > div:nth-child(2) > h2').html('Situation') : $('#carousel > div > div.item.situation > div > div:nth-child(2) > h2').html('Resident type');
      //var propMode = (viewportWidth <= 1091) ? $('#carousel > div > div.item.property > div > div:nth-child(2) > h2').html('Property') : $('#carousel > div > div.item.property > div > div:nth-child(2) > h2').html('Property type');
      var shortenMode = (viewportWidth <= 617) ? $('header nav ul.desktop-nav > li:nth-child(3) a').text('Account') : $('header nav ul.desktop-nav > li:nth-child(3) a').text('Account');
      var cuMode = (viewportWidth <= 729) ? $('header nav ul.desktop-nav > li:nth-child(1) a').html('<i class="fa fa-phone" aria-hidden="false"></i>') : $('header nav ul.desktop-nav > li:nth-child(1) a').html('Contact us');
      var uaMode = (viewportWidth <= 729) ? $('header nav ul.desktop-nav > li:nth-child(2) a').html('<i class="fa fa-history" aria-hidden="false"></i>') : $('header nav ul.desktop-nav > li:nth-child(2) a').html('About us');
      var uaMode = (viewportWidth <= 729) ? $('header nav ul.desktop-nav > li:nth-child(3) a').html('<i class="fa fa-archive" aria-hidden="false"></i>') : $('header nav ul.desktop-nav > li:nth-child(3) a').html('Retrieve a quote');
      var rqMode = (viewportWidth <= 729) ? $('header nav ul.desktop-nav > li:nth-child(4) a').html('<i class="fa fa-archive" aria-hidden="true"></i>') : $('header nav ul.desktop-nav > li:nth-child(4) a').html('Your policy documents');
  };
  
  // Abstract content to external files
  var chkMode = function() {
      var pathName = $('body').attr('class');
  
      var contentMode = (pathName == undefined) ? pathName = 'default' : pathName = pathName;
      //$('.intro-panel').load(pathName + '/_intro_panel.html');
     // $('.video-src').load(pathName + '/_video_src.html');
  
  };
  
  $(window).resize(function() {
      chkWidth();
  });
  
  var getUrlParameter = function getUrlParameter(sParam) {
      var sPageURL = decodeURIComponent(window.location.search.substring(1)),
          sURLVariables = sPageURL.split('&'),
          sParameterName,
          i;
  
      for (i = 0; i < sURLVariables.length; i++) {
          sParameterName = sURLVariables[i].split('=');
  
          if (sParameterName[0] === sParam) {
              return sParameterName[1] === undefined ? true : sParameterName[1];
          }
      }
  };