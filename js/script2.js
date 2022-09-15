let modalQt = 0;
const c = (el)=>document.querySelector(el);
const cs = (el)=>document.querySelectorAll(el);

//SEM A CONSTANTE
// modelsJson.map((item, index)=>{
//     let modelsItem = document.querySelector('.models .models-item').cloneNode(true);
//     document.querySelector('.models-area').append(modelsItem);
// });

modelsJson.map((item, index)=>{
    let modelsItem = c('.models .models-item').cloneNode(true);
    modelsItem.setAttribute('data-key', index);

    modelsItem.querySelector('.models-item--img img').src = item.img;

    modelsItem.querySelector('.models-item--price').innerHTML = ('R$' + item.price[0].toFixed(2));
    modelsItem.querySelector('.models-item--name').innerHTML = item.name;
    modelsItem.querySelector('.models-item--desc').innerHTML = item.description;

    modelsItem.querySelector('a').addEventListener('click', (e)=>{
        e.preventDefault();

        let key = e.target.closest('.models-item').getAttribute('data-key');
        modalQt = 1;

        c('.modelsBig img').src = modelsJson[key].img;
        c('.modelsInfo h1').innerHTML = modelsJson[key].name;
        c('.modelsInfo--desc').innerHTML = modelsJson[key].description;
        c('.modelsInfo--actualPrice').innerHTML = ('R$' + modelsJson[key].price[2].toFixed(2));
        c('.modelsInfo--size.selected').classList.remove('selected');

        cs('.modelsInfo--size').forEach((size, sizeIndex)=>{

            if(sizeIndex == 2){
                size.classList.add('selected');
                c('.modelsInfo--actualPrice').innerHTML = ('R$' + modelsJson[key].price[sizeIndex].toFixed(2));
            }

            //size.innerHTML = modelsJson[key].sizes[sizeIndex];
            size.querySelector('span').innerHTML = modelsJson[key].sizes[sizeIndex];
        });

        c('.modelsInfo--qt').innerHTML = modalQt;
        c('.modelsWindowArea').style.opacity = 0;
        c('.modelsWindowArea').style.display = 'flex';

        setTimeout(()=>{
            c('.modelsWindowArea').style.opacity = 1;
        }, 200);
    });
    
    c('.models-area').append(modelsItem);
});