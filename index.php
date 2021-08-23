<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Waypoint CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
        <!-- Counter Up CND -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Font Awesome 4.7 CDN Link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
        <!-- Remove Favicon -->
        <link rel="shortcut icon" href="images/vir.jpg" type="image/x-icon" />
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <title>Novel Corona Virus</title>
    </head>

    <body onload="fetch()">

        <div class="loader_bg">
            <div class="loader"></div>
        </div>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg nav_style p-3">
            <a class="navbar-brand pl-5 font-weight-bolder" href="index.php">COVID-19</a>
            <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto pr-5 text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutid">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sympid">symptoms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#previd">prevention</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactid">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Logo & Main Div -->
        <div class="main_header">
            <div class="row w-100 h-100">
                <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
                    <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                        <img src="images/unity.gif" alt="Corona Virus" class="logo">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
                    <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                        <h1> Stay Home <i class="fa fa-home text-primary"></i> <span class="text"> Stay Safe </span><p> Fight Against Cor<span class="rotate"><img src="images/O.png" alt="O"></span>na </p> </h1>

                    </div>
                </div>
            </div>
        </div>
        <!-- Lastest Update -->
        <section class="corona_update container-fluid">
            <div class="mb-3">
                <h3 class="text-capitalize text-center"> <span class="update">COVID-19</span> Update </h3>
                <h4 class="text-capitalize text-center">India</h4><p></p>
            </div>

            
            <div class="d-flex justify-content-around align-items-center count_style">
                <div>
                    <h1 class="count"> 21350 </h1>
                    <p class="text-capitalize"> Confirmed cases </p>
                </div>
                <div>
                    <h1 class="count"> 16317 </h1>
                    <p class="text-capitalize"> Active Covid-19 cases </p>
                </div>
                <div>
                    <h1 class="count"> 4352 </h1>
                    <p class="text-capitalize"> Cured/Discharged cases </p>
                </div>
                <div>
                    <h1 class="count"> 681 </h1>
                    <p class="text-capitalize"> Death Cases </p>
                </div>
                <div class="update_button">
                    <form action="https://www.covid19india.org/" target="_blank"><button type="submit" class="btn btn-outline-success">Latest Update</button></form>
                </div>    
            </div>
            

            <div class="table-responsive">
                <h4 class="text-capitalize text-center">World!</h4><p></p>
                <table class="table table-bordered table-striped text-center" id="tbval">
                    <tr>
                        <th>Country</th>
                        <th style="color: #3742fa">TotalConfirmed</th>
                        <th style="color: #44bd32">TotalRecovered</th>
                        <th style="color: #ff3f34">TotalDeaths</th>
                        <th style="color: #3742fa">NewConfirmed</th>
                        <th style="color: #44bd32">NewRecovered</th>
                        <th style="color: #ff3f34">NewDeaths</th>
                    </tr>
                </table>
                
            </div>

        </section>
        <!-- About -->
        <section class="about_corona">
            <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
                <div class="section_header text-center mb-5 mt-5">
                    <h1> About COVID-19 </h1>
                </div>
                <div class="row pt-2">
                    <div class="col-lg-5 col-md-6 col-12">
                        <img src="images/coronavirusabout.jpg" alt="aboutcovid" class="about pl-5 img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2><b> What is COVID-19 (Corona-Virus)? </b><br>
                            <span class="text-primary"> According to World Health Organization (WHO) </span>
                        </h2>
                        <p> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                            Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. </p>
                        <p> The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Symptoms -->
        <section class="symtoms_corona">
            <div class="container-fluid pt-5 pb-5" id="sympid">
                <div class="section_header text-center mb-5 mt-4">
                    <h1> COVID-19 Symtoms </h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class="text-center">
                                <img src="images/fever.png" alt="Fever" class="img-fluid" width="120" height="120">
                                <figcaption> Fever </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class="text-center">
                                <img src="images/cough1.jpg" alt="Fever" class="img-fluid" width="120" height="120">
                                <figcaption> Cough </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class="text-center">
                                <img src="images/breath.png" alt="Fever" class="img-fluid" width="120" height="120">
                                <figcaption> Difficulty in Breathing </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class="text-center">
                                <img src="images/cold.jpeg" alt="Fever" class="img-fluid" width="120" height="120">
                                <figcaption> Cold & Cough </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class="text-center">
                                <img src="images/runny-nose.png" alt="Fever" class="img-fluid" width="120" height="120">
                                <figcaption> Runny-Nose </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <figure class="text-center">
                                <img src="images/sick.jpeg" alt="Fever" class="img-fluid" width="120" height="120">
                                <figcaption> Sick/Tiredness </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Prevention -->
        <section class="prevent_corona">
            <div class="container-fluid sub_section pt-5 pb-5" id="previd">
                <div class="section_header text-center mb-5 mt-4">
                    <h1> 3 easy-Steps to Prevent Nobel Corona Virus </h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/hwash.png" alt="Wash Hand" class="img-fluid" width="90" height="90">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p class="text-align-left"> Wash Your Hands Properly with soap or alcohol-based sanitizer </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/quarantine.png" alt="Home Quarantine" class="img-fluid" width="90" height="90">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p class="text-align-left"> Avoid close contact with People (1 meter or 3 feets),
                                        Home Quarantine Yourself till <span class="text-primary"> 3rd May </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12 mt-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <figure class="text-center">
                                        <img src="images/mask.png" alt="Wear Mask" class="img-fluid" width="90" height="90">
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-12">
                                    <p class="text-align-left"> Cover your Nose and Mouth with Mask, fix your elbow while coughing and sneezing </p>
                                </div>
                            </div>
                        </div>
                        <p class="prevention_info">
                            According to WHO : The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact us -->
        <section class="contact">
            <div class="container-fluid pt-5 pb-5" id="contactid">
                <div class="section_header text-center mb-5 mt-4">
                    <h1> Contact Us </h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 col-12">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="name" class="form-control" name="username" placeholder="Enter your Name" autocomplete="off" required />
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="number" class="form-control" name="mobile" placeholder="Enter your conatact no" autocomplete="off" required />
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="address" class="form-control" name="address" placeholder="Enter your address" autocomplete="off" required />
                                </div>
                                <div class="form-group">
                                    <label> Select Symptoms </label> <br>

                                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                        <label class="custom-control-label" for="customcheckbox1">Cold</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="cough">
                                        <label class="custom-control-label" for="customcheckbox2">cough</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="fever">
                                        <label class="custom-control-label" for="customcheckbox3">fever</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="breath">
                                        <label class="custom-control-label" for="customcheckbox4">breathing problem</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox5" name="coronasym[]" value="tird">
                                        <label class="custom-control-label" for="customcheckbox5">tiredness</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                        <input type="checkbox" class="custom-control-input" id="customcheckbox6" name="coronasym[]" value="no problem">
                                        <label class="custom-control-label" for="customcheckbox6">no problem</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Define your Problems</label>
                                    <textarea class="form-control" name="message" rows="3"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-success btn-block" name="submit" value="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Top Cursor -->
        <div class="container scrolltop float-right pr-5">
            <i class="fa fa-arrow-up" aria-hidden="true" onclick="topFunction()" id="myBtn"></i>
        </div>
        <!-- Footer -->
        <footer class="mt-5">
            <div class="d-flex justify-content-around align-items-center count_style">
             
            <div class="footer_style container-fluid">
                
                <p></p>
                <span class="share text-white"><i class="fas fa-share-alt"></i> Share!</span>
                <a href="#" class="fb"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="tw"><i class="fab fa-twitter"></i></a>
                <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
                <a href="#" class="lin"><i class="fab fa-linkedin-in"></i></a>                           
             </div> 

             <div class="footer_style container-fluid">

                <h6 class="text-white"> <i class="fa fa-copyright fa-1.5x text-black"></i><a href="https://github.com/soutrikacharya" target="_blank" class="text-white"> SOUTRIK ACHARYA </a></h6>
                <p></p>
            </div>

            </div>
        </footer>
        <!-- JavaScript -->
        <script>
            //JQuery for Counter
            $('.count').counterUp({
                delay: 10,
                time: 3000
            })
            //JavaScript for Arrow button
            mybutton = document.getElementById("myBtn");
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            //Fetch API
            function fetch(){
                $.get("https://api.covid19api.com/summary",
                    function (data){
                        var tbval = document.getElementById('tbval');
                        for (var i=1; i<(data['Countries'].length); i++){
                            var x = tbval.insertRow();

                            x.insertCell(0);
                            tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                            tbval.rows[i].cells[0].style.background = '#fdcb6e';
                            tbval.rows[i].cells[0].style.color = '#b33939';

                            x.insertCell(1);
                            tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                            tbval.rows[i].cells[1].style.background = '#778beb';

                            x.insertCell(2);
                            tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                            tbval.rows[i].cells[2].style.background = '#b8e994';

                            x.insertCell(3);
                            tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                            tbval.rows[i].cells[3].style.background = '#ffb8b8';

                            x.insertCell(4);
                            tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                            tbval.rows[i].cells[4].style.background = '#778beb';

                            x.insertCell(5);
                            tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                            tbval.rows[i].cells[5].style.background = '#b8e994';

                            x.insertCell(6);
                            tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                            tbval.rows[i].cells[6].style.background = '#ffb8b8';

                        }
                    }
                );
            }

            setTimeout(function(){
                $('.loader_bg').fadeToggle();
            }, 1500);

        </script>
    </body>

</html>

<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $symp = $_POST['coronasym'];
    $message = $_POST['message'];

    $check = "";
    foreach ($symp as $check1) {
        $check .= $check1 . ",";
    }

    $insert = "INSERT INTO coronacase (username, email, mobile, address, symp, message)
    VALUES ('$username', '$email', '$mobile', '$address', '$check', '$message')";

    $query = mysqli_query($con, $insert);

    if ($query) {
        ?>
        <script type="text/javascript">
            alert("Your Information Inserted Successfully!");
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert("Information is not Inserted");
        </script>
        <?php
    }
}
?>
