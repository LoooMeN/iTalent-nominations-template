import {
    judgeList
} from '/includes/JS/judgeList.js'

var grod = document.querySelector('#judgeGrod');

judgeList.forEach((elem) => {
    if (elem.noms.indexOf(page) >= 0 || elem.position == page ||
        (elem.position == 'all' && page == 'mentor')) {
        var mainDiv = document.createElement('div');
        var mainImg = document.createElement('img');
        var mainH4 = document.createElement('h4');
        var mainP = document.createElement('p');

        mainImg.src = elem.photo;
        mainH4.innerText = elem.name;
        mainP.innerText = elem.descr;

        mainDiv.appendChild(mainImg);
        mainDiv.appendChild(mainH4);
        mainDiv.appendChild(mainP);
        mainDiv.classList.add('shadow');
        grod.appendChild(mainDiv);
    }
});