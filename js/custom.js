const navSlide = () => {
  const burger = document.querySelector('.burger');
  const navLinks = document.querySelector('.nav-links');
  const navLinksItems = document.querySelectorAll('.nav-links li');

  burger.addEventListener('click', ()=>{
    // Toggle nav slide
    navLinks.classList.toggle('nav-active');
    // Toggle nav list items opacity/slide
    navLinksItems.forEach((link, index)=>{
      if(link.style.animation) {
        link.style.animation = ''
      } else {
        link.style.animation = `navLinkFade 300ms ease forwards ${index / 7 + .30}s`
      }
    });
    // Animate burger
    burger.classList.toggle('burger-toggle');
  });
}

navSlide();