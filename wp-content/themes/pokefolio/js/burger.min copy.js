let burger=document.querySelector(".burger"),main_nav=document.querySelector(".nav"),ignoreClickOnMeElement=(burger.addEventListener("click",function(){burger.classList.toggle("active"),main_nav.classList.toggle("active")}),document.querySelector(".nav"));document.addEventListener("click",function(e){e=ignoreClickOnMeElement.contains(e.target);burger.classList.contains("active")&&!e&&(burger.classList.toggle("active"),main_nav.classList.toggle("active"))});