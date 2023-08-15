<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\InfoAPI\Ast;

use JsonException;
use Shared\SOFe\InfoAPI\Mapping;
use SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\InfoAPI\QualifiedRef;
use SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\InfoAPI\StringParser;
use function is_numeric;
use function is_string;
use function json_decode;
use function strlen;

/** The entire template string. */
final class Template {
	public function __construct(
		/** @var (RawText|Expr)[] */
		public array $elements,
	) {
	}
}