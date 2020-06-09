require('./bootstrap');

var target = document.querySelectorAll('.box');

target.forEach( number => {

    number.addEventListener('click', function ()  {

        if (this.classList.contains('green')) {

            this.classList.add('red');
            this.style.backgroundColor='red';
            this.classList.remove('green');

        } else if(this.classList.contains('red')){

            alert('you have already clicked this number twice');

        } else {

            this.classList.add('green');
            this.style.backgroundColor='green';
            this.style.color='white';
        } 
    });
})
