<?php
$config['menu'] = array(
	'admin' => array(
		array(
            'label' => 'Overview',
            'icon' => 'fa fa-home',
            'page' => 'index',
            'link_class' => 'index'
		),

        /*array(
            'label' => 'Projects Grid',
            'icon' => 'fa fa-th-large',
            'page' => 'projects_grid'
        ),*/
        array(
            'label' => 'Projects List',
            'icon' => 'fa fa-list',
            'page' => 'projects_list'
        ),
        /*array(
            'label' => 'Project Overview',
            'icon' => 'fa fa-clock-o',
            'page' => 'project_milestones'
        ),*/
        array(
            'label' => 'Tasks',
            'icon' => 'fa fa-ticket',
            'page' => 'project_tasks'
        ),
        array(
            'label' => 'User Account',
            'icon' => 'fa fa-user',
            'page' => 'user'
        ),

        array(
            'label' => 'Calendar',
            'icon' => 'fa fa-calendar',
            'page' => 'calendar',
            'link_class' => 'calendar'
        ),
        array(
            'label' => 'Access',
            'icon' => 'fa fa-lock',
            'type' => 'collapse',
            'page' => array(
                array(
                    'label' => 'User List',
                    'icon' => 'fa fa-lock',
                    'page' => 'login',
                    'link_class' => 'no-ajaxify'
                ),
                array(
                    'label' => 'New User',
                    'icon' => 'fa fa-pencil',
                    'page' => 'signup',
                    'link_class' => 'no-ajaxify'
                )
            )
        ),
        /*array(
            'label' => 'Pricing',
            'icon' => 'fa fa-money',
            'page' => 'pricing_tables',
            'link_class' => 'pricing'
        ),
        array(
            'label' => 'Forum',
            'icon' => 'fa fa-life-ring',
            'page' => 'support_forum_overview',
            'link_class' => 'forum'
        ),
        array(
            'label' => 'Knowledge Base',
            'icon' => 'fa fa-file-text-o',
            'page' => 'support_kb'
        ),
		array(
			'label' => 'Components',
			'icon' => 'fa fa-th-large',
			'type' => 'collapse',
			'page' => array(
				array(
					'label' => 'UI Elements',
					'icon' => 'fa fa-circle-o',
					'page' => 'ui'
				),
				array(
					'label' => 'Icons',
					'icon' => 'fa fa-circle-o',
					'page' => 'icons'
				),
				array(
					'label' => 'Typography',
					'icon' => 'fa fa-circle-o',
					'page' => 'typography'
				),
				array(
					'label' => 'Tabs',
					'icon' => 'fa fa-circle-o',
					'page' => 'tabs'
				),
				array(
					'label' => 'Tables',
					'icon' => 'fa fa-circle-o',
					'type' => 'collapse',
					'badge' => [
						'class' => 'badge-primary',
						'label' => '3'
					],
					'page' => array(
						array(
							'label' => 'Tables',
							'page' => 'tables'
						),
						array(
							'label' => 'Responsive Tables',
							'page' => 'tables_responsive'
						),
					)
				),
				array(
					'label' => 'Forms',
					'icon' => 'fa fa-circle-o',
					'type' => 'collapse',
					'badge' => [
						'class' => 'badge-primary',
						'label' => '4'
					],
					'page' => array(
						array(
							'label' => 'Form Wizards',
							'page' => 'form_wizards'
						),
						array(
							'label' => 'Form Elements',
							'page' => 'form_elements'
						),
						array(
							'label' => 'Form Validator',
							'page' => 'form_validator'
						),
						array(
							'label' => 'File Managers',
							'page' => 'file_managers'
						),
					)
				),
				array(
					'label' => 'Sliders',
					'icon' => 'fa fa-circle-o',
					'page' => 'sliders'
				),
				array(
					'label' => 'Charts',
					'icon' => 'fa fa-circle-o',
					'page' => 'charts'
				),
				array(
					'label' => 'Grid',
					'icon' => 'fa fa-circle-o',
					'page' => 'grid'
				),
				array(
					'label' => 'Notifications',
					'icon' => 'fa fa-circle-o',
					'page' => 'notifications'
				),
				array(
					'label' => 'Modals',
					'icon' => 'fa fa-circle-o',
					'page' => 'modals'
				),
				array(
					'label' => 'Thumbnails',
					'icon' => 'fa fa-circle-o',
					'page' => 'thumbnails'
				),
				array(
					'label' => 'Carousels',
					'icon' => 'fa fa-circle-o',
					'page' => 'carousels'
				),
				array(
					'label' => 'Image Cropping',
					'icon' => 'fa fa-circle-o',
					'page' => 'image_crop'
				),
				array(
					'label' => 'Twitter API',
					'icon' => 'fa fa-circle-o',
					'page' => 'twitter'
				),
				array(
					'label' => 'Infinite Scroll',
					'icon' => 'fa fa-circle-o',
					'page' => 'infinite_scroll'
				),
			)
		),
        array(
            'label' => 'Skins',
            'class' => 'category border-top'
        ),
        array(
            'label' => 'Skins Custom HTML',
            'class' => 'reset',
            'file' => 'skins.php'
        ),*/
	),
	'client'=>array(
		
		array(
            'label' => 'Approvals',
            'icon' => 'fa fa-list',
            'page' => 'client',
            'link_class' => 'index'
		),

        array(
            'label' => 'Request',
            'icon' => 'fa fa-list',
            'page' => 'client&section=request'
        ),
		array(
            'label' => 'Messages',
            'icon' => 'fa fa-envelope-o',
            'page' => 'client&section=messages',
            'link_class' => 'index'
		),

        array(
            'label' => 'Chat',
            'icon' => 'fa fa-comments-o',
            'page' => 'client&section=chat'
        ),
	
	
	)
);