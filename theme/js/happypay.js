/**
 * Happypay JS
 * @author Archie M
 * 
 */

// Cookie
!function(e){var o=!1;if("function"==typeof define&&define.amd&&(define(e),o=!0),"object"==typeof exports&&(module.exports=e(),o=!0),!o){var t=window.Cookies,n=window.Cookies=e();n.noConflict=function(){return window.Cookies=t,n}}}(function(){function k(){for(var e=0,o={};e<arguments.length;e++){var t=arguments[e];for(var n in t)o[n]=t[n]}return o}return function e(p){function f(e,o,t){var n;if("undefined"!=typeof document){if(1<arguments.length){if("number"==typeof(t=k({path:"/"},f.defaults,t)).expires){var i=new Date;i.setMilliseconds(i.getMilliseconds()+864e5*t.expires),t.expires=i}t.expires=t.expires?t.expires.toUTCString():"";try{n=JSON.stringify(o),/^[\{\[]/.test(n)&&(o=n)}catch(e){}o=p.write?p.write(o,e):encodeURIComponent(String(o)).replace(/%(23|24|26|2B|3A|3C|3E|3D|2F|3F|40|5B|5D|5E|60|7B|7D|7C)/g,decodeURIComponent),e=(e=(e=encodeURIComponent(String(e))).replace(/%(23|24|26|2B|5E|60|7C)/g,decodeURIComponent)).replace(/[\(\)]/g,escape);var c="";for(var a in t)t[a]&&(c+="; "+a,!0!==t[a]&&(c+="="+t[a]));return document.cookie=e+"="+o+c}e||(n={});for(var r=document.cookie?document.cookie.split("; "):[],s=/(%[0-9A-Z]{2})+/g,d=0;d<r.length;d++){var l=r[d].split("="),m=l.slice(1).join("=");this.json||'"'!==m.charAt(0)||(m=m.slice(1,-1));try{var u=l[0].replace(s,decodeURIComponent);if(m=p.read?p.read(m,u):p(m,u)||m.replace(s,decodeURIComponent),this.json)try{m=JSON.parse(m)}catch(e){}if(e===u){n=m;break}e||(n[u]=m)}catch(e){}}return n}}return(f.set=f).get=function(e){return f.call(f,e)},f.getJSON=function(){return f.apply({json:!0},[].slice.call(arguments))},f.defaults={},f.remove=function(e,o){f(e,"",k(o,{expires:-1}))},f.withConverter=e,f}(function(){})}),window["gdpr-cookie-notice-templates"]={},window["gdpr-cookie-notice-templates"]["bar.html"]='<div class="gdpr-cookie-notice">\n  <p class="gdpr-cookie-notice-description">{description}</p>\n  <nav class="gdpr-cookie-notice-nav">\n    <a href="#" class="gdpr-cookie-notice-nav-item gdpr-cookie-notice-nav-item-settings">{settings}</a>\n    <a href="#" class="gdpr-cookie-notice-nav-item gdpr-cookie-notice-nav-item-accept gdpr-cookie-notice-nav-item-btn">{accept}</a>\n  </nav>\n</div>\n',window["gdpr-cookie-notice-templates"]["category.html"]='<li class="gdpr-cookie-notice-modal-cookie">\n  <div class="gdpr-cookie-notice-modal-cookie-row">\n    <h3 class="gdpr-cookie-notice-modal-cookie-title">{title}</h3>\n    <input type="checkbox" name="gdpr-cookie-notice-{prefix}" checked="checked" id="gdpr-cookie-notice-{prefix}" class="gdpr-cookie-notice-modal-cookie-input">\n    <label class="gdpr-cookie-notice-modal-cookie-input-switch" for="gdpr-cookie-notice-{prefix}"></label>\n  </div>\n  <p class="gdpr-cookie-notice-modal-cookie-info">{desc}</p>\n</li>\n',window["gdpr-cookie-notice-templates"]["modal.html"]='<div class="gdpr-cookie-notice-modal">\n  <div class="gdpr-cookie-notice-modal-content">\n    <div class="gdpr-cookie-notice-modal-header">\n      <h2 class="gdpr-cookie-notice-modal-title">{settings}</h2>\n      <button type="button" class="gdpr-cookie-notice-modal-close"></button>\n    </div>\n    <ul class="gdpr-cookie-notice-modal-cookies"></ul>\n    <div class="gdpr-cookie-notice-modal-footer">\n      <a href="#" class="gdpr-cookie-notice-modal-footer-item gdpr-cookie-notice-modal-footer-item-statement">{statement}</a>\n      <a href="#" class="gdpr-cookie-notice-modal-footer-item gdpr-cookie-notice-modal-footer-item-save gdpr-cookie-notice-modal-footer-item-btn"><span>{save}</span></a>\n    </div>\n  </div>\n</div>\n';var gdprCookieNoticeLocales={};function gdprCookieNotice(c){var n="gdprcookienotice",a="gdpr-cookie-notice",r=window[a+"-templates"],i=Cookies.noConflict(),s=!1,d=!1,l=!1,m=["performance","analytics","marketing"];c.locale||(c.locale="en"),c.timeout||(c.timeout=500),c.domain||(c.domain=null),c.expiration||(c.expiration=30),void 0===gdprCookieNoticeLocales[c.locale]&&(c.locale="en");var u=i.getJSON(n),p=new CustomEvent("gdprCookiesEnabled",{detail:u});function f(e){for(var o=!1,t=0;t<m.length;t++)if(c[m[t]]&&!e[m[t]])for(var n=0;n<c[m[t]].length;n++)i.remove(c[m[t]][n]),o=!0;o?g():document.documentElement.classList.remove(a+"-loaded")}function k(e){var o={date:new Date,necessary:!0,performance:!0,analytics:!0,marketing:!0};if(e)for(var t=0;t<m.length;t++)o[m[t]]=document.getElementById(a+"-cookie_"+m[t]).checked;i.set(n,o,{expires:c.expiration,domain:c.domain}),f(o),p=new CustomEvent("gdprCookiesEnabled",{detail:o}),document.dispatchEvent(p)}function e(){if(d)return!1;var e,o,t=v("bar.html");document.body.insertAdjacentHTML("beforeend",t),e=document.querySelectorAll("."+a+"-nav-item-settings")[0],o=document.querySelectorAll("."+a+"-nav-item-accept")[0],e.addEventListener("click",function(e){e.preventDefault(),h()}),o.addEventListener("click",function(e){e.preventDefault(),k()}),d=!0}function g(){e(),setTimeout(function(){document.documentElement.classList.add(a+"-loaded")},c.timeout)}function v(e,t){var o=r[e],n=gdprCookieNoticeLocales[c.locale];if(t?t+="_":t="",!("string"==typeof o&&n instanceof Object))return!1;for(var i in n)return o.replace(/({([^}]+)})/g,function(e){var o=e.replace(/{/,"").replace(/}/,"");return"prefix"==o?t.slice(0,-1):n[o]?n[o]:n[t+o]?n[t+o]:e})}function o(){if(s)return!1;var e=v("modal.html");document.body.insertAdjacentHTML("beforeend",e);var o=document.querySelector("."+a+"-modal-cookies");o.innerHTML+=v("category.html","cookie_essential");var t=document.querySelector("."+a+"-modal-cookie-input"),n=document.querySelector("."+a+"-modal-cookie-input-switch");n.innerHTML=gdprCookieNoticeLocales[c.locale].always_on,n.classList.add(a+"-modal-cookie-state"),n.classList.remove(a+"-modal-cookie-input-switch"),t.remove(),c.performance&&(o.innerHTML+=v("category.html","cookie_performance")),c.analytics&&(o.innerHTML+=v("category.html","cookie_analytics")),c.marketing&&(o.innerHTML+=v("category.html","cookie_marketing")),function(){var e=document.querySelectorAll("."+a+"-modal-close")[0],o=document.querySelectorAll("."+a+"-modal-footer-item-statement")[0],t=document.querySelectorAll("."+a+"-modal-cookie-title"),n=document.querySelectorAll("."+a+"-modal-footer-item-save")[0];e.addEventListener("click",function(){return document.documentElement.classList.remove(a+"-show-modal"),!1}),o.addEventListener("click",function(e){e.preventDefault(),window.location.href=c.statement});for(var i=0;i<t.length;i++)t[i].addEventListener("click",function(){return this.parentNode.parentNode.classList.toggle("open"),!1});n.addEventListener("click",function(e){e.preventDefault(),n.classList.add("saved"),setTimeout(function(){n.classList.remove("saved")},1e3),k(!0)})}(),u&&(document.getElementById(a+"-cookie_performance").checked=u.performance,document.getElementById(a+"-cookie_analytics").checked=u.analytics,document.getElementById(a+"-cookie_marketing").checked=u.marketing),s=!0}function h(){o(),document.documentElement.classList.add(a+"-show-modal")}u?(f(u),document.dispatchEvent(p)):(g(),c.implicit&&window.addEventListener("scroll",function e(){var o,t,n,i,c;o=window.innerHeight||(document.documentElement||document.body).clientHeight,c=document,t=Math.max(c.body.scrollHeight,c.documentElement.scrollHeight,c.body.offsetHeight,c.documentElement.offsetHeight,c.body.clientHeight,c.documentElement.clientHeight),n=window.pageYOffset||(document.documentElement||document.body.parentNode||document.body).scrollTop,i=t-o,25<Math.floor(n/i*100)&&!l&&(l=!0)&&(k(),window.removeEventListener("click",e))}));var t=document.querySelectorAll("."+a+"-settings-button");if(t)for(var y=0;y<t.length;y++)t[y].addEventListener("click",function(e){e.preventDefault(),h()})}gdprCookieNoticeLocales.en={description:"We use cookies to offer you a better browsing experience, personalise content and ads, to provide social media features and to analyse our traffic. Read about how we use cookies and how you can control them by clicking Cookie Settings. You consent to our cookies if you continue to use this website.",settings:"Cookie settings",accept:"Accept cookies",statement:"Our cookie statement",save:"Save settings",always_on:"Always on",cookie_essential_title:"Essential website cookies",cookie_essential_desc:"Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.",cookie_performance_title:"Performance cookies",cookie_performance_desc:"These cookies are used to enhance the performance and functionality of our websites but are non-essential to their use. For example it stores your preferred language or the region that you are in.",cookie_analytics_title:"Analytics cookies",cookie_analytics_desc:"We use analytics cookies to help us measure how users interact with website content, which helps us customize our websites and application for you in order to enhance your experience.",cookie_marketing_title:"Marketing cookies",cookie_marketing_desc:"These cookies are used to make advertising messages more relevant to you and your interests. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third party advertisers."};
//# sourceMappingURL=script.js.map

//
jQuery(window).load(function(){

    // Preloader
    jQuery('#preloader-wrap').delay(1000).hide();
    jQuery('.page-wrap').show();

});

//
jQuery(document).ready(function($) {

    /**
     * On page scroll event
     * 
     */
    jQuery(window).scroll(function($) {

        // Top menu transparency manipulation
        var nav = jQuery('.fixed-top');
        var top = 140;

        if ( jQuery(window).scrollTop() >= top ) {
            nav.addClass('scrolling');
        } else {
            nav.removeClass('scrolling');
        }
        
        // Other
        //$('.navbar-toggler')
        //if ( $(this).hasClass("selected")) {

    });


    // Banner scroll to section 
    $(".bounce .arrow").click(function() {
        $('html, body').animate({
            scrollTop: $("#scrollto").offset().top - 110
        }, 800);
    });
   

    // Stats counter
    $('.counter').counterUp({
        delay: 10,
        time: 7000
    });


    // Banner animation
    //runAnim();    


    // Console
    console.log( "Happy pay!" );

});



/**
 * Bootstrap navbar dropdown with hover effect
 * https://bootstrap-menu.com/detail-basic-hover.html 
 * 
 */
document.addEventListener("DOMContentLoaded", function(){

    // make it as accordion for smaller screens
    if (window.innerWidth > 992) {
        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
            everyitem.addEventListener('mouseover', function(e){
                let el_link = this.querySelector('a[data-bs-toggle]');
                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }
            });
            everyitem.addEventListener('mouseleave', function(e){
                let el_link = this.querySelector('a[data-bs-toggle]');
                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }
            })
        });
    }
    // end if innerWidth

}); 



/**
 * WhatsApp Icon manipulation on scroll
 * @author Archie M
 * 
 */
var socialFloat = document.querySelector('#whatsapp-icon');
var footer = document.querySelector('#site-footer');

function checkOffset() {
  function getRectTop(el){
    var rect = el.getBoundingClientRect();
    return rect.top;
  }
  
  if((getRectTop(socialFloat) + document.body.scrollTop) + socialFloat.offsetHeight >= (getRectTop(footer) + document.body.scrollTop) - 10)
    socialFloat.style.position = 'absolute';
  if(document.body.scrollTop + window.innerHeight < (getRectTop(footer) + document.body.scrollTop))
    socialFloat.style.position = 'fixed'; // restore when you scroll up
  
  socialFloat.innerHTML = document.body.scrollTop + window.innerHeight;
}

document.addEventListener("scroll", function(){
  checkOffset();
});


/**
 * Init cookie 
 * https://passatgt.github.io/gdpr-cookie-notice/
 * 
 */
gdprCookieNotice({
    locale: 'en', //This is the default value
    timeout: 500, //Time until the cookie bar appears
    expiration: 30, //This is the default value, in days
    domain: '.happypay.co.za', //If you run the same cookie notice on all subdomains, define the main domain starting with a .
    implicit: true, //Accept cookies on scroll
    statement: 'https://www.happypay.co.za/privacy-policy/', //Link to your cookie statement page
    performance: ['JSESSIONID'], //Cookies in the performance category.
    analytics: ['ga'], //Cookies in the analytics category.
    marketing: ['SSID'] //Cookies in the marketing category.
});


/**
 * Custom cursor/pointer
 * CodePendatabase
 * 
 */
/*
/*
(function () {
    const cursor = document.querySelector('.cursor');
    const circle = document.querySelector('.circle');
    const links = document.querySelectorAll('.btn');
    const editPosCursor = (e) => {
        const { clientX: x, clientY: y } = e;
        cursor.style.left = x + 'px';
        cursor.style.top = y + 'px';
        circle.style.left = x + 'px';
        circle.style.top = y + 'px';
    }
    const animateit = function(e) {
        const span = this.querySelector('span');
        const { offsetX: x, offsetY: y } = e,
            { offsetWidth: width, offsetHeight: height } = this,
            //move = 25,
            move = 5,
            xMove = x / width * (move * 2) - move,
            yMove = y / height * (move * 2) - move;
        
        span.style.transform = `translate(${xMove}px, ${yMove}px)`;
        circle.classList.add('hover');
        if (e.type === 'mouseleave') {
            circle.classList.remove('hover');
            span.style.transform = '';
        }
    }
    window.addEventListener('mousemove', editPosCursor);
    links.forEach(link => link.addEventListener('mousemove', animateit));
    links.forEach(link => link.addEventListener('mouseleave', animateit));
})();
*/
