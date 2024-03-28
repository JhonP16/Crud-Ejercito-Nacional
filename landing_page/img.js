let counter = 1;

setInterval(() =>{

    document.querySelector('.img.show').classList.remove('show');
    const img = document.querySelector(`.img-${counter}`);
    img.classList.add('show');
    counter++

    if(counter >6){
        counter = 1;
    }

}, 1500);