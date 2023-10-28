let menu=document.querySelector('#menu-bars');
let navbar=document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');    
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    menu.classList.remove('active');
}

document.querySelector('#creditos').onclick = () =>{
  console.log("creditos");
  document.querySelector('#menu-vertical').classList.toggle('active');
  document.querySelector('#menu-ahorros').classList.remove('active');
  document.querySelector('#menu-servicios').classList.remove('active');
}
document.querySelector('#ahorros').onclick = () =>{
  document.querySelector('#menu-ahorros').classList.toggle('active');
  document.querySelector('#menu-vertical').classList.remove('active');
  document.querySelector('#menu-servicios').classList.remove('active');
  console.log("ahorros");
}

document.querySelector('#servicio').onclick = () =>{
  document.querySelector('#menu-servicios').classList.toggle('active');
  document.querySelector('#menu-vertical').classList.remove('active');
  document.querySelector('#menu-ahorros').classList.remove('active');
  console.log("servicio");
}

document.querySelector('#menu-comercial').onclick = () =>{
    document.querySelectorAll('.menu-lat-enlace').forEach(function(el){el.classList.remove('active');})    
    document.querySelectorAll('.menu-lat-det').forEach(function(el){el.classList.remove('active');});
    document.querySelectorAll('.menu-lat-enlace-flecha').forEach(function(el){el.classList.remove('active');});
    document.querySelector('#det-comercial').classList.add('active');
    document.querySelector('#menu-comercial').classList.add('active');
    document.querySelector('#menu-comercial i.menu-lat-enlace-flecha').classList.add('active');
}

document.querySelector('#menu-agricola').onclick = () =>{
    document.querySelectorAll('.menu-lat-enlace').forEach(function(el){el.classList.remove('active');})    
    document.querySelectorAll('.menu-lat-det').forEach(function(el){el.classList.remove('active');});
    document.querySelectorAll('.menu-lat-enlace-flecha').forEach(function(el){el.classList.remove('active');});
    document.querySelector('#det-agricola').classList.add('active');
    document.querySelector('#menu-agricola').classList.add('active');
    document.querySelector('#menu-agricola i.menu-lat-enlace-flecha').classList.add('active');
}

document.querySelector('#menu-consumo').onclick = () =>{
    document.querySelectorAll('.menu-lat-enlace').forEach(function(el){el.classList.remove('active');});   
    document.querySelectorAll('.menu-lat-det').forEach(function(el){el.classList.remove('active');});
    document.querySelectorAll('.menu-lat-enlace-flecha').forEach(function(el){el.classList.remove('active');});
    document.querySelector('#det-consumo').classList.add('active');
    document.querySelector('#menu-consumo').classList.add('active');
    document.querySelector('#menu-consumo i.menu-lat-enlace-flecha').classList.add('active');
}

// document.querySelector('#search-icon').onclick = () =>{
//     document.querySelector('#search-form').classList.toggle('active');
// }

// document.querySelector('#close').onclick = () =>{
//     document.querySelector('#search-form').classList.remove('active');
// }

var swiper = new Swiper(".home-slider", {
spaceBetween: 30,
centeredSlides: true,
autoplay: {
    delay: 7500,
    disableOnInteraction: false,
},
pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
loop:true,
});

swiper.on('slideChange', function () {
  var elem = document.querySelectorAll(".flota");
  console.log('slide changed: '+swiper.activeIndex);
  if(swiper.activeIndex%2==0){
    elem.forEach(function(el){el.classList.add('active');});
  }else{
    elem.forEach(function(el){el.classList.remove('active');});
  }

  var elem = document.querySelectorAll(".navicop-premios");
  var elem2 = document.querySelectorAll(".navicop-datos");
  if(swiper.activeIndex%2==1){
    elem.forEach(function(el){el.classList.add('zoomefect');});
    elem2.forEach(function(el){el.classList.add('zoomefect');});
  }else{
    elem.forEach(function(el){el.classList.remove('zoomefect');});
    elem2.forEach(function(el){el.classList.remove('zoomefect');});
  }
   
  var ctitulo = document.querySelectorAll(".cuenta_cts_titulo");
  var cdeta = document.querySelectorAll(".cuenta_cts_detalle");
  if(swiper.activeIndex==5){
    ctitulo.forEach(function(el){el.classList.add('zoomefect');});
    cdeta.forEach(function(el){el.classList.add('zoomefect');});
  }else{
    ctitulo.forEach(function(el){el.classList.remove('zoomefect');});
    cdeta.forEach(function(el){el.classList.remove('zoomefect');});
  }

 
  
});


////
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 0; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            mostrar_lista(s.value);
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

// menu detalle creditos
function mostrar_lista(lista){
  // var x = document.getElementById("mySelect").value;
  console.log("en click de option selected");
  document.querySelectorAll(".lista-enlace").forEach(function(el){el.classList.remove("active");});
  document.getElementById(lista).classList.add("active");
}

