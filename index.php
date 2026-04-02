<?php $page_title = "Home"; ?>

<?php require_once "db/config.php"; ?>

<?php include_once 'includes/header.php'; ?>

<style>

.all {
    color: gold;
    text-align: center;
}

.all .trapezi {
    margin-left: 50%;
    
}

</style>

<div class="all">
<div class="title">
    <h2>Orario tou magaziou</h2>
</div>

<?php
    $sql = "SELECT * FROM calendar";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $calendar = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="trapezi">
<table border="1">
    <tr>
        <th>days</th>
        <th>hours</th>
    </tr>
    <?php foreach ($calendar as $row): ?>
    <tr>
        <td><?php echo $row['day']; ?></td>
        <td><?php echo $row['hours']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</div>

<div class="title">
    <h2>our location</h2>
</div>
   
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d189.2354592572301!2d22.94290288592662!3d40.63501246052792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sel!2sgr!4v1775169930907!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


<?php include_once 'includes/footer.php'; ?>