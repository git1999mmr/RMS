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

function equate(){
    console.log("Print it")

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    let userdata = ["harvey","login"];
    let passworddata = ["harveygame","loginout"];
    
    for(var i=0;i<2;i++){
      console.log("for looped")

      if (username == userdata[i] && password == passworddata[i]){  
      alert("Login Succesful");
      window.location = "login.html"

     return false ;
    }
   }
           console.log("for looped in")

    alert("Login Unsuccessfull");
  }
  function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    let user = getCookie("username");
    if (user != "") {
      alert("Welcome again " + user);
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
         setCookie("username", user, 30);
       }
    }
  }