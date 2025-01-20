

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

