tailwind.config = {
    theme: {
      extend: {
        colors: {
          'darkred-color': '#B20000',
          'red-color': '#FD292F',
          'orange-color': '#FE8535',
          'yellow-color': '#FDB10B',
          'lightyellow-color': '#FEF4C0',
          'notwhite-color': '#f6ebf3',
        },
      },
    },
  }
  
  //burger Menu
const hamburger = document.querySelector(".humb");
const navmenu = document.querySelector(".navbar");

hamburger.addEventListener("click",()=>{
    hamburger.classList.toggle("active");
    navmenu.classList.toggle("active");
})

// function toggleSidebar() {
//     var sidebar = document.getElementById("humb");
//     sidebar.classList.toggle("navbar");
//   }
