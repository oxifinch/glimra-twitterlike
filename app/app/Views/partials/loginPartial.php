<section class="form-container module-container-invisible">
<form action="/user/loginSave" method="POST" class="form-content">
        <div class="form-group">
            <h2>Login Glimma</h2>
            <p hidden>You have tried too many times to login, try again in a few minutes </p>
        </div>

        <div class="form-group">
            <label for="login">
                <input type="text" name="user_name" id="input-user_name" placeholder="Email or username">
            </label>
            <!-- <small>Username incorrect</small> -->
        </div>
        <div class="form-group">
            <label for="register">
                <input type="password" name="password" id="input-password" placeholder="Password..">
            </label>
            <!-- <small>Password incorrect</small> -->
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-secondary btn-padding-large loginbtn" value="Login">
            <a href="/user/register">Or register</a>
        </div>
    </form>
</section>
