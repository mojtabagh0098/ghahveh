function classToggle() {
  const navs = document.querySelectorAll('.navbar-nav')
  navs.forEach(nav => nav.classList.toggle('toggle_show'));
}

document.querySelector('.navbar-toggler')
  .addEventListener('click', classToggle);