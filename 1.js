let container = document.querySelector(".container");
let images = document.querySelectorAll("img");


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
        window.location.href = "group.php";
    })
