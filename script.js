const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

const fondo = document.querySelector(".fondo");
const loginlink = document.querySelector(".login-link");
const registrarlink = document.querySelector(".registrar-link");


registrarlink.addEventListener("click", () => {
    fondo.classList.add('active');
});

loginlink.addEventListener("click", () => {
    fondo.classList.remove('active');
});