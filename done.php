<?php
include_once('conn.php');
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Done</title>
    <style>
        body {
            width: 100%;
            /* height:220vh; */
            height: 100vh;
            background-image: url(./img/home-bg-tools.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .flip-card {
            position: absolute;
            left: 625px;
            top: 250px;
            background-color: transparent;
            width: 245px;
            height: 270px;
            perspective: 1000px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 5px;
            border-radius: 2em;
            backface-visibility: hidden;
        }

        .flip-card-front {
            background-color: #252525;
            border: 4px solid #eeff00;
        }

        .profile-image {
            background-color: transparent;
            border: none;
            margin-top: 15px;
            border-radius: 5em;
            width: 120px;
            height: 120px;
            margin-left: 50px;
        }

        .name {
            position: relative;
            left: 15px;
            margin-top: 100px;
            font-size: 22px;
            color: #eeff00;
            font-weight: bold;
        }

        .flip-card-back {
            background-color: #252525;
            border: 4px solid #eeff00;
            transform: rotateY(180deg);
            padding: 11px;
        }

        .description {
            color: white;
            margin-top: 100px;
            font-size: 14px;
            letter-spacing: 1px;
        }

        .btn a {
            font-weight: bolder;
            background: #eeff00;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
        }

        .btn a {
            color: #000;
            text-decoration: none;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
    </style>
</head>

<body>
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <div class="profile-image">


                    <div class="name">
                        <?php

                        echo $_SESSION['name-boos'] . "<br>";

                        echo "دورك هو " . $_SESSION['id'];

                        ?>
                    </div>
                </div>
            </div>
            <div class="flip-card-back">
                <div class="Description">
                    <p class="description">
                        تم الحجز سنرسل لك رسالة عندما يقترب موعدك
                    </p>
                    <div class="btn">
                        <a href="index.html">الصفحة الرئيسية</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>