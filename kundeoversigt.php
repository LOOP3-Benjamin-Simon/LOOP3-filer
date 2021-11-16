<?php
require_once('includes/admin_header.php');
require_once('conn.php');
?>

<main class="px">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kundeoversigt</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Kunde-ID</th>
                    <th scope="col">Fornavn</th>
                    <th scope="col">Efternavn</th>
                    <th scope="col">Firma</th>
                    <th scope="col">CVR-nummer</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM kunde_id NATURAL JOIN frontend_blivkunde";
                $result = mysqli_query($con, $query);
                if (!$result) die (mysqli_error($con));
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $kunde_id = $row['kunde_id'];
                        $fornavn = $row['fornavn'];
                        $efternavn = $row['efternavn'];
                        $firma = $row['firma'];
                        $cvr_nummer = $row['cvr_nummer'];
                        $email = $row['email'];
                        }
                ?>
                <tr>
                    <td><?php echo $kunde_id; ?></td>
                    <td><?php echo $fornavn; ?></td>
                    <td><?php echo $efternavn; ?></td>
                    <td><?php echo $firma; ?></td>
                    <td><?php echo $cvr_nummer; ?></td>
                    <td><?php echo $email; ?></td>
                </tr>
                <?php
                    }
                
                ?>
            </tbody>
        </table>
    </div>
</main>
</div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
<script  src="js/script.js"></script>
</body>
</html>

<?php
require_once('includes/footer.php');
?>