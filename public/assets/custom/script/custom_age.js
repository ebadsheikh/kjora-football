window.onload = function() {
    ageslideOne();
    ageslideTwo();
};

let agesliderOne = document.getElementById("ageslider-1");
let agesliderTwo = document.getElementById("ageslider-2");
let agedisplayValOne = document.getElementById("age1");
let agedisplayValTwo = document.getElementById("age2");
let ageminGap = 0;
let agesliderTrack = document.querySelector(".ageslider-track");
let agesliderMaxValue = document.getElementById("ageslider-1").max;

function ageslideOne() {
    if (parseInt(agesliderTwo.value) - parseInt(agesliderOne.value) <= minGap) {
        agesliderOne.value = parseInt(agesliderTwo.value) - minGap;
    }
    agedisplayValOne.textContent = agesliderOne.value;
    fillColor();
}

function ageslideTwo() {
    if (parseInt(agesliderTwo.value) - parseInt(agesliderOne.value) <= minGap) {
        agesliderTwo.value = parseInt(agesliderOne.value) + minGap;
    }
    agedisplayValTwo.textContent = agesliderTwo.value;
    fillColor();
}

function fillColor() {
    percent1 = (agesliderOne.value / agesliderMaxValue) * 100;
    percent2 = (agesliderTwo.value / agesliderMaxValue) * 100;
    agesliderTrack.style.background = `#006400`;
}
