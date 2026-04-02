<?php $page_title = "About"; ?>
<?php require_once "db/config.php"; ?>
<?php include_once 'includes/header.php'; ?>

<?php
    $sql = "SELECT * FROM about ORDER BY aboutID DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $about = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<div class="title">
    <h2><?php echo $about['title']; ?></h2>
</div>

<p><?php echo $about['periexomeno']; ?></p>

<?php include_once 'includes/footer.php'; ?>