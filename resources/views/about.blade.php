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

        .skillssec {
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

        .skillssec .skillheading {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            padding: 30px 170px;
            color: white;
            position: relative;
        }

        .skillssec .skillheading h1 {
            color: #FAC243;
            font-size: 40px;
            position: relative;
            z-index: 1;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .skillssec .skillheading h1::after {
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

        .skillssec .skillheading .background-text {
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

        .skillssec .skillheading h4 {
            font-size: 15px;
            text-align: center;
            color: #FEC544;
            font-weight: 200;
        }

        .skillssec .skillbody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
            padding: 30px 170px;
            color: white;
        }

        .skillssec .skillbody .skillimg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
            height: auto;
        }

        .skillssec .skillbody .skillimg img {
            width: 70%;
            height: auto;
        }

        .skillssec .skillbody .skillcontent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 50%;
            height: auto;
            padding: 20px;
        }

        .skillcontent h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .skill {
            margin-bottom: 20px;
            width: 100%;
        }

        .skill-name {
            font-size: 18px;
            font-weight: bold;
            display: inline-block;
        }

        .skill-bar {
            background-color: #f1f1f1;
            border-radius: 25px;
            width: 100%;
            height: 10px;
            overflow: hidden;
            margin-top: 5px;
        }

        .skill-percentage {
            height: 100%;
            background-color: #4caf50;
            border-radius: 25px;
        }

        .percentage {
            font-size: 16px;
            font-weight: bold;
            float: right;
            margin-left: 10px;
        }

        /* Media Queries */
        @media (max-width: 1400px) {
            .skillssec {
                padding: 30px 50px;
            }

            .skillssec .skillheading {
                padding: 30px 50px;
            }

            .skillssec .skillheading h1 {
                font-size: 35px;
            }

            .skillssec .skillheading .background-text {
                font-size: 80px;
            }

            .skillssec .skillbody {
                padding: 30px 100px;
            }
        }

        @media (max-width: 1200px) {
            .skillssec {
                padding: 30px 50px;
            }

            .skillssec .skillheading {
                padding: 30px 50px;
            }

            .skillssec .skillheading h1 {
                font-size: 35px;
            }

            .skillssec .skillheading .background-text {
                font-size: 80px;
            }

            .skillssec .skillbody {
                padding: 30px 100px;
            }
        }

        @media (max-width: 992px) {
            .skillssec {
                padding: 30px 30px;
            }

            .skillssec .skillheading {
                padding: 30px 30px;
            }

            .skillssec .skillheading h1 {
                font-size: 30px;
            }

            .skillssec .skillheading .background-text {
                font-size: 60px;
            }

            .skillssec .skillbody {
                padding: 30px 50px;
            }

            .skillssec .skillbody .skillimg,
            .skillssec .skillbody .skillcontent {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .skillssec {
                padding: 20px;
            }

            .skillssec .skillheading {
                padding: 20px;
            }

            .skillssec .skillheading h1 {
                font-size: 25px;
            }

            .skillssec .skillheading .background-text {
                font-size: 50px;
            }

            .skillssec .skillbody {
                padding: 20px;
                flex-direction: column;
            }

            .skillssec .skillbody .skillimg,
            .skillssec .skillbody .skillcontent {
                width: 100%;
                padding: 10px 0;
            }
        }

        @media (max-width: 576px) {
            .skillssec .skillheading h1 {
                font-size: 20px;
            }

            .skillssec .skillheading .background-text {
                font-size: 40px;
            }

            .skillssec .skillbody {
                padding: 10px;
            }

            .skillssec .skillbody .skillimg img {
                width: 90%;
            }
        }

    </style>
</head>

<body>
    <div class="fullscreen">
        <div class="skillssec">
            <div class="skillheading">
                <h1>Our Expertise
                </h1>
                <h4>We are an experienced and talented team of passionate consultants who live and breathe digitally. We
                    have developed strategies for leading brands to small and medium-sized businesses across many
                    industries in the US and worldwide.

                </h4>
                <div class="background-text">Expertise</div>
            </div>

            <div class="skillbody">
                <div class="skillimg">
                    <img src="../images/experties1.png" alt="">
                </div>
                <div class="skillcontent">
                    <h1>Expertise</h1>
                    <div class="skill">
                        <span class="skill-name">Mobile Application Development
                        </span>
                        <span class="percentage">90%</span>
                        <div class="skill-bar">
                            <div class="skill-percentage" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span class="skill-name">Web Developement
                        </span>
                        <span class="percentage">80%</span>
                        <div class="skill-bar">
                            <div class="skill-percentage" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span class="skill-name">Digital Marketing
                        </span>
                        <span class="percentage">70%</span>
                        <div class="skill-bar">
                            <div class="skill-percentage" style="width: 70%;"></div>
                        </div>
                    </div>
                    <div class="skill">
                        <span class="skill-name">UI/UX Designing
                        </span>
                        <span class="percentage">80%</span>
                        <div class="skill-bar">
                            <div class="skill-percentage" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        @include('footer');

    </div>
</body>

</html>
