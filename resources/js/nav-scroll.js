(() => {
  let initTop = 0
  navbar = document.querySelector('.nav')
  window.addEventListener('scroll', () => {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop
    if (scrollTop > initTop) {
      navbar.style.top = '-80px';
    }else {
        navbar.style.top = '0';
    }
    initTop = scrollTop;
  });

})();
