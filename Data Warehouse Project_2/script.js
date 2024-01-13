$.getJSON("./index.php", function(result) {
    $.each(result, function(key, value) {
        console.log(key + ": " + value);
    });
});