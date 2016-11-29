<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Load Image from Json</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $.getJSON("/code/11-14_project/image_io_test/sendImgByJson.php", function(data) {
            $("#element").append($("<img />").attr('src', 'data:image/png;charset=utf8;base64,' + data.image));
        });
    </script>
</head>
<body>
<p id="element"></p>



</body>
</html>
