var imageCounter = 0;
  function changeImage(state) {
    let imageCount = 2; 
    
    
    if(state || !(imageCounter + 1 > imageCount))
        imageCounter++;
    else if(!(imageCount - 1 < 1))
    {
        imageCounter--;
    }

    switch(imageCounter)
    {
        case 1:
            document.getElementById("slider-image").style.backgroundImage = "url(https://placepic.ru/wp-content/uploads/2018/10/starry-sky-night-glitter-stars-river-1200080.jpg)";
            break;
        case 2:
            document.getElementById("slider-image").style.backgroundImage = "url('https://mobimg.b-cdn.net/v3/fetch/f8/f8cafd4a71e7a7c9e1cba39c47e55204.jpeg')";
            break;
        case 3:
            document.getElementById("slider-image").style.backgroundImage = "url('https://webandcrafts.com/blog/wp-content/uploads/2019/08/Vue.js.jpg')";
            break;
    }
    console.log(imageCounter);
  }
  var devWidth = $(window).width();
  $(document).ready(function() {
	$(".head_block").width(devWidth);
	$(".main_content").width(devWidth);
	$(".footer").width(devWidth);
});
$(window).resize(function() {
	$(".head_block").width(devWidth);
	$(".main_content").width(devWidth);
	$(".footer").width(devWidth);
});
window.addEventListener("orientationchange", function() {
	$(".head_block").width(devWidth);
	$(".main_content").width(devWidth);
	$(".footer").width(devWidth);
});
  
  