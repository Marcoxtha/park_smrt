console.log('Hello Anil');
const bike = document.querySelectorAll('.bike');
console.log(bike);
bike.forEach(el => el.addEventListener('click', event => {
    alert("Bike");
    alert(event.target.getAttribute("id"));
    console.log(event.target.getAttribute("id"))
    var x = event.target.getAttribute("id");
    document.getElementById("lform").style.display = "block";
    document.getElementsByClassName('main-div')[0].style.display = 'none';
}));


const car = document.querySelectorAll('.car');

car.forEach(el => el.addEventListener('click', event => {
    alert("Car");
    alert(event.target.getAttribute("id"));
    console.log(event.target.getAttribute("id"));
}));

function closeForm() {
    document.getElementById("lform").style.display = "none";
    document.getElementsByClassName("main-div")[0].style.display = "block";
}