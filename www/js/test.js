$.get('http://127.0.0.1:8000/array', function (data) {
    console.log(data);
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