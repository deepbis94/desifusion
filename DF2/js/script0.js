    function fun1(str){
        if(str=="char"){
            document.getElem-entById("charity").classList.remove("closeLeft");
            document.getElementById("charity").classList.add("openLeft");
        }
        if(str=="book"){
            document.getElementById("book").classList.remove("closeRight");
            document.getElementById("book").classList.add("openRight");

        }
    }

    function fun2(str){
        if(str=="char"){
            document.getElementById("charity").classList.remove("openLeft");
            document.getElementById("charity").classList.add("closeLeft");
        }
        if(str=="book"){
            document.getElementById("book").classList.remove("openRight");
            document.getElementById("book").classList.add("closeRight");
        }
    }   


	$(document).ready(function() {
 AOS.init();

    var time,dvalue,BC,C,ad;

	$("#mainbody").show();
    $("#preloader").hide();
// $("#preloader").fadeOut(5000,function(){
// 	$("#mainbody").fadeIn(500);
// });

	$(".scrollTopLink,.home").click(function(){
		$.fn.pagepiling.moveTo(1);
	});

	$(".abt").click(function(){
		$.fn.pagepiling.moveTo(2);
	});
        $(".proceed-btn1").click(function(){
            $("#book-step2").fadeIn("2000");
            $("#book-step1").hide();
        });
        $("#book-step1").show();
        $("#book-step2,#book-step4,#book-step3").hide();
$("#datepicker").datepicker({
    minDate :0,
    maxDate : $("#range").val(),
    onSelect : function (dateText){
        $("#dvalue").datepicker("setDate",$(this).datepicker("getDate"));
    }
});

$("#dvalue").datepicker();

$("#proceed-btn2").click(function(){
    if($("#dvalue").val().length<1){
        alert("Please select a date");
    }
    else{
         time = $("#selectTime").val();
         dvalue = $("#dvalue").val();

        $.post("operations.php",{
            ctime : time,
            cdvalue : dvalue
        },function(data,status){
            alert(data);
        //     if(!data){
        // $("#book-step2").hide();
        // $("#book-step3").fadeIn("2000");                
        //     }
        //     else{
        //         alert("Already booked.. Please try another time or day");
        //     }
        });

}
});
$("#proceed-btn3").click(function(){
    BC = $("#selectBCCount").val();
    C = $("#selectCCount").val();
    ad = $("#selectACount").val();
    $("#book-step3").hide();
    $("#book-step4").fadeIn("3000");
});

$("#book-form").submit(function(e){
  e.preventDefault();
  var nm = document.getElementById("c_name").value;
  var em = document.getElementById("c_email").value;
  var ph = document.getElementById("c_phone").value;
  var purpose = $("#purpose").val();
  if(validatePhone(ph)=="ok"){
    if(validateEmail(em)=="ok"){
        alert("ok")
    }
    else{
        alert(validateEmail(em));
    }
  }
  else{
    alert(validatePhone(ph));
  }


  // $.post("operations.php",
  //   {
  //       action : "booking",
  //       time : time,
  //       date : dvalue,
  //       adult : ad,
  //       child : C,
  //       bchild : BC,
  //       name : nm,
  //       email : em,
  //       phone : ph,
  //       purpose : purpose
  //   },
  //   function(data,status){
  //       alert(status+" "+data);
  //   });
  // alert(time+" "+dvalue+" "+BC+" "+C+" "+ad+" "+nm+" "+em+" "+ph+" "+purpose);
});


	// $('#pagepiling').pagepiling({
	// 	 navigation: {
 //            'textColor': '#fff',
 //            'bulletsColor': '#fff',
 //            'position': 'left',
 //            'tooltips': ['Home', 'About', 'Menu', 'section4']
 //        },
 //        afterLoad : function(anchorLink,index){
 //        	if(index>1){
 //        		$("nav").css("background-color","brown");
 //        		$(".scrollTopLink").show();
 //        	}
 //        	if(index==1){
 //        	$("nav").css("background-color","transparent");	
 //        	$(".scrollTopLink").hide();
 //        	}
 //            if(index==2){

 //                $(".img1").removeClass("imgRight").addClass("imgRight");
 //                $(".img2").removeClass("imgRight2").addClass("imgRight2");
 //            }
 //        },
 //         easing : 'swing',
 //        normalScrollElements: null,
 //        normalScrollElementTouchThreshold: 5,
 //        touchSensitivity: 5,
 //        keyboardScrolling: true,
 //        sectionSelector: '.section',
 //        animateAnchor: false       
	// });
 //    $.fn.pagepiling.setAllowScrolling(true);
 //    $.fn.pagepiling.setKeyboardScrolling(true);


});

function booksubmit(){

}

function validateEmail(e) {
    var str = '';
    var l = e.length;
    if(e.slice(l-3,l)=='com' || e.slice(l-2,l)=='in'){
        if(e.charAt(l-4)=='.' || e.charAt(l-3)=='.'){
            if(e.search("gmail") || e.search("yahoo") || e.search("yahoo")){
                str = "ok";
            }
            else{
                str = "Error in domain";
            }            
        }
        else{
            str = "Must contain dot";
        }
    }
    else{
        str = "Error in com,in";
    }
    return str;
}

function validatePhone(phone){
    var str = '';
    var fl = phone.charAt(0);
    var length = phone.length;
    if(!Number.isNaN(phone)){
    if(fl=='7' || fl=='8' || fl=='9'){
        if(length==10){
            str = "ok";
        }
        else{
            str = "length not match";
        }
    }
    else{
        str = "start error";
    }
}
else{
    str = "Input a number only";
}
    return str;

}

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
        if(scroll>70){
            $("nav").css("background-color","red");
        }
        if(scroll<70){
            $("nav").css("background-color","transparent");

        }
	});

	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
