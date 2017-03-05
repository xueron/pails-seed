
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>404 Not Found - Powered by Phalcon</title>

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
        <div class="title">404 Not Found</div>
        <p>Powered by Pails v{{ di.version() }}, Phalcon {{ di.getPhalconVersion() }}</p>
        <p>{{ di.environment() }}</p>
    </div>
</div>
</body>
</html>
