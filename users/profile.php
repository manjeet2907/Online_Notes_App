<?php
$Ltitle ='Profile';
require_once '../users/loginheader.php';
?>

<section style="width: 100vw; height:80vh; display:flex; flex-direction:column; align-items:center; justify-content:center">
    <h1>General Account Settings</h1>
    <table class="table table-dark table-striped table-lg .table-fixed table-hover w-auto">
        <thead>
            <tr>
            <th class="th-sm" scope="col">Detail</th>
            <th class="th-sm" scope="col">Current Value</th>
            <th class="th-sm" scope="col">Edit</th>
            </thead>


        <tbody>
            <tr>
                <td>username</td>
                <td>xyz</td>
                <td>&#128396;</td>
            </tr>
            <tr>
                <td>Email id</td>
                <td>Otto@iadi.com</td>
                <td>&#128396;</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>hidden</td>
                <td>&#128396;</td>
            </tr>
    </table>

</section>';









<?php
require_once '../includes/footer.php';

?>