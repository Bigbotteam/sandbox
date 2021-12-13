const eleTwo = document.getElementById("mc-embedded-subscribe-form");


const $ = el => document.querySelector(el);
const $$ = el => document.querySelectorAll(el);



// load all questions
const questions = [
  {
    id: 1,
    question:
      "Which of these statements best describes my definition of financial wellbeing?",
    options: [
      "I have amassed more wealth than I thought possible and I am one of the richest people I know. ",
      "I might not know how much I have, but I am sure that I do not have to worry about money.",
      "I know that I have enough money that I no longer have to worry about it actively",
      "I have enough money to buy anything and/or any experience I desire",
      "I have enough to afford and access the basics of life and to help others where needed",
    ],
  },
  {
    id: 2,
    question:
      "Which of these statements most closely describes my reaction to my first big financial pay-day (for example a first salary payment, bonus, proceeds from a big transaction etc.)?",
    options: [
      "I invested what I could and saved the rest for a rainy day",
      "I left it in my account and was a bit nervous about what to do with it",
      "I left it in my account and enjoyed looking at the balance occassionally",
      "I spent a good amount on something I had always wanted and saved the rest",
      "I gave most of it to others, spent a bit and saved the rest ",
    ],
  },
  {
    id: 3,
    question: "Do I maintain a financial budget?",
    options: [
      "Yes, it is a way for managing my expenses and increasing my earnings ",
      "No, I am stressed by the idea of creating a budget. I prefer to take each day as it comes",
      "Yes and it is focused primarily on how I manage my expenses",
      "Not really. I might occassionally create one when money is a bit tight",
      "No, I think it is a waste of my time",
    ],
  },
  {
    id: 4,
    question:
      "Which of these statements best desribes my approach to extending personal loans to my friends, family and colleagues?",
    options: [
      "I'm happy to lend if I have extra cash and I can earn good interest",
      "I only lend small amounts of money that I can afford to lose",
      "I only lend to a small circle that I know will pay me back ",
      "I am happy to lend if I have extra cash to do so",
      "I will always help out when I can (without expecting anything in return)",
    ],
  },
  {
    id: 5,
    question:
      "What is my most likely reaction when a friend or family member does not repay a loan taken from me?  ",
    options: [
      "I will follow up with them and involve friends or contacts to ensure I recover my debt ",
      "I will not bring it up, unless they ask me for another loan",
      "I will follow up with them and be happy if I am able to get at least some of it back",
      "I will usually follow up with them directly if I run low on cash myself",
      "I do not lend with the expectation of being repaid, so this is not something I think about ",
    ],
  },
  {
    id: 6,
    question:
      "I am planning a wedding or wedding anniversary for myself. How do I think about a budget? (assuming I am paying for the wedding myself) ",
    options: [
      "I minimize the budget, unless I expect to make money from the wedding (e.g., from gifts)",
      "I focus on securing the most important things. Creating a budget will stress me out.",
      "I minimize the expenses as much as I can. Weddings are not money-making ventures",
      "I focus on securing the things that matter to me. It will all be sorted out eventually.",
      "I focus on the simple and free experiences that my friends will have. I do not focus on money.",
    ],
  },
  {
    id: 7,
    question:
      "Fees for my child's ideal secondary school have just been increased by 40%. Which of these statements best describes my next move?",
    options: [
      "I will negotiate a discount and come up with a plan to earn more to afford the fees next year",
      "I will pay if I can afford it. If I cannot afford it, I will look for a more affordable option ",
      "I will arrange a payment plan but may start to look for cheaper school options later",
      "I will pay if I can afford it. If I cannot afford it, I will call the school to negotiate a discount",
      "I will start looking for more affordable school options. I will not pay 40% more for any school.",
    ],
  },
  {
    id: 8,
    question:
      "I am in a store and faced with a 40% discount on an item that remains- even with the discount- outside my budget. Which of these statements best describes my next move?  ",
    options: [
      "I will ask for an additional discount. If none, I will think about how I can make enough to afford it",
      "I will look for an alternative item that is closer to my budget",
      "I might ask the store assistant for an additional discount, Failing that, I will forget about the item",
      "It depends. If I really like the item, I will think about where I can cut expenses in order to buy it",
      "I never spend large amounts of money on a single item, so this context does not apply to me.",
    ],
  },
  {
    id: 9,
    question:
      "I am presented with a loan offer from my bank and have no emergency spending needs. Under which of these circumstances am I most likely to accept the offer?",
    options: [
      "I will take the loan if there is an opportunity that needs financing AND the interest rate is attractive.",
      "If I need a loan, I would approach the bank myself. I do not need the hassle of dealing with a bank.",
      "I might take the loan if the rate is attractive AND I can think of a way to use the money",
      "I will take the loan offer if I have a short term gap between my expenses and my earnings",
      "Never! I do not believe in taking loans and paying interest, unless I absolutely have to.",
    ],
  },
  {
    id: 10,
    question:
      "If I won 1 Billion Naira in the lottery, which of these statements best describes my first reaction?  ",
    options: [
      "I would be excited that I can now finance my many projects while also living comfortably",
      "I will be overwhelmed and would not know where to start with such an amount",
      "I would be relieved that my financial future is now secure",
      "I will be very happy that I can now make my wishes and those of my family come true",
      "I would feel strange about having that much money, given how many poor people exist in Nigeria",
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

const testEmailLength = (txt)=>{
  let res = [...txt]
  let r = res.indexOf('@', 0)
  return (r ===3 || r <3)
  }

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



const storeEmail  = (email)=>{
 let emai =  localStorage.getItem('vestedSubEmail', email)
  if (emai == email) {
   
   return localStorage.setItem('visited', false)
  };

  localStorage.setItem('visited', true)
}

inp2.addEventListener("input", () => {
  var regex = new RegExp("^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$");
  storeEmail(inp2.value)

  if (inp1.value != "" && inp2.value != "" && regex.test(inp2.value)) {
    btn3.disabled = false;
  } else {
    btn3.disabled = true;
  }

  let emailLengthErr = document.getElementById('email-length')
  if(testEmailLength(inp2.value)){
    btn3.disabled = true;
     emailLengthErr.style.fontSize='10px';
     emailLengthErr.style.color = 'red';
     emailLengthErr.style.display ='block'
    emailLengthErr.innerHTML = 'Email must be greater than three characters'
    
  } else {
    btn3.disabled = false;
    emailLengthErr.style.display ='none'
    emailLengthErr.innerHTML = ''
  }

  if (!regex.test(inp2.value)) {
    error2.classList.add("active");
  } else {
    error2.classList.remove("active");
  }
});


window.onunload = function() {
  localStorage.setItem('visited', true)
  localStorage.setItem('vestedSubEmail', inp2.value)
}


const submitBtn = document.getElementById('btn-content')
btn3.addEventListener('click', ()=>{
  submitBtn.innerHTML = 'Loading...'
})



const checkSub =(e)=>{
  const storeEmail = localStorage.getItem('vestedSubEmail')
const isFirstTime = localStorage.getItem('visited')
const inputtedEmail =  inp2?.value?.toLowerCase()
const storedEmail = storeEmail?.toLowerCase()

  if ((  !isFirstTime  == false) &&  (inputtedEmail === storedEmail) ){
  e.preventDefault()
  window.stop()
          //redirect To show Result page 
          // console.log('you are aleardy subscribed')
          return location.assign("https://vested.ng/html/result.html");
      }


}

eleTwo.addEventListener('submit', (e)=> {
      checkSub(e)

})