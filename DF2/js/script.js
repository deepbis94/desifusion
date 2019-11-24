// $(function(){

// 	let controller3 = new ScrollMagic.Controller();
	
// 	let timeline3 = new TimelineMax();
// 	timeline3
// 	.to('.im21',4,{y:0,x:400,ease: Power3.easeInOut})

// 	let scene3 = new ScrollMagic.Scene({
// 		triggerElement : '.section2',
// 		duration : '5000',
// 		triggerHook : 0
// 	})

// .setTween(timeline3)
// .setPin('.section2')
// .addTo(controller3);				


// 	// var controller = new ScrollMagic.Controller();
// 	// var wipe = new TimelineMax()

// 	// // y:-100%,y:0% ->Top to bottom
// 	// //x :100%,x:0% ->right to left

// 	// .fromTo('div.panel.section3',1,{y:'-100%'},{y:'0%', ease:Linear.easeNone})
// 	// .fromTo('div.panel.section4',1,{x:'100%'},{x:'0%', ease:Linear.easeNone})


// 	// new ScrollMagic.Scene({
// 	// 	triggerElement : ".pinContainer",
// 	// 	triggerHook : "onLeave",
// 	// 	duration : "300%"
// 	// })

// 	// .setPin(".pinContainer")
// 	// .setTween(wipe)
// 	// .addTo(controller);

// });
document.addEventListener('DOMContentLoaded',()=>{
	 AOS.init();

	let controller = new ScrollMagic.Controller();
	
	let timeline = new TimelineMax();
	timeline
	.fromTo('div.panel.section3',1,{y:'-100%'},{y:'0%', ease:Power3.easeInOut})
	.fromTo('.im21',1,{opacity:1},{y:200,opacity:0,ease: Bounce.easeOut},'-=1')
	.fromTo('.im22',1,{opacity:1},{y:250,opacity:0,ease: Bounce.easeOut},'-=1')
	.fromTo('.im23',1,{opacity:1},{y:300,opacity:0,ease: Bounce.easeOut},'-=1')
	.fromTo('.im24',1,{opacity:1},{y:400,opacity:0,ease: Bounce.easeOut},'-=1')
	.to('.im31',1,{y:-790,opacity:1,ease: Power3.easeInOut},'-=1')
	.to('.im32',1,{y:-790,opacity:1,ease: Power3.easeInOut},'-=1')
	.to('.im33',1,{y:-790,opacity:1,ease: Power3.easeInOut},'-=1')
	.to('.im34',1,{y:-790,opacity:1,ease: Power3.easeInOut},'-=1')

	.fromTo('div.panel.section4',1,{x:'100%'},{x:'0%', ease:Power3.easeInOut})


	let scene = new ScrollMagic.Scene({
	
		triggerElement : '#trigger',
		duration : '1000',
		triggerHook : 'onLeave'

	})

.setTween(timeline)
.setPin('.pinContainer')
.addIndicators() // add indicators (requires plugin)

.addTo(controller);

	// var controller2 = new ScrollMagic.Controller();
	// var wipe = new TimelineMax()

	// // y:-100%,y:0% ->Top to bottom
	// //x :100%,x:0% ->right to left

	// .fromTo('div.panel.section3',1,{y:'-100%'},{y:'0%', ease:Linear.easeNone})
	// .fromTo('div.panel.section4',1,{x:'100%'},{x:'0%', ease:Linear.easeNone})


	// new ScrollMagic.Scene({
	// 	triggerElement : ".pinContainer",
	// 	triggerHook : "onLeave",
	// 	duration : "300%"
	// })

	// .setPin(".pinContainer")
	// .setTween(wipe)
	// .addTo(controller2);

});

$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){
	$(".scroll").click(function(){
		$("html,body").animate({scrollTop:$("#top").offset().top},"8000");
		return false});

})