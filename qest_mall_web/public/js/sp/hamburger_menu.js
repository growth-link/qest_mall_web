'use strict';

{
  const open = document.getElementById('open');
  const overlay = document.querySelector('.overlay');
  const main_container = document.getElementById('main_container');
  const close = document.getElementById('close');

  open.addEventListener('click', () => {
    overlay.classList.add('show');
    main_container.classList.add('fixed');
  });

  close.addEventListener('click', () => {
    overlay.classList.remove('show');
    main_container.classList.remove('fixed');
  });
}
