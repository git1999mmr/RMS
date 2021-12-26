$(document).ready(function(){
    $("#jhover").hover(function(){
      $(this).css("color", "#00008B");
    },
    $("#jhover").mouseleave(function(){
      $(this).css("color", "black");
    }));
    });

  $(document).ready(function(){
    $("input").focus(function(){
      $(this).css("background-color", "#e0ffff");
    });
    $("input").blur(function(){
     $(this).css("background-color", "white");
    });
    });

    $(document).ready(function(){
      $("a#nav_next").attr('target','_blank');
    });