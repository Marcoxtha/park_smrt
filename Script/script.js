const bike = document.querySelectorAll('.bike');

var x = "";

bike.forEach(el => el.addEventListener('click', event => {
    alert("Bike");
    alert(event.target.getAttribute("id"));
    console.log(event.target.getAttribute("id"))
    var x = event.target.getAttribute("id");
    document.getElementById("form").style.display = "block";
    document.getElementsByClassName('main-div')[0].style.display = 'none';


}));


const car = document.querySelectorAll('.car');

car.forEach(el => el.addEventListener('click', event => {
    alert("Car");
    alert(event.target.getAttribute("id"));
    console.log(event.target.getAttribute("id"));
    document.getElementById("form").style.display = "block";
    document.getElementsByClassName('main-div')[0].style.display = 'none';
}));

function closeForm() {
    document.getElementById("form").style.display = "none";
    document.getElementsByClassName("main-div")[0].style.display = "block";
}