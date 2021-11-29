/**
 * Happypay JS
 * @author Archie M
 * 
 */

//
jQuery(window).load(function(){

    // Preloader
    jQuery('#preloader-wrap').delay(1000).hide();
    jQuery('.page-wrap').show();

});

//
jQuery(document).ready(function($) {

    // Banner scroll to section
    $(".bounce .arrow").click(function(event){
        $('html, body').animate({scrollTop: '+=950px'}, 800);
    });
   
    // Stats counter 
    $('.counter').counterUp({
        delay: 10,
        time: 7000
    });

    //Banner animation
    runAnim();

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
// DOMContentLoaded  end



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



function runAnim() {

	window.scroll(0,0);

	var tl;

	var timing = 1;
	var easeStyl = "power4.out";


	// Banner animation chaining JS //
	stripesTl($(".main-wrap")).to(".h1 span", {
		opacity: 1,
		duration: 0,
		delay: -0.4,
		ease: "none"
	})
	.from(".h1 span", {
		skewY: 7,
		yPercent: 103,
		duration: 1,
		ease: easeStyl
	})
	.fromTo(".main-wrap .content-wrap", {
		opacity: 0,
		yPercent: 5,
	},{
		opacity: 1,
		duration: 1,
		delay: -0.4,
		ease: easeStyl
	})
	.to(".main-wrap .bg-inner", {
		scrollTrigger: {
			trigger: ".main-wrap .bg-wrap",
			start: "top top",
			end: "80% top",
			scrub: true,
		},
		scale: 1,
		opacity: 0,
		ease: "none"
	})
	.to(".banner-img", {
		scale: 1,
		duration: timing,
		delay: timing * -0.8,
		ease: easeStyl
	})
	.to(".banner-img", {
		borderRadius: 0,
		duration: timing,
		delay: (timing - 0.5) * -1,
		ease: easeStyl
	})
	.to(".banner-img", {
		css: {
			overflow: "visible"
		},
		duration: 0,
		ease: "none"
	});

}
