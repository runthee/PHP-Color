<?php

namespace projectcleverweb\color\exception\error;
use \projectcleverweb\color\_interface\object;
use \projectcleverweb\color\exception\error\general;

class invalid_configuration extends general implements object {
	/*
	 * Default error code for this instance
	 */
	const CODE = self::E_INVALID_CONFIGURATION;
}
