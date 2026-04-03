<?php $page_title = 'Home Page'; ?>

<?php require_once "db/config.php"; ?>

<?php include_once 'includes/header+.php'; ?>

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
          <td><?php echo $row['day']; ?></td> /* pernei ta stoixoia apo to calendar kai ta emfanizi para kato */
          <td><?php echo $row['hours']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d189.2354592572301!2d22.94290288592662!3d40.63501246052792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sel!2sgr!4v1775169930907!5m2!1sel!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<!------APO EDO MEXRI KATO TO EKAN ME AI------->
<div class="title-h2">
    <h2>Επικοινωνία</h2>
</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $phone     = $_POST['phone'];
    $email     = $_POST['email'];
    $text      = $_POST['text'];

    $sql = "INSERT INTO contact (firstname, lastname, phone, email, text) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$firstname, $lastname, $phone, $email, $text]);

    echo "<p style='color:green;'>Η καταχώρηση έγινε με επιτυχία!</p>";
}
?>

<form method="POST" style="margin-bottom:50px;">
    <input type="text" name="firstname" placeholder="First Name" required><br><br>
    <input type="text" name="lastname" placeholder="Last Name" required><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <textarea name="text" placeholder="Your message" required></textarea><br><br>
    <button type="submit">Send</button>
</form>

<div class="title">
    <h2>Υποβολές Επικοινωνίας</h2>
</div>

<?php
$sql = "SELECT * FROM contact ORDER BY contactID DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table border="1" style="width:100%;">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Text</th>
    </tr>
    <?php foreach ($contacts as $row): ?>
    <tr>
        <td><?php echo $row['contact_id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['text']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php include_once 'includes/footer.php'; ?>