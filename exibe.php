<meta charset="utf-8">
<?php
    //$login = $_POST['login];
    //$senha = $_POST['senha];
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";
    $base = "dbTimes";
    $con = mysqli_connect($host, $user, $pass, $base);
    $res = mysqli_query($con, "select * from tbTimes");

    echo "
    <table border=3px>
       <tr>
        <td>Nome</td>
        <td>Ano de fundação</td>
        <td>Títulos nacionais</td>
       <tr>
    ";
    while($escrever=mysqli_fetch_array($res)){
        echo "<tr><td>" . $escrever['nome'] . "</td><td>" . $escrever['anoFund'] . "</td><td>" . $escrever['titulos'] . "</td></tr>";
    }

    echo "</table>";

    echo "</br></br>";

    mysqli_close($con);
?>