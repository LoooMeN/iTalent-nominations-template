<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/includes/CSS/nominationStyle.css">
    <?php include "./includes/header.html";?>
    <title>NOMINTION</title>
</head>

<body>
    <script>
        var page = '3D';
    </script>

    <section class="section" id="aboutNomination">
        <h1 class="title">3D ГРАФІКА</h1>
        <p>У цій номінації вам потрібно зробити 3D модель і надати рендери у різних ракурсах. Уважно читайте вимоги до 3D моделі.</p>
    </section>

    <section class="section" id="partner">
        <h2>Партнер номінації:</h2>
        <div>
            <a href="https://www.grammarly.com/" target="_blank" rel="noopener noreferrer"><img
                    src="/incudes/images/partner/logo-grammarly.svg" alt="grammarly"></a>
            <p><span>Grammarly</span> — це міжнародна компанія, яку заснували українці. Нещодавно вона стала
                "єдинорогом" (її вартість перевищила 1 млрд $). Grammarly створює онлайн-сервіс на основі штучного
                інтелекту для допомоги в написанні текстів англійською мовою.</p>
        </div>
    </section>

    <section id="ageGroups" class="section">
        <div class="ageGroupsWrapper">
            <div class="ageGroupWrapper shadow">
                <div class="ageGroupPreview">
                    <img src="/includes/images/backgrounds/Fastest.Growing.Skills.in.Tech.jpg"
                        alt="Вікова категорія 1">
                    <div class="age blueGrad">
                        <h2>Від 8 до 19 років</h2>
                        <p>Тема роботи: на вибір</p>
                    </div>
                </div>
                <ul class="explanation">
                    <h3>Проблеми, які ваш проект може вирішувати:</h3>
                    <li>Електронний конспект. Додаток, який дозволяє сфотографувати свій конспект і розпізнати його.
                        Може бути корисно, щоб робити пошук по конспектах з таких предметів, як історія чи зарубіжна
                        література.</li>
                    <li>Питально-відповідальна система з якогось предмету (наприклад, з географії) за структурованою
                        інформацією з підручника.</li>
                    <li>Визначення фейкових новин / визначення тролінгу в коментарях до новин.</li>
                    <li>Перекладач з діалектної української на літературну (і навпаки). Можна брати будь-який
                        діалект України: львівську ґвару, подільський діалект, волинський діалект, лемківську мову,
                        закарпатський говір тощо.</li>
                    <li>Транслітератор власних назв з англійської на українську (Hemingway => Гемінґвей).</li>
                    <li>Зібрати імена добрих і злих літературних персонажів і написати класифікатор на лінгвістичних
                        ознаках, який визначає, чи персонаж із вашим іменем був би злим чи добрим.</li>
                    <li>Генератор мовних каламбурів.</li>
                    <li>Визначення вірусних заголовків новин: як написати заголовок новини так, щоб на нього клацала
                        максимальна кількість людей.</li>
                    <li>Своя (вільна) тема, яка стосується опрацювання текстів.</li>
                </ul>
            </div>
        </div>
        <p>*Допускається розробка та подача проектів у складі команди, проте зауважте, що у разі
            перемоги - одна робота отримує одну нагороду.</p>
    </section>

    <div class="kriteriiBg">
        <section id="kriterii" class="section">
            <h1 class="title">Критерії за якими будуть<br>оцінювати вашу роботу</h1>
            <div class="kriterii">
                <div class='innerWrapper shadow'>
                    <img src="/includes/images/icons/PC&PhoneIcon.svg" alt="icon">
                    <h2>Інтерфейс і юзабіліті</h2>
                    <p>Наскільки інтерфейс розробки: сучасний, привабливий, зручний та зрозумілий.
                        Легкість запуску та
                        використання, швидкість роботи</p>
                </div>
                <div class='innerWrapper shadow'>
                    <img src="/includes/images/icons/TechnoLight.svg" alt="icon">
                    <h2>Practical & Innovating</h2>
                    <p>Корисність, можливість прикладного застосування. Іноваційність самої розробки або
                        способу
                        реалізації</p>
                </div>
                <div class='innerWrapper shadow'>
                    <img src="/includes/images/icons/monitor.svg" alt="icon">
                    <h2>Technical</h2>
                    <p>наскільки проект технологічний, чистота коду, кількість та складність алгоритмів;
                        використання
                        технологій: робота з мережею, з базами даних, ввід/вивід даних, логування і т.і.
                    </p>
                </div>
                <div class='innerWrapper shadow'>
                    <img src="/includes/images/icons/mark.svg" alt="icon">
                    <h2>Відповідність</h2>
                    <p>Умовам конкурсу та вимогам до робіт. Роботи, що не відповідають вимогам –
                        розглядитись суддями не
                        будуть.</p>
                </div>
            </div>
        </section>
    </div>

    <div class="vimogiBg">
        <section class="section" id="vimogi">
            <h1 class="title">Вимоги до<br>вашої роботи:</h1>
            <div class="vimogi">
                <div class="vimogaWrapper">
                    <img class="icon" src="/includes/images/icons/BoxIcon.svg" alt="icon">
                    <div class="text">
                        <h3>Архів із роботою</h3>
                        <p>має містити:</p>
                        <ul>
                            <li>Папку «Build» із скомпільованою програмою, готовою до запуску. Якщо
                                програма не
                                запуститься
                                – робота не буде розглядатись</li>
                            <li>Папку «Source» із проектом програми із усіма файлами вихідного коду</li>
                            <li>Папку «Test Data» із тестовими файлами, якщо такі необхідні для
                                перевірки роботи
                                програми
                                (Наприклад, якщо програма обробляє зображення – декілька відповідних
                                зображень)</li>
                        </ul>
                    </div>
                </div>
                <div class="vimogaWrapper">
                    <img class="icon" src="/includes/images/icons/worldIcon.svg" alt="icon">
                    <div class="text">
                        <h3>Якщо ви робите сайт</h3>
                        <p>то він має бути розміщеній в інтернеті і має коректно відображатись та
                            працювати в останніх
                            двох
                            релізах браузеру
                            Chrome</p>
                    </div>
                </div>
                <div class="vimogaWrapper">
                    <img class="icon" src="/includes/images/icons/GraphicsIcon.svg" alt="icon">
                    <div class="text">
                        <h3>Додати</h3>
                        <p>файл manual.pdf з інформацією про проект (опис, інструкція по запуску та
                            роботі)</p>
                    </div>
                </div>
                <div class="vimogaWrapper">
                    <img class="icon" src="/includes/images/icons/BoxIcon.svg" alt="icon">
                    <div class="text">
                        <h3>Архів з роботою</h3>
                        <p>слід називати ім’ям конкурсанта. Приклад: Ivahin_Ivan.zip</p>
                        <p>обов’язково заархівувати саме у “zip” формат, а не “rar” чи інший.</p>
                        <p>архів необхідно завантажити на онлайн сховище GoogleDrive.</p>
                        <p>УВАГА! Не забудьте надати доступ до архіву.</p>
                        <a href="/includes/images/icons/archive_instructions.jpg"
                            target="_blank">
                            <div class="button shadow">ДЕТАЛЬНА ІНСТРУКЦІЯ ТУТ</div>
                        </a>
                    </div>
                </div>
                <div class="vimogaWrapper">
                    <img class="icon" src="/includes/images/icons/mark.svg" alt="icon">
                    <div class="text">
                        <h3>Відповідність</h3>
                        <a href="https://italent.org.ua/project-demands/" target="_blank">
                            <div class="button shadow">ЗАГАЛЬНИМ
                                ВИМОГАМ ДО РОБІТ</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section" id="registration"></section>

    <section id="CTAbuttons" class="section">
        <a href="https://italent.org.ua/#last_season" class="CTAbutton shadow unselectable">
            <p>роботи попредніх сезонів</p>
            <img class="buttonImg" src="/includes/images/icons/Vector-3.png">
        </a>
        <a href="https://italent.org.ua/mentorship/" class="CTAbutton shadow unselectable">
            <p>потрібна допомога с проектом?</p>
            <img class="buttonImg" src="/includes/images/icons/Vector-3.png">
        </a>
    </section>

    <section id="judgeList" class="section">
        <h1 class="title">СУДДІ НОМІНАЦІЇ</h1>
        <div class="grod" id="judgeGrod">
            <script type="module" src="/includes/JS/judges.js"></script>
        </div>
        <a href="https://italent.org.ua/#judges">
            <div class="judgeButton shadow">усі судді</div>
        </a>
    </section>

    <?php include "./includes/footer.html";?>
    
</body>

</html>