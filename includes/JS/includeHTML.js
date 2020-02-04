let settings;

function set_hamburger_trigger() {
    let burger = document.querySelector(".mobileMenuSwitch");
    let mobileMenu = document.querySelector("#mobileMenu");
    console.log(mobileMenu);

    burger.addEventListener("click", function () {
        if (mobileMenu.classList.contains("open")) {
            mobileMenu.classList.remove("open");
            mobileMenu.classList.add("closed");
            burger.classList.remove("rotateLeft");
            burger.classList.add("rotateRight");
        } else {
            mobileMenu.classList.remove("closed");
            mobileMenu.classList.add("open");
            if (burger.classList.contains("rotateRight"))
                burger.classList.remove("rotateRight");
            burger.classList.add("rotateLeft");
        }
    })
}

function get_settings() {
    var request = new XMLHttpRequest();
    request.open("GET", "includes/data/settings.json", false);
    request.send();
    settings = JSON.parse(request.responseText);
}

function includeHTML() {
    get_settings();
    var z, i, elmnt, file, xhttp;
    z = document.getElementsByTagName("div");
    for (i = 0; i < z.length; i++) {
        elmnt = z[i];
        file = elmnt.getAttribute("w3-include-html");
        if (file) {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        elmnt.innerHTML = this.responseText;
                    }
                    if (this.status == 404) {
                        elmnt.innerHTML = "Page not found.";
                    }
                    elmnt.removeAttribute("w3-include-html");
                    includeHTML();
                }
            }
            xhttp.open("GET", file, true);
            xhttp.send();
            return;
        }
    }
    window.onload = set_hamburger_trigger();
}