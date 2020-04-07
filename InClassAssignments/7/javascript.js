// Problem 1
function fib(){
  var n = document.getElementById("1").value;
  var a = [];

  num1 = 0;
  num2 = 1;
  for (var i = 0; i < n; i++) {
    a[i] = num1;
    temp = num1 + num2;
    num1 = num2;
    num2 = temp;
  }
  var result = a.toString();
  window.alert(result);
  document.getElementById("1answer").innerHTML = result;
}
// Problem 2
function aster() {
  var line = "";
  for (var i = 1; i <= 10; i++) {
    for (var j = 1; j <= i; j++) {
      line += " *";
    }
    line += "\n";
  }
  window.alert(line);
}
// Problem 3
function sorter(){
  array1 = [3,8,7,6,5,-4,3,2,1];
  var r = array1.toString();
  document.getElementById("3a").innerHTML = r;
  var r2 = array1.sort().toString();
  window.alert("Unsorted: "+r);
  window.alert("Sorted: "+r2);
  document.getElementById("3b").innerHTML = r2;
}

// Problem 4
function counter(){
  arrOrig = [];
  arrUniq = [];
  // fill original array
  arrOrig[0] = document.getElementById("41").value;
  arrOrig[1] = document.getElementById("42").value;
  arrOrig[2] = document.getElementById("43").value;
  arrOrig[3] = document.getElementById("44").value;
  arrOrig[4] = document.getElementById("45").value;
  arrOrig[5] = document.getElementById("46").value;
  arrOrig[6] = document.getElementById("47").value;
  arrOrig[7] = document.getElementById("48").value;
  arrOrig[8] = document.getElementById("49").value;
  arrOrig[9] = document.getElementById("410").value;
  var most = "";
  var finalCount = 0;
  var j = 0;
  // fill arrUniq with unique values
  for (var i = 0; i < arrOrig.length; i++) {
    if(arrUniq.includes(arrOrig[i]) == false){
      arrUniq[j] = arrOrig[i];
      j +=2;
    }
  }
  // count and store how many times each element is repeated

  for (var i = 0; i < arrUniq.length; i+=2) {
  var count = 0;
    for (var k = 0; k < arrOrig.length; k++) {
      if(arrUniq[i] == arrOrig[k]){
        count++;
      }
    }
    arrUniq[i+1] = count;
  }
  for (var i = 1; i < arrUniq.length; i+=2) {
    if(arrUniq[i] > finalCount){
      finalCount = arrUniq[i];
      most = arrUniq[i-1];
    }
  }
  window.alert("Results: \"" + most + "\" occurs the most at " + finalCount + " times.");
  document.getElementById("4out").innerHTML = "Results: \"" + most + "\" occurs the most at " + finalCount + " times.";
}
// Problem 5
  function shuff(){
    var arr = [];

    // fill original array
    arr[0] = document.getElementById("51").value;
    arr[1] = document.getElementById("52").value;
    arr[2] = document.getElementById("53").value;
    arr[3] = document.getElementById("54").value;
    arr[4] = document.getElementById("55").value;
    arr[5] = document.getElementById("56").value;
    arr[6] = document.getElementById("57").value;
    arr[7] = document.getElementById("58").value;
    arr[8] = document.getElementById("59").value;
    arr[9] = document.getElementById("510").value;

    var z, x, y;
    for (y = arr.length - 1; y > 0; y--) {
      z = Math.floor(Math.random() * (y + 1));
      x = arr[y];
      arr[y] = arr[z];
      arr[z] = x;
    }
    var result = arr.toString();
    window.alert(result);
    document.getElementById("5out").innerHTML = "Result: "+result;
}
// Problem 6
function checkForm(){
  var id = document.getElementById("6id").value;
  var fname = document.getElementById("6fname").value;
  var lname = document.getElementById("6lname").value;
  var missingFields = "";
  var numMissingFields = 0;

  if(id == ""){
    missingFields = missingFields+"\n      ID";
    numMissingFields++;
    document.getElementById("6idError").innerHTML = "Please enter an ID"
  }
  if(fname == ""){
    missingFields = missingFields+"\n      First Name";
    numMissingFields++;
    document.getElementById("6fnameError").innerHTML = "Please enter a First Name"
  }
  if(lname == ""){
    missingFields = missingFields+"\n      Last Name";
    numMissingFields++;
    document.getElementById("6lnameError").innerHTML = "Please enter a Last Name"
  }

  if(numMissingFields == 0){
    window.alert("All Fields were Added");
  }
  else {
    window.alert("You forgot to fill in the following field\(s\): "+missingFields);
  }
}
