import './bootstrap';
import 'bootstrap';

var myIndex = 0;
var dotsContainer = document.querySelector(".dots");

function generateDots(numDots) {
  for (var i = 0; i < numDots; i++) {
    var dot = document.createElement("span");
    dot.classList.add("dot");
    dotsContainer.appendChild(dot);
  }
}

function carousel() {
  var x = document.getElementsByClassName("card-customer");
  var currentIndex = myIndex % x.length;

  for (var i = 0; i < x.length; i++) {
    x[i].classList.remove("active", "out");
    var dot = dotsContainer.children[i];
    dot.classList.remove("active");
  }

  x[currentIndex].classList.add("active");
  var currentDot = dotsContainer.children[currentIndex];
  currentDot.classList.add("active");

  setTimeout(function() {
    x[currentIndex].classList.add("out");
    setTimeout(function() {
      x[currentIndex].classList.remove("out");
      myIndex++;
      carousel();
    }, 500);
  }, 4000);
}

generateDots(document.getElementsByClassName("card-customer").length);
carousel();


const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
  document.body.classList.toggle("dark")
})