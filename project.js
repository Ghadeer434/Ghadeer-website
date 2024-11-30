let cart = [];
let totalPrice = 0;

function Addtocard(product, price) {
    cart.push({ product, price });
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const totalPriceElem = document.getElementById('total-price');

    cartItems.innerHTML = '';
    totalPrice = 0;

    cart.forEach(item => {
        const li = document.createElement('li');
        li.textContent = `${item.product} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(li);

        totalPrice += item.price;
    });

    totalPriceElem.textContent = totalPrice.toFixed(2);
}

function checkout() {
    if (cart.length === 0) {
        alert('Your cart is empty');
        return;
    }

    alert(`Checkout successful! Total: $${totalPrice.toFixed(2)}`);
    cart = [];
    updateCart();
}








