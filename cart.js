// cart.js

let cart = [];

document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });
});

function addToCart(event) {
    const button = event.target;
    const itemName = button.dataset.name;
    const itemPrice = parseFloat(button.dataset.price);
    
    const item = {
        name: itemName,
        price: itemPrice
    };
    
    cart.push(item);
    
    // You can store the cart data in localStorage for persistence across page refreshes
    localStorage.setItem('cart', JSON.stringify(cart));
    
    alert('Item added to cart!');
}
