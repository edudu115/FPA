const bar = document.querySelector(".bar");
const nav = document.querySelector(".nav");

console.log("exito")

bar.addEventListener("click", () =>{
    bar.classlist.toggle('active');
    nav.classlist.toggle('active');
})