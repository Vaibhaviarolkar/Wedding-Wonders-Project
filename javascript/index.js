

// function f()
// {
//     document.getElementById('headingone').style.width='400px';
//     document.getElementById('headingone').style.backgroundColor='#477849';
    

    
// }
// function bigImg(x) {
//     x.style.height = "500px";
//     x.style.width = "504px";
//     x.style.backgroundColor ="#456666";
//   }
  
//   function normalImg(x)
// {
//     x.style.height = "600px";
//     x.style.width = "604px";
//     // x.style.backgroundColor ="#456666";

//   }

  function one()
  {

  let c=  document.getElementsByClassName('peacock');
        c.style.position= "absolute";
        c.style.top= "70px";


  }


  function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbttn')) {
        var dropdowns = document.getElementsByClassName("dropdownn-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }


    
  function myFunction1() {
      document.getElementById("myDropdown1").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn1')) {
        var dropdowns = document.getElementsByClassName("dropdown-content1");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }