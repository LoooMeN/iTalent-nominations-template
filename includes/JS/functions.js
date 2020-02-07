let settings;

function set_hamburger_trigger() {
    let burger = document.querySelector(".mobileMenuSwitch");
    let mobileMenu = document.querySelector("#mobileMenu");

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

function set_email_acceptor() {
    let form = document.querySelector("#emailForm");
    let input = document.querySelector("#emailFormInput");
    let submit = document.querySelector("#emailFormSubmit");
    let message = document.querySelector("#formMessage");

    form.addEventListener("click", (event) => {
        event.preventDefault();
    })

    submit.addEventListener("click", (event) => {
        if (input.value.includes('@') && input.value.includes('.')) {
            message.innerHTML = "ДЯКУЄМО ЗА ПІДПИСКУ";
            axios.get('includes/PHP/saveEmail.php?email=test@gmail.com');
        } else
            message.innerHTML = "НЕВІРНИЙ ЕМЕЙЛ";
        message.style.opacity = 1;
        form.style.opacity = 0;
        setTimeout((elem) => {
            message.style.opacity = 0;
            form.style.opacity = 1;
            message.innerHTML = "";
        }, 2000);
    })
}

function get_settings() {
    var request = new XMLHttpRequest();
    request.open("GET", "/includes/data/settings.json", false);
    request.send();
    settings = JSON.parse(request.responseText);
}

function set_media() {
    let media = document.querySelectorAll('a');
    media.forEach((elem) => {
        if (elem.classList.contains('discord'))
            elem.href = settings['discord'];
        else if (elem.classList.contains('facebook'))
            elem.href = settings['facebook'];
        else if (elem.classList.contains('telegram'))
            elem.href = settings['telegram'];
        else if (elem.classList.contains('instagram'))
            elem.href = settings['instagram'];
    });
}

function includeHTML() {
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
}

function build_page() {
    get_settings();
    if (window.screen.width <= 768)
        set_hamburger_trigger();
    set_media();
    set_email_acceptor()
    document.title = document.title + " | iTalent всеукраїнський конкурс з IT та кіберспорту";
}