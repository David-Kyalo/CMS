const left = document.querySelector(".left");
const right = document.querySelector(".right");
const container = document.querySelector(".container");

left.addEventListener("mouseenter", () => {
  container.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  container.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  container.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  container.classList.remove("hover-right");
});


const swiper = new Swiper('.slider-wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 30,
    
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
      
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
    breakpoints:{
      0:{
        slidesPerView:1,
      },
      768:{
        slidesPerView:2,
      },
      1024:{
        slidesPerView:3,
      }
    }
    });

    
    const indicator = document.querySelector(".nav-indicator");
const items = document.querySelectorAll(".nav-item");

function handleIndicator(el) {
  items.forEach((item) => {
    item.classList.remove("is-active");
    item.removeAttribute("style");
  });

  indicator.style.width = `${el.offsetWidth}px`;
  indicator.style.left = `${el.offsetLeft}px`;
  indicator.style.backgroundColor = el.getAttribute("active-color");

  el.classList.add("is-active");
  el.style.color = el.getAttribute("active-color");
}

items.forEach((item, index) => {
  item.addEventListener("click", (e) => {
    handleIndicator(e.target);
  });
  item.classList.contains("is-active") && handleIndicator(item);
});