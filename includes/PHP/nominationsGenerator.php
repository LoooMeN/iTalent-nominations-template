<?php
    header("Content-Type: text/plain");
    $data = file_get_contents("../data/nominations.json");
    $data = json_decode($data, true);

    if (!file_exists('../../nominations'))
        mkdir('../../nominations');
    foreach ($data as $test) {
        $name = explode("/", $test["url"]);
        $name = $name[count($name) - 2];
        $name = "../../nominations/" . $name . ".php";
        $string = "
<!DOCTYPE html>
<html lang='uk'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='/includes/CSS/nominationStyle.css'>
    <?php include '../includes/meta.html';?>
    <script src='/includes/JS/youtube.js'></script>
    <title>".$test['ukrName']." | iTalent всеукраїнський конкурс з IT та кіберспорту</title>
</head>";

$string .= "<body>
    <?php include '../includes/header.html';?>
    <script>
        var page = '".$test["id"]."';
    </script>";

    $string .= "
    <section class='section' id='aboutNomination'>
    <h1 class='title'>".$test['ukrName']."</h1>
    <p>".$test['desc']."</p>
</section>
";

if ($test['status'] == "no"){
    $string .= "<div class='anouncement'>
    <h3>Ця номінація ще не готова!</h3>
    <p>Інформація на цій сторінці не оновлена! Тема роботм, вимоги і критерії можуть змінюватися.</p><p>Ми повідомимо вас у соц. мережах щойно номінація буде готова</p>
    <div id='announceButton' style='margin-bottom: 40px;'>
        ЗРОЗУМІЛО
    </div>
    <section class='section' id='mediaLinks' style='margin-top: 40px; padding-top: 0;'>
    <div class='grod'>
        <a href='https://discord.gg/ywTQTpN' target='_blank' class=' button unselectable shadow discord discordHovered aHovered'>
            <img loading='lazy'  src='/includes/images/icons/discord.webp' alt='discord'>
            <p>Приєднуйтеся Discord</p>
        </a>
        <a href='https://telegram.im/@ITalent_ua' target='_blank' class='button unselectable shadow telegram telegramHovered aHovered'>
            <img loading='lazy'  src='/includes/images/icons/telegram.webp' alt='telegram'>
            <p>Приєднуйтеся Telegram</p>
        </a>
        <a href='https://www.facebook.com/iTalent.ua/' target='_blank' class='button unselectable shadow facebook facebookHovered aHovered'>
            <img loading='lazy'  src='/includes/images/icons/facebook.webp' alt='facebook'>
            <p>Приєднуйтеся Facebook</p>
        </a>
        <a href='/faq-it/' target='_blank' class='button unselectable shadow faq faqHovered aHovered'>
            <img loading='lazy'  src='/includes/images/icons/info.webp' alt='faq'>
            <p>Перегляньте FAQ</p>
        </a>
    </div>
</section>
</div>";};

    if ($test["partner"]["name"] != "none") {
        $string .= "

    <section class='section' id='partner'>
        <h2>Партнер номінації:</h2>
        <div>
            <a href='".$test['partner']['link']."' target='_blank' rel='noopener noreferrer'><img loading='lazy' 
                    src='".$test['partner']['image_link']."' alt='".$test['partner']['name']."'></a>
            <p><span>".$test['partner']['name']."</span>".$test['partner']['desc']."</p>
        </div>
    </section>
    ";
    }
    $string .= "
    <section id='ageGroups' class='section'>
        <div class='ageGroupsWrapper'>
            <div class='ageGroupWrapper shadow'>
                <div class='ageGroupPreview'>
                    <img loading='lazy'  src='".$test['age'][1]['image']."'
                        alt='Вікова категорія 1'>
                    <div class='age blueGrad'>
                        <h2>Від ".$test['age'][1]['from'].' до '.$test['age'][1]['to']." років</h2>
                        <p>Тема роботи: ".$test['age'][1]['tema']."</p>
                    </div>
                </div>";
                if ($test['age'][1]["task"] != "none")
                    $string .= "<ul class='explanation'>".$test['age'][1]["task"]."</ul>";
                $string .= "</div>";
    if ($test['age'][2])
    {
        $string .= "<div class='ageGroupWrapper shadow'>
        <div class='ageGroupPreview'>
            <img loading='lazy'  src='".$test['age'][2]['image']."'
                alt='Вікова категорія 1'>
            <div class='age redGrad'>
                <h2>Від ".$test['age'][2]['from'].' до '.$test['age'][2]['to']." років</h2>
                <p>Тема роботи: ".$test['age'][2]['tema']."</p>
            </div>
        </div>";
        if ($test['age'][2]["task"] != "none")
            $string .= "<ul class='explanation'>".$test['age'][2]["task"]."</ul>";
        $string .= "</div>";
    }


    $string .= "        </div>
    <p>*Допускається розробка та подача проектів у складі команди, проте зауважте, що у разі
        перемоги - одна робота отримує одну нагороду.</p>
    </section>";

    $string .= "
    <div class='kriteriiBg'>
    <section id='kriterii' class='section'>
        <h1 class='title'>Критерії за якими будуть<br>оцінювати вашу роботу</h1>
        <div class='kriterii'>
        ";

    foreach ($test['kriterii'] as $krit) {
        $string .= "    <div class='innerWrapper shadow'>
                <img loading='lazy'  src='".$krit['icon_link']."' alt='icon'>
                <h2>".$krit['name']."</h2>
                ".$krit['desc']."</div>
        ";
    }

    $string .= "</div>
    </section>
</div>";

    $string .= "
    <div class='vimogiBg'>
        <section class='section' id='vimogi'>
            <h1 class='title'>Вимоги до<br>вашої роботи:</h1>
            <div class='vimogi'>
    ";
    foreach ($test['vimogi'] as $vim) {
        if ($vim['desc'][0] != '<')
            $vim['desc'] = '<p>'.$vim['desc'].'</p>';
        $string .= "<div class='vimogaWrapper'>
                    <img loading='lazy'  class='icon' src='".$vim['icon_link']."' alt='icon'>
                    <div class='text'>
                        <h3>".$vim['name']."</h3>
                        ".$vim['desc']."
                    </div>
                </div>";
    }
    $string .= "</div>
    </section>
</div>";

$string .= "<section class='section' id='registration'></section>

<section id='CTAbuttons' class='section'>
    <a href='http://winners.italent.org.ua/' class='CTAbutton shadow unselectable'>
        <p>роботи попередніх сезонів</p>
        <img loading='lazy'  class='buttonImg' src='/includes/images/icons/Vector-3.webp' alt='button'>
    </a>
    <a href='/mentorship/' class='CTAbutton shadow unselectable'>
        <p>потрібна допомога с проектом?</p>
        <img loading='lazy'  class='buttonImg' src='/includes/images/icons/Vector-3.webp' alt='button'>
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

</html>";



file_put_contents($name, $string);
};
echo ('Nominations generated.');
?>
