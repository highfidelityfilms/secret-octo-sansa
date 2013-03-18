    <div class="row">
        <div class="span4 offset10">
                            <legend>Sign in to your account</legend>
                <form method="POST" action="http://highfidelityfilms.co.uk/index.php/auth/authenticate" accept-charset="UTF-8">
                                        <input class="span3" placeholder="Email" type="text" name="email">
                    <input class="span3" placeholder="Password" type="password" name="pword">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"> Remember Me
                    </label>
                    <button class="btn-info btn" type="submit">Login</button>
                </form>
                    </div>
    </div>

<span style="color: red"><?php //echo $errmsg ?></span> <br>