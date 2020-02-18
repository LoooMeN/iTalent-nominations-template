
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='/includes/CSS/nominationStyle.css'>
    <?php include '../../includes/header.html';?>
    <title>САЙТ НА КОНСТРУКТОРІ</title>
</head>
<body>
    <script>
        var page = 'WEBCONST';
    </script>
    <section class='section' id='aboutNomination'>
    <h1 class='title'>САЙТ НА КОНСТРУКТОРІ</h1>
    <p>У цій номінації вам потрібно зробити свій сайт на конструкторі сайту. Уважно читайте завдання до сайту.</p>
</section>

    <section id='ageGroups' class='section'>
        <div class='ageGroupsWrapper'>
            <div class='ageGroupWrapper shadow'>
                <div class='ageGroupPreview'>
                    <img src='/includes/images/backgrounds/WebConstAgeBg.png'
                        alt='Вікова категорія 1'>
                    <div class='age blueGrad'>
                        <h2>Від 8 до 14 років</h2>
                        <p>Тема роботи: Тема роботи: вільна</p>
                    </div>
                </div></div>        </div>
    <p>*Допускається розробка та подача проектів у складі команди, проте зауважте, що у разі
        перемоги - одна робота отримує одну нагороду.</p>
    </section>
    <div class='kriteriiBg'>
    <section id='kriterii' class='section'>
        <h1 class='title'>Критерії за якими будуть<br>оцінювати вашу роботу</h1>
        <div class='kriterii'>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/BrainInBox.svg' alt='icon'>
                <h2>ВІЗУАЛ</h2>
                Зручність інтерфейсу. Акуратно і красиво використані блоки і елементи шаблону.</div>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/HandWithIcons.svg' alt='icon'>
                <h2>КОНТЕНТ</h2>
                Контент розкриває ідею проекту, унікальний і цікавий, повний (його достатньо для обраної цілі)</div>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/LightIcon.svg' alt='icon'>
                <h2>ІДЕЯ ПРОЕКТУ</h2>
                Проекту несе в собі певну ідею, наскільки він цікавий та може бути корисний іншим користувачам</div>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/mark.svg' alt='icon'>
                <h2>ВІДПОВІДНІСТЬ</h2>
                Умовам конкурсу та вимогам до робіт. Роботи, що не відповідають вимогам – розглядитись суддями не будуть.</div>
        </div>
    </section>
</div>
    <div class='vimogiBg'>
        <section class='section' id='vimogi'>
            <h1 class='title'>Вимоги до<br>вашої роботи:</h1>
            <div class='vimogi'>
    <div class='vimogaWrapper'>
                    <img class='icon' src='/includes/images/icons/worldIcon.svg' alt='icon'>
                    <div class='text'>
                        <h3>Сайт має бути</h3>
                        <p>зроблений із використанням CMS (WordPress, Joomla та ін.) або Конструктора (Wix, Tilda і т.п.)</p>
                    </div>
                </div><div class='vimogaWrapper'>
                    <img class='icon' src='/includes/images/icons/worldIcon.svg' alt='icon'>
                    <div class='text'>
                        <h3>Сайт має бути</h3>
                        <p>розміщено в інтернеті і має коректно відображатись та працювати в останніх двох релізах браузеру Chrome</p>
                    </div>
                </div><div class='vimogaWrapper'>
                    <img class='icon' src='/includes/images/icons/keyIcon.svg' alt='icon'>
                    <div class='text'>
                        <h3>Надати доступ</h3>
                        <p>до адмін панелі сайту. Логін та пароль мають бути надані окремим текстовим файлом</p>
                    </div>
                </div><div class='vimogaWrapper'>
                    <img class='icon' src='/includes/images/icons/mark.svg' alt='icon'>
                    <div class='text'>
                        <h3>Відповідність</h3>
                        <a href='/project-demands/' target='_blank'><div class = 'button shadow'> ЗАГАЛЬНИМ ВИМОГАМ ДО РОБІТ </div> </a>
                    </div>
                </div></div>
    </section>
</div><section class='section' id='registration'></section>

<section id='CTAbuttons' class='section'>
    <a href='http://winners.italent.org.ua/' class='CTAbutton shadow unselectable'>
        <p>роботи попередніх сезонів</p>
        <img class='buttonImg' src='/includes/images/icons/Vector-3.png'>
    </a>
    <a href='/mentorship/' class='CTAbutton shadow unselectable'>
        <p>потрібна допомога с проектом?</p>
        <img class='buttonImg' src='/includes/images/icons/Vector-3.png'>
    </a>
</section>

<section id='judgeList' class='section'>
    <h1 class='title'>СУДДІ НОМІНАЦІЇ</h1>
    <div class='grod' id='judgeGrod'>
        <script type='module' src='/includes/JS/judges.js'></script>
    </div>
    <a href='/judges/'>
        <div class='judgeButton shadow'>усі судді</div>
    </a>
</section>

<?php include '../../includes/footer.html';?>

</body>

</html>