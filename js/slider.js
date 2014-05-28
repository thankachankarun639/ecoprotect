sliderNext=2;

$(document).ready(function(){
 $("#slider>img#1").fadeIn(300);
 startSlider();
})

function startSlider()
{
 loop = setInterval(function(){
  if(sliderNext>4)
  {
   sliderNext=1;
  }
   $("#slider>img").fadeOut(500);
   $("#slider>img#"+sliderNext).fadeIn(1000);
   sliderNext=sliderNext+1;
 },3000);
}
 
  

