<?php
require_once('includes/admin_header.php');
require_once('conn.php');


$result = mysqli_query($con,
"SELECT email,fornavn, efternavn 
FROM frontend_blivkunde 
    JOIN approvals ON frontend_blivkunde.kunde_id=approvals.kunde_id 
    JOIN kunde_id ON kunde_id.kunde_id=frontend_blivkunde.kunde_id 
WHERE approved=0");

?>

<main class="px">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Opret nye kunder</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Kunde ID</th>
                    <th scope="col">Fornavn</th>
                    <th scope="col">Efternavn</th>
                    <th scope="col">Firma</th>
                    <th scope="col">CVR-nummer</th>
                    <th scope="col">Tidspunkt</th>
                    <th scope="col">Godkend/Afvis</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $query = "SELECT * FROM frontend_blivkunde";
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
                        $tidspunkt = $row['reg'];
                        }
                ?>
                <tr>
                    <td><?php echo $kunde_id; ?></td>
                    <td><?php echo $fornavn; ?></td>
                    <td><?php echo $efternavn; ?></td>
                    <td><?php echo $firma; ?></td>
                    <td><?php echo $cvr_nummer; ?></td>
                    <td><?php echo $tidspunkt; ?></td>
                    <td><?php echo "ACCEPTER/AFVIS" ?></td>
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














<!--
//print the table
echo "
    <table>
    <thead>
        <tr>
            <th>email</th>
            <th>fornavn</th>
            <th>efternavn</th>
            <th>approve</th>
        </tr>
    </thead>
    <tbody>
";
while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr>
            <td>".$row['email']."</td>
            <td>".$row['fornavn']."</td>
            <td>".$row['efternavn']."</td>
            <td>
                <form action='approve_user.php' method='POST'>
                    <input type='submit' value='Approve' name='approved'>
                </form>
                <form action='reject_user.php'>
                    <input type='submit' value='Reject'>
                </form>
            </td>  
        </tr>
    ";
 }
 echo "
 </tbody>
 </table>
 ";
?>




<?php
require_once('includes/footer.php');
?>

