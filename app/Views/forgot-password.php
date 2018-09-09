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
                  <div class="card-title">Восстановление пароля</div>
                  <p class="text-muted">Введите свой адрес электронной почты, ваш пароль будет сброшен и отправлен вам по электронной почте.</p>
                  <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Сбросить пароль</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Не обращайте внимания, <a href="/">вернуться</a> на страницу входа
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
    require_once 'layout/footer.php';
?>