<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ahmed</title>
</head>
<body>
    <?php 
    use Zxing\QrReader;
    require "C:/laragon/www/decrypttest/vendor/autoload.php";
    // $image = 'file:///C:/laragon/www/labor/public/qr_code/ahmed.png';

        $qrcode = new QrReader('https://ibb.co/gTXVSc5');
        $text = $qrcode->text();
        echo $text;
        
    ?>
    <img src="ahmed.png" alt="">
</body>
</html>
