<!DOCTYPE html>
<html lang="en">

<head>
<title>Municipality</title>
    <meta charset="UTF-8">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- delete -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Merriweather:wght@300&family=Pathway+Gothic+One&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
                <!-- footer -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    :root {
        --red: hsl(0, 78%, 62%);
        --cyan: hsl(180, 62%, 55%);
        --orange: hsl(34, 97%, 64%);
        --blue: hsl(212, 86%, 64%);
        --varyDarkBlue: hsl(234, 12%, 34%);
        --grayishBlue: hsl(229, 6%, 66%);
        --veryLightGray: hsl(0, 0%, 98%);
        --weight1: 200;
        --weight2: 400;
        --weight3: 600;
    }

    body {
        font-size: 15px;
        /* font-family: 'Poppins', sans-serif; */
        background-color: var(--veryLightGray);
        background-image: url('https://image.shutterstock.com/image-illustration/abstract-blue-white-gray-polygon-260nw-1451847182.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .attribution {
        font-size: 11px;
        text-align: center;
    }

    .attribution a {
        color: hsl(228, 45%, 44%);
    }

    h1:first-of-type {
        font-weight: var(--weight1);
        color: var(--varyDarkBlue);

    }

    h1:last-of-type {
        color: var(--varyDarkBlue);
    }

    @media (max-width: 400px) {
        h1 {
            font-size: 1.5rem;
        }
    }


    .box p {
        color: var(--grayishBlue);
        padding-bottom: 7%;
    }

    .box {
        border-radius: 5px;
        box-shadow: 0px 30px 40px -20px var(--grayishBlue);
        background-color: white;
        padding: 25px;
        margin: 25px;
    }

    img {
        float: right;
    }

    @media (max-width: 450px) {
        .box {
            height: 200px;
        }
    }

    @media (max-width: 950px) and (min-width: 450px) {
        .box {
            text-align: center;
            height: 180px;
        }
    }

    .cyan {
        border-top: 3px solid var(--cyan);
    }

    .red {
        border-top: 3px solid var(--red);
        margin-top: 90px;
    }

    .blue {
        border-top: 3px solid var(--blue);
    }

    .orange {
        border-top: 3px solid var(--orange);
    }

    h2 {
        color: var(--varyDarkBlue);
        font-weight: var(--weight3);
    }


    @media (min-width: 950px) {
        .row1-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row2-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box-down {
            position: relative;
            top: 150px;
        }

        .box {
            width: 20%;

        }

        .header p {
            width: 30%;
        }

    }

    .link-text {
        display: block;
        color: #753BBD;
        font-size: 0.9em;
        font-weight: 600;
        line-height: 1.2;
        margin: auto 0 0;
        transition: color .45s ease;
    }

    svg {
        margin-left: .5em;
        transition: transform .6s ease;


    }

    path {
        transition: fill .45s ease;
    }

    a {
        text-decoration: none;
        padding-top: 4%;
    }
</style>

<body>
    <div class="row1-container">
        <div class="box box-down cyan" style="width: 24%;">
            <h2>garbage_management</h2>
            <p>Includes no dustbin, overflowing dustbins and so on.</p>
            <a href="previewMaterial.php?search=garbage_management&sub=1"><span class=" link-text">
                    View All complaints
                    <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD" />
                    </svg>
                </span></a>
            <!-- <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt=""> -->

        </div>

        <div class="box red" style="width: 24%;">
            <h2>public_toilets</h2>
            <p>Includes no toilet, uncleaned toilets and so on.</p>
            <!-- <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt=""> -->
            <a href="previewMaterial.php?search=public_toilets&sub=1"><span class=" link-text">
                    View All complaints
                    <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD" />
                    </svg>
                </span></a>
        </div>

        <div class="box box-down blue" style="width: 24%;">
            <h2>potholes</h2>
            <p>Includes potholes, no road and so on</p>
            <a href="previewMaterial.php?search=potholes&sub=1"><span class=" link-text">
                    View All complaints
                    <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD" />
                    </svg>
                </span></a>
            <!-- <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt=""> -->
        </div>

    </div>
    <div class="row2-container">
        <div class="box orange" style="width: 24%;">
            <h2>drainage</h2>
            <p>Includes overflowing drainage, no drainage etc.</p>

            <a href="previewMaterial.php?search=drainage&sub=1"><span class=" link-text">
                    View All complaints
                    <svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD" />
                    </svg>
                </span></a>
            <!-- <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt=""> -->
        </div>
    </div>
</body>

</html>