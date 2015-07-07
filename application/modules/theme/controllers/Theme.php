<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Theme controller
 * of theme module for CI3
 * @version 1.0.0 [<description>]
 * manage theme layouts, assets, skins
 * create master layout, extend child ones
 * @author Nazmul Hasan <[<nazmul.phpdroidx@gmail.com>]>
 */

class Theme extends MX_Controller {

	public $view_data = array();
	//public $username = null;

	public function buffer()
	{
		$args = func_get_args();

		if (count($args) == 1)
		{
			foreach ($args[0] as $arg)
			{
				$key	 = $arg[0];
				$view	 = explode('/', $arg[1]);
				$data	 = array_merge(isset($arg[2]) ? $arg[2] : array(), $this->view_data);

				$this->view_data[$key]	 = $this->load->view($view[0] . '/' . $view[1], $data, TRUE);
			}
		}
		else
		{
			$key	 = $args[0];
			$view	 = explode('/', $args[1]);
			$data	 = array_merge(isset($args[2]) ? $args[2] : array(), $this->view_data);

			$this->view_data[$key]	 = $this->load->view($view[0] . '/' . $view[1], $data, TRUE);
		}
		return $this;
	}

	public function set()
	{
		$args = func_get_args();

		if (count($args) == 1)
		{
			foreach ($args[0] as $key => $value)
			{
				$this->view_data[$key] = $value;
			}
		}
		else
		{
			$this->view_data[$args[0]] = $args[1];
		}
		return $this;
	}

	public function render($view = 'layout')
	{
		$this->load->view('theme/' . $view, $this->view_data);
	}

	/**
	 * Simple function to load a view directly using the assigned template
	 * Does not use buffering or rendering
	 * @param string $view
	 * @param array $data
	 */
	public function load_view($view, $data = array())
	{
		$view = explode('/', $view);

		$this->load->view($view[0] . '/' . $view[1], $data);
	}

	/*
	|--------------------------------------------------------------------------
	| Asset manager for CI3
	|--------------------------------------------------------------------------
	|
	| Manage css, js, images right from your own controller
	| Define the ORDERING of printing the assets
	| Tag with controller or module, the specific assets
	| Include styles or scripts instead of assets file
	| Include in header or footer
	|
	*/

	/**
	 * [assetUrl description]
	 * @param  [type] $asset_name [description]
	 * @param  [type] $asset_type [description]
	 * @return [type]             [description]
	 */
	protected function assetUrl($asset_name, $asset_type = NULL)
	{
	    
	    $CI = & get_instance();
	    $base_url = $CI->config->item('base_url');

	    $asset_root = ASSET_PATH;
	    $asset_location = $base_url . $asset_root;

		if (is_array($asset_name)) {
			$cachename = md5(serialize($asset_name));
			$asset_location .= 'cache/' . $cachename . '.' . $asset_type;

			if(!is_file($asset_root . 'cache/' . $cachename . '.' . $asset_type)) {
				$out = fopen($asset_root . 'cache/' . $cachename . '.' . $asset_type, "w");

				foreach($asset_name as $file) {
					$file_content = file_get_contents($asset_root . $asset_type . '/' . $file);
					fwrite($out, $file_content);
				}
				fclose($out);
			}
		} else {
			$asset_location .= $asset_type . '/' . $asset_name;
		}
	    return $asset_location;
	}

	/**
	 * [parseAssetHtml description]
	 * @param  [type] $attributes [description]
	 * @return [type]             [description]
	 */
	private function parseAssetHtml($attributes = NULL) 
	{
		if (is_array($attributes)):
			$attribute_str = '';
			foreach ($attributes as $key => $value):
				$attribute_str .= ' ' . $key . '="' . $value . '"';
			endforeach;
			return $attribute_str;
		endif;
		return '';
	}

	/**
	 * [css_asset description]
	 * @param  [type] $asset_name [description]
	 * @param  array  $attributes [description]
	 * @return [type]             [description]
	 */
	public function css_asset($asset_name,$attributes = array())
	{
		$attribute_str = $this->parseAssetHtml($attributes);
		return '<link href="' . $this->assetUrl($asset_name,'css') . '" rel="stylesheet" type="text/css"' . $attribute_str . ' />';
	}

	/**
	 * [js_asset description]
	 * @param  [type] $asset_name [description]
	 * @return [type]             [description]
	 */
	public function js_asset($asset_name)
	{
		return '<script type="text/javascript" src="' . $this->assetUrl($asset_name,'js') . '"></script>';
	}

	/**
	 * [image_asset description]
	 * @param  [type] $asset_name  [description]
	 * @param  string $module_name [description]
	 * @param  array  $attributes  [description]
	 * @return [type]              [description]
	 */
	public function image_asset($asset_name, $module_name = '', $attributes = array())
	{
		$attribute_str = $this->parseAssetHtml($attributes);
		return '<img src="' . $this->assetUrl($asset_name,'img') . '"' . $attribute_str . ' />';
	}

	/**
	 * [addStyle description]
	 */
	public function addStyle()
	{
		return '<style></style>';
	}

	/**
	 * [addScript description]
	 */
	public function addScript()
	{
		return '<script></script>';
	}

	/**
	 * [enQueueAssets description]
	 * @param  array  $params [description]
	 * @return [type]         [description]
	 */
	public function enQueueAssets( array $params )
	{
		extract($params);
	    // Validate required elements
	    if (!isset($css) && !isset($js) && !isset($img) && !isset($style) && !isset($script)) {
	        throw new Exception(sprintf('Invalid isset($css) ? isset($js) ? isset($img) ? isset($style) ? isset($script) ? : %s', serialize($params)));
	    }

	    // Localize optional elements
	    $css		= isset($css) ? $css : array();
	    $js			= isset($js) ? $js : array();
	    $img		= isset($img) ? $img : '';
	    $style		= isset($style) ? $style : '';
	    $script		= isset($script) ? $script : '';

	    $header_assets = '';
	    $footer_assets = '';

	    if (isset($css) && count($css) > 0) {
	    	$cssAssetsHeader = array();
	    	$cssAssetsFooter = array();
	    	$footerCssAssetsNonCached = array();
	    	$headerCssAssetsNonCached = array();

	    	foreach ($css as $key => $val) {
	    		if ( isset($css[$key]['is_cached']) && $css[$key]['is_cached'] == TRUE ) {
		    		if ( isset($css[$key]['in_footer']) && $css[$key]['in_footer'] == TRUE ) {
		    			$cssAssetsFooter[] = $css[$key]['url'];
		    		} else {
		    			$cssAssetsHeader[] = $css[$key]['url'];
		    		}
		    		
		    	} else {
		    		if ( isset($css[$key]['in_footer']) && $css[$key]['in_footer'] == TRUE ) {
		    			$footerCssAssetsNonCached[] = $css[$key]['url'];
		    		} else {
		    			$headerCssAssetsNonCached[] = $css[$key]['url'];
		    		}
		    	}
	    	}

	    	$header_assets .= $this->css_asset($cssAssetsHeader);
	    	$footer_assets .= $this->css_asset($cssAssetsFooter);

	    	if (isset($headerCssAssetsNonCached) && count($headerCssAssetsNonCached) > 0) {
	    		foreach ($headerCssAssetsNonCached as $css) {
	    			$header_assets .= $this->css_asset($css);
	    		}
	    	}

	    	if (isset($footerCssAssetsNonCached) && count($footerCssAssetsNonCached) > 0) {
	    		foreach ($footerCssAssetsNonCached as $css) {
	    			$footer_assets .= $this->css_asset($css);
	    		}
	    	}
	    }

	    if (isset($js) && count($js) > 0) {
	    	$jsAssetsHeader = array();
	    	$jsAssetsFooter = array();
	    	$headerJsAssetsNonCached = array();
	    	$footerJsAssetsNonCached = array();

	    	foreach ($js as $key => $val) {
	    		if ( isset($js[$key]['is_cached']) && $js[$key]['is_cached'] == TRUE ) {
		    		if ( isset($js[$key]['in_footer']) && $js[$key]['in_footer'] == FALSE ) {
		    			$jsAssetsHeader[] = $js[$key]['url'];
		    		} else {
		    			$jsAssetsFooter[] = $js[$key]['url'];
		    		}
		    		
		    	} else {
		    		if ( isset($js[$key]['in_footer']) && $js[$key]['in_footer'] == FALSE ) {
		    			$headerJsAssetsNonCached[] = $js[$key]['url'];
		    		} else {
		    			$footerJsAssetsNonCached[] = $js[$key]['url'];
		    		}
		    	}
	    	}

	    	$header_assets .= $this->js_asset($jsAssetsHeader);
	    	$footer_assets .= $this->js_asset($jsAssetsFooter);

	    	if (isset($headerJsAssetsNonCached) && count($headerJsAssetsNonCached) > 0) {
	    		foreach ($headerJsAssetsNonCached as $js) {
	    			$header_assets .= $this->js_asset($js);
	    		}
	    	}

	    	if (isset($footerJsAssetsNonCached) && count($footerJsAssetsNonCached) > 0) {
	    		foreach ($footerJsAssetsNonCached as $js) {
	    			$footer_assets .= $this->js_asset($js);
	    		}
	    	}
	    }

	    // set the header and footer assets
	    $this->set('header_assets', $header_assets);
	    $this->set('footer_assets', $footer_assets);
	}

}