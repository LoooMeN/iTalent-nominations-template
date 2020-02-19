
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='/includes/CSS/nominationStyle.css'>
    <?php include '../includes/header.html';?>
    <script src='/includes/JS/youtube.js'></script>
    <title>ХУДОЖНЯ НОМІНАЦІЯ ДЛЯ СТУДЕНТІВ</title>
</head><body>
    <script>
        var page = 'stud-art';
    </script>
    <section class='section' id='aboutNomination'>
    <h1 class='title'>ХУДОЖНЯ НОМІНАЦІЯ ДЛЯ СТУДЕНТІВ</h1>
    <p>У цій номінації вам необхідно розробити промо матеріал / лендінг для відомого або вигаданого бренду</p>
</section>

    <section id='ageGroups' class='section'>
        <div class='ageGroupsWrapper'>
            <div class='ageGroupWrapper shadow'>
                <div class='ageGroupPreview'>
                    <img src='/includes/images/backgrounds/stud-art.jpg'
                        alt='Вікова категорія 1'>
                    <div class='age blueGrad'>
                        <h2>Від 19 до 24 років</h2>
                        <p>Тема роботи: вільна</p>
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
                <img src='/includes/images/icons/puzzle.svg' alt='icon'>
                <h2>RECOGNITION</h2>
                На скільки ваша робота репрезентує бренд. Має бути зрозуміло чим цей бренд займається.</div>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/eye.svg' alt='icon'>
                <h2>DESIGN</h2>
                Ступінь відповідності роботи заданій тематиці і стилю. (промо)</div>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/TechnoLight.svg' alt='icon'>
                <h2>IDEA</h2>
                Оригінальність і привабливість (вірусність) ідеї.</div>
            <div class='innerWrapper shadow'>
                <img src='/includes/images/icons/mark.svg' alt='icon'>
                <h2>STYLE</h2>
                Відповідність стилістики до обраного бренду.</div>
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
                        <h3>Якщо ви робите відео / анімацію</h3>
                        <p>Необхідно надати посилання на відео, яке завантажене на Youtube. Доступ до нього має бути обмежений для перегляду лише за посиланням</p>
                    </div>
                </div><div class='vimogaWrapper'>
                    <img class='icon' src='/includes/images/icons/Camera.svg' alt='icon'>
                    <div class='text'>
                        <h3>Якщо ви робите сайт</h3>
                        <p>Необхідно надати посилання на архів з сайтом у якому окрім самого сайту буде текстовий файл з посиланням на онлайн версію сайту. Сайт має коректно відображатись та працювати в останніх двох релізах браузеру Chrome</p>
                    </div>
                </div><div class='vimogaWrapper'>
                    <img class='icon' src='/includes/images/icons/ImageIcon.svg' alt='icon'>
                    <div class='text'>
                        <h3>Якщо ви робите графіку</h3>
                        <p>Необхідно надати посилання на архів з остаточним результатом роботи (png / jpeg / obj) і папку зі скріншотами процесу розробки.</p>
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

<?php include '../includes/footer.html';?>

</body>

</html>