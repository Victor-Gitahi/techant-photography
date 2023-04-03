<?php
require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';
?>

<?php view('header', ['title' => 'Register', "link_to_stylesheet" => './CSS/register-page.css']) ?>

<div class="ellipse ellipse_1"></div>
<div class="ellipse ellipse_2"></div>
<div class="ellipse ellipse_3"></div>
<form class="form" action="register.php" method="post">
  <h1 class="form__header">Sign Up</h1>
  <div class="form__input-group">
    <!-- <label for="username">Username</label> -->
    <input type="text" name="username" id="username" placeholder="username"
      class="<?= error_class($errors, 'username') ?>" value="<?= $inputs['username'] ?? '' ?>">

    <small><?= $errors['username'] ?? '' ?></small>
  </div>
  <div class="form__input-group">
    <!-- <label for="email">Email</label> -->
    <input type="email" name="email" id="email" placeholder="email" class="<?= error_class($errors, 'email') ?>"
      value="<?= $inputs['email'] ?? '' ?>">

    <small><?= $errors['email'] ?? '' ?></small>
  </div>
  <div class="form__input-group">
    <!-- <label for="password">Password</label> -->
    <input type="password" name="password" id="password" placeholder="password" value="<?= $inputs['password'] ?? '' ?>"
      class="<?= error_class($errors, 'password') ?>">

    <small><?= $errors['password'] ?? '' ?></small>
  </div>
  <div class="form__input-group">
    <!-- <label for="password2">Password Again</label> -->
    <input type="password" name="password2" id="password2" placeholder="confirm password"
      value="<?= $inputs['password2'] ?? '' ?>" class="<?= error_class($errors, 'password2') ?>">

    <small><?= $errors['password2'] ?? '' ?></small>
  </div>
  <div>
    <label class="form__agree" for="agree">
      <div>
        <input type="checkbox" name="agree" id="agree" value="yes" <?= $inputs['agree'] ?? '' ?> /> I agree
        with the
        <a href="#" title="term of services">term of services</a>
      </div>
    </label>
    <small><?= $errors['agree'] ?? '' ?></small>
  </div>
  <button class="form__button" type="submit">Register</button>
  <footer>Already a member? <a href="login.php">Login here</a></footer>
</form>

<?php view('footer') ?>