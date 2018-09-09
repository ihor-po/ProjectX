<?php
  require_once 'layout/header.php';
?>
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="./demo/brand/tabler.svg" class="h-6" alt="">
              </div>
              <form class="card" action="" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Регистрация</div>
                  <div class="form-group">
                    <label class="form-label">Имя</label>
                    <input type="text" class="form-control" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Пароль</label>
                    <input type="password" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Я принимаю <a href="terms.html">пользовательское соглашение</a></span>
                    </label>
                  </div>
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