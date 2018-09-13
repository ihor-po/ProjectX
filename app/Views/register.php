<?php
  require_once 'layout/header.php';
?>
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="" class="h-6" alt="">
              </div>
              <form class="card" action="register" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Регистрация</div>
                  <?php if (isset($error) && !empty($error)) {?>
                    <div class="alert alert-danger" role="alert">
                      <?= $error ?>
                    </div>
                  <?php  } ?>
                  <div class="form-group">
                    <label for="" class="form-label">Логин *</label>
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин" value="<?= (isset($data['login'])) ? $data['login'] : null ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">E-mail *</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="<?= (isset($data['email'])) ? $data['email'] : null ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">Пароль *</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Пароль" required>
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">Подтвердить пароль *</label>
                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Подтвердить пароль" required>
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">Имя</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Имя" value="<?= (isset($data['name'])) ? $data['name'] : null ?>">
                  </div>
                  <div class="form-group">
                    <label for="" class="form-label">О себе</label>
                    <textarea class="form-control" name="about" id="about" placeholder="О себе"><?= (isset($data['null'])) ? $data['about'] : null ?></textarea> 
                  </div>
<!--                   <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Я принимаю <a href="terms.html">пользовательское соглашение</a></span>
                    </label>
                  </div> -->
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Зарегистрироваться</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Уже зарегистрированы? <a href="/">Войти</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
    require_once 'layout/footer.php';
?>