$(document).ready(init);

function init(){
 $(".sample_pics").before('<div class="pager"></div>');

 $(".sample_pics").cycle(
   {
     pause: 1,
	 pager: ".pager",
	 pagerAnchorBuilder : imagePager
   }
  );
 $(".rotate_sample").rotate3Di(9000, 2000); 

}

function imagePager(index, slide) {
var slide = $(slide);
var img = slide.children("img").get(0);
return '<a href="#"><img src="' + img.src + '"alt="" width="110" height="66" /></a>';
}


