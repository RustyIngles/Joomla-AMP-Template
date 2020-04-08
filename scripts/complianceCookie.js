jQuery(function($) {

    $(document).ready(function() {

              /* Check if Cookie exists */
        if (document.cookie.indexOf('cookieComplianceAccepted') != -1) {
           /* Cookie exists - do nothing */
        } else {
            /* First - display compliance bar */
            displayComplianceBar();
            /* Second - style compliance bar */
            styleCompliance();
            /* Third - Write cookie on click */
            $("#cookie-policy-button").click(function(){
                var accepted = 'true';
                createCookie('cookieComplianceAccepted', accepted, 30);
                $('.accept').css({"display" : "none"});
            });
        }

        /* Write Compliance cookie  */
        function createCookie(name,value,days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime()+(days*24*60*60*1000));
                var expires = "; expires="+date.toGMTString();
            }
            else var expires = "";
            document.cookie = name+"="+value+expires+"; domain=.homeprotect.co.uk";
        }
        
        function displayComplianceBar() {
            var prependElem = $('body');
            var complicanceDiv = $('<div class="container accept"><div id="accept-cookie-compliance-section"><div class="col-md-10 col-sm-8"><p>We use cookies to give you the best possible experience online. By continuing to use our website, you agree to receiving our cookies on your web browser. Visit our <a href="https://www.homeprotect.co.uk/cookie-policy" target="_blank" onclick="homeprotect.logUAMoreInfoClick(this, true)">cookie policy</a> page to find out more and how to change your cookie settings.</p></div><div class="col-md-2 text-right"><button id="cookie-policy-button">Accept</button></div> </div></div>');
           prependElem.prepend(complicanceDiv);
        }

        function styleCompliance() {
            $('.accept').css({
                "background-color": "#fff",
                "width" : "100%",
                "z-index" : "9999999",
                "display": "block",
                "position" : "fixed",
                "font-family" : "HelveticaRegular',Helvetica,Arial,Verdana",
                "bottom" : "0"
            });
            $('.accept p').css({ 
                "font-size" : "14px",
                "margin-bottom" : "0",
                "font-family" : "'HelveticaRegular',Helvetica,Arial,Verdana",
                "color" : "#ddd",
                "font-weight" : "500"
            });
            $('#accept-cookie-compliance-section').css({
                "background-color" : "#111",
                "overflow" : "hidden",
                "color" : "#ddd",
                "margin" : "0 -15px",
                "padding" : "5px 20px",
                "font-family" : "'HelveticaRegular',Helvetica,Arial,Verdana",
				"font-size": "initial"
            }); 
            $('#accept-cookie-compliance-section button').css({
                "-webkit-border-radius" : "5px",
                "-moz-border-radius" : "5px",
                "border-radius" : "5px",
                "-webkit-transition" : "all 250ms ease",
                "-moz-transition" : "all 250ms ease",
                "-ms-transition" : "all 250ms ease",
                "-o-transition" : "all 250ms ease",
                "transition" : "all 250ms ease",
                "border" : "2px solid",
                "font-size" : "1.4em",
                "font-weight" : "bolder",
                "word-wrap" : "normal",
                "padding" : "0 1em",
                "color" : "#fff",
                "min-height" : "2em",
                "border-color" : "#357c49",
                "background-color" : "#35a549",
                "position" : "relative",
                "width" : "auto",
                "margin-top" : "5px" 
            });
            $('#accept-cookie-compliance-section button:hover').css({
                "border-color" : "#809639",
                "background-color": "#9ecc4a"
            });
        }
    });
});
