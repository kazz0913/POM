import smmothScroll from 'smoothscrolljs';

export default function () {
  const target = document.querySelector('.pageTop');
  const destination = document.querySelector('.scrollTo');
  target.addEventListener('click', () => {
    smmothScroll(destination);
  })
}
