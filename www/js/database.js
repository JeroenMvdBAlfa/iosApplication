$.get('http://127.0.0.1:8000/stud', function (data) {
    console.log(data);
    var array = JSON.parse(data);
    var propertyValues = Object.values(array);
    var propertyKey = Object.keys(array);
    for (var i = 1; i <= propertyValues.length; i++)  {
        console.log(propertyValues[i-1])
    }
    var number = propertyValues.length;
    var random = Math.floor(Math.random() * number)
    for (var i = 0; i < propertyValues.length; i++) {
        $('#here').append(propertyValues[i]['name'] + "<br>")
    }
    // $('#here').html(propertyValues[0]['name']);
    // $('#here2').html(propertyValues[1]['name']);
});
