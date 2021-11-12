<?php 
require_once('includes/header.php');

//print_r($_POST);


if (isset($_POST['fornavn']) && isset($_POST['efternavn']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['firma']) && isset($_POST['cvr_nummer'])) {
    $fornavn = $_POST['fornavn'];
    $efternavn = $_POST['efternavn'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firma = $_POST['firma'];
    $cvr_nummer = $_POST['cvr_nummer'];


    $token = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO kunde_id (email, password) VALUES ('$email', '$token')";
    $result = mysqli_query($con, $query);

    if (!$result) {
        $errorcode = mysqli_errno($con);
        if ($errorcode === 1062) {
            echo "<p class='error'>This email address is already registered in the system, please login.</p>";
            require_once('includes/footer.php');
            die();
        } else {
            echo "<p class='error'>Couldn't register user: " . mysqli_error($con) . ".</p>";
            require_once('includes/footer.php');
            die();
        }
    }
    if ($result === TRUE) {
        $user_id = mysqli_insert_id($con);
        $query2 = "INSERT INTO frontend_blivkunde VALUES ('$user_id', '$fornavn', '$efternavn', '$firma', '$cvr_nummer')";
        $result2 = mysqli_query($con, $query2);
        if (!$result2) {
            echo "<p class='error'>Couldn't register user: " . mysqli_error($con) . ".</p>";
            require_once('includes/footer.php');
            die();
        } else {
            echo "<p class='welcome'>You are now registered, please login.</p>";
        }
    } 
} else {
    
?>


<main role="main">
<main class="flex-shrink-0">
<section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Bliv kunde</h2>
                        <p class="lead fw-normal text-muted mb-5">Udfyld venligst nedenstående formular for at blive oprettet som kunde hos StrainMonitoring</p>
                    </div>
                </div>
</section>
</main>
    <fieldset>
        <legend>
            <h2>Ansøgningsformular</h2>
        </legend>
        <form class="row g-3 needs-validation" novalidate action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="row">
                <div class="col">
                    <label for="validationCustom01" class="form-label">Fornavn</label>
                    <input type="text" class="form-control" id="validationCustom01" name="fornavn" placeholder="Skriv her" required>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col">
                    <label for="validationCustom02" class="form-label">Efternavn</label>
                    <input type="text" class="form-control" id="validationCustom02" name="efternavn" placeholder="Skriv her" required>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col">
                    <label for="validationCustom01" class="form-label">Firma</label>
                    <input type="text" class="form-control" id="validationCustom01" name="firma" placeholder="F.eks. Aarhus Universitet" required>
                    <div class="valid-feedback"></div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="validationCustomUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" class="form-control" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Indtast venligst din email-adresse.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="validationCustomPassword" class="form-label">Password</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">?</span>
                        <input type="password" class="form-control" id="validationCustomPassword" name="password" aria-describedby="inputGroupPrepend" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <div class="invalid-feedback">
                            Din kode skal indeholde mindst ét tal, ét stort samt ét lille bogstav samt være på mindst 8 tegn.
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="validationCustom03" class="form-label">CVR-nummer</label>
                    <input type="text" class="form-control" id="validationCustom03" name="cvr_nummer" required>
                    <div class="invalid-feedback">
                        Please provide a valid address.
                    </div>
                </div>
            </div>
            
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
<br>
<br>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Send anmodning</button>
            </div>
        </form>
    </fieldset>
</main>

<br>
<br>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>


<?php
}
require_once('includes/footer.php');
?>