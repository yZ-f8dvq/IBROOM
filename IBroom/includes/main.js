var numOne = document.getElementById("num-one");
var numTwo = document.getElementById("num-two");
var addSum = document.getElementById("add-sum");

numOne.addEventListener("input", add);
numTwo.addEventListener("input", add);

function add() {
  var one = parseFloat(numOne.value) || 0;
  var two = parseFloat(numTwo.value) || 0;
  
  addSum.innerHTML = "Your sum is: " + (one+two);
}

var numThree = document.getElementById("num-three");
var numFour = document.getElementById("num-four");
var product = document.getElementById("product");

numThree.addEventListener("input", multiply);
numFour.addEventListener("input", multiply);

function multiply() {
  var three = parseFloat(numThree.value) || 0;
  var four = parseFloat(numFour.value) || 0;
  
  product.innerHTML = "Your product is: " + (three*four);
}