<?php

namespace AC\Integration\Filter;

use AC\Integration;
use AC\Integration\Filter;
use AC\Integrations;

class IsPluginActive implements Filter {

	public function filter( Integrations $integrations ) {
		return new Integrations( array_filter( $integrations->all(), [ $this, 'is_active' ] ) );
	}

	private function is_active( Integration $integration ) {
		return $integration->is_plugin_active();
	}

}