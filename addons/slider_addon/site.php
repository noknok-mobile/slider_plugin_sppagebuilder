<?php
/**
* @package SP Page Builder
* @author noknok http://noknok.ru
* @copyright Copyright (c) 2021 noknok
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

//no direct accees
defined('_JEXEC') or die('Restricted Aceess');

class SppagebuilderAddonSample_addon extends SppagebuilderAddons {

    public function render() {
        $class      = (isset($this->addon->settings->class) && $this->addon->settings->class) ? ' ' . $this->addon->settings->class : '';
        $title      = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
        $addon_link = (isset($this->addon->settings->addon_link) && $this->addon->settings->addon_link) ? $this->addon->settings->addon_link : '';
        $addon_icon = (isset($this->addon->settings->addon_icon) && $this->addon->settings->addon_icon) ? $this->addon->settings->addon_icon : '';
        $content    = (isset($this->addon->settings->content) && $this->addon->settings->content) ? $this->addon->settings->content : '';

        $output = '';
        foreach ($this->addon->settings->sp_carousel_item as $key => $value){
            $output .= '<img src="'.$value->image.'" alt="'.$value->title.'">';
        }
        return $output;
    }

    public function css() {
		$addon_id = '#sppb-addon-' . $this->addon->id;
		$layout_path = JPATH_ROOT . '/components/com_sppagebuilder/layouts';
		$css = '';

		// Buttons style
		foreach ($this->addon->settings->sp_carousel_item as $key => $value) {
			if($value->button_text) {
				$css_path = new JLayoutFile('addon.css.button', $layout_path);
				$css .= $css_path->render(array('addon_id' => $addon_id, 'options' => $this->addon->settings, 'id' => 'btn-' . ($this->addon->id + $key) ));
			}
		}

		return $css;
	}

}
?>
