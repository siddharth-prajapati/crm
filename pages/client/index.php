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
<h1> Approvals </h1>
	<div class="search-wrapper">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-inverse" type="button"> <i class="fa fa-search"></i> </button>
                                </span>
                            </div>
    </div>
<!--<div class="widget-head bg-background text-center">
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
</div>-->
<?php $approvals = Query::getResults("select * from requests where status = 1");?>
<!-- // Tabs Heading END -->
<div class="widget-body">
    <div class="row innerAll inner-2x">
        <div class="col-sm-12">
            
            <table class="table table-bordered table-white">
            <thead>
				<tr>
				<th>Subject Name</th>
				<th>Date</th>
				<th>Priority</th>
			</tr>
			</thead>
    		<tbody>
            <?php foreach($approvals as $approv){?>
				<tr class="gradeX">
                <td><a href="index.php?page=client&section=approval&id=<?php echo $approv->id;?>"><?php echo $approv->title;?></a></td>
                <td><?php echo $approv->date;?></td>
                <td><?php if($approv->priority ==2){?><button class="btn btn-warning" style="width:80px; height:30px;"></button><?php } 
						elseif($approv->priority ==1){?><button class="btn btn-success" style="width:80px; height:30px;"></button><?php } 
						elseif($approv->priority ==3){?><button class="btn btn-danger" style="width:80px; height:30px;"></button><?php }?>
                </td>
            	</tr>            
            <?php } ?>               
            </tbody>            
        	</table>
            
        </div>
     </div>
</div>