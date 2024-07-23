function getPics() {} //just for this demo
const imgs = document.querySelectorAll('.cert img');
const fullPage = document.querySelector('#full_image');

imgs.forEach(img => {
  img.addEventListener('click', function() {
    fullPage.style.backgroundImage = 'url(' + img.src + ')';
    fullPage.style.display = 'flex';
  });
});