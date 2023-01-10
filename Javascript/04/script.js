const testQuestions = [
    "Wat is de hoofdstad van Frankrijk?",
    "Hoeveeel poten heeft een spin?",
    "Wat is het grootste meer van Nederland?",
    "Wat is een Duits automerk?",
    "Noem een waddeneiland",
];

const correctAnswers = [
    "Parijs", "8", "IJsselmeer", ["Volkswagen", "Audi", "Opel", "Porsche", "BMW", "Mercedes"],
    ["Texel", "Vlieland", "Terschelling", "Ameland", "Schiermonnikoog"],
];

document.getElementById("submit").addEventListener("click", checkAnswer1);
document.getElementById("submit").addEventListener("click", checkAnswer2);
document.getElementById("submit").addEventListener("click", checkAnswer3);
document.getElementById("submit").addEventListener("click", checkAnswer4);
document.getElementById("submit").addEventListener("click", checkAnswer5);






function checkAnswer1() {
    let answer1 = document.getElementById("answer1").value;
    if (answer1 == correctAnswers[0]) {
        document.getElementById("answer1").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("answer1").style.backgroundColor = "red";
    }
}

function checkAnswer2() {
    let answer2 = document.getElementById("answer2").value;
    if (answer2 == correctAnswers[1]) {
        document.getElementById("answer2").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("answer2").style.backgroundColor = "red";
    }
}

function checkAnswer3() {
    let answer3 = document.getElementById("answer3").value;
    if (answer3 == correctAnswers[2]) {
        document.getElementById("answer3").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("answer3").style.backgroundColor = "red";
    }
}

function checkAnswer4() {
    let answer4 = document.getElementById("answer4").value;
    if (correctAnswers[3].includes(answer4)) {
        document.getElementById("answer4").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("answer4").style.backgroundColor = "red";
    }
}

function checkAnswer5() {
    let answer5 = document.getElementById("answer5").value;
    if (correctAnswers[4].includes(answer5)) {
        document.getElementById("answer5").style.backgroundColor = "lightgreen";
    } else {
        document.getElementById("answer5").style.backgroundColor = "red";
    }
}
