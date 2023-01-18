<!-- <html>

<head>
    <title>home</title>
</head>

<body>
    <form method="POST" action="donor.php">
        <input type="submit" value="Add Donor" />
    </form>
    <form method="POST" action="organ.php">
        <input type="submit" value="Donor Donate" />
    </form>
</body>

</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple HTML HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

        body {
            margin: 0;
            box-sizing: border-box;
        }

        /* CSS for header */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
        }



        .nav-items {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #f5f5f5;
            margin-right: 20px;
        }

        .nav-items a {
            text-decoration: none;
            color: #000;
            padding: 35px 20px;
        }

        /* CSS for main element */

        .about-us {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 80px;
            border-top: 2px solid #eeeeee;
        }

        .about-us img {
            width: 500px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .about-us-text h2 {
            font-size: 30px;
            color: #333333;
            text-transform: uppercase;
            margin: 0;
        }

        .about-us-text p {
            font-size: 15px;
            color: #585858;
            margin: 10px 0;
        }

        /* CSS for footer */
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: black;
            padding: 40px 80px;
        }

        .footer .aboutus {
            color: white;
        }
    </style>
</head>

<body>
    <header class="header">
        <nav class="nav-items">
            <a href="donor.php">Add Donor</a>
            <a href="organ.php">Donate</a>
            <a href="organ_bank.php">Tested</a>
            <a href="ordersshow.php">Orders</a>
            <a href="adduser.php">USERS</a>
        </nav>
    </header>
    <main>


        <div class="about-us">
            <div class="about-us-text">
                <h2>Organ Donation Managent</h2>
                <p>Organ donation is defined as giving an organ or part of an organ to be transplanted into another person. Organ transplantation is the only option to save lives in patients affected by terminal organ failures and improve their quality of life. However, there is a disparity exists between the supply and demand of donated organs, leads to a loss of many lives. The number of organ transplantation have gradually increased in the last two decades and provide excellent results in children and young adults, and are challenging by the growing proportion of elderly transplant patients with co morbidity.</p>
            </div>
            <img src="https://domf5oio6qrcr.cloudfront.net/medialibrary/10415/GettyImages-488624012.jpg" alt="me">
        </div>
    </main>
    <footer class="footer">
        <div class="aboutus">
            <h1> Save a life afterlife
                <br>
                Let your life go on in someone’s body
            </h1>
        </div>
        <!-- <div class="bottom-links">
            <div class="links">
                <span>Social Links</span>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div> -->
    </footer>
</body>

</html>