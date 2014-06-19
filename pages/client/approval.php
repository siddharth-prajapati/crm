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
<h1>Approvals</h1>
<?php $approval = Query::getRow("select * from requests where id = ".$_GET['id']);?>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <div class="row innerAll inner-2x">
        <div class="col-sm-9">
            <h2><?php echo $approval->title; ?></h2>
            <p><?php echo $approval->description; ?></p>
        </div>
        <div class="col-sm-3">
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
    </div>
</div>