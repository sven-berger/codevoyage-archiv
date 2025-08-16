<?php if (isset($_SESSION['benutzername']) && isset($_GET['id'])): ?>
    <?php 
        $id = $_GET['id'];

        $sql = "SELECT * FROM benutzer WHERE id = :id";
        $statement = $connection->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
    
        $sql = "SELECT * FROM benutzergruppen";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $benutzergruppen = $statement->fetchAll(PDO::FETCH_ASSOC);

        require_once "$_SERVER[DOCUMENT_ROOT]" . "../1.0.0/lib/class/user/userprofileedit.class.php";

        $userProfileEdit = new UserProfileEdit($connection, $id);
        $userProfileEdit->getData($id);

        require_once "$_SERVER[DOCUMENT_ROOT]" . "../1.0.0/lib/forms/user/userprofileedit.form.php";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if ($userProfileEdit->dataEditSql($_POST)) {  // ✅ Erfolg prüfen
                header("Location: ../1.0.0/index.php?page=user-profile&id=" . $userProfileEdit->getId());
                exit;
            }
        }
    ?>
<?php endif; ?>