function signupbox() {
  document.getElementById("animate").style.transition = "all 1s"
  var elem = document.getElementById("animate");
  var pos = 0;
  var prevpos = 420;
  var id = setInterval(frame, 1);
  function frame() {
    if (pos == 420) {
      clearInterval(id);
    } else {
      pos+=5;
      prevpos-=5;
      elem.style.right = pos + "px";
      elem.style.left = prevpos + "px";
    }
  }
}

function loginbox() {
  document.getElementById("animate").style.transition = "all 1s"
  var elem = document.getElementById("animate");
  var pos = 0;
  var id = setInterval(frame, 1);
  function frame() {
    if (pos == 420) {
      clearInterval(id);
    } else {
      pos+=5;
      elem.style.left = pos + "px";
      elem.style.right = 0 + "px";
    }
  }
}

$(document).ready(function(){
  $(".signup").click(function(){
    $("#box1").fadeOut(300);
    $("#box1").hide(300);
    $("#box2").delay(1000).fadeIn(400);
    $("#content-box1").fadeOut(300);
    $("#content-box1").hide(300);
    $("#content-box2").delay(1000).fadeIn(400);
  });
  $(".login").click(function(){
    $("#box2").fadeOut(300);
    $("#box2").hide(300);
    $("#box1").delay(1000).fadeIn(400);
    $("#content-box2").fadeOut(300);
    $("#content-box2").hide(300);
    $("#content-box1").delay(1000).fadeIn(400);
  });
});
