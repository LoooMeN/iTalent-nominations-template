let main = document.querySelector('#noms');

let testList = [{
        'ruName': 'Програмная обработка текстов',
        'ukName': 'Програмна обробка текстів',
        'icon': 'icon-grammar',
        'sec': 'tech',
        'new': true,
        'link': '/nominations/prog-text/'
    },
    {
        'ruName': 'Саунд дизайн',
        'ukName': 'Саунд дизайн',
        'icon': 'icon-microphone',
        'sec': 'all',
        'new': true,
        'link': '/nominations/sound-design/'
    },
    {
        'ruName': 'Студ art',
        'ukName': 'Студ art',
        'icon': 'icon-art',
        'sec': 'hud',
        'new': true,
        'link': '/nominations/stud-art/'
    },
    {
        'ruName': 'Студ tech',
        'ukName': 'Студ tech',
        'icon': 'icon-tech',
        'sec': 'tech',
        'new': true,
        'link': '/nominations/stud-tech/'
    },
    {
        'ruName': '2D графика',
        'ukName': '2D графіка',
        'icon': 'icon-drawing',
        'sec': 'hud',
        'new': false,
        'link': '/nominations/2d-graphics/'
    },
    {
        'ruName': '3D графика',
        'ukName': '3D графіка',
        'icon': 'icon-modeling',
        'sec': 'hud',
        'new': false,
        'link': '/nominations/3d-graphics/'
    },
    {
        'ruName': 'Цифрове фото',
        'ukName': 'Цифрове фото',
        'icon': 'icon-ps-photobucket',
        'sec': 'hud',
        'new': false,
        'link': '/nominations/digital-photo/'
    },
    {
        'ruName': 'Відеомейкінг',
        'ukName': 'Відеомейкінг',
        'icon': 'icon-video-edition',
        'sec': 'hud',
        'new': false,
        'link': '/nominations/video-making/'
    },
    {
        'ruName': '2D анімація',
        'ukName': '2D анімація',
        'icon': 'icon-cat',
        'sec': 'hud',
        'new': false,
        'link': '/nominations/2d-animation/'
    },
    {
        'ruName': 'Програмна розробка',
        'ukName': 'Програмна розробка',
        'icon': 'icon-monitor',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/program-development/'
    },
    {
        'ruName': 'Розробка на scratch',
        'ukName': 'Розробка на scratch',
        'icon': 'icon-snake',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/scratch-development/'
    },
    {
        'ruName': 'Gamedev',
        'ukName': 'Gamedev',
        'icon': 'icon-development',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/gamedev/'
    },
    {
        'ruName': 'Апаратна розробка',
        'ukName': 'Апаратна розробка',
        'icon': 'icon-processor',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/device-development/'
    },
    {
        'ruName': 'Сайт на конструкторі',
        'ukName': 'Сайт на конструкторі',
        'icon': 'icon-add',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/page-on-constructor/'
    },
    {
        'ruName': 'ВЕБ Application',
        'ukName': 'ВЕБ Application',
        'icon': 'icon-application',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/web-application/'
    },
    {
        'ruName': 'ВЕБ Front-end',
        'ukName': 'ВЕБ Front-end',
        'icon': 'icon-data',
        'sec': 'tech',
        'new': false,
        'link': '/nominations/web-front-end/'
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
                link: elem['link'],
                new: elem['new']
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
        let newIcon = document.createElement('img');
        let name = document.createElement('h2');
        let text = document.createElement('p');
        let box = document.createElement('div');
        let flexington = document.createElement('div');
        let a = document.createElement('a');

        a.href = elem.link;
        newIcon.src = '/includes/images/icons/new.svg';
        icon1.classList.add(elem.icon, 'icon');
        nom.classList.add('nomination');
        nom.style.opacity = 0;
        nom.style.position = 'relative';
        newIcon.style.width = '40px';
        newIcon.style.position = 'absolute';
        newIcon.style.top = '5px';
        newIcon.style.right = '5px';
        name.innerText = elem.name;
        text.innerText = 'Дізнатись більше ...'
        nom.appendChild(icon1);
        box.appendChild(name);
        box.appendChild(text);
        box.appendChild(flexington);
        box.classList.add('myContainer');
        nom.appendChild(box);
        if (elem.new) {
            nom.appendChild(newIcon);
        }
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