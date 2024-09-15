<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .coming-soon-container {
            max-width: 800px;
        }

        h1 {
            font-size: 48px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 40px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        @media(max-width: 768px) {
            h1 {
                font-size: 36px;
            }

            p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <div class="coming-soon-container">
        <h1>Coming Soon</h1>
        <img src="{{asset("assets/img/comming_soon.svg")}}" style="height: 300px;" alt="Coming Soon">
        <p>Our website is under construction. We'll be here soon with our new awesome site, stay tuned!</p>
    </div>

</body>
</html>
