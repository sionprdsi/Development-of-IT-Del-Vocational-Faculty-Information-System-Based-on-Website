

let btn = document.querySelectorAll('.btn');
let portfolioItem = document.querySelectorAll('.portfolio-item');

for(let i = 0; i<btn.length; i++){
  btn[i].addEventListener('click', function(){
    for(let j = 0; j<btn.length; j++){
      btn[j].classList.remove('active');
    }
    this.classList.add('active');

    let dataFilter = this.getAttribute('data-filter');

    for( let k = 0; k<portfolioItem.length; k++){
      portfolioItem[k].classList.remove('active');
      portfolioItem[k].classList.add('hide');


      if(portfolioItem[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
        portfolioItem[k].classList.remove('hide');
        portfolioItem[k].classList.add('active');

      }
    }
  })
}