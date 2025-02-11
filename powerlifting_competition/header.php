<!-- header.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000; /* Черный фон */
            color: #fff; /* Белый текст */
        }
        .navbar {
            background-color: #c00; /* Красная навигационная панель */
        }
        .navbar-brand, .nav-link {
            color: #fff !important; /* Белый текст для навигации */
        }
        .container {
            background-color: #222; /* Темно-серый фон для контейнера */
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #c00; /* Красная кнопка */
            border-color: #c00; /* Красная граница */
        }
        .btn-primary:hover {
            background-color: #900; /* Темно-красный при наведении */
            border-color: #900; /* Темно-красный при наведении */
        }
        .alert {
            border-radius: 5px; /* Закругленные углы для уведомлений */
        }
        .table th, .table td {
            color: #fff; /* Белый цвет текста для заголовков и ячеек таблицы */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php">Powerlifting Competition</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="participants.php">Список участников</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Записаться на участие</a>
                </li>
            </ul>
        </div>
    </nav>