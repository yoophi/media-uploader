<?php
function pr($d)
{
    return join('', array('<pre>', print_r($d, true), '</pre>'));
}

echo pr($_POST);
?>
<html>
<head><title>Some demo title</title></head>
<body>
<form action="/uploads" enctype="multipart/form-data" method="POST">
    <input type="file" name="my_file" multiple="multiple"/>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//assets.transloadit.com/js/jquery.transloadit2-v2-latest.js"></script>
<script type="text/javascript">
    $(function () {
        $('form').transloadit({
            wait: true,
            triggerUploadOnFileSelection: true,
            params: {
                apikey: "YOUR-AUTH-KEY",
                steps: [
                    {
                        thumb: {
                            robot: "/image/resize",
                            width: 75,
                            height: 75,
                            resize_strategy: "pad",
                            background: "#000000"
                        }
                    }
                ]
            }
        });
    });
</script>
</body>
</html>