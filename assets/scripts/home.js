// shorthanded selectors
const $ = (el) => document.querySelector(el);
const $$ = (el) => document.querySelectorAll(el);
const BASE_URL =
  "https://vested.ng/wp-content/themes/vested/assets/images/";
const BASE_URL_DEV = "../assets/images/";

// key features slider section
let indicators = Array.from($$(".pd-home .indicator"));
let featureImg = $("#feature-img");
let imagesArr = [
  "keyfeatures-0.png",
  "keyfeatures-1.png",
  "keyfeatures-2.png",
  "keyfeatures-3.png",
];
let index = 0;
let intervalId;

const changeSlide = (i) => {
  duration = 5000;
  let curr = indicators[i];
  indicators.forEach((el) => {
    el.style.pointerEvents = "none";
    el.classList.remove("active");
  });

  curr.classList.add("active");

  featureImg.src = `${BASE_URL}${imagesArr[i]}`;
  featureImg.classList.add("reappear");

  setTimeout(() => {
    featureImg.classList.remove("reappear");
    indicators.forEach((el) => (el.style.pointerEvents = "all"));
  }, 600);
};

const startInterval = (start) => {
  index = start || 0;
  intervalId = setInterval(() => {
    if (index >= indicators.length) {
      index = 0;
      changeSlide(index++);
    } else {
      changeSlide(index++);
    }
  }, 5000);
};

indicators.forEach((indicator, i) => {
  indicator.addEventListener("click", () => {
    clearInterval(intervalId);
    indicators.forEach((indicator) => {
      indicator.style.pointerEvents = "none";
      indicator.classList.remove("active");
    });
    indicator.classList.add("active");
    featureImg.classList.add("reappear");
    featureImg.src = `${BASE_URL}${imagesArr[i]}`;
    setTimeout(() => {
      featureImg.classList.remove("reappear");
      indicators.forEach(
        (indicator) => (indicator.style.pointerEvents = "all")
      );
      startInterval(i + 1);
    }, 1000);
  });
});

// desktop indicator changer
changeSlide(0);
startInterval(1);
// initiate slider

/*************************************************************************/
// TESTIMONIALS FUNCTION

let testimonialIndicators = Array.from($$(".t-indicator"));

const changeTestWithIndicator = (indicatorArr) => {
  let testimonials = Array.from($$(".testimonial"));
  indicatorArr.forEach((el, i) => {
    el.addEventListener("click", () => {
      indicatorArr.forEach((el, j) => {
        el.style.pointerEvents = "none";
        el.classList.remove("active");
        testimonials[j].style.display = "none";
        testimonials[j].style.opacity = "0";
        // testimonials[i].classList.add("goUp");
      });
      el.classList.add("active");
      testimonials[i].style.display = "flex";
      testimonials[i].style.opacity = "1";
      testimonials[i].classList.add("goUp");

      setTimeout(() => {
        el.style.pointerEvent = "all";
        indicatorArr.forEach((el) => (el.style.pointerEvents = "all"));
      }, 600);
    });
  });
};

changeTestWithIndicator(testimonialIndicators);
