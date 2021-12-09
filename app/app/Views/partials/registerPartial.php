    <section class="form-container module-container-invisible">
        <form action="/user/registerSave" method="POST" class="form-content">
            <div class="form-group">
                <h2>Register to Glimma</h2>
                <p>Register and be beans!</p>
                <p hidden>You have tried too many times to login, try again in a few minutes </p>
            </div>
            <div class="form-group">
                <label for="login">
                    <input type="text" name="user_name" id="input-user_name" maxlength="30"
                        placeholder="Email or username">
                </label>
                <!-- <small>Username incorrect</small> -->
            </div>
            <div class="form-group">
                <label for="register">
                    <input type="text" name="password" id="input-password" maxlength="45" placeholder="Password..">
                </label>
                <!-- <small>Password incorrect</small> -->
            </div>
            <div class="form-group form-group-submit">
                <ul class="remove-liststyle">
                    <li><input type="submit" class="btn btn-secondary btn-padding-large loginbtn" value="Register"></li>
                    <li><b><a href="/user">Or Login</a></b></li>
            </div>
        </form>
    </section>
    </form>