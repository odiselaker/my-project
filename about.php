<?php $page_title = "About"; ?>

<?php require_once "db/config.php"; ?>

<?php include_once 'includes/header.php'; ?>

<?php /* pairnoume apo to about ta aboutID kai theloume na mas dosei se fthinousa sira 1 apotelesma */
    $sql = "SELECT * FROM about ORDER BY aboutID DESC LIMIT 1";
    $stmt = $conn->prepare($sql);/*kanei proetimasia*/
    $stmt->execute(); /*kanei ektelesi*/
    $about = $stmt->fetch(PDO::FETCH_ASSOC);/*pernei 1 grami apo to apotelesma tis db kai mas to dinei se morfi pinaka*/ 
?>

<div class="title">
    <h2><?php echo $about['title']; ?></h2>
</div>

<p><?php echo $about['periexomeno']; ?></p>

<?php include_once 'includes/footer.php'; ?>