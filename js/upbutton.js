var upbtn = document.getElementById("upbtn");

if (document.documentElement.scrollTop < 5) {
  upbtn.style.visibility = "hidden";
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 300) {
    upbtn.style.visibility = "visible";
  } else {
    upbtn.style.visibility = "hidden";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  window.scrollTo(0, 0);
}