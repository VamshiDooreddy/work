<html>
    <head>
        <title>index</title>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <form method='post' action='captcha.php'>
            <div class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6Lfr1XQUAAAAADLs4Bb9JdoTwnsovPByPqaS5YFs"></div><br>
            <input id="target_btn" type='submit' disabled/><br>
        </form>
    </body>
</html>
<script type="text/javascript">
  var imNotARobot = function() {
   document.getElementById("target_btn").removeAttribute("disabled");
  };
</script>

