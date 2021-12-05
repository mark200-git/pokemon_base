<?php
include 'base.php';
$conn = openConnect();
echo "Connect success";

$select = "SELECT pokemony.nazwa_pokemona AS nazwa_poka, dzicze.nazwa_dziczy AS nazwa_dzicz, regiony.nazwa_regionu as nazwa_region FROM pokemony INNER JOIN dzicze ON dzicze.id_dziczy = pokemony.id_dziczy INNER JOIN regiony ON regiony.id_regionu = dzicze.id_regionu";
$result = $conn->query($select);
#print $result;
closeConnect($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Nazwa pokemona</th>
            <th>Dzicz</th>
            <th>Region</th>
        </tr>
        <?php
        while ($rows = $result->fetch_assoc()) {

        ?>
            <tr>
                <td><?php echo $rows['nazwa_poka']; ?></td>
                <td><?php echo $rows['nazwa_dzicz']; ?></td>
                <td><?php echo $rows['nazwa_region']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>