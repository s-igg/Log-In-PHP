idleTimer = null;
idleState = false;
idleWait = 300000;

  $(document).ready(function () {
      $('*').bind('mousemove keydown scroll', function () {
          clearTimeout(idleTimer);
          if (idleState == true) {
              // Reactivated event
              var element = document.getElementById("idle");
              element.classList.remove("away");
          }
          idleState = false;
          idleTimer = setTimeout(function () {
              // Idle Event
              var element = document.getElementById("idle");
              element.classList.add("away");
              idleState = true; }, idleWait);
      });
      $("body").trigger("mousemove");
  });
