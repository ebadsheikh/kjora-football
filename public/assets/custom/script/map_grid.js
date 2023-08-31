let tabsContainer = document.querySelector("#tabs-map-grid");

let tabTogglers = tabsContainer.querySelectorAll("#tabs-map-grid a");

console.log(tabTogglers);

tabTogglers.forEach(function (toggler) {
    toggler.addEventListener("click", function (e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contents");

        for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglers[i].parentElement.classList.remove("text-border-gray"); tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("text-border-gray");
    });
});

// goalkkeeper

let tabsContainergoalkeeper = document.querySelector("#tabs-map-grid-goalkeeper");

let tabTogglergoalkeeper = tabsContainergoalkeeper.querySelectorAll("#tabs-map-grid-goalkeeper a");

console.log(tabTogglergoalkeeper);

tabTogglergoalkeeper.forEach(function (toggler) {
    toggler.addEventListener("click", function (e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contentgoalkeeper");

        for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglergoalkeeper[i].parentElement.classList.remove("text-border-gray"); tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("text-border-gray");
    });
});

// defender

let tabsContainerdefender = document.querySelector("#tabs-map-grid-defender");

let tabTogglerdefender = tabsContainerdefender.querySelectorAll("#tabs-map-grid-defender a");

console.log(tabTogglerdefender);

tabTogglerdefender.forEach(function (toggler) {
    toggler.addEventListener("click", function (e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contentdefender");

        for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglerdefender[i].parentElement.classList.remove("text-border-gray"); tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("text-border-gray");
    });
});

// midfielder

let tabsContainerfielder = document.querySelector("#tabs-map-grid-fielder");

let tabTogglerfielder = tabsContainerfielder.querySelectorAll("#tabs-map-grid-fielder a");

console.log(tabTogglerfielder);

tabTogglerfielder.forEach(function (toggler) {
    toggler.addEventListener("click", function (e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contentfielder");

        for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglerfielder[i].parentElement.classList.remove("text-border-gray"); tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("text-border-gray");
    });
});

// forward

let tabsContainerforward = document.querySelector("#tabs-map-grid-forward");

let tabTogglerforward = tabsContainerforward.querySelectorAll("#tabs-map-grid-forward a");

console.log(tabTogglerforward);

tabTogglerforward.forEach(function (toggler) {
    toggler.addEventListener("click", function (e) {
        e.preventDefault();

        let tabName = this.getAttribute("href");

        let tabContents = document.querySelector("#tab-contentforward");

        for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglerforward[i].parentElement.classList.remove("text-border-gray"); tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("text-border-gray");
    });
});
