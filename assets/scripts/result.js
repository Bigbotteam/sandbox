const $ = el => document.querySelector(el);
const $$ = el => document.querySelectorAll(el);

// check the dominant money style for display
const moneyStylesResult = [
  {
    score: parseInt(localStorage.getItem("abbot")),
    name: "Abbot",
  },
  {
    score: parseInt(localStorage.getItem("collector")),
    name: "Collector",
  },
  {
    score: parseInt(localStorage.getItem("dodger")),
    name: "Dodger",
  },
  {
    score: parseInt(localStorage.getItem("splurger")),
    name: "Splurger",
  },
  {
    score: parseInt(localStorage.getItem("scrooge")),
    name: "Scrooge",
  },
];

const max = Math.max(...moneyStylesResult.map(a => a.score));

let newArr = [];

moneyStylesResult.forEach(el => {
  if (el.score === max) return newArr.push(el.name);
});

$(
  ".expressResult"
).innerHTML = ` Based on your responses, you have a number of personal MoneyStyles, <br/> with the dominant style being <span> ${newArr.join("/")} </span>`;

// code to animate the result chart
const collectorDiv = $(".collector");
const scroogeDiv = $(".scrooge");
const splurgerDiv = $(".splurger");
const dodgerDiv = $(".dodger");
const abbotDiv = $(".abbot");

function scaleYResult(el, percent) {
  el.querySelector(".percent").innerHTML = `${percent}%`;
  el.querySelector(".divbox").style.cssText = `height: calc(${12}px + 17px)`;
  el.querySelector(".divbox").classList.add("showArr");
}
function scaleXResult(el, percent) {
  el.querySelector(".percent").innerHTML = `${percent}%`;
  el.querySelector(".divbox").style.cssText = `width: calc(${12}px + 17px)`;
  el.querySelector(".divbox").classList.add("showArr");
}

const animate = () => {
  setTimeout(() => {
    scaleXResult(scroogeDiv, localStorage.getItem("scrooge"));
    scaleYResult(collectorDiv, localStorage.getItem("collector"));
    scaleYResult(dodgerDiv, localStorage.getItem("dodger"));
    scaleXResult(splurgerDiv, localStorage.getItem("splurger"));
    abbotDiv.querySelector(".percent").innerHTML = `${localStorage.getItem(
      "abbot"
    )}%`;
    abbotDiv.style.cssText = `box-shadow: 0 0 0 10px rgba(252, 252, 252, 0.321);`;
  }, 1000);
};

animate();

const collector = $("#collector");
const scrooge = $("#scrooge");
const splurger = $("#splurger");
const dodger = $("#dodger");
const abbot = $("#abbot");

const collectorLink = $("#collectorLink");
const splurgerLink = $("#splurgerLink");
const scroogeLink = $("#scroogeLink");
const dodgerLink = $("#dodgerLink");
const abbotLink = $("#abbotLink");

window.onscroll = () => {
  if (
    collector.getBoundingClientRect().y <= 18 &&
    collector.getBoundingClientRect().y >= -80
  ) {
    $$(".left a").forEach(link => link.classList.remove("active"));
    collectorLink.classList.add("active");
  }

  if (
    splurger.getBoundingClientRect().y <= 18 &&
    splurger.getBoundingClientRect().y >= -80
  ) {
    $$(".left a").forEach(link => link.classList.remove("active"));
    splurgerLink.classList.add("active");
  }

  if (
    scrooge.getBoundingClientRect().y <= 18 &&
    scrooge.getBoundingClientRect().y >= -80
  ) {
    $$(".left a").forEach(link => link.classList.remove("active"));
    scroogeLink.classList.add("active");
  }

  if (
    dodger.getBoundingClientRect().y <= 18 &&
    dodger.getBoundingClientRect().y >= -80
  ) {
    $$(".left a").forEach(link => link.classList.remove("active"));
    dodgerLink.classList.add("active");
  }

  if (
    abbot.getBoundingClientRect().y <= 140 &&
    abbot.getBoundingClientRect().y >= -80
  ) {
    $$(".left a").forEach(link => link.classList.remove("active"));
    abbotLink.classList.add("active");
  }
};
