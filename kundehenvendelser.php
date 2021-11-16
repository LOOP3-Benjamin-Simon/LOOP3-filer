<?php
require_once('includes/admin_header.php');
require_once('conn.php');
?>

<main class="px">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kundehenvendelser</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Besked ID</th>
                    <th scope="col">Fornavn</th>
                    <th scope="col">Efternavn</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefonnummer</th>
                    <th scope="col">Tidspunkt</th>
                    <th width="600px" scope="col">Besked</th>

                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM kontakt_os_opdateret";
                $result = mysqli_query($con, $query);
                if (!$result) die (mysqli_error($con));
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $besked_id = $row['besked_id'];
                        $fornavn = $row['fornavn'];
                        $efternavn = $row['efternavn'];
                        $email = $row['email'];
                        $telefonnummer = $row['telefonnummer'];
                        $tidspunkt = $row['reg'];
                        $besked = $row['besked'];
                        }
                ?>
                <tr>
                    <td><?php echo $besked_id; ?></td>
                    <td><?php echo $fornavn; ?></td>
                    <td><?php echo $efternavn; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $telefonnummer; ?></td>
                    <td><?php echo $tidspunkt; ?></td>
                    <td><?php echo $besked; ?></td>
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


