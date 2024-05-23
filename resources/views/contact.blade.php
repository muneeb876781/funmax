@include('Navbar');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>FunPrime Technology - services</title>
    <style>
        .fullscreen {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            background: #0A101E;
        }

        .contactsec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            /* height: auto; */
            min-height: 100vh;
            padding: 30px 170px;
            color: white;
        }

        .contactsec .contactheading {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            color: white;
            position: relative;
        }

        .contactsec .contactheading h1 {
            color: #FAC243;
            font-size: 40px;
            position: relative;
            z-index: 1;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .contactsec .contactheading h1::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 2px;
            background-color: #FAC243;
            z-index: 1;
        }

        .contactsec .contactheading .background-text {
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform: translate(-50%, 35%);
            font-size: 100px;
            font-weight: 700;
            color: #101624;
            z-index: 0;
            text-transform: uppercase;
        }

        .contactsec .contactheading h4 {
            font-size: 15px;
            text-align: center;
            color: #FEC544;
            font-weight: 200;
        }

        .contactsec .contactbody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
        }

        .contactsec .contactbody .contactform {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
            height: auto;
            padding: 20px;
        }

        .contactsec .contactbody .contactform form {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            width: 100%;
            height: auto;
        }

        .contactsec .contactbody .contactform form h1 {
            font-size: 29px;
            font-weight: 400;
            padding: 10px;
        }

        .contactsec .contactbody .contactform form input {
            background: #101624;
            width: 90%;
            padding: 20px;
            color: white;
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;
            margin: 10px;
        }

        .contactsec .contactbody .contactform form textarea {
            background: #101624;
            width: 90%;
            padding: 20px;
            color: white;
            border: none;
            margin-bottom: 10px;
            border-radius: 5px;
            height: 150px;
            margin: 10px;
        }

        .contactsec .contactbody .contactform form button {
            background: #FEC544;
            width: auto;
            padding: 10px 20px;
            color: #101624;
            border: none;
            border-radius: 50px;
            margin: 10px;
            font-size: 20px;
        }

        .contactsec .contactbody .contactinfo {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            width: 50%;
            height: auto;
            color: white;
        }

        .contactsec .contactbody .contactinfo h1 {
            font-size: 29px;
            font-weight: 400;
            padding: 10px;
        }

        .contactsec .contactbody .contactinfo p {
            font-size: 19px;
            font-weight: 300;
            padding: 10px;
        }

        .contactsec .contactbody .contactinfo .contactcard {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
        }

        .contactsec .contactbody .contactinfo .contactcard .contactcardimg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 20%;
            height: auto;
        }

        .contactsec .contactbody .contactinfo .contactcard .contactcardimg .fas {
            font-size: 30px;
            color: #FEC544;
            padding: 15px;
            border-radius: 100%;
            border: 6px solid #101624;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
        }

        .contactsec .contactbody .contactinfo .contactcard .contactcardcontent {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            width: 80%;
            height: auto;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 10px;
        }

        .contactsec .contactbody .contactinfo .contactcard .contactcardcontent h3 {
            font-size: 24px;
            font-weight: 400;
        }

        .contactsec .contactbody .contactinfo .contactcard .contactcardcontent p {
            font-size: 19px;
            font-weight: 200;
            padding: 0;
        }

        .contactsec .contactbody .contactinfo .contactsocialmedia {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            padding: 10px;
            width: 100%;
            height: auto;
        }

        .contactsec .contactbody .contactinfo .contactsocialmedia a {
            text-decoration: none;
            margin: 10px;
        }

        .contactsec .contactbody .contactinfo .contactsocialmedia a .fab {
            font-size: 20px;
            color: #FEC544;
            padding: 15px;
            border-radius: 100%;
            border: 6px solid #101624;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
        }

        /* Media Queries */
        @media (max-width: 1200px) {
            .contactsec {
                padding: 30px 100px;
            }

            .contactsec .contactheading {
                padding: 30px 100px;
            }

            .contactsec .contactheading h1 {
                font-size: 35px;
            }

            .contactsec .contactheading .background-text {
                font-size: 80px;
            }

            .contactsec .contactbody {
                padding: 30px 100px;
            }
        }

        @media (max-width: 992px) {
            .contactsec {
                padding: 30px 50px;
            }

            .contactsec .contactheading {
                padding: 30px 50px;
            }

            .contactsec .contactheading h1 {
                font-size: 30px;
            }

            .contactsec .contactheading .background-text {
                font-size: 60px;
            }

            .contactsec .contactbody {
                padding: 30px 50px;
            }

            .contactsec .contactbody .contactform,
            .contactsec .contactbody .contactinfo {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .contactsec {
                padding: 20px;
            }

            .contactsec .contactheading {
                padding: 20px;
            }

            .contactsec .contactheading h1 {
                font-size: 25px;
            }

            .contactsec .contactheading .background-text {
                font-size: 50px;
            }

            .contactsec .contactbody {
                padding: 20px;
                flex-direction: column;
            }

            .contactsec .contactbody .contactform,
            .contactsec .contactbody .contactinfo {
                width: 100%;
                padding: 10px 0;
            }
        }

        @media (max-width: 576px) {
            .contactsec .contactheading h1 {
                margin-top: 20px;
                font-size: 20px;
            }

            .contactsec .contactheading .background-text {
                font-size: 40px;
            }

            .contactsec .contactbody {
                padding: 10px;
            }

            .contactsec .contactbody .contactform form input,
            .contactsec .contactbody .contactform form textarea {
                width: 100%;
            }
        }

    </style>
</head>

<body>
    <div class="fullscreen">
        <div class="contactsec">
            <div class="contactheading">
                <h1>Contact
                </h1>
                <h4>Feel free to contact anytime with any querry.
                </h4>
                <div class="background-text">Contact</div>
            </div>
            <div class="contactbody">
                <div class="contactform">
                    <form class="cform" action="#">
                        @csrf
                        <h1>Just Say Hello</h1>

                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your Email">
                        <input type="text" placeholder="Your Subject">
                        <textarea type="text" placeholder="Your Message"></textarea>
                        <button>Send Message</button>
                    </form>
                </div>
                <div class="contactinfo">
                    <h1>Contact Info</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa consequuntur veritatis esse
                        aspernatur reprehenderit sapiente nisi quasi aperiam dolore tempore!</p>
                    <div class="contactcard">
                        <div class="contactcardimg">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contactcardcontent">
                            <h3>Email</h3>
                            <p>info@funprimetechnology.com</p>
                        </div>
                    </div>
                    <div class="contactcard">
                        <div class="contactcardimg">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contactcardcontent">
                            <h3>Phone</h3>
                            <p>+92 51 2814198</p>

                        </div>
                    </div>
                    <div class="contactcard">
                        <div class="contactcardimg">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contactcardcontent">
                            <h3>Address</h3>
                            <p>1. Office # 1204, 12th Floor, Green Trust Tower, Service Road, Blue Area، Jinnah Ave, F
                                6/1 Blue Area, Islamabad, Pakistan.</p>
                            <br>
                            <p>2. Compass Building, Al Shohada Road, AL Hamra Industrial Zone-FZ, Ras Al Khaimah, United
                                Arab Emirates</p>
                        </div>
                    </div>
                    <div class="contactsocialmedia">
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.google.com" target="_blank">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>

        @include('footer');

    </div>
</body>

</html>
