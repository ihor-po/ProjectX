<?php
    require_once 'layout/header.php';
?>
<!--     <div class="page">
      <div class="page-single"> -->
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <!-- <img src="uploads/brand/tabler.svg" class="h-6" alt=""> -->
              </div>
              <form class="card" action="login" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Вход в аккаунт</div>
                  <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Пароль
                      <a href="/forgot_password" class="float-right small">Восстановить паротль</a>
                    </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Запомнить меня</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
               Нет аккаунта? <a href="/register">Зарегистрироваться</a>
              </div>
            </div>
          </div>
        </div>
<!--       </div>
    </div> -->
<?php
    require_once 'layout/footer.php';
?>