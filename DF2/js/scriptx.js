	function funOpen{
			document.getElementById("charity").classList.remove("closeLeft");
			document.getElementById("charity").classList.add("openLeft");		
	}

$(document).ready(function() {

$("#proceed-btn2").click(function(){
	if($("#dvalue").val().length<1){
		alert("Please select a date");
	}
	else{
		$("#book-step2").hide();
		$("#book-step3").hide();
		// var gcount = $("#selectGCount").val();
		// var dvalue = $("#dvalue").val();
		// $.post("operations.php",{

		// },function(data,status){

		// });
}
});



$("#datepicker").datepicker({
	minDate :0,
	maxDate : $("#range").val(),
	onSelect : function (dateText){
		$("#dvalue").datepicker("setDate",$(this).datepicker("getDate"));
	}
});

$("#dvalue").datepicker();


		$("#book-step1").hide();
		$(".proceed-btn1").click(function(){
			$("#book-step2").fadeIn("1000");
			$("#book-step1").hide();
		});

	$(".scrollTopLink,.home").click(function(){
		$.fn.pagepiling.moveTo(1);
	});

	$(".abt").click(function(){
		$.fn.pagepiling.moveTo(2);
	});


	$('#pagepiling').pagepiling({
		 navigation: {
            'textColor': '#fff',
            'bulletsColor': '#fff',
            'position': 'right',
            'tooltips': ['Home', 'About', 'Menu', 'section4']
        },
        afterLoad : function(anchorLink,index){
        	if(index>1){
        		$("nav").css("background-color","brown");
        		$(".scrollTopLink").show();
        	}
        	else if(index==1){
        	$("nav").css("background-color","transparent");	
        	$(".scrollTopLink").hide();
        	}
        },
         keyboardScrolling: true,
         easing : 'swing'       
	});
});
	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08px solid #fff}";
        document.body.appendChild(css);
    };
    $(window).scroll(function(){
		var scroll = $(window).scrollTop();
		alert(scroll);
	});

	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
