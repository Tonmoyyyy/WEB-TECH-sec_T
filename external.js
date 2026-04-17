document.getElementById("username").addEventListener("input", function() {

    let name = document.getElementById("username").value;

    let capital = name.toUpperCase();

    document.getElementById("output").innerHTML = capital;
});