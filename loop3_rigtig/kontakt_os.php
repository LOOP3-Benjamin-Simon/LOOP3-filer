<?php
require_once('includes/header.php');
?>


<main class="flex-shrink-0">

</main>
    <fieldset>
<br>

    <div class="text-center">
                        <h2 class="fw-bolder">Kontakt os</h2>
                        <p class="lead fw-normal text-muted mb-5">Udfyld venligst nedenstående formular for generelle henvendelser</p>
                    </div>      
 
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
                    <label for="validationCustom02" class="form-label">Firma</label>
                    <input type="text" class="form-control" id="validationCustom01" name="firma" placeholder="F.eks. Aarhus Universitet" required>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col">
                    <label for="validationCustom01" class="form-label">CVR-nummer</label>
                    <input type="text" class="form-control" id="validationCustom01" name="firma" placeholder="F.eks. Aarhus Universitet" required>
                    <div class="valid-feedback"></div>
           
            <div class="row">
                <div class="col">
                    <label for="validationCustom03" class="form-label">Besked</label>
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
                <button class="btn btn-primary" type="submit">Send besked</button>
            </div>
        </form>
    </fieldset>
</main>

<section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Kontakt vores team direkte</h2>
                        <p class="lead fw-normal text-muted mb-5">Her kan du få direkte kontakt til den ønskede medarbejder</p>
                    </div>        
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-5 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="images/benjamin.jpg" alt="..." />
                                <h5 class="fw-bolder">Benjamin Longerich</h5>
                                <h6 class="">+45 12 34 56 5€</h6>
                                <h6 class="">benjamin@strainmonitoring.dk</h6>
                                <div class="fst-italic text-muted">Founder</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="images/simon.jpg" alt="..." />
                                <h5 class="fw-bolder">Simon Schou</h5>
                                <h6 class="">+45 12 34 56 6€</h6>
                                <h6 class="">simon@strainmonitoring.dk</h6>
                                <div class="fst-italic text-muted">Founder</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="images/alex.jpg" alt="..." />
                                <h5 class="fw-bolder">Alex Madsen</h5>
                                <h6 class="">+45 12 34 56 7€</h6>
                                <h6 class="">alex@strainmonitoring.dk</h6>
                                <div class="fst-italic text-muted">Founder</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="images/asbjørn.jpg" alt="..." />
                                <h5 class="fw-bolder">Asbjørn Pank</h5>
                                <h6 class="">+45 12 34 56 8€</h6>
                                <h6 class="">asbjoern@strainmonitoring.dk</h6>
                                <div class="fst-italic text-muted">Founder</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="images/esben.jpg" alt="..." />
                                <h5 class="fw-bolder">Esben Glerup</h5>
                                <h6 class="">+45 12 34 56 9€</h6>
                                <h6 class="">esben@strainmonitoring.dk</h6>
                                <div class="fst-italic text-muted">Founder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

</main>

<?php
require_once('includes/footer.php');
?>