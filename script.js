const galleryItems = document.querySelectorAll('.gallery-item');

galleryItems.forEach((item) => {
  item.addEventListener('click', (event) => {
    const description = event.currentTarget.querySelector('p');
    alert(description.classList.toggle('show-description'));
  });
});