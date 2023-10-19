<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box {
            width: 50%;
            height: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            border-width: 2px;
            border-color: red;
            border-style: dashed;
            text-align: center;

            <?php 
                if (!empty($_POST)) {
                    @$bg_color = $_POST['bg'];
                    @$text_color = $_POST['bg'];

                    if (ctype_xdigit($bg_color)) {
                        echo "color: #$bg_color;";
                    }
                    if (ctype_xdigit($text_color)) {
                        echo "background-color: #$text_color;";
                    }
                }            
            ?>
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Wiktor Sikora</h1>
    </div>

</body>
</html>