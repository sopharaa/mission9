const products = [
    {
        img: "/assets/image/voter/official.png",
        link: "http://127.0.0.1:8000/official",
    },
    {
        img: "/assets/image/voter/result.png",
        link: "http://127.0.0.1:8000/result",
    },
    {
        img: "/assets/image/voter/calendar.jpg",
        link: "http://127.0.0.1:8000/calendar",
    },
];

document.addEventListener("DOMContentLoaded", function() {
    const allProductsContainer = document.querySelector('.product-list');
    products.forEach(product => {
        const productHTML = `
            <div class="col-lg-4 col-md-6 col-12 box">
                <div class="card mb-3">
                    <a href="${product.link}">
                        <div class="card-img">
                            <img src="${product.img}" class="card-img-top" alt="...">
                        </div>
                    </a>
                </div>
            </div>`;
        allProductsContainer.insertAdjacentHTML('beforeend', productHTML);
    });
});


function displaytohtml(products){
    allproducts.innerHTML = output(products);
}
displaytohtml(products);

// scroll to change background on navbar
const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if(window.scrollY > 0){
        navbar.classList.add('fixed-top');
    }
    else{
        navbar.classList.remove('fixed-top');
    }
});

// search item
const search = document.getElementById('search-item');
search.addEventListener('input' ,function(e){
    let valueinput = e.target.value.toLowerCase(); //frappe
    const check = products.filter(p =>{
        return p.name.toLowerCase().includes(valueinput);//frappe
    })
    displaytohtml(check);
})

