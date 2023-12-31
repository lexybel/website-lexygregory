let photo = document.getElementById('photo');
let photos = ['images/about_photo1.png', 'images/about_photo2.png', 'images/about_photo3.png', 'images/about_photo4.png', 'images/about_photo5.png', 'images/about_photo6.png', 'images/about_photo7.png', 'images/about_photo8.png', 'images/about_photo9.png'];
let currIndex = 0;

// set initial image
photo.src = photos[currIndex];

setInterval(function () {
    currIndex = (currIndex + 1) % photos.length;
    photo.style.opacity = 0;
    setTimeout(function () {
        photo.src = photos[currIndex];
        photo.style.opacity = 1;
    }, 1500);
}, 6000);