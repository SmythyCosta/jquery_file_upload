<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Demo - JQuery Upload</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">


</head>
<body>

<br>

    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Escolha as Fotos</span>
        <input id="fileupload"  type="file" name="FilesPic" multiple data-url="salvar_foto.php">
    </span>

<br>
<br>
<div id="progress" class="progress">
    <div class="progress-bar progress-bar-success"></div>
</div>
<div id="files" class="files"></div>
<!---->
<div class="row" id="rowFotos"></div>
<!---->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



<script type="text/javascript">
    function Reset(){
        $('#progress .progress-bar').css('width', '0%');
    }
    $(function () {
        $('#fileupload').fileupload({
            dataType: 'json',
            done: function (e, data) {
                window.setTimeout('Reset()', 2000);                 
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css('width', progress + '%');
            }
        });
    });
</script>
</body>
</html>