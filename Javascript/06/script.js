const requestUrl = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';

function requestJSON(url) {
    let request = new XMLHttpRequest();
    request.open('GET', url);
    request.send();
    request.onload = function () {
        let response = request.response;
        processResponse(response);
    }
}

function sendRequest() {
    requestJSON(requestUrl);
}

function processResponse(response) {
    
    let data = JSON.parse(response);
    console.log(data);

    document.getElementById("squadName").innerHTML = data.squadName;
    document.getElementById("homeTown").innerHTML = data.homeTown; 
    document.getElementById("formed").innerHTML = data.formed;
    document.getElementById("secretBase").innerHTML = data.secretBase;
    document.getElementById("active").innerHTML = data.active;

    let table = document.getElementById("member-table");
  
    for (let i = 0; i < data.members.length; i++) {
        let row = table.insertRow(-1);
        let cell1 = row.insertCell(0);
        let cell2 = row.insertCell(1);
        let cell3 = row.insertCell(2);
        let cell4 = row.insertCell(3);
        cell1.innerHTML = data.members[i].name;
        cell2.innerHTML = data.members[i].age;
        cell3.innerHTML = data.members[i].secretIdentity;
        cell4.innerHTML = data.members[i].powers;
    }

}

sendRequest();