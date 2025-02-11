<?php
include 'includes/db.php';

// Получение списка участников
$result = $conn->query("SELECT * FROM participants");
$title = "Список участников"; // Устанавливаем заголовок страницы
?>

<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Список участников</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Вес</th>
                <th>Весовая категория</th>
                <th>Дисциплина</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['weight']); ?></td>
                    <td><?php echo htmlspecialchars($row['weight_category']); ?></td>
                    <td><?php echo htmlspecialchars($row['discipline']); ?></td> <!-- Здесь отображается дисциплина -->
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="index.php" class="btn btn-secondary mt-3">Назад на главную</a>
</div>

<?php include 'footer.php'; ?>