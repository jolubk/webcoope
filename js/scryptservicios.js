document.querySelector('#planes').onclick = () =>{
    document.querySelector('.documen').classList.remove('active');
    document.querySelector('#documen').classList.remove('active');
    document.querySelector('.planes').classList.add('active');
    document.querySelector('#planes').classList.add('active');
  }
  document.querySelector('#documen').onclick = () =>{
    document.querySelector('.planes').classList.remove('active');
    document.querySelector('#planes').classList.remove('active');
    document.querySelector('.documen').classList.add('active');
    document.querySelector('#documen').classList.add('active');
  }