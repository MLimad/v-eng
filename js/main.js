// Main Script
$(document).ready(function(){

  // Dark
  $("#dark").click(function(){
    $("body").toggleClass("dark");
  });
  


// Login PopUP
    $("#signIn").click(function(){
      $("#loginPopup").css({
        "transform":"translateY(0%)",
      });
    });

    $("#closeBtn").click(function(){
        $("#loginPopup").css({
            "transform":"translateY(-100%)",
          });
    });

    



  });