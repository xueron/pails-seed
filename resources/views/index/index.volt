<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title>Pails - Powered by Pails v{{ getDI().version() }}, Phalcon {{ version() }}</title>

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
            font-size: 64px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">Pails, A PHP framework base on Phalcon.</div>
        <p>Powered by Pails v{{ getDI().version() }}, Phalcon {{ version() }}</p>
        <p>environment: {{ getDI().environment() }}</p>
    </div>
</div>
</body>
</html>
