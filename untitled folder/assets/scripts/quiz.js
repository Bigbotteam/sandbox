const $ = el => document.querySelector(el);
const $$ = el => document.querySelectorAll(el);

// load all questions
const questions = [
  {
    id: 1,
    question:
      "Which of these statements best describes my definition of financial wellbeing?",
    options: [
      "<b>I have ammassed more wealth than I ever thought possible </b>  and I am one of the richest people in Nigeria ",
      "I might not know exactly how much I have, but <b> I am sure that I do not have to worry about money</b> ",
      "<b>I know that I have enough money that I no longer have to worry about it actively</b> ",
      "<b>I have enough money to buy anything and/or any experience I desire </b> ",
      "<b> I have enough to afford and access the basics of life </b> and to <b> help others where needed </b>",
    ],
  },
  {
    id: 2,
    question:
      "Which of these statements most closely describes my reaction to my first big financial pay-day (E.g a first salary payment, bonus, proceeds from a big transaction etc.)?",
    options: [
      "<b> I invested what I could and saved the rest </b> for a rainy day",
      "<b>I left it in my account  </b> and was a bit <b> nervous about what to do with it </b>",
      "<b>I left it in my account and enjoyed looking at the balance </b> occassionally",
      "<b>I spent a good amount on something I had always wanted </b> and saved the rest",
      "<b>I gave most of it to others, </b> spent a bit and saved the rest ",
    ],
  },
  {
    id: 3,
    question: "Do I maintain a financial budget?",
    options: [
      "Yes, <b> it is a way for managing my expenses </b> and <b> increasing my earnings </b> ",
      "No, <b>I am stressed by the idea of creating a budget. </b> I prefer to take each day as it comes ",
      "Yes and <b> it is focused primarily on how I manage my expenses  </b> ",
      "Not really. <b> I might occassionally create one when money is a bit tight. </b> ",
      "No, <b> I think it is a waste of my time </b> ",
    ],
  },
  {
    id: 4,
    question:
      "Which of these statements best desribes my approach to extending personal loans to my friends, family and colleagues?",
    options: [
      "<b>I'm happy to lend </b> if I have extra cash and <b> if I can earn good interest on the loan </b> ",
      "<b>I only lend small amounts of money that I can afford to lose</b> ",
      "<b>I only lend to </b> a small circle of <b> family and friends that I know will pay me back </b>. ",
      "<b>I am happy to lend if I have extra cash to do so</b> ",
      "<b>I will always help </b> family and friends out when I can <b>(without expecting anything in return)</b>",
    ],
  },
  {
    id: 5,
    question:
      "What is my most likely reaction when a friend or family member does not repay a loan taken from me?  ",
    options: [
      "<b>I will follow up with them directly</b> and involve mutual friends or contacts to ensure I recover my debt",
      "<b>I will not bring it up, unless they ask me for another loan</b>",
      "<b>I will follow up with them directly </b> and be happy if I am able to get at least some of it back ",
      "<b>I will usually follow up with them directly if I run low on cash </b> myself ",
      "<b>I do not lend with the expectation of being repaid </b> <span>, so this is not something I think about </span>   ",
    ],
  },
  {
    id: 6,
    question:
      "I am planning a wedding or wedding anniversary for myself. How do I think about a budget (assuming I am paying for the wedding myself)? ",
    options: [
      "<b> I try to minimize the budget, unless I expect to make money from the wedding </b>  (e.g., from gifts)",
      "<b>I focus on securing the most important things </b> for the wedding.<b> Creating a budget will stress me out.</b>",
      "<b> I try to minimize the expenses as much as possible. </b> Weddings are not money-making ventures   ",
      "<b>I focus on securing the things that matter to me  </b> for the wedding. It will all be sorted out eventually. ",
      "I focus on the <b> simple and free experiences </b> that <b> my friends will have on that day.</b> I do not focus on money. ",
    ],
  },
  {
    id: 7,
    question:
      "Fees for my child's ideal secondary school have just been increased by 40%. Which of these statements best describes my next move?",
    options: [
      "</b> I will negotiate an early payment discount </b> and come up with a plan to make more money to afford the fees next year . ",
      "<b>I will pay the fees if I can afford it. </b> If I cannot afford it, I will look for a more affordable option  ",
      "<b> I will arrange a payment plan with the school </b> but may start to look for cheaper school options later  ",
      "<b> I will pay the fees if I can afford it. </b> If I cannot afford it, I will call the school to negotiate a discount. ",
      "<b> I will immediately start looking for more affordable school options.</b> I will not pay 40% more for any school. ",
    ],
  },
  {
    id: 8,
    question:
      "I am in a store and faced with a 40% discount on a desired item. This is outside my budget. Which of these statements best describes my next move?",
    options: [
      " I will ask if there's an additional discount. Failing that,<b> I will think about how I can make enough money to afford it </b> ",
      "<b>I will look for an alternative item that is closer to my budget</b>",
      "<b> I might ask the store assistant for an additional discount,</b> Failing that,<b> I will forget about the item </b>",
      "It depends. If I really like the item,  <b> I will think about where I can cut expenses in order to buy the item</b> ",
      "<b>I almost never spend large amounts of money on any single item, </b> so this context does not apply to me. ",
    ],
  },
  {
    id: 9,
    question:
      "I am presented with a loan offer from my bank and have no emergency spending needs. Under which of these circumstances am I most likely to accept the offer?",
    options: [
      "<b> I will take the loan if there is a profitable opportunity I am pursuing that needs financing </b> AND the interest rate is attractives. ",
      "<b>If I need a loan, I would approach the bank myself.</b> I do not need the hassle of dealing with a bank . ",
      "<b>I might take the loan if the rate is attractive</b> AND I can think of a way to use the money ",
      "<b> I will take the loan offer if I have a short term gap between my expenses and my earnings</b> ",
      "Never! <b> I do not believe in taking loans and paying interest,</b> unless I absolutely have to.  ",
    ],
  },
  {
    id: 10,
    question:
      "If I won 1 Billion Naira in the lottery, which of these statements best describes my first reaction?",
    options: [
      "<b> I would be excited that I am now able to finance the many profitable projects I have been planning </b>  while also living comfortably.",
      "<b>I will be overwhelmed and would not know where to start</b> with such a large sum of money.",
      "<b>I would be relieved that my financial future is now secure</b> ",
      "<b>I will be very happy that I can now make my wishes and those of my family come true </b> ",
      "<b>I would feel strange about having that much money, given how many poor people exist in Nigeria</b> ",
    ],
  },
];

questions.forEach(el => {
  $("form.quiz-form").innerHTML += `<article id="question-${
    el.id
  }" class="question-wrap ${el.id <= 1 ? "active" : ""}">
  <h2 class="question">
   ${el.question}
  </h2>
  <div class="options">
    <input
      type="radio"
      name="${el.id}"
      id="${el.id}-collector"
      hidden
      value="collector"
    />
    <label for="${el.id}-collector">${el.options[0]}</label>
    <input
      type="radio"
      name="${el.id}"
      id="${el.id}-dodger"
      hidden
      value="dodger"
    />
    <label for="${el.id}-dodger">${el.options[1]}</label>
    <input
      type="radio"
      name="${el.id}"
      id="${el.id}-scrooge"
      hidden
      value="scrooge"
    />
    <label for="${el.id}-scrooge">${el.options[2]}</label>
    <input
      type="radio"
      name="${el.id}"
      id="${el.id}-splurger"
      hidden
      value="splurger"
    />
    <label for="${el.id}-splurger">${el.options[3]}</label>
    <input
      type="radio"
      name="${el.id}"
      id="${el.id}-abbot"
      hidden
      value="abbot"
    />
    <label for="${el.id}-abbot">${el.options[4]}</label>
  </div>
</article>`;
});

// get all inputs
let inputs = $$("input[type='radio']");

// personality percentages
let scrooge = 0;
let abbot = 0;
let dodger = 0;
let splurger = 0;
let collector = 0;

// scroll to the next question if an option is picked
$$("form input[type='radio']").forEach((element, i) => {
  element.addEventListener("change", e => {
    let scrollId = e.target.id.split("-")[0];
    if (scrollId < 10) {
      window.matchMedia("(min-width: 900px)").matches
        ? window.scrollTo(
            0,
            $(`#question-${parseInt(scrollId) + 1}`).offsetTop - 110
          )
        : window.scrollTo(
            0,
            $(`#question-${parseInt(scrollId) + 1}`).offsetTop - 140
          );
      $(`#question-${parseInt(scrollId) + 1}`).classList.add("active");
    }
    if (scrollId == 10) {
      $(`.progress${scrollId} span.tick`).classList.remove("hidden");
      $(`.progress${scrollId} span.no-tick`).classList.add("hidden");
      window.scrollTo(0, $(`.btn.btnMain`).offsetTop - 40);
    }
    if (scrollId < 10) {
      $(`.progress${parseInt(scrollId) + 1} .quadrant`).style.width = `100%`;
      $(`.progress${parseInt(scrollId) + 1} span`).classList.add("active");
    }
    $("button.btn.btnMain").disabled =
      Array.from($$("input[name='10']")).filter(el => el.checked).length > 0
        ? false
        : true;
  });
});

// submit test

$(".btn.btnMain").addEventListener(
  "click",
  e => {
    e.preventDefault();
    inputs.forEach(el => {
      if (el.checked) {
        if (el.value === "collector") collector = collector + 1 * 10;
        else if (el.value === "scrooge") scrooge = scrooge + 1 * 10;
        else if (el.value === "abbot") abbot = abbot + 1 * 10;
        else if (el.value === "dodger") dodger = dodger + 1 * 10;
        else if (el.value === "splurger") splurger = splurger + 1 * 10;
      }
    });
    localStorage.setItem("collector", collector);
    localStorage.setItem("scrooge", scrooge);
    localStorage.setItem("abbot", abbot);
    localStorage.setItem("dodger", dodger);
    localStorage.setItem("splurger", splurger);
    $(".quiz-form").reset();
    $("form.modal").classList.add("showFormModal");
    $(".overlay").style.display = "block";
  },
  false
);

$("form.modal .close").addEventListener("click", e => {
  $("form.modal").classList.remove("showFormModal");
  $(".overlay").style.display = "none";
});

let inp1 = document.querySelector(".inp1");
let inp2 = document.querySelector(".inp2");
let btn3 = document.querySelector(".btn3");
let [error1, error2] = document.querySelectorAll("p.error");
inp1.addEventListener("input", () => {
  if (inp1.value != "" && inp2.value != "" && inp1.value.length >= 3) {
    btn3.disabled = false;
  } else {
    btn3.disabled = true;
  }

  if (inp1.value.length < 3) {
    error1.classList.add("active");
  } else {
    error1.classList.remove("active");
  }
});
inp2.addEventListener("input", () => {
  var regex = new RegExp("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$");
  if (inp1.value != "" && inp2.value != "" && regex.test(inp2.value)) {
    btn3.disabled = false;
  } else {
    btn3.disabled = true;
  }

  if (!regex.test(inp2.value)) {
    error2.classList.add("active");
  } else {
    error2.classList.remove("active");
  }
});

btn3.addEventListener("click", e => {
  e.preventDefault();
  let body = {
    fname: inp1.value,
    email: inp2.value,
  };

  const formData = new FormData();

  formData.append("fname", inp1.value);
  formData.append("email", inp2.value);

  const options = {
    method: "POST",
    body: formData,
  };

  const URL =
    "https://vested.ng/wp-json/contact-form-7/v1/contact-forms/2990/feedback";

  fetch(URL, options)
    .then(res => res.json())
    .then(response => {
      //console.log(response)
    })
    .then(() => {
      window.location.pathname = "/result";
    })
    .catch(e => {
      console.log(e);
      console.log(e.message);
    });
});
