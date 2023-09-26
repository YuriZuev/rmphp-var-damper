<?php
/**
 * (c) Zuev Yuri y_zuev@mail.ru
 */

use Rmphp\Vardumper\Dumper;

if (!function_exists('addShutdownInfo')) {
	/**
	 * @param array $exData
	 * @return void
	 */
	function addShutdownInfo(array $exData = []): void {
		Dumper::addShutdownInfo($exData);
	}
}

if (!function_exists('vdd')) {
	/**
	 * @param mixed $value
	 * @return void
	 */
	function vdd(mixed ...$value): void {
		Dumper::vdd($value);
		exit;
	}
}

if (!function_exists('vd')) {
	/**
	 * @param mixed $value
	 * @return void
	 */
	function vd(mixed ...$value): void {
		Dumper::dump($value);
	}
}