let nav_item = document.querySelectorAll('.nav-item');
let navbar_brand = document.querySelector('.navbar-brand');
let search_input = document.querySelector('.search-input');

search_input.addEventListener('keydown', ()=>{
    sessionStorage.setItem('active', null)
})

navbar_brand.addEventListener('click', ()=>{
    sessionStorage.setItem('active', "Home")  
})

nav_item.forEach((item) => {
    item.addEventListener('click', () =>{
        sessionStorage.setItem('active', item.innerHTML);
    })
    if(item.innerHTML == sessionStorage.getItem('active')){
        item.classList.add('active')
    }
})