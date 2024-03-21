let container = document.querySelector(".container");
let images = document.querySelectorAll("img");

// console.log("hllo world");
images.forEach((e)=>{
    e.addEventListener('click',()=>{
        let src = e.src;
        container.style.background =`url(${src})`;
    });
})

let add = document.querySelector(".add");
let create = document.querySelector(".create");
let addP = document.querySelector(".add-p");
add.addEventListener('click',()=>{
    // console.log();
    create.style.top = "12rem";
    addP.style.display = "none";
})