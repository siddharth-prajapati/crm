<!-- Tabs Heading -->
<?php
if(isset($_POST['id']) and $_POST['id'] !='')
{
	Query::genquery("update  users set fname='".$_POST['firstname']."',lname='".$_POST['lastname']."',email='".$_POST['email']."',last_login='".date('Y:m:d h:i:s', time())."'");
	if($_POST['newpassword']!='')
	{
		Query::genquery("update  users set password = '".md5($_POST['newpassword'])."'");
	}
}
?>
<div class="widget-head bg-background text-center">
    <ul>
        <li class="active">
            <a class="glyphicons lock" href="?page=user"> <i></i>Account Details </a>
        </li>
        <li>
            <a class="glyphicons clock" href="?page=user&amp;section=projects"> <i></i>Projects &amp; Tasks </a>
        </li>
        <li>
            <a class="glyphicons envelope" href="?page=user&amp;section=messages"> <i></i>Messages </a>
        </li>
        <li>
            <a class="glyphicons share_alt" href="?page=user&amp;section=history"> <i></i>History Log </a>
        </li>
    </ul>
</div>
<?php $userinfo = Query::getRow("select * from users where id = ".Session::get('user.id'));74?>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <div class="row innerAll inner-2x">
        <div class="col-sm-6">
            <form class="innerAll" method="post" action="" autocomplete="off">
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input class="form-control" name="firstname" value="<?php echo $userinfo->fname;?>" type="text" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input class="form-control" name="lastname" value="<?php echo $userinfo->lname;?>" type="text" id="lastname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" name="email" value="<?php echo $userinfo->email;?>" type="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" name="password" type="password" value="<?php echo $userinfo->password;?>" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password">New Password:</label>
                        <input class="form-control" name="newpassword" type="password" value="" id="newpassword">
                    </div>
                    <div class="text-center innerT">
                    <input type="hidden" name="id" value="<?php echo $userinfo->id;?>" />
                        <input type="submit" name="userbtn" class="btn btn-inverse" value="Submit Details"> 
                    </div>
                </form>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <h4>
                    Additional Information
                </h4>
                <div class="separator"></div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias aspernatur assumenda at commodi dolorem eos eum exercitationem facere ipsum mollitia nemo perspiciatis quaerat qui quidem, quod repellat repudiandae sed veritatis voluptate? Eos necessitatibus non rem repudiandae similique vero voluptatem?</p>
            </div>
        </div>
    </div>
</div>