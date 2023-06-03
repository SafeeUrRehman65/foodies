<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies - Create a new account</title>

    <!------------------------------------------------>
    <!-- !WARNING! Do not change order of ref tags. -->
    <!------------------------------------------------>

    <!-- Bootstrap v6 (CSS) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <!-- Bootstrap v6 (JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i"
        crossorigin="anonymous"></script>

    <!-- JQuery v3.6 -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <!-- Font Awesome v6.3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- JS Script -->
    <script src="../js/script.js"></script>
</head>

<?php 
    $is_err = isset($_GET["e"]);
    if ($is_err) {
        $err_code = $_GET["e"];
        
        if ($err_code == 0) {
            $err_msg = "Account already exists"; 
        }
?>
    <div class="alert alert-danger" role="alert">
        Error: <?php echo $err_msg; ?>
    </div>
<?php
    }
?>

<body>
    <div class="container m-auto p-5 d-flex align-items-center justify-content-center">
        <div class="container-fluid shadow-lg rounded-3 bg-light">
            <div class="row">
                <div class="col-xl p-0 d-none d-xl-block">
                    <div class="container p-0">
                        <img src="../res/images/sign_up_cover.jpg" class="img-fluid rounded-start-3">
                    </div>
                </div>

                <div class="col-xl p-0">
                    <div class="container px-auto py-5">
                        <div class="d-flex align-items-center justify-content-center p-3">
                            <img src="../res/images/logo.png" class="img-fluid" width="280vw">
                        </div>

                        <h1 class="display-6 text-warning text-center">Create your account</h1>

                        <form class="p-5 needs-validation" novalidate action=sign_up_inc.php method="post">
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="signUpEmail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="signUpEmail" name="signUpEmail"
                                    height="32px" required autofocus>
                            </div>

                            <!-- Password Field -->
                            <div class="mb-3">
                                <label for="signUpPassword" class="form-label">Password:</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="signUpPassword"
                                        name="signUpPassword" height="32px" minlength="8" required>
                                    <span class="input-group-text" id="signUpShowPassword">
                                        <i class="fa fa-eye" id="signUpEye" aria-hidden="true"></i>
                                        <i class="fa fa-eye-slash d-none" id="signUpEyeSlash" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div class="mb-3">
                                <label for="signUpContact" class="form-label">Contact:</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <img src="../res/icons/flag_pk.png" height="24px">
                                    </span>
                                    <span class="input-group-text">+92</span>
                                    <input type="tel" class="form-control" id="signUpContact" name="signUpContact"
                                        height="32px" pattern="[0-9]{3}-[0-9]{7}" required>
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="signUpAgreementChk" required>
                                <label for="signUpAgreementChk">
                                    <small>
                                        By continuing, you agree to our <a href="#" data-bs-toggle="modal"
                                            data-bs-target="#signUpTermsDialog">Terms and Conditions</a>.
                                    </small>
                                </label>
                            </div>

                            <br>

                            <!-- Submit -->
                            <div class="d-grid gap-2">
                                <button class="btn btn-warning" type="submit" id="signUpSubmit" disabled>Submit</button>
                            </div>

                            <br>

                            <div>
                                <p class="text-center">
                                    <small>
                                        Already have an account? <a href="sign_in.php">Sign In</a>
                                    </small>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Terms and Conditions (Modal Dialog) -->
    <div class="modal fade" id="signUpTermsDialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="signUpTermsDialogLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="signUpTermsDialogLabel">Terms and Conditions</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>No warranties</h5>
                    <p class="text-justify">
                        This Website is provided “as is,” with all faults, and Company Name express no representations
                        or warranties, of any kind related to this Website or the materials contained on this Website.
                        Also, nothing contained on this Website shall be interpreted as advising you.
                    </p>
                    <h5>Limitation of liability</h5>
                    <p class="text-justify">
                        In no event shall Company Name, nor any of its officers, directors and employees, shall be held
                        liable for anything arising out of or in any way connected with your use of this Website whether
                        such liability is under contract. Company Name, including its officers, directors and employees
                        shall not be held liable for any indirect, consequential or special liability arising out of or
                        in any way related to your use of this Website.
                    </p>
                    <h5>Governing Law & Jurisdiction</h5>
                    <p class="text-justify">
                        These Terms will be governed by and interpreted in accordance with the laws of the State of
                        Country, and you submit to the non-exclusive jurisdiction of the state and federal courts
                        located in Country for the resolution of any disputes.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
