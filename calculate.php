<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = '';

    // Выполнение арифметической операции в зависимости от выбора пользователя
    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Ошибка: деление на ноль!";
            }
            break;
        default:
            $result = "Неизвестная операция";
            break;
    }

    // Вывод результата
    echo "<h2>Результат: $result</h2>";
    echo '<a href="index.php">Вернуться назад</a>';
}
?>