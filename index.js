document.querySelector(".navbar-toggler").addEventListener("click",click);
document.getElementById("#btn").addEventListener("click",click);
document.getElementsByClassName(".nav-link").addEventListener("playSound",click);

function click() {
            var a = new Audio("sound/click1.wav");
            a.play();
        }
function playSound() {
  var b = document.getElementById("audio");
  b.play();
}