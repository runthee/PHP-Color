<?php

namespace projectcleverweb\color\exception\error;
use \projectcleverweb\color\_interface\object;
use \projectcleverweb\color\_interface\exception_error;
use \projectcleverweb\color\_abstract\color_exception;

class general extends color_exception implements object, exception_error {
	/*
	 * Default error code for this instance
	 */
	const CODE = self::E_ERROR;
}
