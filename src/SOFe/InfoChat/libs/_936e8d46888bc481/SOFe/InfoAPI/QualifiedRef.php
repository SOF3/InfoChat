<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI;

use Shared\SOFe\InfoAPI\Mapping;
use function array_shift;
use function count;
use function explode;
use function implode;




















































final class QualifiedRef {
	/**
	 * @param string[] $tokens
	 */
	public function __construct(
		public array $tokens,
	) {
	}

	public function shortName() : string {
		return $this->tokens[count($this->tokens) - 1];
	}

	public static function parse(string $text) : self {
		return new self(explode(Mapping::FQN_SEPARATOR, $text));
	}
}