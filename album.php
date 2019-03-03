<?php include('includes/header.php');

if(isset($_GET['id'])) {
    $albumId = $_GET['id'];
} else {
    header("Location: index.php");
}

$album = new Album($con, $albumId);
echo $album->getTitle();

$artist = $album->getArtist();
echo $artist->getName();

?>
<?php include('includes/footer.php') ?>