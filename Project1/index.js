let rightArrow = document.querySelector("#carousel-1 .right-arrow");
let leftArrow = document.querySelector("#carousel-1 .left-arrow");

let screenDisplay = document.querySelectorAll("#carousel-1 .carousel-screen");
let numOfScreens = screenDisplay.length;

let circles = document.querySelectorAll("#carousel-1 .circle-container .circle");

let currentScreen = 0;

let inAnimation = false;

let animationTime = 500;

sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[currentScreen+1]);
highlightCircle(circles[0]);

rightArrow.addEventListener("click", () => {
    startAnimation("right");
});

leftArrow.addEventListener("click", () => {
    startAnimation("left");
});

function startAnimation(direction){
    if(!inAnimation){
        inAnimation = true;
        if(direction === "right"){
            moveRight();
            highlightCircle(circles[currentScreen+1], "right");
        } else if(direction === "left"){
            moveLeft();
            highlightCircle(circles[currentScreen-1], "left");
        } else {
            inAnimation = false;
            return
        }
    }
}

function moveRight(){
    if(currentScreen < numOfScreens - 1){
        toLeft(screenDisplay[currentScreen]);
        comeRight(screenDisplay[currentScreen + 1]);
        setTimeout(() => {
            inAnimation = false;
            currentScreen++;
            sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[currentScreen+1]);
        }, animationTime)
    } else {
        toLeft(screenDisplay[currentScreen]);
        comeRight(screenDisplay[0]);
        setTimeout(() => {
            inAnimation = false;
            currentScreen = 0;
            sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[currentScreen+1]);
        }, animationTime)
    }
}

function moveLeft(){
    if(currentScreen > 0){
        toRight(screenDisplay[currentScreen]);
        comeLeft(screenDisplay[currentScreen - 1]);
        setTimeout(() => {
            inAnimation = false;
            currentScreen--;
            sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[currentScreen+1]);
        }, animationTime)
    } else {
        toRight(screenDisplay[currentScreen]);
        comeLeft(screenDisplay[numOfScreens - 1]);
        setTimeout(() => {
            inAnimation = false;
            currentScreen = numOfScreens - 1;
            sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[currentScreen+1]);
        }, animationTime)
    }
}

function toLeft(screen) {
    screen.style.animation = "toLeft 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime)
}

function toRight(screen) {
    screen.style.animation = "toRight 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime)
}

function comeRight(screen) {
    screen.style.animation = "comeRight 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime)
}

function comeLeft(screen) {
    screen.style.animation = "comeLeft 0.5s ease-in-out forwards";
    setTimeout(() => {
        screen.style.animation = "";
    }, animationTime)
}

function sortPosition(mainScreen, leftScreen, rightScreen){
    if(rightScreen === undefined){
        rightScreen = screenDisplay[0];
    }
    if(leftScreen === undefined){
        leftScreen = screenDisplay[numOfScreens-1];
    }

    screenDisplay.forEach(screen => {
        if(screen === mainScreen){
            screen.style.display = "block";
            screen.style.left = "0px";
        } else if(screen === leftScreen){
            screen.style.display = "block";
            screen.style.left = "-100%";
        } else if(screen === rightScreen){
            screen.style.display = "block";
            screen.style.left = "100%";
        } else {
            screen.style.display = "none";
        }
    })
}

circles.forEach(circle => {
    circle.addEventListener("click", event => {
        if(!inAnimation){
            let circlesArray = Array.prototype.slice.call(circles);
            let circleIndex = circlesArray.indexOf(event.target);
            highlightCircle(event.target);
            if(circleIndex > currentScreen){
                changeScreenCircle(circleIndex, "right");
            } else if(circleIndex < currentScreen){
                changeScreenCircle(circleIndex, "left");
            }
        }
    })
})

function changeScreenCircle(circleIndex, direction){
    inAnimation = true;
    if(direction === "right"){
        sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[circleIndex]);
        toLeft(screenDisplay[currentScreen]);
        comeRight(screenDisplay[circleIndex]);
    } else if(direction === "left"){
        sortPosition(screenDisplay[currentScreen], screenDisplay[circleIndex], screenDisplay[currentScreen + 1]);
        toRight(screenDisplay[currentScreen]);
        comeLeft(screenDisplay[circleIndex]);
    } else {
        inAnimation = false;
        return
    }
    setTimeout(() => {
        inAnimation = false;
        currentScreen = circleIndex;
        sortPosition(screenDisplay[currentScreen], screenDisplay[currentScreen-1], screenDisplay[currentScreen+1]);
    }, animationTime)
}

function highlightCircle(circleSelect, direction){
    if(circleSelect === undefined && direction === "right"){
        circleSelect = circles[0];
    } else if(circleSelect === undefined && direction === "left"){
        circleSelect = circles[numOfScreens-1]
    }
    circles.forEach(circle => {
        if(circle === circleSelect){
            circle.classList.add("circle-fill");
        } else {
            circle.classList.remove("circle-fill");
        }
    })
}



