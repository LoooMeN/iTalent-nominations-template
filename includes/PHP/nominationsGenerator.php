<?php
    header("Content-Type: text/plain");
    $data = file_get_contents("../data/nominations.json");
    $data = json_decode($data, true);
    $test = $data["nomination1"];
    foreach ($data as $test) {
        $name = explode("/", $test["url"]);
        $name = $name[count($name) - 2];
        $name = "../../nominations/" . $name;
        if (!file_exists($name))
            mkdir($name);
        $string = "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='/includes/CSS/nominationStyle.css'>
    <?php include '../../includes/header.html';?>
    <title>".$test['ukrName']."</title>
</head>
<body>
    <script>
        var page = '".$test["id"]."';
    </script>";
    
    $string .= "
    <section class='section' id='aboutNomination'>
    <h1 class='title'>".$test['ukrName']."</h1>
    <p>".$test['desc']."</p>
</section>
";

    if ($test["partner"]["name"] != "none") {
        $string .= "

    <section class='section' id='partner'>
        <h2>Партнер номінації:</h2>
        <div>
            <a href='https://www.grammarly.com/' target='_blank' rel='noopener noreferrer'><img
                    src='https://italent.org.ua/wp-content/uploads/2019/10/grammarly_logo.svg' alt='grammarly'></a>
            <p><span>Grammarly</span> — це міжнародна компанія, яку заснували українці. Нещодавно вона стала
                'єдинорогом' (її вартість перевищила 1 млрд $). Grammarly створює онлайн-сервіс на основі штучного
                інтелекту для допомоги в написанні текстів англійською мовою.</p>
        </div>
    </section>
    ";
    }
    $string .= "
    <section id='ageGroups' class='section'>
        <div class='ageGroupsWrapper'>
            <div class='ageGroupWrapper shadow'>
                <div class='ageGroupPreview'>
                    <img src='".$test['age'][1]['image']."'
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
            <img src='".$test['age'][2]['image']."'
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
                <img src='".$krit['icon_link']."' alt='icon'>
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
    print_r($test['vimogi']);
    foreach ($test['vimogi'] as $vim) {
        if ($vim['desc'][0] != '<')
            $vim['desc'] = '<p>'.$vim['desc'].'</p>';
        $string .= "<div class='vimogaWrapper'>
                    <img class='icon' src='".$vim['icon_link']."' alt='icon'>
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
    <a href='https://italent.org.ua/#last_season' class='CTAbutton shadow unselectable'>
        <p>роботи попредніх сезонів</p>
        <img class='buttonImg' src='https://italent.org.ua/wp-content/uploads/2019/08/Vector-3.png'>
    </a>
    <a href='https://italent.org.ua/mentorship/' class='CTAbutton shadow unselectable'>
        <p>потрібна допомога с проектом?</p>
        <img class='buttonImg' src='https://italent.org.ua/wp-content/uploads/2019/08/Vector-3.png'>
    </a>
</section>

<section id='judgeList' class='section'>
    <h1 class='title'>СУДДІ НОМІНАЦІЇ</h1>
    <div class='grod' id='judgeGrod'>
        <script type='module' src='/includes/JS/judges.js'></script>
    </div>
    <a href='https://italent.org.ua/#judges'>
        <div class='judgeButton shadow'>усі судді</div>
    </a>
</section>

<?php include '../../includes/footer.html';?>

</body>

</html>";



file_put_contents($name . "/index.php", $string);
}
?>