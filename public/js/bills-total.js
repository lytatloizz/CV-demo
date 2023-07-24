const price = document.querySelectorAll('.cart-price');
const product_name = document.querySelectorAll('.product_name');
let total_item = document.querySelectorAll('.total-item');
let cart_qty = document.querySelectorAll('.cart-qty');
let total_sum = document.querySelector('.total-sum');
let total_all = document.querySelector('.total-all');
let bill_qty = document.querySelector('input[name="product_qty"]');
let bill_description = document.querySelector('input[name="product_description"]');
let bill_price = document.querySelector('input[name="product_price"]');


cart_qty.forEach(element => {
    bill_qty.value = parseInt(bill_qty.value) + parseInt(element.value);
});

product_name.forEach(e => {
    bill_description.value += e.innerHTML + ', ';
});


setInterval(() => {
    let a =  0;
    for (let index = 0; index < price.length; index++) {
    for (let index1 = 0; index1 < cart_qty.length; index1++) {
        for (let index2 = 0; index2 < total_item.length; index2++) {
            total_item[index].innerHTML = (parseInt(price[index].innerHTML) * cart_qty[index].value);
            a += parseInt(total_item[index].innerHTML);
            break;
        }
        break;
    }
    total_sum.value = '$'+ a;
    total_all.value = '$' + (1 + a);
    bill_price.value = ((1 + a) * 23000);
}}, 2000);

setTimeout(() => {
    document.querySelector('.btn-pay-now').disabled = false;
}, 2100);



