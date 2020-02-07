<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/includes/JS/functions.js"></script>
    <link rel="stylesheet" href="/includes/CSS/judges.css">
    <title>Судді</title>
    <?php include "./includes/header.html";?>
    <script>
        var page = "judge";
    </script>
</head>

<body>
    <section id="judgeList" class="section">
        <h1 class="title">СУДДІ</h1>
        <div class="grod" id="judgeGrod">
            <script type="module" src="/includes/JS/judges.js"></script>
        </div>
    </section>
    <?php include "./includes/footer.html";?>
    <script>
        build_page();
    </script>
</body>

</html>