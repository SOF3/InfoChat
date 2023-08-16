<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Defaults;

use Shared\SOFe\InfoAPI\Display;
use Shared\SOFe\InfoAPI\KindMeta;
use Shared\SOFe\InfoAPI\Standard;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Indices;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\ReflectUtil;

use function is_string;
use function mb_strtolower;
use function mb_strtoupper;

/**
 * Implements a standard string node.
 */
final class Strings {
	public static function register(Indices $indices) : void {
		$indices->registries->kindMetas->register(new KindMeta(Standard\StringInfo::KIND, "Text", "A string of characters", []));
		$indices->registries->displays->register(new Display(Standard\StringInfo::KIND, fn($value) => is_string($value) ? $value : Display::INVALID));

		ReflectUtil::addClosureMapping(
			$indices, "infoapi:string", ["upper", "uppercase"], fn(string $string) : string => mb_strtoupper($string),
			help: "Converts the entire string to uppercase.",
		);
		ReflectUtil::addClosureMapping(
			$indices, "infoapi:string", ["lower", "lowercase"], fn(string $string) : string => mb_strtolower($string),
			help: "Converts the entire string to lowercase.",
		);
	}
}