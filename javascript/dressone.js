// var dresstwo=document.getElementById('dresstwo');
// dresstwo.addEventListener('mousemove',function(e){

//     var x=e.clientX - e.target.offsetLeft;
//     var y=e.clientY- e.target.offsetTop;
// });

const product = [
    {
        id: 0,
        image: 'http://www.tiffanyrose.com/v3-img/products/WILCL-zoom.jpg',
        title: "Eterna Dress Purple",
        price: 2000,
        information: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odio sunt, perferendis eligendi quam omnis, doloribus doloremque reprehenderit nemo dolore veniam voluptatem dignissimos"
    },
    {
        id: 1,
        image: 'http://www.tiffanyrose.com/v3-img/products/WILCL-zoom.jpg',
        title: "Eterna Dress Purple",
        price: 2000,
        information: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odio sunt, perferendis eligendi quam omnis, doloribus doloremque reprehenderit nemo dolore veniam voluptatem dignissimos"
    }
];

const categories = [...new Set(product.map((item) => {
    return item
}))]

let i = 0;
document.getElementById('root').innerHTML = categories.map((item) => {
    var { image, title, price, information } = item;
    return (
        `<div class="box">
             <div class='img-box'>
             <img class='images' src=${image}></img>
             </div>
             <div class="bottom">
             <p>${title}</p>
             <h2>Rs ${price}.00</h2>
             <p id="for">${information}` +
        "<button onclick='addtocart(" + (i++) + ")'>ADD TO CART</button>" + `<div>
             </div>
             `
    )
}).join('')

var cart = [];

function addtocart(a) {
    cart.push({...categories[a]});
    displaycart();
}

function delElement(a) {
    cart.splice(a,1);
    displaycart();
}


function displaycart(a) {
    let j = 0;

    document.getElementById('countt').innerHTML=cart.length;
    if (cart.length==0) {
        document.getElementById('cartItem').innerHTML = "Your cart is Empty";

    }
    else {
        document.getElementById('cartItem').innerHTML = cart.map((items) => 
        {
            var { image, title, price, information } = items;
            return (
                `<div class='cart-item'>
                <div class='row-img'>
                <img class='rowing' src=${image}>
                </div>
                <p style='font-size:12px;' >${title}</p>
                <h2 style='font-size:16px;'>Rs${price}.00</h2>
                <p>${information}</p>`  +
                "<i class='fa fa-shopping-cart' onclick='delElement("+(j++)+")'></i></div>"
            );
        }).join('');
    }
}