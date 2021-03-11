window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 472 || document.documentElement.scrollTop > 472) {
    document.getElementById("index-header").style.opacity = "1";
  } else {
    document.getElementById("index-header").style.opacity = "0";
  }
}