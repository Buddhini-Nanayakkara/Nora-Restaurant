





document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartItemsElement = document.getElementById('cart-items');
    const cartTotalElement = document.getElementById('cart-total');
    let cartItems = [];
    let cartTotal = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });

    function addToCart(event) {
        const productElement = event.target.parentElement;
        const productId = productElement.getAttribute('data-id');
        const productName = productElement.querySelector('h3').innerText;
        const productPrice = parseFloat(productElement.querySelector('p').innerText.substring(1));

        // Check if the item is already in the cart
        const existingItem = cartItems.find(item => item.id === productId);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cartItems.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
        }

        // Update the cart display
        updateCart();
    }

    function updateCart() {
        cartItemsElement.innerHTML = '';
        cartTotal = 0;

        cartItems.forEach(item => {
            const listItem = document.createElement('li');
            listItem.innerText = `${item.name} x ${item.quantity} - $${(item.price * item.quantity).toFixed(2)}`;
            cartItemsElement.appendChild(listItem);
            cartTotal += item.price * item.quantity;
        });

        cartTotalElement.innerText = cartTotal.toFixed(2);
    }
});

    function addToCart(name, price, quantityId) {
        // Get quantity from input field
        var quantity = parseInt(document.getElementById(quantityId).value);

        // Calculate total for the current item
        var totalPrice = price * quantity;

        // Create a new cart item
        var cartItem = document.createElement("li");
        cartItem.className = "cart-item";
        cartItem.textContent = quantity + " x " + name + " - Rs." + totalPrice.toFixed(2);

        // Add the item to the cart
        document.getElementById("cart-items").appendChild(cartItem);

        // Update the total amount
        updateTotal(totalPrice);
    }

    function updateTotal(price) {
        // Get the current total amount
        var currentTotal = parseFloat(document.getElementById("total").textContent);

        // Update the total amount
        var newTotal = currentTotal + price;
        document.getElementById("total").textContent = newTotal.toFixed(2);
    }

    function toggleCart() {
        var cartContainer = document.getElementById("cart-container");
        cartContainer.style.display = (cartContainer.style.display === "none" || cartContainer.style.display === "") ? "block" : "none";
    }


