<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Login']) ?>
<div class="ellipse ellipse_1"></div>
<div class="ellipse ellipse_2"></div>
<div class="ellipse ellipse_3"></div>
<main>
  <form class="form" action="login.php" method="post">
    <h1 class="form__header">Login</h1>
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
      <small><?= $errors['username'] ?? '' ?></small>
    </div>

    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
      <small><?= $errors['password'] ?? '' ?></small>
    </div>

    <section>
      <button class="form__button" type="submit">Login</button>
      <a class="register__link" href="register.php">Register</a>
    </section>
  </form>
</main>
<?php view('footer') ?>