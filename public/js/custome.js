function sendData() {
    var name = document.getElementById("name").value;
    var roll = document.getElementById("roll").value;
    var myclass = document.getElementById("myclass").value;

    axios
        .post("/insert-data", {
            name: name,
            roll: roll,
            myclass: myclass,
        })
        .then(function (response) {
            alert(response.data);
        })
        .catch(function (error) {
            alert(error);
        });
}
function onDelete() {
    var id = document.getElementById("id").value;

    axios
        .post("/delete", {
            id: id,
        })
        .then(function (response) {
            alert(response.data);
        })
        .catch(function (error) {
            alert(error);
        });
}
