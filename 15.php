<?php

if (!empty($_POST)) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $operator = !empty($_POST['operator']) ? $_POST['operator'] : '+';

    if ($operator == '+') {
        $result = $a + $b;
    } elseif ($operator == '-') {
        $result = $a - $b;
    } elseif ($operator == '*') {
        $result = $a * $b;
    } elseif ($operator == '/') {
        if ($b == 0) {
            $result = 'Ошибка!!! На ноль делить нельзя.';
        } else {
            $result = $a / $b;
        }
    } elseif ($operator == '%') {
        if ($b == 0) {
            $result = 'Ошибка!!! На ноль делить нельзя.';
        } else {
            $result = $a % $b;
        }
    }

} else {
    $result = '0';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

  <form method="post" action="15.php">
      <input type="number" name="a" value="<?=!empty($_POST['a']) ? $_POST['a'] : 0;?>" />

      <select name="operator">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
          <option value="%">%</option>
      </select>

      <input type="number" name="b" value="<?=!empty($_POST['b']) ? $_POST['b'] : 0;?>" />
      <button type="submit">Подсчитать</button>
  </form>

  <? if (isset($result)): ?>
    <p>Результат: <?=$result?></p>
  <?endif;?>


</body>
</html>







