<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Ast;

use JsonException;
use Shared\SOFe\InfoAPI\Mapping;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\QualifiedRef;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\StringParser;
use function is_numeric;
use function is_string;
use function json_decode;
use function strlen;





















/** An expression that may have a coalescence chain. */
final class Expr {
	public function __construct(
		/** The main expression to resolve. */
		public InfoExpr $main,
		/** The expression to use if the main expression is null or does not have a display descriptor. */
		public ?Expr $else,
	) {
	}
}