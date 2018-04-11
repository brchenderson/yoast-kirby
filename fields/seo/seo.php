<?php
class SeoField extends BaseField {
	static public $fieldname = 'seo';
	static public $assets = array( 'js' => array('yoast.js', 'script.js'), 'css' => array( 'style.min.css', 'yoast.css' ) );

	public function input() {
		if( class_exists('SeoCore') ) {
			// Set page
			$page = $this->page();
			$site = $this->site();

			// Load language file
			SeoCore::loadLanguage();

			// Load main snippet
			$html = SeoCore::snippet('main', $data = array(
				'controller' => SeoCore::panel($this->page(), $this),
				'field' => $this,
				'page' => $this->page(),
				'site' => $this->site()
			));

			return $html;
		} else {
			return l::get('plugin.required','Seo plugin is required!');
		}
	}

	// Connecting PHP to Javascript
	public function element() {
		$element = parent::element();
		$element->data('field', self::$fieldname);
		return $element;
	}
}
