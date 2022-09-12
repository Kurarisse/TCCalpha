const btnCelular = document.getElementById('btnCelular');
const btnAcessa = document.getElementById('btnAcessa');

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

function toggleAcessa(event){

    const acessa = document.getElementById('acessa');
    acessa.classList.toggle('active');

    const active = acessa.classList.contains('active');

    if(active === true){
        event.currentTarget.setAttribute('aria-expanded', 'true');
        event.currentTarget.setAttribute('aria-label', 'Fechar menu de acessibilidade');
    }else{
        event.currentTarget.setAttribute('aria-expanded', 'false');
        event.currentTarget.setAttribute('aria-label', 'Abrir menu de acessibilidade');
    }
}


btnCelular.addEventListener('click', toggleMenu);
btnAcessa.addEventListener('click', toggleAcessa);