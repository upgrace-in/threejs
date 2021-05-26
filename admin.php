<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        img {
            max-width: 100%;
            height: auto;
        }

        body,
        html {
            background-color: whitesmoke;
            font-family: 'KoHo' !important;
        }

        .fas {
            font-size: 6rem;
        }

        .button {
            font-weight: 800;
        }

        .button:active,
        .button:focus,
        .button:hover {
            border: none !important;
            outline: none !important;
        }

        .fc:focus {
            outline-color: none !important;
            border-color: none !important;
            outline: none !important;
            -webkit-appearance: none;
            box-shadow: none !important;
        }

        .fc {
            font-size: 0.9rem;
            font-weight: 900;
            border: 0.1px solid whitesmoke;
            border-radius: 20px;
        }

        .fc::placeholder {
            font-size: 0.9rem;
            font-weight: 900;
        }

        .opt-btn {
            border: 1.5px solid rgb(219, 219, 219);
            padding: 5px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 20px;
        }

        .opt-btn:hover {
            color: white;
            background: black;
        }

        .ac {
            color: white;
            background: black;
        }

        .form {
            margin-top: 10%;
            border: 1.5px solid rgb(228, 228, 228);
            padding: 30px 25px 30px 25px;
            border-radius: 20px;
            display: none;
        }

        .box {
            margin: 5px;
            background-color: white !important;
            padding: 20px;
            border: 1.5px solid rgb(201, 201, 201);
            border-radius: 10px;
        }

        .fa-times {
            margin-top: 10px;
            cursor: pointer;
            color: red;
            font-size: 1.5rem;
        }

        .box_con {
            margin-top: 4%;
            display: none;
        }

        p {
            margin-bottom: 0 !important;
        }
    </style>
</head>

<body>
    <div class="container main_con mx-auto text-center" style="display: none;">
        <br>
        <h1>Admin Panel</h1>
        <br>
        <div class="col-md-7 nav-cen text-center mx-auto">
            <div class="row">
                <div class="col-md-3">
                    <h6 onclick="open_it(this, '.colors');" class="opt-btn">Colors</h6>
                </div>
                <div class="col-md-3">
                    <h6 onclick="open_it(this, '.interiors');" class="opt-btn">Interior</h6>
                </div>
                <div class="col-md-3">
                    <h6 onclick="open_it(this, '.exteriors');" class="opt-btn">Exterior</h6>
                </div>
                <div class="col-md-3">
                    <h6 onclick="open_it(this, '.price_form');" class="opt-btn">Change Price</h6>
                </div>
            </div>
        </div>
        <hr>
        <div class="col-md-12 box_con colors">
            <div class="row color_div animate__animated animate__fadeInLeft">
            </div>
            <div class="col-md-3 text-center mx-auto animate__animated animate__fadeInUp">
                <br>
                <h6 onclick="open_it(this, '.color_form');" class="opt-btn">Add Color</h6>
            </div>
        </div>
        <div class="col-md-12 box_con interiors">
            <div class="row interior_div animate__animated animate__fadeInLeft">
            </div>
            <div class="col-md-3 text-center mx-auto animate__animated animate__fadeInUp">
                <br>
                <h6 onclick="open_it(this, '.interior_form');" class="opt-btn">Add Interior</h6>
            </div>
        </div>
        <div class="col-md-12 box_con exteriors">
            <div class="row exterior_div animate__animated animate__fadeInLeft"></div>
            <div class="col-md-3 text-center mx-auto animate__animated animate__fadeInUp">
                <br>
                <h6 onclick="open_it(this, '.exterior_form');" class="opt-btn">Add Exterior</h6>
            </div>
        </div>
    </div>

    <div class="container mx-auto text-center">
        <?php
        $password = "38ba0ef529faec6dc4f8bcdba153c9e0";
        $username = "Hari";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pword = $_POST['pword'];
            $uname = $_POST['uname'];
            if (empty($pword) || empty($uname)) {
                echo "<h1>Blank Field Not Allowed</h1>";
            } else if ((md5($pword) == $password) and ($uname == $username)) {
                echo '
                <form action="change.php?change=price" enctype="multipart/form-data" method="POST" class="price_form form col-md-3 text-center mx-auto">
                    <h3>Change Price</h3>
                    <br>
                    <div class="form-group">
                        <input required class="form-control fc price_field" placeholder="Your Price (i.e. 700.00)" type="text" name="price">
                    </div>
                    <br>
                    <button class="btn button btn-outline-dark">Change</button>
                </form>
                <form action="change.php?change=texture&texture_type=exterior" enctype="multipart/form-data" method="POST" class="exterior_form form col-md-3 text-center mx-auto">
                    <h3>Add Exterior Image</h3>
                    <br>
                    <div class="form-group">
                        <input required class="form-control fc" type="file" name="img_file">
                        <small style="color: red;">Please Select An Image To Upload.</small>
                    </div>
                    <br>
                    <button class="btn button btn-outline-dark">Upload</button>
                </form>
                <form action="change.php?change=texture&texture_type=interior" enctype="multipart/form-data" method="POST" class="form interior_form col-md-3 text-center mx-auto">
                    <h3>Add Interior Image</h3>
                    <br>
                    <div class="form-group">
                        <input required class="form-control fc" type="file" name="img_file">
                        <small style="color: red;">Please Select An Image To Upload.</small>
                    </div>
                    <br>
                    <button class="btn button btn-outline-dark">Upload</button>
                </form>
                <form action="change.php?change=color" method="POST" class="form color_form col-md-3 text-center mx-auto">
                    <h3>Add Color</h3>
                    <br>
                    <div class="form-group">
                        <input required class="form-control fc" type="text" placeholder="Color Name" name="name">
                    </div>
                    <div class="form-group">
                        <input required class="form-control fc" type="text" placeholder="HexCode (i.e. 0xffffff)" name="hex_code">
                    </div>
                    <br>
                    <button class="btn button btn-outline-dark">Submit</button>
                </form><script src="main.js"></script>';
            } else {
                echo  "<br><Br><h1>Wrong Details</h1><br><a style='color: red; font-weight: 800;' href='admin.php'>Try Again...</a>";
            }
        } else {
            echo '<div class="container mx-auto text-center">
            <form method="POST" class="col-md-3 mx-auto" style="margin-top: 13%;" action="admin.php">
                <i class="fas fa-user-circle"></i>
                <br><br>
                <div class="form-group">
                    <input required class="form-control fc" type="text" placeholder="Username" name="uname">
                </div>
                <div class="form-group">
                    <input required class="form-control fc" type="password" placeholder="Password" name="pword">
                </div>
                <br>
                <button class="btn button btn-outline-dark">Submit</button>
            </form>
        </div>';
        }
        ?>
    </div>

</body>

</html>