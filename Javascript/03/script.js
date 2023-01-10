const berekenBtn = document.getElementById("berekenbtn");
const pi = Math.PI;
const omtrek = document.getElementById("resultaat1");

berekenBtn.addEventListener("click", berekenomtrek);

function berekenomtrek() {
    let dia = document.getElementById("diameter").value;
    document.getElementById("resultaat1").innerHTML = (Number(dia) * pi).toFixed(
        2,
    );
}

const oppervlakte = document.getElementById("resultaat2");

berekenBtn.addEventListener("click", berekenoppervlakte);

function berekenoppervlakte() {
    let dia = document.getElementById("diameter").value;
    document.getElementById("resultaat2").innerHTML = (
        Number(dia) *
     Number(dia) *
     pi *
     0.25
    ).toFixed(2);
}



const time = document.getElementById("tijd");
time.innerHTML = new Date().toLocaleTimeString();
setInterval(() => {
    time.innerHTML = new Date().toLocaleTimeString();
}, 1000);



