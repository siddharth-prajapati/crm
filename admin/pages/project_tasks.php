<?php
$task = Query::getRow("select * from tasks where id = ".$_REQUEST['id']);
?>
<div class="innerLR">
    <div class="innerT pull-right"> <a href="index.php?page=project_milestones" class="btn btn-primary">Back to project</a> </div>
    <h1>
        <?php echo $task->title;?>
    </h1>
    <div class="separator"></div>
    <div class="row">
        <div class="col-md-8">
            <div class="widget widget-primary widget-small">
                <div class="widget-body">
                    <p class="lead"><?php echo $task->description;?></p>
                    <hr/>
                    <!--<div class="innerT">
                        <a href="#" class="btn btn-success btn-xs pull-right">Add <i class="icon-add-symbol"></i></a>
                        <h4 class="strong innerB half">
                            Checklist
                        </h4>
                        <ul class="list-group bg-gray margin-none">
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i class="fa fa-check-square-o checked"></i> <span>Burn Concept</span> 
                                </label>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" />
                                    <i class="fa fa-check-square-o"></i> Finish HTML/CSS 
                                </label>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i class="fa fa-check-square-o checked"></i> <span>Burn Concept</span> 
                                </label>
                            </li>
                            <li class="list-group-item">
                                <a href="#" class="close"><i class="fa fa-times"></i></a>
                                <label class="checkbox-custom checkbox-custom-2">
                                    <input type="checkbox" name="checkbox" checked="checked">
                                    <i class="fa fa-check-square-o checked"></i> <span>Finish HTML/CSS</span> 
                                </label>
                            </li>
                        </ul>
                        
                    </div>-->
                    <!-- END ROW CHECKLIST -->
                </div>
            </div>
            <div class="widget widget-none">
                <div class="widget-head"><strong>Discussions</strong></div>
                <div class="widget-body">
                    <!-- Comments -->
                   <div class="widget-body">
                    <textarea id="comment" name="comment" class="wysihtml5 col-md-12 form-control" rows="5">
                    </textarea>
                        <span class="input-group-btn">
                            <a class="btn btn-primary rounded-none"><i class="fa fa-pencil"></i> Comment</a>
                        </span>
                    </div>
                    
                    
                    
                    <!-- End Search Bar -->
                    <div class="separator"></div>
                    <div class="widget border-all widget-none">
                        <div class="media innerAll half">
                            <div class="text-center pull-left hidden-xs"> <i class="fa icon-user-1 fa-3x innerT half icon-faded"></i> </div>
                            <div class="media-body innerT half">
                                <div class="strong"> <a href="">mosaicpro</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget border-all widget-none">
                        <div class="media innerAll half">
                            <div class="text-center pull-left hidden-xs"> <i class="fa icon-user-1 fa-3x innerT half icon-faded"></i> </div>
                            <div class="media-body innerT half">
                                <div class="strong"> <a href="">JohnMe</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                                <div class="media">
                                    <img src="../assets//images/people/50/22.jpg" alt="" class="pull-left img-circle innerT half">
                                    <div class="media-body innerT half">
                                        <div class="strong"> <a href="">mosaicpro</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quo recusandae adipisci maxime quas.</p>
                                        <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget border-all widget-none">
                        <div class="media innerAll half">
                            <div class="text-center pull-left hidden-xs"> <i class="fa icon-user-1 fa-3x innerT half icon-faded"></i> </div>
                            <div class="media-body innerT half">
                                <div class="strong"> <a href="">ThinkSM</a> <span class="text-muted text-small"> 6 hrs ago </span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="" class="strong text-small text-muted">reply <i class="fa fa-reply"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- // END Comments -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget widget-info widget-small">
                <div class="widget-body">
                    <h4 class="strong innerB half">
                        Files 
                    </h4>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <!-- FILES UPLOADED START -->
                    <a href="#" class="pull-left innerR innerB half">
                        <img data-src="holder.js/50x50" alt="...">
                    </a>
                    <a href="#" class="btn-add-files"> <i class="fa fa-plus fa-fw"></i> </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="widget widget-primary widget-small">
                <div class="widget-head">
                    <div class="heading">Project Overview</div>
                </div>
                <div class="widget-body">
                    <div class="row">
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Type</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">Template</div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Team</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">3 People</div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Pending</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">3 Milesones</div>
                        </div>
                        <div class="col-xs-5 text-muted-dark">
                            <div class="innerB half">Due</div>
                        </div>
                        <div class="col-xs-7 text-inverse">
                            <div class="innerB half">21 April 2014</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget widget-info widget-small">
                <div class="widget-head">
                    <div class="heading">Assigned Team Members</div>
                </div>
                <?php 
				$taskuser = Query::getRow("select users from tasks where id = ".$_REQUEST['id']);
				$users = Query::getResults("select * from users where id in (".$taskuser->users.")");
				?>
                <div class="widget-body padding-none">
                <?php foreach($users as $user){?>
                    <div class="media innerAll margin-none border-bottom">
                        <div class="pull-left">
                            <img src="assets/images/people/50/2.jpg" width="40" alt="people" class="img-circle media-object"/>
                        </div>
                        <div class="media-body innerT half"><a href="#"><?php echo $user->fname." ".$user->lname;?></a></div>
                    </div>
                    <?php } ?>
                    
               </div>
            </div>
            
        </div>
    </div>
</div>