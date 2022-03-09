var page;
var print;
var bgcolor;

document.addEventListener("DOMContentLoaded", function () {
    
    // Set Age
    var age_dt = new Date(Date.now() - new Date("03/12/2000").getTime());
    var year = age_dt.getUTCFullYear(); 
    document.getElementById('age').innerHTML = Math.abs(year - 1970);
});

window.addEventListener("beforeprint", event => {
    bgcolor = document.body.style.backgroundColor;
    print = document.getElementById("cv").innerHTML;
    page = document.body.innerHTML;
    document.body.innerHTML = print;
    document.body.style.backgroundColor = "white";
});

window.addEventListener("afterprint", event => {
    document.body.innerHTML = page;
    document.body.style.backgroundColor = bgcolor;
});