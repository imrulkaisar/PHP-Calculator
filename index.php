<?php require "functions.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Calculator</title>

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <fieldset id="container">
      <form name="calculator" method="post" action="">
        <input id="display" type="text" name="display" value="<?php echo htmlspecialchars($display); ?>" readonly>

        <!-- Digit Buttons -->
        <input class="button digits" type="submit" name="digit" value="7" onclick="this.form.display.value += '7'; return false;">
        <input class="button digits" type="submit" name="digit" value="8" onclick="this.form.display.value += '8'; return false;">
        <input class="button digits" type="submit" name="digit" value="9" onclick="this.form.display.value += '9'; return false;">
        <input class="button mathButtons" type="submit" name="operator" value="+" onclick="this.form.display.value += ' + '; return false;">
        <br>
        <input class="button digits" type="submit" name="digit" value="4" onclick="this.form.display.value += '4'; return false;">
        <input class="button digits" type="submit" name="digit" value="5" onclick="this.form.display.value += '5'; return false;">
        <input class="button digits" type="submit" name="digit" value="6" onclick="this.form.display.value += '6'; return false;">
        <input class="button mathButtons" type="submit" name="operator" value="-" onclick="this.form.display.value += ' - '; return false;">
        <br>
        <input class="button digits" type="submit" name="digit" value="1" onclick="this.form.display.value += '1'; return false;">
        <input class="button digits" type="submit" name="digit" value="2" onclick="this.form.display.value += '2'; return false;">
        <input class="button digits" type="submit" name="digit" value="3" onclick="this.form.display.value += '3'; return false;">
        <input class="button mathButtons" type="submit" name="operator" value="*" onclick="this.form.display.value += ' * '; return false;">
        <br>
        <input id="clearButton" class="button" type="submit" name="clear" value="C">
        <input class="button digits" type="submit" name="digit" value="0" onclick="this.form.display.value += '0'; return false;">
        <input class="button mathButtons" type="submit" name="equals" value="=">
        <input class="button mathButtons" type="submit" name="operator" value="/" onclick="this.form.display.value += ' / '; return false;">
      </form>
    </fieldset>
  </div>
</body>

</html>