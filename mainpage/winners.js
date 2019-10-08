let fillMe = document.querySelector('#fillMe');
let left = document.querySelector('#winnerLeft');
let right = document.querySelector('#winnerRight');

let winners = [{
        'season': 3,
        'link': 'https://italent.org.ua/season3/',
        'type': 'w'
    },
    {
        'season': 3,
        'link': 'https://italent.org.ua/participants_season_3/',
        'type': 'c'
    },
    {
        'season': 4,
        'link': 'https://italent.org.ua/season_4_results/',
        'type': 'w'
    },
    {
        'season': 4,
        'link': 'https://italent.org.ua/results_season_4/',
        'type': 'c'
    },
    {
        'season': 5,
        'link': 'https://italent.org.ua/winners_s5/',
        'type': 'w'
    },
    {
        'season': 5,
        'link': 'https://italent.org.ua/season_v_contestants/',
        'type': 'c'
    }
];

let sortWins = 'w';
let direction;
getWins();

left.addEventListener('click', toggle);
right.addEventListener('click', toggle);

function toggle() {
    sortWins = sortWins == 'w' ? 'c' : 'w';
    direction = this.id == 'winnerLeft' ? 'r' : 'l';
    delWins();
    setTimeout(getWins, 500);
}

function delWins() {
    toDel = document.querySelectorAll('.toDel');

    toDel.forEach((elem) => {
        elem.style.animationName = direction == 'l' ? 'toLeft' : 'toRight';
    });

    setTimeout((elem) => {
        toDel.forEach((elem) => {
            elem.remove();
        })
    }, 500);
}

function getWins() {
    winners.forEach((elem) => {
        if (sortWins == elem.type) {
            let con1 = document.createElement('div');
            let con2 = document.createElement('div');
            let h2 = document.createElement('h2');
            let p = document.createElement('p');
            let i = document.createElement('i');
            let a = document.createElement('a');

            con2.classList.add('number');
            i.classList.add('arrow');
            a.classList.add('toDel');
            con1.classList.add('cont');

            con2.innerText = elem.season;
            h2.innerText = 'Сезон';
            p.innerText = elem.type == 'w' ? 'Переможці' : 'Учасники';
            i.classList.add('icon-arrowRight');
            a.target = '_blank';
            a.href = elem.link;
            a.style.left = direction == 'l' ? '3000px' : '-3000px';
            a.style.animationName = direction == 'l' ? 'fromRight' : 'fromLeft';

            con1.appendChild(con2);
            con1.appendChild(h2);
            con1.appendChild(p);
            con1.appendChild(i);
            a.appendChild(con1);
            fillMe.appendChild(a);
        }
    });
}