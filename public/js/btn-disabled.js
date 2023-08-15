const disable = document.querySelector('.disable');
const btn_pay = document.querySelector('.btn_pay');

btn_pay.addEventListener('click', () => {
    alert('thank you <3')
    setTimeout(() => {
        btn_pay.disabled = true;
    }, 100)
})

disable.addEventListener('click', () => {
    alert('thank for add cart')
    setTimeout(() => {
        disable.disabled = true;
    }, 100)
})