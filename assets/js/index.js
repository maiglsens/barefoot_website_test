/********************************************************************************* */
/*                                                                                 */
/*                   Make navbar appear at start of section #one                   */
/*                                                                                 */
/********************************************************************************* */


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




/********************************************************************************* */
/*                                                                                 */
/*                     Modal Pop up 'Impressum und Datenschutz'                    */
/*                                                                                 */
/********************************************************************************* */ 


  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn_impressum_top = document.getElementById("impressum_top");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btn_impressum_top.onclick = function() {
	modal.style.display = "block";
  }

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


/********************************************************************************* */
/*                                                                                 */
/*                                 Mail formular                                   */
/*                                                                                 */
/********************************************************************************* */


window.onload = success;

function success() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if(name !== "" && email !== "" && message !== "") {
        document.getElementById('email_send_button').disabled = false;
    } else {
        document.getElementById('email_send_button').disabled = true;
    }
}



/********************************************************************************* */
/*                                                                                 */
/*                             Mail modal pop up                                   */
/*                                                                                 */
/********************************************************************************* */

document.getElementById('email_send_button').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the form from submitting normally
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  if(name !== "" && email !== "" && message !== "") {
      // Create a FormData object
      var formData = new FormData();
      formData.append('name', name);
      formData.append('email', email);
      formData.append('message', message);

      // Create an AJAX request
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'index.php', true);

      // When the request is loaded
      xhr.onload = function () {
          if (xhr.status === 200) {
            // Log the response text
             console.log(xhr.responseText);
              // If the mail was sent successfully, show the modal
              // if(xhr.responseText.trim() === "success") {
                  var modal_email = document.getElementById('myModal_email');
                  modal_email.style.display = "block";

                  // Get the <span> element that closes the modal
                  var span_email = document.getElementsByClassName("close_email")[0];

                  // When the user clicks on <span> (x), close the modal
                  span_email.onclick = function() {
                      modal_email.style.display = "none";
                  }

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal_email) {
                          modal_email.style.display = "none";
                      }
                  }
              // }
          }
      };

      // Send the AJAX request
      xhr.send(formData);
  }
});



/********************************************************************************* */
/*                                                                                 */
/*                 Disable mail submit button if email is empty                    */
/*                                                                                 */
/********************************************************************************* */

// function success() {
//   if(document.getElementById("email").value==="") { 
//          document.getElementById('submit_button').disabled = true; 
//      } else { 
//          document.getElementById('submit_button').disabled = false;
//      }
//  }






