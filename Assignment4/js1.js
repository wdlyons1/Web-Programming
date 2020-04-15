


//Question 1
var emp = 1;
window.onload = load;
var times = new Array();
var hours = 0;
var index = 0;


function load() {
	document.getElementById("employee").innerHTML = emp;


}

function add() {
	hours = parseInt(document.getElementById("hours").value);
	if (isNaN(hours) || hours < -1) {
		document.getElementById("error").style.color = "red";
		document.getElementById("error").innerHTML = "Error: Please Enter a valid number";
		return;
	}
	else {

		if (hours == -1) {

			printHours(times);
		}
		else {
			times[index] = emp;
			times[index + 1] = hours;
			times[index + 2] = calculateWages(hours);
			emp++;
			index += 3;
			document.getElementById("hours").value = "";
			document.getElementById("employee").innerHTML = emp;
			document.getElementById("error").style.color = "black";
			document.getElementById("error").innerHTML = "Success";
			document.getElementById("hours").focus();
		}
	}
}
function printHours(array) {
	document.getElementById('myDiv').style.display = "none";
	document.getElementById('report').style.display = "block";
	var input = "<tr><th>Employee</th><th>Hours</th><th>Pay</th></tr>";
	for (var i = 0; i < array.length; i += 3) {
		input = input + "<tr><td>" + times[i] + "</td><td>" + times[i + 1] + "</td><td>$" + times[i + 2] + "</td></tr>";
	}
	document.getElementById("reportTable").innerHTML = input;

}

function myFunction() {
	document.getElementById('myDiv').style.display = "block";

}

function calculateWages(hours) {
	var total = 0;
	if (hours <= 40) {
		total = total + (hours * 15);

	}
	else {
		var extraHours = total + (hours - 40);
		var total = (15 * 40) + (extraHours * (15 * 1.5));
	}

	return total;
}

function restart() {
	window.open("part1.html", "_self");
}

// Question 2
var mNumber = -1;
var numGuesses = 15;
var instructions = "Enter an integer to begin";
var start = 0;
var score = 0;
var time;
var a;
var guessNumber;
var timeSince;
var m;
var s;
var wrongGuess = new Audio("wrong.m4a");
var gameOverNoise = new Audio("lose.m4a");
var winNoise = new Audio("correct.m4a");

function guess() {
	if (mNumber == -1) {
		mNumber = Math.floor(Math.random() * 100) + 1;
	}

	if (start == 0) {
		time = new Date(Date.now());
		startTime();
		start = 1;

	}

	guessNumber = document.getElementById("guessNum").value;
	guessNumber = parseInt(guessNumber);


	if (numGuesses == 0) {
		gameOver();

	}
	else {

		if (guessNumber == mNumber) {
			win();
		}

		if (guessNumber > mNumber) {
			instructions = "Your guess was too high";
			wrongGuess.play();
		}

		if (guessNumber < mNumber) {
			instructions = "Your guess was too low";
			wrongGuess.play();
		}

		document.getElementById("answer").innerHTML = mNumber;
		document.getElementById("lastGuess").innerHTML = guessNumber;
		document.getElementById("numGuesses").innerHTML = numGuesses;
		document.getElementById("instructions").innerHTML = instructions;
	}
	numGuesses--;
}

function win() {
	winNoise.play();
	score = (10 * numGuesses);
	alert("You got it!\n\nYour Score:" + score);
	document.getElementById("mystery").innerHTML = mNumber;
	instructions = "Score: " + score + "\nRefresh page to play again";
	document.getElementById("time").innerHTML = m.toString() + ":" + s.toString();
}
function gameOver() {
	if (numGuesses == 0) {
		gameOverNoise.play();
		alert("You Lose\n\nNumber of Guesses Exhausted");
		instructions = "Score: " + score + "<br>Refresh page to play again";
		document.getElementById("instructions").innerHTML = instructions;
		document.getElementById("mystery").innerHTML = mNumber;
		document.getElementById("time").innerHTML = m.toString() + ":" + s.toString();

	}
	if (m == 01) {
		gameOverNoise.play();
		alert("You Ran Out of Time!")
		instructions = "Score: " + score + "\nRefresh page to play again"
		document.getElementById("instructions").innerHTML = instructions;
		document.getElementById("mystery").innerHTML = mNumber;
		document.getElementById("time").innerHTML = "05:00";

	}
}

function startTime() {

	var now = new Date();
	timeSince = new Date(now - time);

	m = addZero(timeSince.getMinutes());
	s = addZero(timeSince.getSeconds());

	if (m == 01) {
		gameOver();
		return;
	}
	if (guessNumber == mNumber || numGuesses == 0) {
		return;
	}

	document.getElementById("time").innerHTML = m + ":" + s;


	t = setTimeout(function () {
		startTime()
	}, 500);
}

function addZero(i) {

	if (i < 10) {
		i = "0" + i;
	}
	return i;
}

//Question 3

var time3;
var numPics;
var difficulty;
var pics;
var guessM = 0;
var guessOne = new Array();
var guessTwo = new Array();
var wrongTry = 0;
var wguesses = 3;

function choose() {
	time = new Date(Date.now());
	startTime2();
	document.getElementById("wguesses").innerHTML = wguesses;
	var radios1 = document.getElementsByName('pics');
	for (var i = 0, length = radios1.length; i < length; i++) {
		if (radios1[i].checked) {
			numPics = radios1[i].value;
			break;
		}
	}
	var radios2 = document.getElementsByName('difficulty');
	for (var i = 0, length = radios2.length; i < length; i++) {
		if (radios2[i].checked) {
			difficulty = radios2[i].value;
			break;
		}
	}

	if (numPics == "8pics") {
		pics = new Array("resources/images/dog.jpeg", "resources/images/puppy.jpeg", "resources/images/cat.jpeg", "resources/images/kitten.jpeg", "resources/images/dog.jpeg", "resources/images/puppy.jpeg", "resources/images/cat.jpeg", "resources/images/kitten.jpeg");
		shuffle(pics);

		document.getElementById("table1").innerHTML = '<tr><td><img src="" id="0"><button onclick="compare(0);">Click to Match</button></td><td><img id="1"><button onclick="compare(1);">Click to Match</button></td><td><img id="2"><button onclick="compare(2);">Click to Match</button></td></tr><tr><td><img id="3"><button onclick="compare(3);">Click to Match</button></td><td><img id="4"><button onclick="compare(4);">Click to Match</button></td><td><img id="5"><button onclick="compare(5);">Click to Match</button></td></tr><tr><td><img id="6"><button onclick="compare(6);">Click to Match</button></td><td><img id="7"><button onclick="compare(7);">Click to Match</button></td></tr>';
		for (var i = 0; i < 8; i++) {
			document.getElementById(i).src = pics[i];
		}
	}
	if (numPics == "10pics") {
		pics = new Array("resources/images/dog.jpeg", "resources/images/puppy.jpeg", "resources/images/cat.jpeg", "resources/images/kitten.jpeg", "resources/images/dog.jpeg", "resources/images/puppy.jpeg", "resources/images/cat.jpeg", "resources/images/kitten.jpeg", "resources/images/fish.jpeg", "resources/images/fish.jpeg");
		shuffle(pics);

		document.getElementById("table1").innerHTML = '<tr><td><img src="" id="0"><button onclick="compare(0);">Click to Match</button></td><td><img id="1"><button onclick="compare(1);">Click to Match</button></td><td><img id="2"><button onclick="compare(2);">Click to Match</button></td></tr><tr><td><img id="3"><button onclick="compare(3);">Click to Match</button></td><td><img id="4"><button onclick="compare(4);">Click to Match</button></td><td><img id="5"><button onclick="compare(5);">Click to Match</button></td></tr><tr><td><img id="6"><button onclick="compare(6);">Click to Match</button></td><td><img id="7"><button onclick="compare(7);">Click to Match</button></td><td><img id="8"><button onclick="compare(8);">Click to Match</button></td></tr><tr><td><img id="9"><button onclick="compare(9);">Click to Match</button></td></tr>';
		for (var i = 0; i < 10; i++) {
			document.getElementById(i).src = pics[i];
		}

	}
	if (numPics == "12pics") {
		pics = new Array("resources/images/dog.jpeg", "resources/images/puppy.jpeg", "resources/images/cat.jpeg", "resources/images/kitten.jpeg", "resources/images/dog.jpeg", "resources/images/puppy.jpeg", "resources/images/cat.jpeg", "resources/images/kitten.jpeg", "resources/images/frog.jpeg", "resources/images/frog.jpeg", "resources/images/fish.jpeg", "resources/images/fish.jpeg");
		shuffle(pics);

		document.getElementById("table1").innerHTML = '<tr><td><img src="" id="0"><button onclick="compare(0);">Click to Match</button></td><td><img id="1"><button onclick="compare(1);">Click to Match</button></td><td><img id="2"><button onclick="compare(2);">Click to Match</button></td></tr><tr><td><img id="3"><button onclick="compare(3);">Click to Match</button></td><td><img id="4"><button onclick="compare(4);">Click to Match</button></td><td><img id="5"><button onclick="compare(5);">Click to Match</button></td></tr><tr><td><img id="6"><button onclick="compare(6);">Click to Match</button></td><td><img id="7"><button onclick="compare(7);">Click to Match</button></td><td><img id="8"><button onclick="compare(8);">Click to Match</button></td></tr><tr><td><img id="9"><button onclick="compare(9);">Click to Match</button></td><td><img id="10"><button onclick="compare(10);">Click to Match</button></td><td><img id="11"><button onclick="compare(11);">Click to Match</button></td></tr>';
		for (var i = 0; i < 12; i++) {
			document.getElementById(i).src = pics[i];
		}
	}

	if (difficulty == "hard") {
		setTimeout(function () { clearImages(); }, 3000);
	}
	if (difficulty == "medium") {
		setTimeout(function () { clearImages(); }, 5000);
	}
	if (difficulty == "easy") {
		setTimeout(function () { clearImages(); }, 8000);
	}
}

function shuffle(array) {
	array.sort(() => Math.random() - 0.5);
}

function clearImages() {

	var z = "resources/images/blank.png";

	if (numPics == "8pics") {
		for (var i = 0; i < 8; i++) {
			document.getElementById(i).src = z;
		}
	}
	if (numPics == "10pics") {
		for (var i = 0; i < 10; i++) {
			document.getElementById(i).src = z;
		}
	}
	if (numPics == "12pics") {
		for (var i = 0; i < 12; i++) {
			document.getElementById(i).src = z;
		}
	}
}

function compare(i) {
	if (guessM == 0) {
		guessOne[0] = i;
		guessOne[1] = pics[i];
		guessM = 1;
	}
	else {
		guessTwo[0] = i;
		guessTwo[1] = pics[i];
		guessM = 0;
		compareGuesses();
	}
}

var numRightGuesses = 0;
function compareGuesses() {
	if (guessOne[1] == guessTwo[1]) {
		document.getElementById(guessOne[0]).src = pics[guessOne[0]];
		document.getElementById(guessTwo[0]).src = pics[guessTwo[0]];
		numRightGuesses++;
		checkWin();
	}
	else {
		wguesses--;
		wrongGuess.play();
		document.getElementById("wguesses").innerHTML = wguesses;
		checkGuesses();
	}
}

function checkWin() {
	if (numPics == "8pics" && numRightGuesses == 4) {
		alert("You Win!");
	}
	if (numPics == "10pics" && numRightGuesses == 5) {
		alert("You Win!");
	}
	if (numPics == "12pics" && numRightGuesses == 6) {
		alert("You Win!");
	}
}

function checkGuesses() {
	if (wguesses == 0) {
		gameIsOver();
	}
}

function gameIsOver() {
	gameOverNoise.play();
	alert("Game Over\n\nNumber of Tries Exceded");

}

function startTime2() {

	var now = new Date();
	timeSince = new Date(now - time);

	m = addZero(timeSince.getMinutes());
	s = addZero(timeSince.getSeconds());

	if (m == 02 && numPics == "8pics") {
		gameIsOver();
		return;
	}
	if (m == 02 && numPics == "10pics" && s == 30) {
		gameIsOver();
		return;
	}

	if (m == 03 && numPics == "12pics") {
		gameIsOver();
		return;
	}



	document.getElementById("time").innerHTML = m + ":" + s;


	t = setTimeout(function () {
		startTime()
	}, 500);
}

function addZero(i) {

	if (i < 10) {
		i = "0" + i;
	}
	return i;
}




























