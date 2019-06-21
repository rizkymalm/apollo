<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/window.js"></script>
<script type="text/javascript" src="assets/malms/javas/malms.js"></Script>

<script type="text/javascript" src="assets/plugin/custom-slider/jquery.animateSlider.js"></script>
<script type="text/javascript" src="assets/plugin/custom-slider/modernizr.js"></script>
<script>
     $(".anim-slider").animateSlider(
      {
        autoplay  :true,
        interval  :100000,
        animations  : 
        {
          0 :   //Slide No1
          {
            "#slide1-1" :
            {
              show      :"slideInRight",
              hide    : "slideOutRight",
              delayShow : "delay0-5s"
            },
            "#slide1-2" :
            {
              show      :"slideInLeft",
              hide    : "slideOutLeft",
              delayShow : "delay1s"
            },
            "#slide1-3" :
            {
              show      :"bounceIn",
              hide    : "fadeOut",
              delayShow : "delay1s"
            }
          }
        }
      });
</script>

<script type="text/javascript" src="assets/plugin/swiper-slider/swiper.min.js"></script>
<script>
if ($(window).width() > 1024) {
  slideview = 4.5;
}else if($(window).width() <= 1024 && $(window).width() > 650){
  slideview = 3.5;
}else if($(window).width() <= 650){
  slideview = 1.5;
}
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    slidesPerView: slideview,
    paginationClickable: true,
    spaceBetween: 0,
    freeMode: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
});
</script>