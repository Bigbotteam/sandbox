// shorthanded selectors
const $ = (el) => document.querySelector(el);
const $$ = (el) => document.querySelectorAll(el);
const BASE_URL =
  "https://vested.ng/new/wp-content/themes/vested/assets/images/";
const BASE_URL_DEV = "../assets/images/";

// key features slider section
let featureImg = $("#feature-img");
let imagesArr = [
  "keyfeatures-1.png",
  "keyfeatures-2.png",
  "keyfeatures-3.png",
  "keyfeatures-0.png",
];
let index = 0;
let duration = 5000;
const changeSlide = (i) => {
  featureImg.src = `${BASE_URL}${imagesArr[i]}`;
  featureImg.classList.add("reappear");

  setTimeout(() => {
    featureImg.classList.remove("reappear");
  }, 600);
};

setInterval(() => {
  if (index >= imagesArr.length) {
    index = 0;
    changeSlide(index++);
  } else {
    changeSlide(index++);
  }
}, duration);
