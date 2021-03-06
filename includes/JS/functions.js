let settings;

function set_hamburger_trigger() {
    let burger = document.querySelector(".mobileMenuSwitch");
    let mobileMenu = document.querySelector("#mobileMenu");
    let mobileChildren = document.querySelectorAll('.mobileChild');

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
    });

    mobileChildren.forEach(function (elem) {
        elem.addEventListener('click', function () {
            mobileMenu.classList.remove("open");
            mobileMenu.classList.add("closed");
            burger.classList.remove("rotateLeft");
            burger.classList.add("rotateRight");
        })
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
            console.log(input.value);
            axios.get('includes/PHP/saveEmail.php?email=' + input.value);
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
    axios.get('/includes/data/settings.json')
        .then(function (response) {
            settings = response.data;
            handleReg();
            set_media();
        });
    set_email_acceptor();
    handleAnnouncement();
    if (window.screen.width <= 768)
        set_hamburger_trigger();
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

function handleReg() {
    let container = document.querySelector('#registration');
    if (container) {
        if (settings["reg_status"] == "open")
            container.innerHTML =
            '<h2 class = "title">РЕЄСТРАЦІЮ ВІДКРИТО</h2><a href = "' + settings["reg_link"] +
            '" target = "_blank"><div class ="regBtn shadow">ЗАРЕЄСТРУВАТИСЯ</div> </a>';
        else
            container.remove();
    }
}

function handleAnnouncement() {
    let button = document.querySelector('#announceButton');
    let announce = document.querySelector('.anouncement');
    let body = document.querySelector('body');

    if (announce) {
        body.style.overflow = "hidden";
        button.addEventListener('click', (elem) => {
            announce.remove();
            body.style.overflow = "visible";
        });
    }
}

get_settings();