$(function () {
  $(document).scroll(function () {
	  var $nav = $(".fixed-top");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});


let jmlArt = $('#articles .art').length;
var currArt = jmlArt>4 ? 4 : jmlArt;

function view_more_art(){
	var moreArt = currArt+2;
	if(moreArt>=jmlArt){
		for(i=currArt+1;i<=jmlArt;i++){
			$('#art_'+i).css('display','block');
      $('#art_'+i).attr('data-aos','fade-right');
      AOS.refreshHard();
      $('#art_'+i).addClass('aos-animate');
		}
		$('#view_more_art').css('display','none');
	}else{
		for(i=currArt+1;i<=moreArt;i++){
			$('#art_'+i).css('display','block');
      $('#art_'+i).attr('data-aos','fade-right');
      AOS.refreshHard();
      $('#art_'+i).addClass('aos-animate');
		}
	}
	currArt+=2;
}

let jmlRcp = $('#recipes .rcp').length;
var currRcp = jmlRcp>5 ? 5 : jmlRcp;

function view_more_rcp(){
	var moreRcp = currRcp+2;
	if(moreRcp>=jmlRcp){
		for(i=currRcp+1;i<=jmlRcp;i++){
			$('#rcp_'+i).css('display','block');
      $('#rcp_'+i).attr('data-aos','fade-left');
      AOS.refreshHard();
      $('#rcp_'+i).addClass('aos-animate');
		}
		$('#view_more_rcp').css('display','none');
	}else{
		for(i=currRcp+1;i<=moreRcp;i++){
			$('#rcp_'+i).css('display','block');
      $('#rcp_'+i).attr('data-aos','fade-left');
      AOS.refreshHard();
      $('#rcp_'+i).addClass('aos-animate');
		}
	}
	currRcp+=2;
}

const buttonRight = document.getElementById('slideRight');
const buttonLeft = document.getElementById('slideLeft');

buttonRight.onclick = function () {
	var container = document.getElementById('container-res-list');
    sideScroll(container,'right',100,1000,500);
};
buttonLeft.onclick = function () {
  	var container = document.getElementById('container-res-list');
    sideScroll(container,'left',100,1000,500);
};

function sideScroll(element,direction,speed,distance,step){
    scrollAmount = 0;
    var slideTimer = setInterval(function(){
        if(direction == 'left'){
            element.scrollLeft -= step;
        } else {
            element.scrollLeft += step;
        }
        scrollAmount += step;
        if(scrollAmount >= distance){
            window.clearInterval(slideTimer);
        }
    }, speed);
}

AOS.init();
// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  
  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
});