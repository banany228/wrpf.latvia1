<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $weight_category = $_POST['weight_category'];
    $bench_press_weight = $_POST['bench_press_weight'] ?? null;
    $deadlift_weight = $_POST['deadlift_weight'] ?? null;
    $squat_weight = $_POST['squat_weight'] ?? null;
    $discipline = $_POST['discipline'];

    // Подготовка и выполнение запроса
    $stmt = $conn->prepare("INSERT INTO participants (name, weight, weight_category, bench_press_weight, deadlift_weight, squat_weight, discipline) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisssss", $name, $weight, $weight_category, $bench_press_weight, $deadlift_weight, $squat_weight, $discipline);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success' role='alert'>Вы успешно зарегистрированы!</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Ошибка: " . $stmt->error . "</div>";
    }

    $stmt->close();
}
?>

<?php $title = "Записаться на участие"; ?>
<?php include 'header.php'; ?>

<div class="container mt-5">
    <h1 class="text-center">Записаться на участие</h1>
    <form method="POST">
        <div class="form-group">
            <label for="name">Имя и Фамилия</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя и фамилию" required>
        </div>
        <div class="form-group">
            <label for="weight">Вес</label>
            <input type="number" class="form-control" id="weight" name="weight" placeholder="Введите ваш вес" required>
        </div>
        <div class="form-group">
            <label for="weight_category">Весовая категория</label>
            <input type="text" class="form-control" id="weight_category" name="weight_category" placeholder="Введите весовую категорию" required>
        </div>
        <div class="form-group">
            <label for="discipline">Дисциплина</label>
            <select class="form-control" id="discipline" name="discipline" onchange="toggleWeights()" required>
                <option value="">Выберите дисциплину</option>
                <option value="bench_press">Bench Press</option>
                <option value="push_pull">Push & Pull</option>
                <option value="powerlifting">Powerlifting</option>
            </select>
        </div>
        <div class="form-group" id="bench_press_weight" style="display:none;">
            <label for="bench_press_weight_input">Вес жима лежа</label>
            <input type="number" class="form-control" id="bench_press_weight_input" name="bench_press_weight" placeholder="Введите вес жима лежа">
        </div>
        <div class="form-group" id="deadlift_weight" style="display:none;">
            <label for="deadlift_weight_input">Вес становой тяги</label>
            <input type="number" class="form-control" id="deadlift_weight_input" name="deadlift_weight" placeholder="Введите вес становой тяги">
        </div>
        <div class="form-group" id="squat_weight" style="display:none;">
            <label for="squat_weight_input">Вес приседаний</label>
            <input type="number" class="form-control" id="squat_weight_input" name="squat_weight" placeholder="Введите вес приседаний">
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
    <a href="index.php" class="btn btn-secondary mt-3">Назад на главную</a>
</div>

<?php include 'footer.php'; ?>