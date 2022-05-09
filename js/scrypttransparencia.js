let memoria=document.querySelector('.memoria');

//lista de memorias anuales
memoria.onclick=()=>{
    document.querySelector('.flecha-baja').classList.toggle('active');
    document.querySelector('.flecha-sube').classList.toggle('active');
    document.querySelector('.memorias').classList.toggle('active');
  }