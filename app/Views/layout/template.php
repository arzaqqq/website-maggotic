<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maggotic</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="icon" type="image/png" href="<?= base_url('img/logotitel.png')?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
        font-family: "Poppins", sans-serif;
        background-color: white;
        padding-top: 56px;
    }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar');?>

    <?= $this->renderSection('content'); ?>

    <?= $this->include('layout/footer'); ?>


</body>

</html>