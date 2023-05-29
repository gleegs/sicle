const checkbox = document.querySelector('#completeSubscription')
const personnalInfo = document.querySelector('.personnalInfo')
const goal = document.querySelector('.goal')
const btns = document.querySelector('.btns')
const contactButton = document.querySelector('.contactButton')
const submit = document.querySelector('.submit')

const btnNext =  document.querySelector('.next')
const btnPrev =  document.querySelector('.prev')

checkbox.addEventListener('change',(e)=>{
    if (personnalInfo.classList.contains("show")){
        personnalInfo.classList.add("hidden")
        btnNext.classList.add("invisible")
        contactButton.classList.remove("hidden")
        personnalInfo.classList.remove("show")
    }else{
        contactButton.classList.add("hidden")
        personnalInfo.classList.add("show")
        btnNext.classList.remove("invisible")
        personnalInfo.classList.remove("hidden")
    }
})

btnNext.addEventListener('click',(e)=>{
    e.preventDefault()
    btnPrev.classList.remove("invisible")
    submit.classList.remove("invisible")
    btnNext.classList.add("hidden")
    personnalInfo.classList.add("hidden")
    personnalInfo.classList.remove("show")
    goal.classList.add("show")
    goal.classList.remove("hidden")
    
})

btnPrev.addEventListener('click',(e)=>{
    e.preventDefault()
    submit.classList.add("invisible")
    btnPrev.classList.add("invisible")
    btnNext.classList.remove("hidden")
    personnalInfo.classList.add("show")
    personnalInfo.classList.remove("hidden")
    goal.classList.add("hidden")
    goal.classList.remove("show")
    
})