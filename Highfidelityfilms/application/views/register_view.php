<div class="row">
<div class="span3 offset10">
        <h2>Sign Up</h2>
        <form class="form-horizontal" action="http://highfidelityfilms.co.uk/index.php/auth/createaccount" method="POST">
            <label>First Name</label>
            <input type="text" name="firstname" class="span3">
            <label>Last Name</label>
            <input type="text" name="lastname" class="span3">
            <label>Email Address</label>
            <input type="email" name="email" class="span3">
            <label>Username</label>
            <input type="text" name="username" class="span3">
            <label>Password</label>
            <input type="password" name="pword" class="span3">
            <label>Confirm Password</label>
            <input type="password" name="conf_pword" class="span3">

            <label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
            <input type="submit" value="Register" class="btn btn-primary pull-right">
            <div class="clearfix"></div>
        </form>
    </div></div>
  <span style="color: red"><?php //echo $errmsg ?></span> <br>