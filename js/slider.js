document.addEventListener('DOMContentLoaded', function () {
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    const cardContainer = document.querySelector('.card-container');

    let currentTranslate = 0;

    prevBtn.addEventListener('click', function () {
        currentTranslate += 25;
        if (currentTranslate > 0) {
            currentTranslate = 0;
        }
        cardContainer.style.transform = `translateX(${currentTranslate}%)`;
        console.log("Prev clicked. Current translate:", currentTranslate);
    });

    nextBtn.addEventListener('click', function () {
        currentTranslate -= 25;
        if (currentTranslate < -75) {
            currentTranslate = -75;
        }
        cardContainer.style.transform = `translateX(${currentTranslate}%)`;
        console.log("Next clicked. Current translate:", currentTranslate);
    });
});
