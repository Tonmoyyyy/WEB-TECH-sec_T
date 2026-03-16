// Simple live uppercase display
document.getElementById("username").addEventListener("input", function() {
    // get value from input
    let name = document.getElementById("username").value;

    // convert to uppercase using built-in function (simplest way)
    let capital = name.toUpperCase();

    // show under submit button
    document.getElementById("output").innerHTML = capital;
});