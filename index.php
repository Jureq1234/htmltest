<?php
echo @$_SESSION['zalogowany'];
if (@$_SESSION['zalogowany'] != 1 or !isset($_SESSION['zalogowany'])) {

    echo "brak dostepu";
} else {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css.css">
        <title>Document</title>

    </head>

    <body>
        <div class="content">
            <div class="top">
                <ul>

                    <li><a href=""> link</a></li>
                    <li><a href=""> link</a></li>
                    <li><a href=""> link</a></li>

                </ul>
            </div>
            <div class="bottom">
                <div class="card">
                    <div class="image-part"></div>
                    <div class="desc-part">opis</div>
                </div>
                <div class="card">
                    <div class="image-part"></div>
                    <div class="desc-part">opis</div>
                </div>
                <div class="card">
                    <div class="image-part"></div>
                    <div class="desc-part">opis</div>
                </div>
                <div class="card">
                    <div class="image-part"></div>
                    <div class="desc-part">opis</div>
                </div>
                <div class="card">
                    <div class="image-part"></div>
                    <div class="desc-part">opis</div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} ?>