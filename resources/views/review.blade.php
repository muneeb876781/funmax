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

        .revsec {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            /* height: auto; */
            min-height: 100vh;
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
                margin-top: 40px;
                
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
                margin-top: 40px;
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

        @include('footer');

    </div>
</body>

</html>
