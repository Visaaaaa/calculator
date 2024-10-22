<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Простой калькулятор на PHP</title>
</head>
<body>

<h2>Простой калькулятор на PHP</h2>

<form method="post" action="calculate.php">
    <input type="number" name="num1" placeholder="Первое число" required>
    <select name="operation" required>
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="num2" placeholder="Второе число" required>
    <button type="submit">Рассчитать</button>
</form>

</body>
</html>