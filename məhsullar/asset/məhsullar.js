let productCount = 0;
let productPrice = 0;
let totalPrice = 0;
let selectedProduct = null;

if (localStorage.getItem('selectedProduct')) {
    const savedProduct = JSON.parse(localStorage.getItem('selectedProduct'));
    productCount = savedProduct.count;
    productPrice = savedProduct.price;
    selectedProduct = savedProduct.name;
    document.getElementById('small-image').src = savedProduct.image;
    document.getElementById('product-count').textContent = productCount;
    calculateTotalPrice();
}

document.querySelectorAll('.product-block').forEach(item => {
    item.addEventListener('click', function() {
        const productImage = item.querySelector('img').src;
        productPrice = parseFloat(item.getAttribute('data-price'));
        selectedProduct = item.getAttribute('data-product');
        document.getElementById('small-image').src = productImage;
        document.getElementById('product-count').textContent = productCount;
        calculateTotalPrice();

        localStorage.setItem('selectedProduct', JSON.stringify({
            name: selectedProduct,
            count: productCount,
            price: productPrice,
            image: productImage
        }));
    });
});

document.getElementById('increase').addEventListener('click', function() {
    productCount++;
    document.getElementById('product-count').textContent = productCount;
    calculateTotalPrice();
    updateLocalStorage();
});

document.getElementById('decrease').addEventListener('click', function() {
    if (productCount > 0) {
        productCount--;
        document.getElementById('product-count').textContent = productCount;
        calculateTotalPrice();
        updateLocalStorage();
    }
});

function calculateTotalPrice() {
    totalPrice = productPrice * productCount;
    document.getElementById('total-price').textContent = totalPrice.toFixed(2);
}

document.getElementById('small-image').addEventListener('click', function() {
    const modal = new bootstrap.Modal(document.getElementById('myModal'));
    document.getElementById('modal-count').value = productCount;
    modal.show();
});

document.getElementById('set-count').addEventListener('click', function() {
    const newCount = document.getElementById('modal-count').value;
    productCount = parseInt(newCount);
    document.getElementById('product-count').textContent = productCount;
    calculateTotalPrice();
    updateLocalStorage();
    const modal = bootstrap.Modal.getInstance(document.getElementById('myModal'));
    modal.hide();
});

function updateLocalStorage() {
    localStorage.setItem('selectedProduct', JSON.stringify({
        name: selectedProduct,
        count: productCount,
        price: productPrice,
        image: document.getElementById('small-image').src
    }));
}
