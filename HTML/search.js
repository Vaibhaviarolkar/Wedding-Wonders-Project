// const searchform=document.getElementById("search-form");
// const searchbox1=document.getElementById("search-box1");
// const searchbox2=document.getElementById("search-box2")
// const searchbox3=document.getElementById("mercedes");
// const searchbox4=document.getElementById("audi")
// const searchbox5=document.getElementById("voo");
// const searchbox6=document.getElementById("sab")


// let keyword1="";
// let keyword2="";

// let page=1;


// async function searchImages()
// {


//     keyword1=serchbox1.value;
//     keyword2=serchbox2.value;
    

// }


// let names=
// [
//     "Bridal Makeup in pune",
//     "Bridal Makeup in Mumbai",
//     "Wedding photography in pune",
//     "Wedding photography in Mumbai",
//     "Wedding Decor in Pune",
//     "Wedding Decor in Mumbai"
// ];

// MakeUp
let names=[
    {
        // id:1,
        name: "Bridal Makeup ",
        src:"../HTML/cart1.php",
        desc:"lorem"
       
    },
    {
        // id:2,
        name:"Wedding Decor",
        src:"../HTML/cart2.php",
        desc:"lorem"

        
    },
    {
        // id:3,
        name:"Wedding Photography,../HTML/cart3.php",
        src:"../HTML/cart3.php",
        desc:"lorem"
    },
    {
        // id:4,
        name:"Wedding Venue",
        src:"../HTML/cart4.php",
        desc:"lorem"
    }

];

let snames=names;

// showgallery(galleryarray)
// function showgallery(currarray)
// {
//     document.getElementById("card").innerText="";
//     for(var i=0;i<currarray.length;i++)
//     {
//         document.getElementById("card").innerHTML+=`
//         <div class="col-md-4 mt-3">
//         <div class="card p-3 ps-5 pe-5">
//         <h4 class="text-capitalize text-center>${currarray[i].name}</h4>
//         <img src="${currarray[i].src}" width="100%" height="320px"/>
//         <p class="mt-2">${currarray[i].desc}</p>
//         <button class="btn btn-primary w-100mx-auto">More</button
//         </div>
//         </div>
//         `

//     }
// }


// document.getElementById("myinput").addEventListener("keyup",function()
// {
//     let text = document.getElementById("myinput").ariaValueMax;

//     filterarray=galleryarray.filter(function(a)
//     {
//         if(a.name.includes(text))
//         {
//             return a.name;
//         }
//     });

//     if(this.value =="")
//     {
//         showgallery(galleryarray);
//     }
//     else{
//         if(filterarray == "")
//         {
//             document.getElementById("para").style.display="block";
//             document.getElementById("card").innerHTML="";

//         }
//         else{
//             showgallery(filterarray);
//             document.getElementById("para").style.display='none';
//         }
//     }
// })


let input =document.getElementById("myinput");


input.addEventListener("keyup",(e)=>
{
    removeElements();
    // for(let i of snames)
    for(let i=0;i<snames.length;i++)
    {
       

        if(
            (snames[i].name).toLowerCase().startsWith(input.value.toLowerCase()  ) && input.value != "")
        {
            let listItem =document.createElement("li");

            listItem.classList.add("list-items");
            listItem.style.cursor="pointer";

            listItem.setAttribute("onclick","displayNames('"+ snames[i].name+"')");
            let word="<b>"+ (snames[i].name).substr(0,input.value.length) +"</b>";
            word+=(snames[i].name).substr(input.value.length);
            // ,'"+snames[i].src+"'
            // ,snames[i].src

            listItem.innerHTML=word;
            document.querySelector(".list").appendChild(listItem);
            


       }

       
        

    }
   
}
);

function displayNames(value)
{
    input.value=value;
}
function removeElements(){
    let items=document.querySelectorAll(".list-items");

    items.forEach((item)=>{
        item.remove();
    })
}


let btnn =document.getElementById("btnn");
btnn.addEventListener("keyup",(e)=>
{
    
       
 

        

    
   
}
);