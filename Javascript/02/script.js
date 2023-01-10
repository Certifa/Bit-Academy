function changeColor() {
    let color = document.getElementById("colorInputColor").value;
    document.body.style.backgroundColor = color;
    document.getElementById("colorInputColor").value = color;
}

function changeColorH1() {
    let color = document.getElementById("colorInputColor").value;
    document.getElementById("colorInputColor").value = color;
    document.getElementById("h1").style.color = color;
}

function changeColorBoth() {
    let color = document.getElementById("colorInputColor").value;
    document.getElementById("colorInputColor").value = color;
    document.body.style.backgroundColor = color;
    document.getElementById("h1").style.color = color;
}
