let current = document.querySelector('.current')
let submit = document.querySelector('.submitt')
let goal = document.querySelector('.goal')
let options = document.querySelectorAll(".goal option") 
let total =document.querySelector('.total')
let form = document.querySelector('form')
let loadUI = document.querySelector('.loadUi')
let totaldiv = document.querySelector('.totalDiv')
let btn = document.querySelector('#open-btn')
let modalBackground = document.getElementById('modal-background')
let closeBtn = document.getElementById('close-btn');
options = Array.from(options)
let variable;

const over = {
    collector:{
        // collector:[
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ],
        splurger:[
            'Buy things or experiences because they truly spark joy in you, not because they are prestigious',
            'Balance and security are essential to have but consider setting aside a spending budget to splurge a little now and again'
        ],
        scrooge:[
            'Assess your current level of investment/financial risk. It might be too high​',
            'Be introspective and consider what truly matters when making spending decisions'
        ],
        dodger:[
            'Hire a financial adviser/planner, if you can afford one',
            'Automate your investing & saving, to free up mind-space for family, friend and work',
            'Try to live in the moment more often, allowing yourself a spontaneous treat occasionally'
        ],
        abbot: [
            'Recognize that there’s more to life than money',
            'Give your money purpose by helping others e.g., donating to an important cause or treating yourself and family to a vacation',
            'Focus on what the money will accomplish, such as family legacy goals, education, and so on'
        ]
    },

    splurger:{
        collector:[
            'Re-assess your purchases in terms of cost-per-use.  For example, an otherwise “expensive” jacket might be worth it if you can wear it 3x a  week for 2-3 years',
            'Create a budget and live by it',
            'Create a plan to increase your revenues and reduce expenses',
            'Automate your savings and investing to reduce decision fatigue​'
        ],
        // splurger:[
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ],
        scrooge:[
           'Create a rainy-day fund that can sustain you for ~6 months without an income',
           'Ensure your insurances are in order',
            'Avoid rationalizing every purchase. Sometimes, a purchase is just out of your budget',
           'Buy things or experiences because they truly spark joy in you, not because they are “affordable”. Avoid “sales” or good “deals” and focus on value '
        ],
        dodger:[
            'Keep an accountability partner when shopping. Choose someone who can successfully admonish you',
            'Research or ask your financial advisor for data-backed support or recommendations on your spending decisions​',
            'Before you spend, take a step back to fully understand the implications of your spending choices​'
        ],
        abbot:[
            'Speak with a professional to understand your emotional triggers',
            'Focus on what the money will accomplish, such as family legacy goals, education, and so on',
            'Give your money purpose by helping others e.g., donating to an important cause or treating yourself and family to a vacation'
        ]
    },

    
    
    scrooge:{
        collector:[
            ' Assess your current level of investment return and risk for your life-stage. You might be able to take more risk than you currently do​',
            'Do not avoid things or experiences because you cannot “afford” them. You should also think about the value these things and experiences can bring to you​',
            'Develop and implement a personal wealth creation framework, focusing on wealth creation (vs. preservation) '
        ],
        splurger:[
            'Buy things or experiences because they truly spark joy in you, not because they are “affordable”. Avoid “sales” or good “deals” and focus on value ',
            'Do something financially spontaneous occasionally​',
            'Think about where you see yourself in the future and how you can use your money to get there'

        ],
        // scrooge:[
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ],
        dodger:[
            'Hire a financial adviser/planner, if you can afford one',
            'Don’t spend too much tome worrying about money or the lack of it. You already have a plan, so believe in it​ ',
            'Try to live in the moment more often, allowing yourself a spontaneous treat occasionally​'
        ],
        abbot: [
            'Re-assess your definition of how much you need to live well. This might reduce the pressure on you',
            'Give your money purpose by helping others e.g., donating to an important cause or treating yourself and family to a vacation',
            'Focus on what the money will accomplish, such as family legacy goals, education, and so on'
        ]
    },

    dodger:{
        collector:[
            'Learn about money & how it works',
            'Automate all financial transactions, to free up mind-space', 
            'Speak with a professional to understand your emotional triggers',
            'Do not avoid things or experiences because you cannot “afford” them. You should also think about the value these things and experiences can bring to you​',
            'Hire a financial adviser/planner, if you can afford one​'
            
        ],
        splurger:[
            'Be comfortable making trade-offs regarding how you spend your money. Some things are more important than others',
            'Do not avoid things or experiences because you cannot “afford” them. You should also think about the value these things and experiences can bring to you​',
            'Challenge yourself to be more “hands on,” and heavily involved in making spending decisions'

        ],
        scrooge:[
            'Talk about your money worries with trusted friends & family',
            'Set money goals and get accountability partners to help you ​', 
            'Ask “stupid” questions about money and how to manage it​' 

        ],
        // dodger:[
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ],
        abbot: [
            'Identify the things you can control and focus on those',
            'Worry less about things outside of your control ',
            'Give your money purpose by helping others e.g., donating to an important cause or treating yourself and family to a vacation'

        ]
    },

    abbot:{
        collector:[
            'Draft and implement a positive statement or vision of what you can do with money',
            'Speak with a professional to understand your emotional triggers',
            'Hire a financial adviser/planner, if you can afford one'

        ],
        splurger:[
            'Buy things or experiences that spark joy in others',
            'Live more in the moment',
            'Learn to find a balance between living/ spending for others and enjoying life for yourself ',
            'Aim for moderation'
        ],
        scrooge:[
             'Create simple savings and investment goals',  
            'Maintain a Halal savings account ​ ',
            'Create a budget plan and purpose for your money. It will help you see things from a different perspective​'
            
        ],
        dodger:[
            'Hire a financial adviser/planner, if you can afford one. See it as your contribution to job-creation!',
            'Set personal financial goals and be selective about beneficiaries of your generosity'
        ]
        // abbot: [
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ]
    }
}


current.addEventListener('change',()=>{
    options.forEach((item)=>{
        variable = current.value
        item.disabled = false;
        if (item.value == variable) {
         return   item.disabled = true;
        }
    })
})

goal.addEventListener('change',()=>{
 submit.disabled=false;
})

form.addEventListener('submit',(e)=>{
    e.preventDefault()

    btn.innerHTML=`Get Money Style actions <i class="fas fa-spinner fa-spin"></i>`
 
    setTimeout(() => {

        loadUI.innerHTML = ''
      
        let final = over[current.value][goal.value]
      
        for (let i = 0; i < final.length; i++) {
            loadUI.innerHTML += `<li> ${final[i]} </li>`;
        }
      
        
        totaldiv.style.display='block';
        btn.innerHTML=`Get Money Style actions`
        
    }, 0);

    
   
  
})


const modal = ()=>{
    // Get the modal
    var modal = document.getElementById("myModal");
   
    // Get the button that opens the modal
    var btn = document.getElementById("mybtn");
   
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
   
    // }
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
  
    span.onclick = function() {
        modal.style.display = "none";
      }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal || event.target==modal ) {
        // modal.style.display = "none";
        modal.style.display = "none";
        
       
      }
    }
 
  
  }
  
//  openBtn.addEventListener('click', function() {
//     modalBackground.style.display = 'block';
//   });
  
  // hides the modal when the user clicks close-btn
  closeBtn.addEventListener('click', function() {
    modalBackground.style.display = 'none';
  });
  
  // hides the modal when the user clicks outside the modal
  window.addEventListener('click', function(event) {
    // check if the event happened on the modal-background
    if (event.target === modalBackground) {
      // hides the modal
      modalBackground.style.display = 'none';
    }
  });
  