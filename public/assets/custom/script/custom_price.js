window.onload = function() {
    priceslideOne();
    priceslideTwo();
};

let pricesliderOne = document.getElementById("priceslider-1");
let pricesliderTwo = document.getElementById("priceslider-2");
let pricedisplayValOne = document.getElementById("price1");
let pricedisplayValTwo = document.getElementById("price2");
let priceminGap = 0;
let pricesliderTrack = document.querySelector(".priceslider-track");
let pricesliderMaxValue = document.getElementById("priceslider-1").max;

function priceslideOne() {
    if (parseInt(pricesliderTwo.value) - parseInt(pricesliderOne.value) <= minGap) {
        pricesliderOne.value = parseInt(pricesliderTwo.value) - minGap;
    }
    pricedisplayValOne.textContent = pricesliderOne.value;
    fillColor();
}

function priceslideTwo() {
    if (parseInt(pricesliderTwo.value) - parseInt(pricesliderOne.value) <= minGap) {
        pricesliderTwo.value = parseInt(pricesliderOne.value) + minGap;
    }
    pricedisplayValTwo.textContent = pricesliderTwo.value;
    fillColor();
}

function fillColor() {
    percent1 = (pricesliderOne.value / pricesliderMaxValue) * 100;
    percent2 = (pricesliderTwo.value / pricesliderMaxValue) * 100;
    pricesliderTrack.style.background = `#006400`;
}
