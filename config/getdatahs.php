<?php
include 'config.php';


$id = $_REQUEST['id'];
$query = "SELECT * FROM homestay WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
// var_dump($data);

$queryreview = "SELECT * FROM ratinghomestay WHERE Idhomestay = $id";
$resultreview = mysqli_query($conn, $queryreview);
// while ($datareview = mysqli_fetch_assoc($resultreview)) {
//     var_dump($datareview);
// }
//$datareview = mysqli_fetch_assoc($resultreview);
// var_dump($datareview);

$count = "SELECT COUNT(*) AS countrating FROM ratinghomestay WHERE Idhomestay = $id";
$resultcount = mysqli_query($conn, $count);
$datacount = mysqli_fetch_assoc($resultcount);
// var_dump($datacount);

$countuser = "SELECT COUNT(*) AS countuser FROM ratinghomestay WHERE Idhomestay = $id";
$resultcountuser = mysqli_query($conn, $countuser);
$datacountuser = mysqli_fetch_assoc($resultcountuser);
// var_dump($datacountuser);

$avarage = "SELECT AVG(rating) AS avgrating FROM ratinghomestay WHERE Idhomestay = $id";
$resultavarage = mysqli_query($conn, $avarage);
$dataavarage = mysqli_fetch_assoc($resultavarage);
$starsRating = round($dataavarage['avgrating']);
// var_dump($dataavarage);

$avgdecimal = round($dataavarage['avgrating'], 1);
// var_dump($avgdecimal);

$descavg = "";
if ($dataavarage['avgrating'] >= 4 && $dataavarage['avgrating'] <= 5) {
    $descavg = "<span class='good'>BAGUS</span>";
} else if ($dataavarage['avgrating'] >= 2 && $dataavarage['avgrating'] < 4) {
    $descavg = "<span class='medium'>SEDANG</span>";
} else if ($dataavarage['avgrating'] >= 1 && $dataavarage['avgrating'] < 2) {
    $descavg = "<span class='bad'>BURUK</span>";
} else {
    $descavg = "<span class='nothing'>BELUM ADA RATING</span>";
}
?>