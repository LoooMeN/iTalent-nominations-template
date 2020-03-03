<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/includes/CSS/mentorStyle.css">
    <title>Менторство | iTalent всеукраїнський конкурс з IT та кіберспорту</title>
    <?php include "./includes/meta.html";?>
</head>

<body>
    <?php include "./includes/header.html";?>
    <script>
        var page = 'mentor';
    </script>

    <section class="smallSection" id="head">
        <h2 class="title left bigger">Менторство</h2>
        <div class="youtube-player" data-id="EL3f55WH7qc"></div>
        <script src="/includes/JS/youtube.js"></script>
        <div class="grod">
            <div>
                <p>Навіщо це тобі?<br> Часто під час створення проекту для конкурсу у тебе може виникнути питання:</p>
            </div>
            <div>
                <ul>
                    <li>Як зробити ту чи іншу штуку ?</li>
                    <li>Як вирішити проблему, яка у тебе виникла?</li>
                    <li>Як зробити проект більш яскравим?</li>
                    <li>Які технічні засоби використати/</li>
                    <li>Або навіть, що потрібно зробити щоб мій проект переміг?</li>
                    <li>Ну або ж будь-яке інше ...</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="mentorBg">
        <section class="smallSection" id="about">
            <div class="bgOverride">
                <h3>Питання виникло – а як знайти відповідь?
                </h3>
                <p>Ось саме для цього потрібен ментор – підказати та направити тебе до твого блискавичного проекту</p>
            </div>
        </section>

        <section class="smallSection" id="ctaMentor">
            <h2 class="title">ЯК ПРОХОДИТЬ МЕНТОРСТВО?</h2>
            <div class="grod">
                <div class="shadow">
                    <p>Якщо в тебе маленьке та не дуже складне питання<br>Звернись до чату - тут тобі дадуть швидку
                        відповідь</p>
                    <a class="discord" href="">
                        <div>
                            <i class="icon-arrowRight"></i>
                        </div>
                    </a>
                </div>
                <div class="shadow">
                    <p>Якщо ти хочеш отримати детальні настанови по своєму проекту<br>Запишись на індивідуальне
                        менторство iTalent
                    </p>
                    <a href="https://forms.gle/meG18JJbdyZQeVZt6">
                        <div>
                            <i class="icon-arrowRight"></i>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <div class="wrapperAttention">
        <section class="smallSection" id="attentionMentor">
            <div class="textIcon">!!!</div>
            <h2 class="title">УВАГА ! ! !</h2>
            <p>Зауважте що кількість менторів і їх час обмежений, тому, на жаль, ми не можемо гарантувати що усі
                учасники
                конкурсу що зареєструються до програми індивідуального менторства (консультації face-2-face онлайн)
                отримають цю можливість. Тому не чекайте знаку зверху і реєструйтесь саме зараз 🙂</p>
        </section>
    </div>

    <section class="section" id="howMentorsWork">
        <h2 class="title">ЯК ПРОХОДИТЬ ІНДИВІДУЛЬЕ МЕНТОРСТВО?</h2>
        <div class="grod">
            <div>
                <div class="flexington">
                    <div class="myIcon">
                        <img src="/includes/images/icons/Ellipse1.webp" alt="icon">
                        <p>1</p>
                    </div>
                    <div>
                        <h3>Ти реєструєшся</h3>
                        <p>та детально розписуєш питання і надаєш доступ до свого проекту
                            (якщо він вже хоч трішки готовий)</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="flexington">
                    <div class="myIcon">
                        <img src="/includes/images/icons/Ellipse1.webp" alt="icon">
                        <p>2</p>
                    </div>
                    <div>
                        <h3>Ми перевіряємо</h3>
                        <p>надану тобою інформацію та зв’язуємось із тобою по телефону чи в діскорді</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="flexington">
                    <div class="myIcon">
                        <img src="/includes/images/icons/Ellipse1.webp" alt="icon">
                        <p>3</p>
                    </div>
                    <div>
                        <h3>У назначений тобі час</h3>
                        <p>ментор зв’яжеться із тобою голосом через діскорд та допоможе вирішити усі питання</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="mentorListBg">
        <section class="section" id="mentorList">
            <h2 class="title left">ХТО БУДЕ ТВОЇМ МЕНТОРОМ</h2>
            <div class="grod" id="mentorGrod">
                <script type="module" src="/includes/JS/mentors.js"></script>
            </div>
        </section>
    </div>
    <?php include "./includes/footer.html";?>
</body>

</html>