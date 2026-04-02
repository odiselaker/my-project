<?php require_once "db/config.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $Periexomeno = $_POST['periexomeno'];

    $sql = "INSERT INTO about (title, periexomeno) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$title, $Periexomeno]);

    echo "stalthike!!!";
}
?>

<form method="POST">
    <input type="text" name="title" placeholder="Title"><br><br>
    <textarea name="periexomeno" placeholder="periexomeno"></textarea><br><br>
    <button type="submit">Insert</button>
</form>