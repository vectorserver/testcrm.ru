<div class="row">
    <div class="col-4 offset-4">
        <form method="post" action="/admin">
            <input type="hidden" name="login" value="1">
            <div class="mb-3">
                <label for="login" class="form-label">Логин</label>
                <input name="user" required type="text" class="form-control" id="login">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пароль</label>
                <input  name="pass" required type="password" class="form-control" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </div>
</div>
