<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\InfoAPI;

use Closure;
use Exception;
use RuntimeException;

use function preg_match;
use function str_repeat;
use function str_split;
use function strlen;
use function strpos;
use function substr;





























































































































final class ParseException extends Exception {
	public string $carets;

	public function __construct(
		public string $why,
		public string $buf,
		public int $start,
		public int $end,
	) {
		$carets = str_repeat(" ", $start) . str_repeat("^", $end - $start);
		$this->carets = $carets;
		parent::__construct("$why\n$buf\n$carets");
	}
}