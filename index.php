<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/includes/CSS/mainpageStyle.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"
        integrity="sha256-T/f7Sju1ZfNNfBh7skWn0idlCBcI3RwdLSS4/I7NQKQ=" crossorigin="anonymous"></script>
    <title>Головна | iTalent всеукраїнський конкурс з IT та кіберспорту</title>
</head>

<body>
    <?php include "./includes/header.html";?>
    <section class="section" id="banner">
        <div></div>
        <div class="container">
            <img src="/includes/images/logos/iTalent_logo_vertical.svg" alt="logo">
            <h2>7 СЕЗОН iTalent РОЗПОЧНЕТЬСЯ У ЛЮТОМУ</h2>
            <div class="buttons">
                <a href="/nominations/prog-text" target="_blank">
                    <div class="button">НОВА НОМІНАЦІЯ ВІД GRAMMARLY</div>
                </a>
                <a href="http://winners.italent.org.ua/" target="_blank">
                    <div class="button">ПЕРЕМОЖЦІ 6 СЕЗОНУ</div>
                </a>
                <a href="https://www.obozrevatel.com/ukr/tech/final-konkursu-italent-stali-vidomi-najkraschi-yuni-it-talanti-ukraini.htm" target="_blank">
                    <div class="button">ЯК ПРОЙШОВ ФІНАЛ 6 СЕЗОНУ</div>
                </a>
            </div>
            <div class="zaPidtrimki">
                <a href="https://grammarly.com" target="_blank" rel="noopener noreferrer">
                    <img src="/includes/images/partners/grammarly_logo.svg" alt="grammarly">
                </a>
                <a href="https://mon.gov.ua" target="_blank" rel="noopener noreferrer">
                    <img src="/includes/images/partners/mon.png" alt="mon">
                </a>
                <a href="https://rozetka.com.ua/search/?text=logitech&producer=42&p=1" target="_blank" rel="noopener noreferrer">
                    <img src="/includes/images/partners/logitechG.svg" alt="grammarly">
                </a>
            </div>
        </div>
    </section>
    <section class="section" id="video">
        <div class="title white">ВІДЕО З ФІНАЛУ</div>
        <div class="holder">
        <div class="youtube-player" data-id="0SXxt0hqgJ8"></div>
        </div>
    </section>

    <section class="section" id="mediaLinks">
        <div class="grod">
            <a href="https://discord.gg/ywTQTpN" target="_blank" class="button unselectable shadow discord">
                <img src="/includes/images/icons/discord.png" alt="discord">
                <p>Приєднуйтеся Discord</p>
            </a>
            <a href="https://telegram.im/@ITalent_ua" target="_blank" class="button unselectable shadow telegram">
                <img src="/includes/images/icons/telegram.png" alt="telegram">
                <p>Приєднуйтеся Telegram</p>
            </a>
            <a href="https://www.facebook.com/iTalent.ua/" target="_blank" class="button unselectable shadow facebook">
                <img src="/includes/images/icons/facebook.png" alt="facebook">
                <p>Приєднуйтеся Facebook</p>
            </a>
            <a href="/faq-it/" target="_blank" class="button unselectable shadow faq">
                <img src="/includes/images/icons/info.png" alt="faq">
                <p>Перегляньте FAQ</p>
            </a>
        </div>
    </section>

    <!-- ДАТИ ТА ЕТАПИ -->
    <div class="aboutWrap bgOverride">
        <section class="section" id="dates">
            <h1 class="title">ЕТАПИ ПРОВЕДЕННЯ КОНКУРСУ</h1>
            <div class="imgWrap">
                <img src="includes/images/backgrounds/steps.svg" class="myDesktop" alt="steps">
                <img src="includes/images/backgrounds/steps_mobile.svg" class="myMobile"
                    alt="steps">
            </div>
        </section>

        <section class="section" id="mainPartners">
            <h2 class="title">ПАРТНЕРИ</h2>
            <div class="grod generalPartners">
                <a href="https://rozetka.com.ua/search/?text=logitech&producer=42&p=1" target="_blank">
                    <img src="/includes/images/partners/Logitech_print_black_LG.svg"
                        alt="logitech">
                </a>
                <a href="https://www.grammarly.com/" target="_blank">
                    <img src="/includes/images/partners/logo-grammarly.svg" alt="grammarly">
                </a>
            </div>
            <div class="grod specialPartners">
                <a href="https://dou.ua/" target="_blank">
                    <img src="/includes/images/partners/dou_logo.svg" alt="dou">
                </a>
                <a href="http://cyberzone.kiev.ua/" target="_blank">
                    <img src="/includes/images/partners/cyberzone.svg" alt="cyberzone">
                </a>
                <a href="https://www.insart.com/" target="_blank">
                    <img src="/includes/images/partners/insart.svg" alt="insart">
                </a>
                <a href="http://gameinside.ua/" target="_blank">
                    <img src="/includes/images/partners/gameinside_dark.svg" alt="gameinside">
                </a>
            </div>
        </section>


        <section class="section" id="about">
            <h1 class="title">ПРО КОНКУРС</h1>
            <div class="myContainer">
                <div class="holder">
                    <div><img src="/includes/images/icons/2150094.svg" alt="icon"></div>
                    <h1 class="subTitle myWhite">ITALENT</h1>
                    <p class="myWhite">перший та найбільший в Україні конкурс з ІТ проектів та кіберспорту серед молоді
                        віком до 19 років</p>
                </div>
                <div class="holder">
                    <div><img src="/includes/images/icons/vesi.svg" alt="icon"></div>
                    <h1 class="subTitle myWhite">СУДДІ</h1>
                    <p class="myWhite">кращі фахівці провідних ІТ компаній України</p>
                </div>
                <div class="holder">
                    <div><img src="/includes/images/icons/goal.svg" alt="icon"></div>
                    <h1 class="subTitle myWhite">МЕТА ПРОЕКТУ</h1>
                    <p class="myWhite">надати українській молоді можливість отримання найкращих IT компетенцій та
                        закласти
                        фундамент для професійної реалізації</p>
                </div>
                <div class="holder">
                    <div><img src="/includes/images/icons/teamwork.svg" alt="icon">
                    </div>
                    <h1 class="subTitle myWhite">УЧАСНИКИ</h1>
                    <p class="myWhite">понад 6000 дітей зі всієї України вже прийняли участь у конкурсі і стали
                        на шлях
                        розкриття свого ІТ-таланту</p>
                </div>
            </div>
        </section>
    </div>

    <section class="section" id="registration"></section>

    <section class="section" id="mediaAboutUs">
        <h2 class="title">ЗМІ ПРО НАС</h2>
        <div class="grod">
            <div class="youtube-player" data-id="5-0Wlzu0e8Q"></div>
            <div class="youtube-player" data-id="5ZceWbnfJt4"></div>
        </div>
        <script src="/includes/JS/youtube.js"></script>
    </section>

    <section class="section" id="nominations">
        <div class="nominationsWrapper">
            <div class="upper">
                <h1 class="title left">ІТ - НОМІНАЦІЇ</h1>
                <div class="buttons">
                    <div><button class="hvr-underline-from-left" id="all">Усі</button></div>
                    <div><button class="hvr-underline-from-left" id="tech">Технічні номінації</button></div>
                    <div><button class="hvr-underline-from-left" id="hud">Художні номінації</button></div>
                </div>
            </div>
            <div class="grod" id="noms">
                <script src="/includes/JS/nominations.js"></script>
            </div>
        </div>
    </section>

    <section class="section" id="cybersport">
        <img src="/includes/images/backgrounds/boy.svg" alt="cybersport">
        <div>
            <div class="title left">КІБЕРСПОРТ</div>
            <p>Ми зробили окремий сайт для учасників, що хочуть порівняти свій AРМ та стратегічні здібності на кібер аренах</p>
            <div class="link">
                <a class="shadow" href="http://cybersport.italent.org.ua/">ПРИЄДНАТИСЯ ДО БОЮ</a>
            </div>
        </div>
    </section>

    <section class="section" id="judges">
        <div>
            <div class="title left">СУДДІ</div>
            <p>Профессіонали з IT - ендустрії України!</p>
            <div class="link">
                <a class="shadow" href="/judges/">ДЕТАЛЬНІШЕ</a>
            </div>
        </div>
        <img src="/includes/images/backgrounds/judges.svg" alt="judges">
    </section>

    <section class="section" id="plakat">
        <div class="grod">
            <div>
                <img src="/includes/images/iTalent-plakat-preview.png" alt="plakat" class="shadow">
            </div>
            <div>
                <h2 class="title left">РОЗДРУКУЙ ПЛАКАТ</h2>
                <p>Повісь у себе у навчальному закладі, на холодильнику, в під'їзді, де завгодно і отимай "+" у карму!
                    :)</p>
                <a target="_blank" class="shadow"
                    href="/includes/images/iTalent-plakat.pdf">ЗАВАНТАЖИТИ ПЛАКАТ</a>
            </div>
        </div>
    </section>

    <div class="mentorBg bgOverride">
        <section class="section" id="mentor">
            <div></div>
            <div class="heading">
                <div class="title left">ЗНАЙДІТЬ СОБІ<br>МЕНТОРА</div>
                <a class="" href="/mentorship/" target="_blank">
                    <div class="shadow mentorBtn">ЗАЕРЄСТРУВАТИСЯ НА МЕНТОРСТВО</div>
                </a>
            </div>
            <div class="info">
                <div>
                    <img src="/includes/images/icons/mentorIcon1.svg" alt="icon">
                    <h2 class="left">Хто наші ментори?</h2>
                    <div></div>
                    <div>
                        <ul>
                            <li>Екперти з ІТ, провідні спеціалісти кращих ІТ компаній</li>
                            <li>Викладачі кафедри інформатики та інтелектуальної власності НТУ ХПІ</li>
                            <li>Викладачі провідних ІТ шкіл</li>
                            <li>Волонтери з Unit Factory</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="/includes/images/icons/mentorIcon1.svg" alt="icon">
                    <h2 class="left">Чим ментор допоможе?</h2>
                    <div></div>
                    <div>
                        <ul>
                            <li>Практичними порадами по твоєму проекту</li>
                            <li>Цікавими рішеннями</li>
                            <li>Поділитися своїми секретами</li>
                            <li>Надасть впевненості</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <img src="/includes/images/icons/mentorIcon1.svg" alt="icon">
                    <h2 class="left">Як працювати з ментором?</h2>
                    <div></div>
                    <div>
                        <ul>
                            <li>Сформуй ідею своєї розробки</li>
                            <li>Зареєстуйся на консультацію</li>
                            <li>Щотижня отримуй консультацію по реалізації свого проекту</li>
                            <li>Скористайся порадами</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="section" id="lastWinners">
        <div class="upper">
            <h1 class="title left">ПЕРЕМОЖЦІ МИНУЛИХ СЕЗОНІВ</h1>
        </div>
        <div id="fillMe">
            <a class="toDel" target="_blank" href="http://winners.italent.org.ua/">
                <div class="cont">
                    <div class="number">МИНУЛІ СЕЗОНИ</div>
                    <h2>ПЕРЕМОЖЦІ І УЧАСНИКИ</h2>
                    <p>ПЕРЕГЛЯНУТИ</p><i class="arrow icon-arrowRight"></i>
                </div>
            </a>
        </div>
    </section>

    <section class="section" id="organizers">
        <h2 class="title">ОРГАНІЗАТОРИ</h2>
        <div class="myContainer">
            <div>
                <span><img src="/includes/images/partners/KIK.png"
                        alt="organizer"></span>
                <p>МГО “Київський Інтелект Клуб”</p>
            </div>
            <div>
                <span><img class="bigger"
                        src="/includes/images/partners/new_udcpo_logo.png"
                        alt="organizer"></span>
                <p>Український Державний Центр Позашкільної Освіти</p>
            </div>
            <div>
                <span><img
                        src="/includes/images/partners/Garmony.png"
                        alt="organizer"></span>
                <p>ГО “Всесвіт у гармонії”</p>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <h2 class="title left">КОМАНДА</h2>
        <div class="grod">
            <div><img src="/includes/images/Photos/Anton.png"
                    alt="anton">
                <h3 class="subTitle left">Антон Еременко</h3>
                <p>Founder</p>
            </div>
            <div><img src="/includes/images/Photos/Kostya.jpg"
                    alt="kostya">
                <h3 class="subTitle left">Костя Бахарев</h3>
                <p>Project manager</p>
            </div>
            <div><img src="/includes/images/Photos/Vlad.jpg" alt="vlad">
                <h3 class="subTitle left">Владислав Стрільчик</h3>
                <p>Project coordinator</p>
            </div>
        </div>
    </section>
    <?php include "./includes/footer.html";?>
</body>

</html>