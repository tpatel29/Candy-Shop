let slidePosition = 0;
const slides = document.getElementsByClassName("carousel__item");
const totalSlides = slides.length;
//create the timer
var timer;

document.getElementById("carousel__button-next").addEventListener("click", function(){
    moveToNextSlide();
});

document.getElementById("carousel__button-prev").addEventListener("click", function(){
    moveToPrevSlide();
});

//start timer once you load the page
clearTimeout(timer);
timer = setTimeout(() => moveToNextSlide(), 5000);

function updateSlidePosition(){
    for(let slide of slides){
        slide.classList.remove("carousel__item--selected");
        slide.classList.add("carousel__item--hidden");
    }
    //starts the timer every 5 seconds after first load up
    clearTimeout(timer);
    timer = setTimeout(() => moveToNextSlide(), 5000);
    slides[slidePosition].classList.add("carousel__item--selected");
}

function moveToNextSlide(){
    if(slidePosition === totalSlides -1){
        slidePosition = 0;
    } else {
        slidePosition++;
    }
    updateSlidePosition()
}

function moveToPrevSlide(){
    if(slidePosition === 0){
        slidePosition = totalSlides - 1;
    } else {
        slidePosition--;
    }
    updateSlidePosition()
}

    document.querySelectorAll(".carousel").forEach(carousel =>{
    const items = carousel.querySelectorAll(".carousel__item");
    const buttonDisplay = Array.from(items, () => {
        return `<span class="carousel__button"></span>`;
    });

    carousel.insertAdjacentHTML("beforeend", `
        <div class="carousel__nav">
            ${buttonDisplay.join("")}
        </div>
    `);

    const buttons = carousel.querySelectorAll(".carousel__button");

    buttons.forEach((button, i) => {
        button.addEventListener("click", () => {
            items.forEach(item => item.classList.remove("carousel__item--selected"));
            buttons.forEach(button => button.classList.remove("carousel__button--selected"));

            items[i].classList.add("carousel__item--selected");
            button.classList.add("carousel__button--selected");
        });
    });
});

