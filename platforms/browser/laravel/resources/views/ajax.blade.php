<?php header('Access-Control-Allow-Origin: *'); ?>
<html>
<head>
    <title>AJAX Demo</title>
</head>
<body>
<h1>ajax Demo</h1>
<div id="here">Loading...</div>
<div id="here2">Loading...</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $.get('/array', function (data) {
        var array = JSON.parse(data);
        var propertyValues = Object.values(array);
        var propertyKey = Object.keys(array);
        for (var i = 1; i <= propertyValues.length; i++)  {
            console.log(propertyValues[i-1])
        }
        var number = propertyValues.length;
        var random = Math.floor(Math.random() * number)
        $('#here').html(propertyValues[random]);
        $('#here2').html(propertyKey[random]);
    });
</script>
</body>
</html>
