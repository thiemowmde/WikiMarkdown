<?php

use MediaWiki\ResourceLoader\Context;
use MediaWiki\ResourceLoader\FileModule;

class ResourceLoaderWikiMarkdownVisualEditorModule extends FileModule {

	protected $targets = [ 'desktop', 'mobile' ];

	/**
	 * @param Context $context
	 * @return string JavaScript code
	 */
	public function getScript( Context $context ) {
		$scripts = parent::getScript( $context );

		return $scripts;
	}

	/**
	 * @return bool
	 */
	public function enableModuleContentVersion() {
		return true;
	}

	/**
	 * @return bool
	 */
	public function supportsURLLoading() {
		return false;
	}
}
