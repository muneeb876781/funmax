@include('Navbar');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FunPrime Technology - careers</title>
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

        .carrermain {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
            color: white;
            padding: 40px 170px;
        }

        .carrermain .carrermainbody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
            color: white;
            padding: 20px 170px;
        }

        .carrermaincontent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            text-align: center;
        }

        .carrermaincontent h1 {
            font-size: 25ps;
            font-weight: 400;
            color: #FEC544;
        }

        .carrermaincontent p {
            font-size: 15ps;
            font-weight: 300;
        }

        .carrermainimg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
        }

        .carrermainimg img {
            width: 100%;
            height: auto;
        }

        @media screen and (max-width: 1200px) {

            .carrermain,
            .carrermain .carrermainbody {
                padding: 40px 50px;
            }
        }

        @media screen and (max-width: 1400px) {

            .carrermain,
            .carrermain .carrermainbody {
                padding: 40px 50px;
            }
        }

        @media screen and (max-width: 992px) {

            .carrermain,
            .carrermain .carrermainbody {
                padding: 40px 40px;
            }
        }

        @media screen and (max-width: 768px) {

            .carrermain,
            .carrermain .carrermainbody {
                padding: 40px 20px;
            }

            .carrermaincontent h1 {
                font-size: 20px;
            }

            .carrermaincontent p {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 576px) {
            .carrermaincontent h1 {
                font-size: 18px;
            }

            .carrermaincontent p {
                font-size: 12px;
            }
        }


        /* -------------------------------------------- */
        .carrervalues {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 20px 170px;
            height: auto;
        }

        .carrervalues .carrervaluesbody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 20px 170px;
            height: auto;
            text-align: center;
            color: white;
        }

        .carrervalues .carrervaluesbody h1 {
            font-size: 25ps;
            font-weight: 400;
            color: #FEC544;
        }

        .carrervalues .carrervaluesbody .carrervaluescard {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 16%;
            height: auto;
            background: #101624;
            padding: 30px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
            border-radius: 100px;
        }


        .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle img {
            width: 100px;
            height: auto;
        }

        .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle h3 {
            font-size: 13px;
            font-weight: 300;
        }

        @media screen and (max-width: 1400px) {

            .carrervalues,
            .carrervalues .carrervaluesbody {
                padding: 20px 50px;
            }
        }

        @media screen and (max-width: 1200px) {

            .carrervalues,
            .carrervalues .carrervaluesbody {
                padding: 20px 50px;
            }
        }

        @media screen and (max-width: 992px) {

            .carrervalues,
            .carrervalues .carrervaluesbody {
                padding: 20px 40px;
            }
        }

        @media screen and (max-width: 768px) {

            .carrervalues,
            .carrervalues .carrervaluesbody {
                padding: 20px 20px;
            }

            .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle {
                width: 30%;
            }

            .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle h3 {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 576px) {
            .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle {
                width: 40%;
            }

            .carrervalues .carrervaluesbody .carrervaluescard .careervaluecardsingle h3 {
                font-size: 10px;
            }
        }


        /* ----------------------------------------- */

        .opportunities {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 20px 170px;
            height: auto;
        }

        .opportunities .opportunitiesnody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            padding: 20px 170px;
            height: auto;
            text-align: center;
            color: white;
        }

        .opportunities .opportunitiesnody h1 {
            font-size: 25ps;
            font-weight: 400;
            color: #FEC544;
        }

        .opportunities .opportunitiesnody .opprtunitycards {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            height: auto;
            padding: 20px;
        }

        .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 40%;
            height: auto;
            background: #101624;
            padding: 50px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
            border-radius: 10px;
        }


        .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard img {
            width: 100px;
            height: auto;
        }

        .opportunities .opportunitiesbody .opprtunitycards .opprtunitycard h3 {
            font-size: 13px;
            font-weight: 300;
        }

        .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard a {
            background: #FEC544;
            width: auto;
            padding: 10px 20px;
            color: #101624;
            border: none;
            border-radius: 50px;
            margin: 10px;
            font-size: 15px;
            text-decoration: none;
        }

        @media screen and (max-width: 1400px) {

            .opportunities,
            .opportunities .opportunitiesnody {
                padding: 20px 50px;
            }
        }

        @media screen and (max-width: 1200px) {

            .opportunities,
            .opportunities .opportunitiesnody {
                padding: 20px 50px;
            }
        }

        @media screen and (max-width: 992px) {

            .opportunities,
            .opportunities .opportunitiesnody {
                padding: 20px 40px;
            }
        }

        @media screen and (max-width: 768px) {

            .opportunities,
            .opportunities .opportunitiesnody {
                padding: 20px 20px;
            }

            .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard {
                width: 80%;
            }

            .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard h3 {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 576px) {
            .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard {
                width: 100%;
            }

            .opportunities .opportunitiesnody .opprtunitycards .opprtunitycard h3 {
                font-size: 10px;
            }
        }


        /* ---------------------------------------------------------- */

        .hiring-process {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            color: #101624;
            width: 100%;
            padding: 40px 170px;
        }

        .hiring-process h1 {
            font-size: 25ps;
            font-weight: 400;
            color: #FEC544;
        }

        .steps {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 20px 170px;
        }

        .step {
            display: flex;
            align-items: center;
            margin: 10px;
            width: 30%;
        }

        .step .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #101624;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
            height: 150px;
        }

        .step .content h3 {
            margin: 0;
            font-size: 1.2em;
            margin-bottom: 10px;
            color: #FEC544;
        }

        .step .content p {
            margin: 0;
            font-size: 15px;
            margin-bottom: 10px;
            color: #FEC544;
        }

        .step .arrow {
            font-size: 60px;
            margin: 0 10px;
            color: #FEC544;
        }

        @media screen and (max-width: 1400px) {

            .hiring-process,
            .hiring-process .steps {
                padding: 20px 50px;
            }
        }

        @media screen and (max-width: 1200px) {

            .hiring-process,
            .hiring-process .steps {
                padding: 20px 50px;
            }
        }

        @media screen and (max-width: 992px) {

            .hiring-process,
            .hiring-process .steps {
                padding: 20px 40px;
            }
        }

        @media screen and (max-width: 768px) {

            .hiring-process,
            .hiring-process .steps {
                padding: 20px 20px;
            }

            .step {
                width: 80%;
            }

            .step .content h3 {
                font-size: 18px;
            }

            .step .content p {
                font-size: 14px;
            }

            .step .arrow {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 576px) {
            .step {
                width: 100%;
            }

            .step .content h3 {
                font-size: 16px;
            }

            .step .content p {
                font-size: 12px;
            }

            .step .arrow {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="fullscreen">
        <div class="carrermain">
            <div class="carrermainbody">
                <div class="carrermaincontent">
                    <h1>Why FunMAX?
                    </h1>
                    <p>FunMAX Technologies is a home to many talented individuals. We believe in bringing out the best
                        in each of us. We do not believe our employees need to work in only their respective domain. We
                        make sure that each and every employee gets to work in other domains. We prefer smart work
                        rather than hard work. We believe in open communication and complete trust with a firm
                        commitment. In short, we are a one big happy family with strong ambitions and commitments. So
                        you are welcomed on Board.
                    </p>
                </div>
                <div class="carrermainimg">
                    <img src="../images/career1.png" alt="">
                </div>
            </div>
        </div>

        <div class="carrervalues">
            <div class="carrervaluesbody">
                <h1>Career Values At FunMAX
                </h1>
                <div class="carrervaluescard">
                    <div class="careervaluecardsingle">
                        <img src="../images/cr1.png" alt="">
                        <h3>Work Life Balance
                        </h3>
                    </div>
                    <div class="careervaluecardsingle">
                        <img src="../images/cr2.png" alt="">
                        <h3>Global Exposure
                        </h3>
                    </div>
                    <div class="careervaluecardsingle">
                        <img src="../images/cr3.png" alt="">
                        <h3>Dynamic Work Style
                        </h3>
                    </div>
                    <div class="careervaluecardsingle">
                        <img src="../images/cr4.png" alt="">
                        <h3>Financial Benefits
                        </h3>
                    </div>
                    <div class="careervaluecardsingle">
                        <img src="../images/cr5.png" alt="">
                        <h3>Team Work
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="opportunities">
            <div class="opportunitiesnody">
                <h1>Opportunities At FunMAX
                </h1>
                <div class="opprtunitycards">
                    <div class="opprtunitycard">
                        <img src="../images/op1.png" alt="">
                        <h3>Android Developers
                        </h3>
                        <a href="">View Details</a>
                    </div>
                    <div class="opprtunitycard">
                        <img src="../images/op2.png" alt="">
                        <h3>Graphic Designer
                        </h3>
                        <a href="">View Details</a>
                    </div>
                    <div class="opprtunitycard">
                        <img src="../images/op3.png" alt="">
                        <h3>Digital Content Writer
                        </h3>
                        <a href="">View Details</a>
                    </div>
                    <div class="opprtunitycard">
                        <img src="../images/op4.png" alt="">
                        <h3>Web Developers
                        </h3>
                        <a class="btn1" href="">View Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="hiring-process">
            <h1>Hiring Track
            </h1>
            <div class="steps">
                <div class="step">
                    <div class="content">
                        <h3>Step 1</h3>
                        <p>Make A Request
                        </p>
                    </div>
                    <div class="arrow">&#8594;</div>
                </div>
                <div class="step">
                    <div class="content">
                        <h3>Step 2</h3>
                        <p>Contact</p>
                    </div>
                    <div class="arrow">&#8594;</div>
                </div>
                <div class="step">
                    <div class="content">
                        <h3>Step 3</h3>
                        <p>Intro Call
                        </p>
                    </div>
                    <div class="arrow">&#8594;</div>
                </div>
                <div class="step">
                    <div class="content">
                        <h3>Step 4</h3>
                        <p>Task Assigned
                        </p>
                    </div>
                    <div class="arrow">&#8594;</div>
                </div>
                <div class="step">
                    <div class="content">
                        <h3>Step 5</h3>
                        <p>Final Call
                        </p>
                    </div>
                    <div class="arrow">&#8594;</div>
                </div>
                <div class="step">
                    <div class="content">
                        <h3>Step 6</h3>
                        <p>Joining Day
                        </p>

                    </div>
                </div>
            </div>
        </div>



        test branch

        @include('footer');
    </div>
</body>

</html>
