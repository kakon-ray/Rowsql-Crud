function sendData() {
    var name = document.getElementById("name").value;
    var roll = document.getElementById("roll").value;
    var myclass = document.getElementById("myclass").value;

    axios
        .post("/insert", {
            name: name,
            roll: roll,
            myclass: myclass,
        })
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
}