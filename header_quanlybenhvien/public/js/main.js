window.onload  = ()=>{
    const showMenu = document.getElementsByClassName('showMenu')[0];
    const nav_menu = document.getElementsByClassName('navMenu')[0];
    const nav = document.getElementsByClassName('nav')[0];
    
    
    window.addEventListener('scroll', () => {
        let height = window.pageYOffset;
        if (height >= 200) {
            nav.style.position = 'fixed';
        } else {
            nav.style.position = 'relative';
        }
    })
    nav_menu.addEventListener('click', () => {
        showMenu.style.display = 'block';
        showMenu.style.animation = " truotngang 0.35s ease";
    });
    const closeMenu = document.getElementsByClassName('closeIcon')[0];
    closeMenu.addEventListener('click', () => {
        showMenu.style.animation = "truotvao 0.35s ease forwards";
    })
    window.onresize = this.checkWidhtScreen;
    slideShow();

    // hàm hiển thị contact with us
    let checkContactShow = false;
    const a =  document.getElementById('img-contactUs');
    const b = document.getElementById('contactUs_form-box');
    const c =  document.getElementsByClassName('contactUs_header')[0];
    contactUs_show(a,b,checkContactShow);
    contactUs_hidden(c,b); 
}

slideShow = ()=>{
    const imgSlide = document.getElementsByClassName('imgSlide');
    let index = 0;
    const length = imgSlide.length;
    setTimeout(() => {
        imgSlide[index].setAttribute('class','imgSlide active goOut');
    }, 7000);
    this.setSlideRun(imgSlide,index,length);
}    

setSlideRun = (imgSlide,index,length)=>{
    setInterval(()=>{
        if(index===length-1){
          index=0;
      }else{
          index++;
      }
      imgSlide[index].setAttribute('class','imgSlide active goIn');
      for(let i = 0 ; i<length ; i++){
          if(i!==index){
              imgSlide[i].setAttribute('class','imgSlide active goOut');
          }
      }
    
  },5000)
};

// contact us

contactUs_show = (a,b,c)=>{
    a.addEventListener('click',()=>{
        if(c===false){
            b.style.display = 'block';
            b.style.animation = 'showBig 0.35s ease-in forwards';
            c=true;
        }else{
            b.style.display = 'block';
            b.style.animation = 'hiddenShow 0.35s ease-in forwards'
            c=false;
        }
      
   });
}   
contactUs_hidden = (c,b)=>{
    c.addEventListener('click',()=>{
        b.style.animation = 'hiddenShow 0.35s ease-in forwards'
    });
}