@include('Navbar');
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FunPrime Technology</title>
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

        .fullscreen .herosec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            background: url(../images/1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .fullscreen .herosec .heroimg {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            flex-direction: column;
            width: 80%;
            height: 50%;
            padding: 10px 10px;
            margin-top: 170px;
        }

        .fullscreen .herosec .heroimg img {
            border: 2px solid white;
            border-radius: 100%;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2), 0 6px 20px rgba(255, 255, 255, 0.19);
            padding: 10px;
        }

        .fullscreen .herosec .herocontent {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            width: 80%;
            height: 50%;
            color: white;
            padding: 10px 10px;
            text-align: center;
            margin-bottom: 100px;
        }

        .fullscreen .herosec .herocontent h1 {
            font-size: 45px;
            font-weight: 300;
        }

        .fullscreen .herosec .herocontent h4 {
            font-size: 25px;
            font-weight: 600;
        }

        .fullscreen .herosec .herocontent p {
            font-size: 15px;
            padding: 5px 300px;
        }

        .fullscreen .herosec .herocontent .herosocialmedia {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            padding: 10px;
            width: 100%;
            height: auto;
        }

        .fullscreen .herosec .herocontent .herosocialmedia a {
            text-decoration: none;
            margin: 10px;
        }

        .fullscreen .herosec .herocontent .herosocialmedia a .fab {
            font-size: 20px;
            color: #FEC544;
            padding: 15px;
            border-radius: 100%;
            border: 6px solid #101624;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
        }

        /* Media Queries */
        @media (max-width: 1200px) {
            .fullscreen .herosec .herocontent p {
                padding: 5px 200px;
            }
        }

        @media (max-width: 992px) {
            .fullscreen .herosec {
                height: auto;
            }

            .fullscreen .herosec .herocontent h1 {
                font-size: 40px;
            }

            .fullscreen .herosec .herocontent h4 {
                font-size: 22px;
            }

            .fullscreen .herosec .herocontent p {
                padding: 5px 100px;
            }

            .fullscreen .herosec .heroimg img {
                padding: 8px;
            }

            .fullscreen .herosec .herocontent .herosocialmedia a .fab {
                font-size: 18px;
                padding: 12px;
            }
        }

        @media (max-width: 768px) {
            .fullscreen .herosec {
                height: auto;
            }

            .fullscreen .herosec .herocontent h1 {
                font-size: 35px;
            }

            .fullscreen .herosec .herocontent h4 {
                font-size: 20px;
            }

            .fullscreen .herosec .herocontent p {
                padding: 5px 50px;
                font-size: 14px;
            }

            .fullscreen .herosec .heroimg img {
                width: 70%;
            }
        }

        @media (max-width: 576px) {
            .fullscreen .herosec {
                height: auto;
            }

            .fullscreen .herosec .herocontent h1 {
                font-size: 30px;
            }

            .fullscreen .herosec .herocontent h4 {
                font-size: 18px;
            }

            .fullscreen .herosec .herocontent p {
                padding: 5px 20px;
                font-size: 13px;
            }

            .fullscreen .herosec .heroimg img {
                width: 60%;
            }

            .fullscreen .herosec .herocontent .herosocialmedia a .fab {
                font-size: 16px;
                padding: 10px;
            }
        }


        /* ----------------------------- */

        .servicessec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
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


        /* ------------------------------------------------ */

        .skillssec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
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

        /* ------------------------------------ */

        .contactsec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
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


        /* ------------------------------------------------- */

        .ceomsgsec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
            padding: 60px 170px;
        }

        .ceomsgsec .ceobody {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
            padding: 60px 170px;
        }

        .ceomsgsec .msgcontent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 60%;
            height: auto;
            color: white;
            border: 1px solid #FEC544;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2), 0 6px 20px rgba(255, 255, 255, 0.19);
            padding: 30px;
        }

        .ceomsgsec .msgcontent h1 {
            font-size: 24px;
            font-weight: 400;
        }

        .ceomsgsec .msgcontent p {
            font-size: 18px;
            font-weight: 200;
            text-align: center;
        }

        .ceomsgsec .msgimg {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            flex-direction: column;
            width: 40%;
            height: auto;
        }

        .ceomsgsec .msgimg img {
            width: 310px;
            height: 310px;
            border: 1px solid #FEC544;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2), 0 6px 20px rgba(255, 255, 255, 0.19);
        }

        /* Media Queries */
        @media (max-width: 1400px) {

            .ceomsgsec,
            .ceomsgsec .ceobody {
                padding: 30px 50px;
            }

            .ceomsgsec .msgcontent,
            .ceomsgsec .msgimg {
                width: 100%;
            }

            .ceomsgsec .msgcontent {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 1200px) {

            .ceomsgsec,
            .ceomsgsec .ceobody {
                padding: 30px 50px;
            }

            .ceomsgsec .msgcontent,
            .ceomsgsec .msgimg {
                width: 100%;
            }

            .ceomsgsec .msgcontent {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 992px) {

            .ceomsgsec,
            .ceomsgsec .ceobody {
                padding: 30px 30px;
            }

            .ceomsgsec .msgcontent h1 {
                font-size: 22px;
            }

            .ceomsgsec .msgcontent p {
                font-size: 16px;
            }

            .ceomsgsec .msgimg img {
                width: 250px;
                height: 250px;
            }
        }

        @media (max-width: 768px) {

            .ceomsgsec,
            .ceomsgsec .ceobody {
                padding: 40px;
                flex-direction: column;
            }

            .ceomsgsec .msgcontent,
            .ceomsgsec .msgimg {
                width: 100%;
            }

            .ceomsgsec .msgcontent {
                margin-bottom: 20px;
                padding: 20px;
            }

            .ceomsgsec .msgcontent h1 {
                font-size: 20px;
            }

            .ceomsgsec .msgcontent p {
                font-size: 14px;
            }

            .ceomsgsec .msgimg img {
                width: 200px;
                height: 200px;
            }
        }

        @media (max-width: 576px) {

            .ceomsgsec,
            .ceomsgsec .ceobody {
                padding: 20px;
            }

            .ceomsgsec .msgcontent h1 {
                font-size: 18px;
            }

            .ceomsgsec .msgcontent p {
                font-size: 12px;
            }

            .ceomsgsec .msgimg img {
                width: 150px;
                height: 150px;
            }
        }

        /* ------------------------------------- */

        .revsec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: auto;
            padding: 20px 170px;
        }

        .revsec .reviews {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 100%;
            height: auto;
        }

        .revsec .reviews .reviewcard {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 20%;
            height: auto;
            background: #101624;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2), 0 6px 20px rgba(0, 0, 0, 0.19);
        }

        .revsec .reviews .reviewcard .cardimg {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 50%;
        }

        .revsec .reviews .reviewcard .cardimg .fas {
            font-size: 50px;
            padding: 20px;
            border: 1px solid #FEC544;
            color: #FEC544;
            border-radius: 100%;
        }

        .revsec .reviews .reviewcard .cardcontent {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            height: 50%;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .revsec .reviews .reviewcard .cardcontent h3 {
            font-size: 22px;
            font-weight: 300;
            text-align: center;

        }

        .revsec .reviews .reviewcard .cardcontent p {
            font-size: 15px;
            font-weight: 200;
            text-align: center;
        }

        .revsec .reviews .reviewcard .cardcontent .fas {
            font-size: 15px;
            color: #FEC544;
        }

        .revsec .stats {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            width: 80%;
            height: auto;
            padding: 20px;
            background: #FEC544;
            margin: 20px;
            margin-bottom: 70px;
            border-radius: 20px;
        }

        .revsec .stats .statcard {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 20%;
            height: auto;
            color: #0A101E;
            padding: 20px;
            margin: 10px;
        }

        /* Media Queries */
        @media (max-width: 1400px) {
            .revsec {
                padding: 20px 50px;
            }

            .revsec .reviews .reviewcard {
                width: 25%;
            }

            .revsec .stats {
                width: 90%;
            }

            .revsec .stats .statcard {
                width: 25%;
            }
        }

        @media (max-width: 1200px) {
            .revsec {
                padding: 20px 50px;
            }

            .revsec .reviews .reviewcard {
                width: 25%;
            }

            .revsec .stats {
                width: 90%;
            }

            .revsec .stats .statcard {
                width: 25%;
            }
        }

        @media (max-width: 992px) {
            .revsec {
                padding: 20px 50px;
            }

            .revsec .reviews {
                flex-wrap: wrap;
            }

            .revsec .reviews .reviewcard {
                width: 45%;
                margin: 10px 5px;
            }

            .revsec .stats .statcard {
                width: 30%;
            }

            .revsec .stats {
                flex-wrap: wrap;
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .revsec {
                padding: 20px;
            }

            .revsec .reviews .reviewcard {
                width: 100%;
                margin: 10px 0;
            }

            .revsec .stats .statcard {
                width: 45%;
                margin: 10px 5px;
            }
        }

        @media (max-width: 576px) {
            .revsec {
                padding: 10px;
            }

            .revsec .reviews .reviewcard {
                width: 100%;
                margin: 10px 0;
            }

            .revsec .reviews .reviewcard .cardimg .fas {
                font-size: 40px;
                padding: 15px;
            }

            .revsec .reviews .reviewcard .cardcontent h3 {
                font-size: 20px;
            }

            .revsec .reviews .reviewcard .cardcontent p {
                font-size: 14px;
            }

            .revsec .stats .statcard {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="fullscreen">
        <div class="herosec">
            <div class="heroimg">
                <img src="../images/funprime.jpeg" alt="">
            </div>
            <div class="herocontent">
                <h1>FunMAX Technology</h1>
                <h4>Located in Islamabad, Pakistan</h4>
                <p>We are a young team of geeks working out of Islamabad, Pakistan. We are here to cater the digital
                    needs of your organization by using affordable evolving technologies and latest industry standards.
                </p>
                <div class="herosocialmedia">
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

        <div class="ceomsgsec">
            <div class="ceobody">
                <div class="msgcontent">
                    <h1>CEO's Message
                    </h1>
                    <P>" Rapid innovation is an essential feature of digital information technology. Funprime
                        Technologies
                        understands the importance of remaining current through frequent self-reinvention. We accomplish
                        this by continually attracting the brightest minds in modern digital paradigms and platforms. By
                        maintaining a roster of skilled technology professionals across every business function,
                        Funprime
                        Technologies distinguishes itself by offering its client organizations a single touchpoint to
                        address all of their enterprise technology needs.
                        "</P>
                </div>
                <div class="msgimg">
                    <img src="../images/ceo.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="revsec">
            <div class="stats">
                <div class="statcard">
                    <h1>7</h1>
                    <p>Years of Experience
                    </p>
                </div>
                <div class="statcard">
                    <h1>48</h1>
                    <p>Team Members
                    </p>
                </div>
                <div class="statcard">
                    <h1>5,000,000
                    </h1>
                    <p>Happy Users
                    </p>
                </div>
                <div class="statcard">
                    <h1>37</h1>
                    <p>Application & Games
                    </p>
                </div>

            </div>
            <div class="reviews">
                <div class="reviewcard">
                    <div class="cardimg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="cardcontent">
                        <h3>Argon David</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero harum ducimus, hic impedit
                            eveniet amet minima nam! Nemo, nobis iste!]</p>
                    </div>
                </div>
                <div class="reviewcard">
                    <div class="cardimg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="cardcontent">
                        <h3>Argon David</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero harum ducimus, hic impedit
                            eveniet amet minima nam! Nemo, nobis iste!]</p>
                    </div>
                </div>
                <div class="reviewcard">
                    <div class="cardimg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="cardcontent">
                        <h3>Argon David</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero harum ducimus, hic impedit
                            eveniet amet minima nam! Nemo, nobis iste!]</p>
                    </div>
                </div>
                <div class="reviewcard">
                    <div class="cardimg">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="cardcontent">
                        <h3>Argon David</h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero harum ducimus, hic impedit
                            eveniet amet minima nam! Nemo, nobis iste!]</p>
                    </div>
                </div>
            </div>

        </div>

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
