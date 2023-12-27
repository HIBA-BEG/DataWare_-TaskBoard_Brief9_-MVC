  <!doctype html>
  <html>
    
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
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
    document.addEventListener("DOMContentLoaded", function() {
      const openSidebarButton = document.querySelector(".md\\:hidden");
      const closeSidebarButton = document.querySelector(".absolute .focus\\:outline-none");

      openSidebarButton.addEventListener("click", function() {
        document.body.classList.add("overflow-hidden");
        document.querySelector(".md\\:hidden").classList.add("hidden");
        // document.querySelector(".md\\:flex").classList.remove("hidden");
      });

      closeSidebarButton.addEventListener("click", function() {
        document.body.classList.remove("overflow-hidden");
        document.querySelector(".md\\:flex").classList.add("hidden");
        document.querySelector(".md\\:hidden").classList.remove("hidden");
      });
    });
  </script>
</head>
