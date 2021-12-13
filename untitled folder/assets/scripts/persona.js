let current = document.querySelector('.current')
let submit = document.querySelector('.submitt')
let goal = document.querySelector('.goal')
let options = document.querySelectorAll(".goal option") 
let total =document.querySelector('.total')
let form = document.querySelector('form')
let loadUI = document.querySelector('.loadUi')
let totaldiv = document.querySelector('.totalDiv')
let btn = document.querySelector('#myBtn')
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
            'Buy things or experiences because they truly spark joy in you, not because they are prestigious'
        ],
        scrooge:[
            'Assess your current level of investment/financial risk. It might be too high'
        ],
        dodger:[
            'Hire a financial adviser/planner, if you can afford one.',
            'Automate your investing & saving, to  free up mind-space',
            'Live in the moment more often'
        ],
        abbot: [
            'Speak with a professional to understand your emotional triggers'
        ]
    },

    splurger:{
        collector:[
            'Re-assess your purchases in terms of cost-per-use and financial returns',
            'Create a budget and live by it',
            'Create a plan to increase your revenues and reduce expenses',
            'Automate your savings and investing'
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
           'Avoid rationalizing every purchase. Sometimes, a purchase is just out of your budget'
        ],
        dodger:[
           'Keep an accountability partner when shopping. Choose someone who can successfully admonish you'
        ],
        abbot:[
            'Speak with a professional to understand your emotional triggers'
        ]
    },

    
    
    scrooge:{
        collector:[
            ' Assess your current level of investment return and risk for your life-stage. You might be able to take more risk',
            'Develop and implement a personal wealth creation framework, focusing on wealth creation (vs. preservation)'
        ],
        splurger:[
            'Buy things or experiences because they truly spark joy in you, not because they are affordable',
            'Do something financially spontaneous occasionally'

        ],
        // scrooge:[
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ],
        dodger:[
            'Hire a financial adviser/planner, if you can afford one',
            'Live in the moment more often '
        ],
        abbot: [
            'Re-assess your definition of how much you need to live well. This might reduce the pressure on you'
        ]
    },

    dodger:{
        collector:[
            'Learn about money & how it works',
            'Automate all financial transactions, to free up mind-space', 
            'Speak with a professional to understand your emotional triggers',
            'Hire a financial adviser/planner, if you can afford one'
            
        ],
        splurger:[
           'Be comfortable making trade-offs regarding how you spend your money. Do not avoid things or experiences because you cannot “afford” them'

        ],
        scrooge:[
            'Talk about your money worries with trusted friends & family',
            'Set money goals and get accountability partners to help you', 
            'Ask “stupid” questions' 

        ],
        // dodger:[
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.',
        //     'Re-assess your purchases in terms of cost-per-use and financial returns.'
        // ],
        abbot: [
            'Identify the things you can control and focus on those',
            'Worry less about things outside of your control '

        ]
    },

    abbot:{
        collector:[
            'Draft and implement a positive statement or vision of what you can do with money'
        ],
        splurger:[
            'Buy things or experiences that spark joy in others',
            'Live more in the moment'
        ],
        scrooge:[
             'Create simple savings and investment goals',  
              'Maintain a Halal savings account '
            
        ],
        dodger:[
            'Hire a financial adviser/planner, if you can afford one. See it as your contribution to job-creation!'
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

    variable = current.value
 
    options.forEach((item)=>{
  
        if (item.value == variable) {
            item.disabled = true;
        }
    })
})

goal.addEventListener('change',()=>{
 submit.disabled=false;
})

form.addEventListener('submit',(e)=>{
    e.preventDefault()

    btn.innerHTML=`Get money persona actions <i class="fas fa-spinner fa-spin"></i>`
 
    setTimeout(() => {

        loadUI.innerHTML = ''
      
        let final = over[current.value][goal.value]
      
        for (let i = 0; i < final.length; i++) {
            loadUI.innerHTML += `<li> ${final[i]} </li>`;
        }
      
        
        totaldiv.style.display='block';
        btn.innerHTML=`Get money style actions`
        
    }, 1000);

    
   
  
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
  
//   modal()
  