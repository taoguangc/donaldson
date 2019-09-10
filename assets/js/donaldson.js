var util = UIkit.util;
window.addEventListener("scroll",function(){
  var totop = util.$("a.uk-totop");
  if(window.pageYOffset > window.innerHeight){
    util.addClass(totop, "uk-active");
  }
  else {
    util.removeClass(totop, "uk-active");
  }
},false);