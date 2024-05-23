@include('Navbar');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FunPrime Technology - services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

        .servicessec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            /* height: auto; */
            min-height: 90vh;
            padding: 30px 170px;
            color: white;
        }

        .servicessec .servicesheading {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            padding: 30px;
            position: relative;
        }

        .servicessec .servicesheading h1 {
            color: #FAC243;
            font-size: 40px;
            position: relative;
            z-index: 1;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .servicessec .servicesheading h1::after {
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

        .servicessec .background-text {
            position: absolute;
            bottom: 50%;
            left: 50%;
            transform: translate(-50%, 40%);
            font-size: 100px;
            font-weight: 700;
            color: #101624;
            z-index: 0;
            text-transform: uppercase;
        }

        .servicessec .servicesheading h4 {
            font-size: 15px;
            text-align: center;
            color: #FEC544;
            font-weight: 200;
        }

        .servicessec .servicescontent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            height: auto;
            padding: 30px;
        }

        .servicessec .servicescontent .servicecard {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 30%;
            height: auto;
            padding: 20px 40px;
            background: #101624;
            margin: 10px;
            height: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
        }

        .servicessec .servicescontent .servicecard img {
            width: 100px;
            height: auto;
            padding: 17px;
            border: 1px solid #101624;
            background: #0A101E;
            border-radius: 100%;
        }

        .servicessec .servicescontent .servicecard h1 {
            font-size: 22px;
            text-align: center;
        }

        .servicessec .servicescontent .servicecard p {
            font-size: 15px;
            text-align: center;
        }

        /* Media Queries */
        @media (max-width: 1200px) {
            .servicessec {
                padding: 30px 100px;
            }

            .servicessec .servicesheading h1 {
                font-size: 35px;
            }

            .servicessec .background-text {
                font-size: 80px;
            }

            .servicessec .servicescontent .servicecard {
                width: 45%;
            }
        }

        @media (max-width: 992px) {
            .servicessec {
                padding: 30px 50px;
            }

            .servicessec .servicesheading h1 {
                font-size: 30px;
            }

            .servicessec .background-text {
                font-size: 60px;
            }

            .servicessec .servicescontent .servicecard {
                width: 45%;
                margin: 10px 5px;
            }
        }

        @media (max-width: 768px) {
            .servicessec {
                padding: 20px;
            }

            .servicessec .servicesheading h1 {
                font-size: 25px;
            }

            .servicessec .background-text {
                font-size: 50px;
            }

            .servicessec .servicescontent .servicecard {
                width: 90%;
                padding: 15px 30px;
                margin: 10px 0;
            }
        }

        @media (max-width: 576px) {
            .servicessec .servicesheading h1 {
                font-size: 20px;
                margin-top: 20px; 
            }

            .servicessec .background-text {
                font-size: 40px;
            }

            .servicessec .servicescontent .servicecard {
                width: 100%;
                padding: 10px 20px;
                margin: 10px 0;
            }
        }

    </style>
</head>

<body>
    <div class="fullscreen">
        <div class="servicessec">
            <div class="servicesheading">
                <h1>Services</h1>
                <h4>Offers services in all areas, whatever your IT needs are.</h4>
                <div class="background-text">Services</div>
            </div>
            <div class="servicescontent">
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>Digital Marketing
                    </h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>Web Design & Dev
                    </h1>
                    <p>Developers work alongside our SEO team to give you optimized and user-friendly websites..
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>Mobile App & Game Dev
                    </h1>
                    <p>Creating high performing, digitally transformative and feature-packed native mobile games &
                        applications for Android and iOS.
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>UI/UX Designs</h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>UI/UX Designs</h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>UI/UX Designs</h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
            </div>
            {{-- <div class="servicescontent">
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>UI/UX Designs</h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>UI/UX Designs</h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
                <div class="servicecard">
                    <img src="../images/ui.png" alt="">
                    <h1>UI/UX Designs</h1>
                    <p>Our team of creatives, designers & developers work alongside you to give you better results.
                    </p>
                </div>
            </div> --}}
        </div>

        @include('footer');

    </div>
</body>

</html>
