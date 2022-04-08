<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST" || !isset($_POST['requested_by']) || $_POST['requested_by'] !== 'file_get_contents'){
    http_response_code(403);
    echo "Sorry you can't be here.";
    exit(0);
}
?>
<html class="no-js" lang="en-US" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Attention Required!</title>
    <meta name="robots" content="noindex, nofollow">
    <link href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/css/cloudflare.css" rel="stylesheet" />
    <script>
        var onloadCallback = function () {
            const waiting = document.getElementById("please-wait");
            setTimeout(function () {
                waiting.style.display = "none";
                grecaptcha.render(
                    "g-recaptcha",
                    {
                        sitekey: "$$captcha_website_key$$"
                    }
                )
            }, 3000)


        }

        function recap_submit(token) {
            const captcha_form = document.getElementById('captchabox');
            captcha_form.submit();
        }

    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer>
    </script>
</head>
<body>



<div id="content">
    <div id="wrapper">
        <div id="error-details" class="error-details-wrapper">
            <div class="wrapper header error-overview">
                <h1>One more step
                </h1>
                <h2 class="subheadline">
                    <span>Please complete the security check to access the website.</span>
                </h2>
            </div>
            <div class="section highlight captcha-container">
                <div class="wrapper">
                    <div class="columns two">
                        <div class="column">
                            <div class="highlight-inverse form-stacked" style="display: flex;justify-content: center;">
                                <form id="captchabox" method="POST" action="">
                                    <div id="please-wait">
                                        <div id="spinner">
                                            <div id="bubbles">
                                                <div class="bubbles">
                                                </div>
                                                <div class="bubbles">
                                                </div>
                                                <div class="bubbles">
                                                </div>
                                            </div>
                                        </div>
                                        <p id="spinner-please-wait">Please stand by, while we are checking your browser...</p>
                                    </div>
                                    <div id="g-recaptcha" class="g-recaptcha" data-callback="recap_submit"></div>
                                </form>
                            </div>
                        </div>
                        <div class="column">
                            <div class="screenshot-container">
			  <span class="no-screenshot">
			  </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section wrapper">
                <div class="columns two">
                    <div class="column">
                        <h2>Why do I have to complete a CAPTCHA?
                        </h2>
                        <p>Completing the CAPTCHA proves you are a human and gives you temporary access to the web property.
                        </p>
                    </div>
                    <div class="column">
                        <h2>What can I do to prevent this in the future?
                        </h2>
                        <p>If you are on a personal connection, like at home, you can run an anti-virus scan on your device to make sure it is not infected with malware.
                        </p>
                        <p>If you are at an office or shared network, you can ask the network administrator to run a scan across the network looking for misconfigured or infected devices.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>