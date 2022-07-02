<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Calculator App</title>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="wrapper">
                <div class="header_logo">
                    <a href="<?php $siteAddress?>">Calculator.app</a>
                </div>
                <div class="github_link">
                    <a href="https://github.com/andreyshinpng/calculator.app">Github</a>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="wrapper">
                <form action="$POST">
                    <input type="text">
                    <input type="submit" value="Calculate">
                </form>
                <div class="result">
                    <p class="result_tag">Result:</p>
                    <p class="result_num">1337</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>