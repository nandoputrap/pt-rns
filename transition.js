/*$(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});*/

/*var selector = '.nav li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});*/


var menu = document.querySelector('.menu');
var anchors = menu.getElementsByTagName('a');

for (var i = 0; i < anchors.length; i += 1) {
  anchors[i].addEventListener('click', function() { clickHandler(anchors[i]) }, false);
}

function clickHandler(anchor) {
  var hasClass = anchor.getAttribute('class');
  if (hasClass !== 'active') {
    anchor.setAttribute('class', 'active');
  }
}
