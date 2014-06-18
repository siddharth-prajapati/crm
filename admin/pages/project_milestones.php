<?php
$tasks = Query::getResults("select * from tasks where project_id = ".$_REQUEST['id']);
?>
<div class="innerLR">
    <h1 class="pull-left">
        Project :: Smart Template
    </h1>
    <div class="innerT pull-right"> <a href="index.php?page=projects_grid" class="btn btn-primary">Back to projects</a> </div>
    <div class="clearfix"></div>
    <div class="separator"></div>
    <div class="widget widget-none">
        <div class="widget-body">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, quia, illo, cupiditate, numquam consequuntur veritatis explicabo vero laboriosam aliquam fuga quas cumque ab voluptate dignissimos deleniti aspernatur obcaecati velit placeat.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="row half">
                <!--<div class=" col-md-6 col-sm-6 col-xs-6">
                    <div class="pull-left innerR half">
                        <h4>
                            Milestones 
                        </h4>
                    </div>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
                </div>-->
                <div class="pull-right innerR half">
                    <select class="selectpicker" data-style="btn btn-default strong filled">
                        <option>All</option>
                        <option>Urgent</option>
                        <option>Normal Priority</option>
                        <option>Low Priority</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php foreach ($tasks as $task)
			{?>
            <div class="widget widget-primary widget-small">
                <div class="media innerAll half">
                    <div class="pull-left h1 media-object hidden-xs margin-none innerR"> <i class=" icon-alarm-clock icon-faded fa-fw"></i> </div>
                    <div class="pull-right text-right">
                        <span class="label label-danger">Urgent</span> 
                        <div class="strong text-muted innerT half"> 4 Tasks </div>
                    </div>
                    <div class="media-body">
                        <h4>
                            <a href="index.php?page=project_tasks&id=<?php echo $task->id;?>"> <?php echo $task->title;?></a>
                        </h4>
                        <div class="innerR"> <span class="strong">Due: </span> <span> <?php echo $task->enddate;?></span> </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            <div class="widget">
                <div class="widget-head">
                    <div class="heading">Recent Activity</div>
                </div>
                <div class="widget-body padding-none">
                    <ul class="timeline-activity project list-unstyled">
                        <li class="">
                            <span class="list-date">
<span class="day">16</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/1.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 30</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">14</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/2.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Adrian Demian</a>
                                            <label class="label label-default"># 100</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                            <div class="attachement innerT">
                                                <a href="#" class="glyphicons-filetype doc"><i></i></a>
                                                <a href="#" class="glyphicons-filetype pdf"><i></i></a>
                                                <a href="#" class="glyphicons-filetype rtf"><i></i></a>
                                                <a href="#" class="glyphicons-filetype csv"><i></i></a>
                                                <a href="#" class="glyphicons-filetype ppt"><i></i></a>
                                                <a href="#" class="glyphicons-filetype html"><i></i></a>
                                                <a href="#" class="glyphicons-filetype zip"><i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">29</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/3.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Mary Dawson</a>
                                            <label class="label label-default"># 74</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">11</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/4.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">John Carsten</a>
                                            <label class="label label-default"># 75</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">11</span>
<span class="month">March</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/5.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 11</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">25</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/6.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Bogdan Laza</a>
                                            <label class="label label-default"># 76</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">30</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/7.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Stephanie</a>
                                            <label class="label label-default"># 59</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">25</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/8.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">John Carsten</a>
                                            <label class="label label-default"># 21</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">14</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/9.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">girl381</a>
                                            <label class="label label-default"># 98</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">27</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/10.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Bogdan Laza</a>
                                            <label class="label label-default"># 65</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">28</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/11.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 58</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">15</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/12.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">Suzanne Marie</a>
                                            <label class="label label-default"># 55</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-danger">Important</label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur <a href="">adipisicing elit</a>. Fugiat molestiae qui fuga .. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="">
                            <span class="list-date">
<span class="day">28</span>
<span class="month">February</span>
</span>
                            <div class="block block-inline">
                                <div class="caret"></div>
                                <div class="">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-rounded hidden-xs" src="../assets/images/people/50/13.jpg" width="45" alt="..." />
                                        </a>
                                        <div class="media-body">
                                            <a href="" class="media-heading innerR ">John Carsten</a>
                                            <label class="label label-default"># 97</label>
                                            <label class="label label-primary">
                                                <a href="#" class="text-primary"><i class="fa fa-reply"></i></a>
                                            </label>
                                            <label class="label label-success">
                                                <a href="" class="text-success"><i class="fa fa-lock"></i> Completed </a>
                                            </label>
                                            <div class="clearfix"></div>
                                            <strong>Milestone Title</strong> Lorem ipsum dolor sit amet, consectetur repellendus amet distinctio inventore possimus cum dicta enim!.. 
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
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
            
            <div class="widget">
                <div class="widget-head">
                    <div class="heading">Tasks History</div>
                </div>
                <div class="widget-body padding-none ">
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"> <i class="fa fa-ticket"></i> Created 2nd level of sub...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> Changer Sidebar ver...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> More Widgets on...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> Added Job Page in...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> Another Task completed...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> Another Task completed...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> Another Task completed...</a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="innerAll half border-bottom">
                        <div class="pull-right text-muted">12 Jan</div>
                        <a href="index.php?page=project_tasks" class="text-inverse"><i class="fa fa-ticket"></i> Another Task completed...</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>