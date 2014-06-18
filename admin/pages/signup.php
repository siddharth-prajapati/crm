<?php
if(isset($_POST['userbtn']))
{
	$result = Query::genquery("insert into users (fname,lname,email,password,last_login,created_at) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".md5($_POST['password'])."','".date('Y:m:d h:i:s', time())."','".date('Y:m:d h:i:s', time())."')");
}
?>
<div class="row innerT inner-2x">
    <div class="col-md-4 col-md-offset-4 innerT inner-2x">
        <div class="innerT inner-2x">
            <div class="widget margin-none">
                <h3 class="bg-white border-bottom innerAll text-primary">
                    Sign Up for Free!
                </h3>
                <form class="innerAll" method="post" action="" autocomplete="off">
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input class="form-control" name="firstname" type="text" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input class="form-control" name="lastname" type="text" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" name="email" type="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" name="password" type="password" value="" id="password">
                    </div>
                    <div class="text-center innerT">
                        <p>
                            <small>*By proceeding you agree to the following <a href="">terms and conditions</a>.</small>
                        </p>
                        <input type="submit" name="userbtn" class="btn btn-inverse" value="Submit Details"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>