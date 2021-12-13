const accordion = document.getElementsByClassName('contentBx');
const pageurl = window.location.pathname
console.log(pageurl)
if (pageurl === '/html/faq.html') {
    console.log('faq')
}
for (let i = 0; i < accordion.length; i++) {
            accordion[i].addEventListener('click',()=>{
                accordion[i].classList.toggle('active')
            })
            
}

let eachDiv = document.querySelectorAll('.eachDiv')
eachDiv = Array.from(eachDiv)
let input = document.querySelector('.input')

input.addEventListener('keydown',(e)=>{
           
            eachDiv.forEach((item)=>{
                if (item.textContent.toLowerCase().includes(e.target.value.toLowerCase())) {
                    console.log('yesss')
                    item.classList.remove('dnone')
                    item.classList.add('display')
                }
                else{
                    console.log('no')
                    item.classList.remove('display')
                    item.classList.add('dnone')
                }
            })
})
