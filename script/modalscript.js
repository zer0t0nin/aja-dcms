// For book appointment
// Get the modal
const bookmodal = document.getElementById("bookapptmodal");

// Get the button that opens the modal
const ddbookappt = document.getElementById("bookappt");

// Get the <span> element that closes the modal
const span = document.getElementsByClassName("close");

// When the user clicks the button, open the modal 
ddbookappt.onclick = function() {
  bookmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  bookmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == bookmodal) {
    bookmodal.style.display = "none";
  }
}

// View button
// Get the modal
const viewapptmodal = document.getElementById("viewapptmodal");

// Get the button that opens the modal
const viewbtn = document.getElementById("viewmodalbtn");

  
// When the user clicks the button, open the modal 
viewbtn.onclick = function() {
  viewapptmodal.style.display = "block";
}

function viewModal()
{
  viewapptmodal.style.display = "block";
  
  // Get the <span> element that closes the modal
  const span2 = document.getElementsByClassName("close");
  
  // When the user clicks on <span> (x), close the modal
  span2.onclick = function() {
    viewapptmodal.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == viewapptmodal) {
      viewapptmodal.style.display = "none";
    }
  }
}