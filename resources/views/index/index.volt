
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pails - Powered by Phalcon</title>

    <link href="http://fonts.useso.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Pails </div>
        <p>Powered by Phalcon</p>
        <p>{{ env("APP_ENV", "development") }}</p>
    </div>
</div>
</body>
</html>
