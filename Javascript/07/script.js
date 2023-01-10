speler();

function speler() {
    document.getElementById("speler").innerText = "Speler 1: Maak jou keuze!";
    document.getElementById("steen").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("papier").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("schaar").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
}

function save() {
    var speler1 = document.getElementById("speler1").value;
    var speler2 = document.getElementById("speler2").value;
    localStorage.setItem("speler1", speler1);
    localStorage.setItem("speler2", speler2);
}

function setRock() {
    document.getElementById("speler").innerText = "Speler 1: Maak jou keuze!";
    document.getElementById("steen").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("papier").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("schaar").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
}

function setPaper() {
    document.getElementById("speler").innerText = "Speler 1: Maak jou keuze!";
    document.getElementById("steen").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("papier").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("schaar").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
}

function setScissors() {
    document.getElementById("speler").innerText = "Speler 1: Maak jou keuze!";
    document.getElementById("steen").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("papier").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
    document.getElementById("schaar").onclick = function () {
        document.getElementById("speler").innerText = "Speler 2: Maak jou keuze!";
    };
}

function winner() {
    var speler1 = localStorage.getItem("speler1");
    var speler2 = localStorage.getItem("speler2");
    if (speler1 == "steen" && speler2 == "papier") {
        document.getElementById("winner").innerText = "Speler 2 heeft gewonnen!";
    } else if (speler1 == "steen" && speler2 == "schaar") {
        document.getElementById("winner").innerText = "Speler 1 heeft gewonnen!";
    } else if (speler1 == "papier" && speler2 == "steen") {
        document.getElementById("winner").innerText = "Speler 1 heeft gewonnen!";
    } else if (speler1 == "papier" && speler2 == "schaar") {
        document.getElementById("winner").innerText = "Speler 2 heeft gewonnen!";
    } else if (speler1 == "schaar" && speler2 == "steen") {
        document.getElementById("winner").innerText = "Speler 2 heeft gewonnen!";
    } else if (speler1 == "schaar" && speler2 == "papier") {
        document.getElementById("winner").innerText = "Speler 1 heeft gewonnen!";
    } else {
        document.getElementById("winner").innerText = "Gelijkspel!";
    }
}
