<?php
include_once('conn.php');
session_start();

if (isset($_POST['submit'])) {
    $NameBoos = $_POST['name-boos'];
    $NumberPhone = $_POST['number-phone'];

    $sql = "INSERT INTO Chicago (`name-boos`, `number-phone`) VALUES ('$NameBoos', '$NumberPhone')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $id = mysqli_insert_id($conn); // استرداد معرف الصف المدخل حديثًا
        $_SESSION['id'] = $id;
        $_SESSION['name-boos'] = $NameBoos;
        header('location: done.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicago salon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        * {
            margin: 0px auto;
            padding: 0px;
            box-sizing: border-box;
        }

        .main {
            width: 100%;
            height: 100vh;
            background-image: url(./img/home-bg-tools.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .join {
            content: "";
            position: relative;
            top: 100px;
            background: #ffdd00;
            border-radius: 30px;
            width: 320px;
            height: 400px;
        }

        .join .logo img {
            width: 200px;
            position: absolute;
            left: 60px;
            top: 30px;
        }

        .join .name-boos {
            position: absolute;
            top: 170px;
            right: 70px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            padding: 5px;
        }

        .join .number-phone {
            position: absolute;
            top: 220px;
            right: 70px;
            font-weight: bold;
            border-radius: 5px;
            border: none;
            padding: 5px;
        }

        .join .submit {
            position: absolute;
            top: 280px;
            right: 90px;
            align-items: center;
            padding: 5px 40px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            font-size: 15px;
            transition: 0.5s;
        }

        .join .submit:hover {
            color: white;
            background: #000;
        }

        @media screen and (max-width : 900px) {
            .join {
                top: 260px;
        }
    }
    </style>
</head>

<body>
    <section class="main" data-aos="fade-in">
        <div class="join">
            <div class="logo" data-aos="fade-down" data-aos-duration="1000">
                <img src="./img/LOGO.png" alt="Chicago">
            </div>
            <!-- inputs -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <input type="text" class="name-boos" name="name-boos" placeholder="أدخل الاسم" required
                    data-aos="fade-down" data-aos-duration="1000">
                <br>
                <input type="text" class="number-phone" name="number-phone" placeholder="أدخل رقم الهاتف" required
                    max="10" min="10" data-aos="fade-down" data-aos-duration="1000">
                <br>
                <input type="submit" class="submit" name="submit" value="احجز الأن" data-aos="fade-down"
                    data-aos-duration="1000">
            </form>
            <?php

            ?>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>