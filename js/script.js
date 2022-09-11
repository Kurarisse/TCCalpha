const btnCelular = document.getElementById('btnCelular');

function toggleMenu(event){

    const nav = document.getElementById('nav');
    nav.classList.toggle('active');

    const active = nav.classList.contains('active');

    if(active === true){
        event.currentTarget.setAttribute('aria-expanded', 'true');
        event.currentTarget.setAttribute('aria-label', 'Fechar menu');
    }else{
        event.currentTarget.setAttribute('aria-expanded', 'false');
        event.currentTarget.setAttribute('aria-label', 'Abrir menu');
    }
}


btnCelular.addEventListener('click', toggleMenu);