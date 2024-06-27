/* ******************************************************************************* */
/*                                                                                 */
/*                  Make navbar appear at start of section #one                    */
/*                                                                                 */
/* ******************************************************************************* */

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('nav');
    const sectionOne = document.getElementById('one');

    // Function to check scroll position
    function checkScroll() {
        // Get the distance from the top of the viewport to the top of the section
        const sectionTop = sectionOne.getBoundingClientRect().top;

        // If the section's top is at or above the top of the viewport, show the navbar
        if (sectionTop <= 0) {
            navbar.style.display = 'flex';
        } else {
            navbar.style.display = 'none';
        }
    }

    // Listen for scroll events
    window.addEventListener('scroll', checkScroll);

    // Initial check in case the user loads the page and is already scrolled past the top of the section
    checkScroll();
});





/* ******************************************************************************* */
/*                                                                                 */
/*                               Video big play button                             */
/*                                                                                 */
/* ******************************************************************************* */

  var video_2 = document.getElementById('myVideo_2');
  var playButton_2 = document.getElementById('playButton_calc_crowdf');
  
  playButton_2.addEventListener('click', function() {
      if (video_2.paused) {
          video_2.play();
          playButton_2.style.display = 'none';
      } else {
          video_2.pause();
          playButton_2.style.display = 'block';
      }
  });

  video_2.addEventListener('play', function() {
    playButton_2.style.display = 'none';
  });

  video_2.addEventListener('ended', function() {
      playButton_2.style.display = 'block';
  });



  var video = document.getElementById('myVideo');
  var playButton = document.getElementById('playButton_calc_promo');
  
  playButton.addEventListener('click', function() {
      if (video.paused) {
          video.play();
          playButton.style.display = 'none';
      } else {
          video.pause();
          playButton.style.display = 'block';
      }
  });

  video.addEventListener('play', function() {
    playButton.style.display = 'none';
  });

  video.addEventListener('ended', function() {
      playButton.style.display = 'block';
  });




/* ******************************************************************************* */
/*                                                                                 */
/*   Make the rules pop up close again when clicking the "x" or outside the box    */
/*                                                                                 */
/* ******************************************************************************* */


document.addEventListener("DOMContentLoaded", function() {
    const closeElements = document.querySelectorAll(".close_js");
  
    closeElements.forEach(function(element) {
      element.addEventListener("click", function() {
        document.getElementById("myModal_calc_rules").style.display = "none";
      });
    });
  
    window.addEventListener("click", function(event) {
      if (event.target == modal_calc_impressum) {
        document.getElementById("myModal_calc_rules").style.display = "none";
      }
    });
  });



/* ******************************************************************************* */
/*                                                                                 */
/*                Modal Pop up 'Impressum und Datenschutz' CalC                    */
/*                                          &                                      */
/*                                     'CalC rules'                                */
/*                                                                                 */
/* ******************************************************************************* */


  // Get the modal
  var modal_calc_impressum = document.getElementById("myModal_calc_impressum");
  var modal_calc_rules = document.getElementById("myModal_calc_rules");

  // Get the button that opens the modal
  var btn_calc_impressum = document.getElementById("myBtn_calc_impressum");
  var btn_calc_impressum_top = document.getElementById("myBtn_calc_impressum_top");
  var btn_calc_rules = document.getElementById("myBtn_calc_rules");
  
  // Get the <span> element that closes the modal
  var span_calc_impressum = document.getElementsByClassName("close_calc_impressum")[0];
  var span_calc_rules = document.getElementsByClassName("close_calc_rules")[0];
  
  // When the user clicks on the button, open the modal
  btn_calc_impressum.onclick = function() {
	modal_calc_impressum.style.display = "block";
  }
  
  btn_calc_impressum_top.onclick = function() {
	modal_calc_impressum.style.display = "block";
  }
  
  btn_calc_rules.onclick = function() {
	modal_calc_rules.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span_calc_impressum.onclick = function() {
	modal_calc_impressum.style.display = "none";
  }

  span_calc_rules.onclick = function() {
	modal_calc_rules.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
	if (event.target == modal_calc_impressum) {
	  modal_calc_impressum.style.display = "none";
	}
  }

  window.onclick = function(event) {
	if (event.target == modal_calc_rules) {
	  modal_calc_rules.style.display = "none";
	}
  }




  /********************************************************************************* */
  /*                                                                                 */
  /*                             Modal Popup moving images                           */
  /*                                                                                 */
  /********************************************************************************* */


  window.onload = function() {
    var images = document.querySelectorAll('.moving_images_calc_single img');
    var modal = document.getElementById('myModal_calc_moving_images');
    var modalImage_calc_moving = document.getElementById('modalImage_calc_moving');
    var closeBtn = document.querySelector('.close_calc_moving_images');
  
    for (var i = 0; i < images.length; i++) {
      images[i].addEventListener('click', function() {
        modal.style.display = 'block';
        modalImage_calc_moving.src = this.src;
      });
    }
  
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
    });
  
    window.addEventListener('click', function(event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    });
  };
  