<?php
/**
* @package SP Page Builder
* @author noknok http://noknok.ru
* @copyright Copyright (c) 2021 noknok
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

//no direct accees
defined('_JEXEC') or die('Restricted Aceess');

SpAddonsConfig::addonConfig(
	array(
		'type'=>'content',
		'addon_name'=>'slider_addon',
		'title'=> 'Slider Addon',
		'desc'=> 'Slider addon for SP Page Builder',
		'icon'=>JURI::root() . 'plugins/sppagebuilder/demo/addons/slider_addon/assets/images/icon.png',
		'category'=>'MyAddons',
		'attr'=>array(
			'general' => array(
				'admin_label'=>array(
					'type'=>'text',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
				),
				// Title
				'title'=>array(
					'type'=>'textarea',
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std'=>  'This is sample title'
				),

				// Content
				'sp_carousel_item'=>array(
					'title'=> JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEMS'),
					'attr'=>  array(

						'title'=>array(
							'type'=>'text',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_TITLE'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_TITLE_DESC'),
							'std'=>'Carousel Item Title',
						),

						'image'=>array(
							'type'=>'media',
							'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_BACKGROUND_IMAGE'),
							'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CAROUSEL_ITEM_BACKGROUND_IMAGE_DESC'),
						),

					),
				),

			),
		),
	)
);
