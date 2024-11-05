/* navbar */
/* navbar */
/* navbar */
var lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function () {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    navbar.style.top = "-100px";
  } else {
    navbar.style.top = "0";
  }
  lastScrollTop = scrollTop;
});

/* scroll bar */
/* scroll bar */
/* scroll bar */

var progress = document.getElementById("progressbar");
var totalHeight = (document.body.scrollHeight = window.innerHeight);
window.onscroll = function () {
  var progressHeight = (window.pageYOffset / totalHeight) * 7.81;
  progress.style.height = progressHeight + "%";
};

/* hover image in slider */
/* hover image in slider */
/* hover image in slider */

function changeImage(x, image) {
  if (x == 1) {
    image.src = "/images/pic1.jpg";
  }
  if (x == 2) {
    image.src = "/images/reyna.jpg";
  }
}

/* timeline */
/* timeline */
/* timeline */

("use strict");

function qs(selector, all = false) {
  return all
    ? document.querySelectorAll(selector)
    : document.querySelector(selector);
}

const sections = qs(".section", true);
const timeline = qs(".timeline");
const line = qs(".line");
line.style.bottom = `calc(100% - 20px)`;
let prevScrollY = window.scrollY;
let up, down;
let full = false;
let set = 0;
const targetY = window.innerHeight * 0.8;

function scrollHandler(e) {
  const { scrollY } = window;
  up = scrollY < prevScrollY;
  down = !up;
  const timelineRect = timeline.getBoundingClientRect();
  const lineRect = line.getBoundingClientRect();

  const dist = targetY - timelineRect.top;
  console.log(dist);

  if (down && !full) {
    set = Math.max(set, dist);
    line.style.bottom = `calc(100% - ${set}px)`;
  }

  if (dist > timeline.offsetHeight + 50 && !full) {
    full = true;
    line.style.bottom = `-50px`;
  }

  sections.forEach((item) => {
    const rect = item.getBoundingClientRect();

    if (rect.top + item.offsetHeight / 5 < targetY) {
      item.classList.add("show-me");
    }
  });

  prevScrollY = window.scrollY;
}

scrollHandler();
line.style.display = "block";
window.addEventListener("scroll", scrollHandler);

/* featured swiper */
/* featured swiper */
/* featured swiper */

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  clickable: true,
  centeredSlides: true,
  spaceBetween: 10,
  slidesPerView: "3",
  coverflowEffect: {
    rotate: 40,
    stretch: 0,
    depth: 30,
    modifier: 1,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: false,
    dynamicBullets: true,
  },

  loop: true,
  autoplay: {
    delay: 3500,
    disableOnInteraction: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

/* ANIMATED LETTER */
/* ANIMATED LETTER */
/* ANIMATED LETTER */

$(document).scroll(function () {
  var scroll = $(window).scrollTop();
  var amount = -160 + scroll * 1;
  if (amount < 10) {
    $(".letter").css({ left: amount + "px" });
  }
});

/* GAME TEAM SLIDER */
/* GAME TEAM SLIDER */
/* GAME TEAM SLIDER */

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".image-slide");
const contents = document.querySelectorAll(".content");

var sliderNav = function (manual) {
  btns.forEach((btn) => {
    btn.classList.remove("active");
  });

  slides.forEach((slide) => {
    slide.classList.remove("active");
  });

  contents.forEach((content) => {
    content.classList.remove("active");
  });

  btns[manual].classList.add("active");
  slides[manual].classList.add("active");
  contents[manual].classList.add("active");
};

btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    sliderNav(i);
  });
});

btns.forEach((btn, i) => {
  btn.addEventListener("mouseover", () => {
    sliderNav(i);
  });
});

/* CONTACT FORM */
/* CONTACT FORM */
/* CONTACT FORM */

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
