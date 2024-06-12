document.addEventListener('DOMContentLoaded', function () {
    const minusBtn = document.querySelector('.minus-btn');
    const plusBtn = document.querySelector('.plus-btn');
    const quantityInput = document.getElementById('quantity');
    const addToCartBtns = document.querySelectorAll('.add-to-cart-btn');
    const cartItems = document.getElementById('cart-items');
    const totalPriceElem = document.getElementById('total-price');
    const clearCartBtn = document.getElementById('clear-cart');
    const checkoutBtn = document.getElementById('checkout-btn');
    const toggleCartBtn = document.querySelector('.toggle-cart');

    let cart = [];
    let totalPrice = 0;

    // Загружаем корзину из localStorage
    const savedCart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = savedCart;
    updateCart();

    minusBtn.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    plusBtn.addEventListener('click', function () {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue < 10) {
            quantityInput.value = currentValue + 1;
        }
    });

    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const productName = this.dataset.name;
            const productPrice = parseFloat(this.dataset.price);
            const quantity = parseInt(quantityInput.value);
            const product = { name: productName, price: productPrice, quantity: quantity };

            const existingProductIndex = cart.findIndex(item => item.name === productName);
            if (existingProductIndex !== -1) {
                cart[existingProductIndex].quantity += quantity;
            } else {
                cart.push(product);
            }
            updateCart();
        });
    });

    clearCartBtn.addEventListener('click', function () {
        cart = [];
        totalPrice = 0;
        updateCart();

        // Удаляем корзину из localStorage
        localStorage.removeItem('cart');
    });

    function updateCart() {
        cartItems.innerHTML = '';
        totalPrice = 0;
        cart.forEach(item => {
            const listItem = document.createElement('li');
            listItem.textContent = `${item.name} - ${item.price} грн. x ${item.quantity}`;
            cartItems.appendChild(listItem);
            totalPrice += item.price * item.quantity;
        });
        totalPriceElem.textContent = `Загальна ціна: ${totalPrice} грн.`;

        // Сохраняем корзину в localStorage
        localStorage.setItem('cart', JSON.stringify(cart));
    }
    checkoutBtn.addEventListener('click', function () {
        alert('В розробці...');
    });
    toggleCartBtn.addEventListener('click', function (event) {
        event.preventDefault(); // Предотвратить переход по ссылке
        const cart = document.getElementById('cart');
        cart.style.display = cart.style.display === 'none' ? 'block' : 'none';
    });
    
});