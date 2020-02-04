let main = document.querySelector('#noms');

let testList = [{
        'ruName': '2D графика',
        'ukName': '2D графіка',
        'icon': 'icon-whh-shapes',
        'sec': 'hud',
        'link': 'https://www.italent.org.ua/nominations/2d-graphics/'
    },
    {
        'ruName': '3D графика',
        'ukName': '3D графіка',
        'icon': 'icon-modeling',
        'sec': 'hud',
        'link': 'https://www.italent.org.ua/nominations/3d-graphics/'
    },
    {
        'ruName': 'Цифрове фото',
        'ukName': 'Цифрове фото',
        'icon': 'icon-ps-photobucket',
        'sec': 'hud',
        'link': 'https://www.italent.org.ua/nominations/digital-photo/'
    },
    {
        'ruName': 'Відеомейкінг',
        'ukName': 'Відеомейкінг',
        'icon': 'icon-video-edition',
        'sec': 'hud',
        'link': 'https://www.italent.org.ua/nominations/video-making/'
    },
    {
        'ruName': '2D анімація',
        'ukName': '2D анімація',
        'icon': 'icon-cat',
        'sec': 'hud',
        'link': 'https://www.italent.org.ua/nominations/2d-animation/'
    },
    {
        'ruName': 'Програмна розробка',
        'ukName': 'Програмна розробка',
        'icon': 'icon-monitor',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/program-development/'
    },
    {
        'ruName': 'Розробка на scratch',
        'ukName': 'Розробка на scratch',
        'icon': 'icon-snake',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/scratch-development/'
    },
    {
        'ruName': 'Gamedev',
        'ukName': 'Gamedev',
        'icon': 'icon-development',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/gamedev/'
    },
    {
        'ruName': 'Апаратна розробка',
        'ukName': 'Апаратна розробка',
        'icon': 'icon-processor',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/device-development/'
    },
    {
        'ruName': 'Сайт на конструкторі',
        'ukName': 'Сайт на конструкторі',
        'icon': 'icon-add',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/page-on-constructor/'
    },
    {
        'ruName': 'ВЕБ Application',
        'ukName': 'ВЕБ Application',
        'icon': 'icon-application',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/web-application/'
    },
    {
        'ruName': 'ВЕБ Front-end',
        'ukName': 'ВЕБ Front-end',
        'icon': 'icon-data',
        'sec': 'tech',
        'link': 'https://www.italent.org.ua/nominations/web-front-end/'
    },
    {
        'ruName': 'Програмная обработка текстов',
        'ukName': 'Програмна обробка текстів',
        'icon': 'icon-grammar',
        'sec': 'tech',
        'link': 'https://italent.org.ua/nominations/prog-text/'
    }
]

let lang = 'ua';

let button1 = document.querySelector('#all');
let button2 = document.querySelector('#tech');
let button3 = document.querySelector('#hud');

let sort = 'all';
sortNom(sort);

function flex() {
    sort = this.id;
    sortNom(sort);
}

button1.addEventListener('click', flex);
button2.addEventListener('click', flex);
button3.addEventListener('click', flex);


function sortNom(sort) {
    let i = 0;
    let toCreate = [];

    testList.forEach((elem) => {
        if (elem['sec'] == sort || sort == 'all' || elem['sec'] == 'all') {
            toCreate[i++] = {
                name: elem[lang == 'ru' ? 'ruName' : 'ukName'],
                sec: elem['sec'],
                icon: elem['icon'],
                link: elem['link']
            };
        }
    });
    setTimeout(create(toCreate), 1000);
}

function create(toCreate) {
    if (document.querySelector('.nomination'))
        deleteNom();
    toCreate.forEach((elem) => {
        let nom = document.createElement('div');
        let icon1 = document.createElement('i');
        let name = document.createElement('h2');
        let text = document.createElement('p');
        let icon2 = document.createElement('img');
        let box = document.createElement('div');
        let flexington = document.createElement('div');
        let a = document.createElement('a');

        a.href = elem.link;
        icon1.classList.add(elem.icon, 'icon');
        icon2.src = 'https://www.italent.org.ua/wp-content/uploads/2019/09/more.svg';
        nom.classList.add('nomination');
        nom.style.opacity = 0;
        name.innerText = elem.name;
        text.innerText = 'Дізнатись більше ...'
        nom.appendChild(icon1);
        box.appendChild(name);
        flexington.appendChild(text);
        flexington.appendChild(icon2);
        flexington.classList.add('flexington');
        box.appendChild(flexington);
        box.classList.add('myContainer');
        nom.appendChild(box);
        a.appendChild(nom);
        a.classList.add('nomLink');
        main.appendChild(a);
    });
    let noms = document.querySelectorAll('.nomination');
    setTimeout(() => {
        noms.forEach((elem) => {
            elem.style.opacity = 1;
        });
    }, 500)
}

function deleteNom() {
    let noms = document.querySelectorAll('.nomLink');

    noms.forEach((elem) => {
        elem.style.position = 'relative';
        elem.style.left = '-3000px';
    });

    setTimeout(() => {
        noms.forEach((elem) => {
            elem.remove();
        });
    }, 500);

}