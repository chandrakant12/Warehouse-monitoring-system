 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

<input type="text" id="txtUrl" style="width: 300px" />
<input type="button" id="btnPlay" value="Play" />
<hr />
<iframe id="video" width="820" height="515" frameborder="0" style="display: none"
    allowfullscreen></iframe>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $("body").on("click", "#btnPlay", function () {
        var url =$("#txtUrl").val();
        url = url.split('v=')[1];
        $("#video")[0].src = "https://www.youtube.com/embed/" + url;
        $("#video").show();
    });
</script>

</body>
</html> 

