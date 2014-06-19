<?php
if(isset($_POST['subbtn']))
{
    $query = Query::genquery("insert into projects (title,website,descri,created_at) values('".$_POST['title']."','".mysql_real_escape_string($_POST['website'])."','".mysql_real_escape_string($_POST['description'])."','".date('Y:m:d h:i:s', time())."')");
}
$projects = Query::getResults("select * from projects");
//print_r($projects);
?>
<div class="modal fade" id="project-task">

    <div class="modal-dialog">
        <div class="modal-content bg-white">
            <!-- Modal body -->
            <div class="modal-body padding-none ">

                <form class="form-horizontal" method="post" action="#" role="form">

                        <div class="innerLR innerT">
                            <div class="form-group">
                                <label for="to" class="col-sm-2 control-label">Title:</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="title" class="form-control" id="to">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Website:</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <input type="text" name="website" class="form-control" id="to">
                                    </div>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>


                    <div class="innerAll bg-white">
                        <textarea class="notebook border-none form-control padding-none" rows="4" name="description" placeholder="Task description..."></textarea>
                        <div class="clearfix"></div>
                    </div>
                

            </div>
            <!-- // Modal body END -->

            <div class="innerLR innerB text-right">
               <!-- <a href="" class="btn btn-default"><i class="fa fa-times"></i> Cancel</a>
                <a href="" class="btn btn-primary"><i class="fa  fa-check"></i> Submit</a>-->
				<input type="reset" name="cancel" value="Cancel" class="btn btn-default" />
				<input type="submit" name="subbtn" value="Submit" class="btn btn-primary" />
            </div>
          </form>
        </div>
    </div>

</div>

<div class="innerLR">
    <h1 class="pull-left">
        Projects &nbsp; 
        <a href="#project-task" data-toggle="modal" class="btn btn-success">Add Project <i class="icon-add-symbol"></i> </a>
    </h1>
    <div class="pull-right innerT">
        <div class="btn-group">
            <a href="index.php?page=projects_list" class="btn btn-inverse"><i class="fa fa-list"></i></a>
            <a href="index.php?page=projects_grid" class="btn btn-default filled"><i class="fa fa-th"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="innerTB">
    <?php foreach($projects as $project){?>
        <div class="widget widget-inverse widget-small ">
            <div class="widget-body padding-none">
                <div class=" media innerAll overflow-visible margin-none">
                    <div class="pull-left innerR half hidden-xs"> <i class="icon-tv-play fa-4x icon-faded"></i> </div>
                    <div class="pull-right hidden-xs">
                        <div class="strong text-muted-dark innerB half">Assigned to:</div>
                        <img src="../assets/images/people/50/2.jpg" alt="photo" class="img-circle" style="width:40px;" data-toggle="tooltip" data-placement="top" data-title="Adrian Demian"/>
                        <img src="../assets/images/people/50/4.jpg" alt="photo" class="img-circle" style="width:40px;" data-toggle="tooltip" data-placement="top" data-title="Laza Bogdan"/>
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="index.php?page=project_milestones&id=<?php echo$project->id;?>" class="media-heading"><?php echo $project->title; ?></a>
                        </h4>
                        <p class="text-muted"><?php echo $project->descri; ?></p>
                        <div class="clearfix"></div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="strong"> Due:</span> 
                            <span> <i class="fa fa-clock-o text-muted"></i> 3 Days</span>
                        </div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="strong"> Tags:</span> 
                            <span class="strong">
                                <a href="#"><span class="label label-primary">HTML</span></a>
                                <a href="#"><span class="label label-warning"> CSS</span></a>
                            </span>
                        </div>
                        <div class="widget widget-none innerR innerB half margin-slim pull-left">
                            <span class="pull-left strong">Progress:</span> 
                            <div class="progress progress-mini set-width">
                                <div class="progress-bar progress-bar-primary" style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php } ?>

    </div>
    <ul class="pagination pagination-centered margin-none">
        <li class="disabled"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</div>