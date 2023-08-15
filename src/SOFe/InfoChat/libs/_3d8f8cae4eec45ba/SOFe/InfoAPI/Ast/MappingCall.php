<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\InfoAPI\Ast;

use JsonException;
use Shared\SOFe\InfoAPI\Mapping;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\InfoAPI\QualifiedRef;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\InfoAPI\StringParser;
use function is_numeric;
use function is_string;
use function json_decode;
use function strlen;












































/** Calls a mapping with or without arguments. */
final class MappingCall {
	public function __construct(
		/** The partially qualified reference to the mapping, e.g. `a:b` in `{ a:b(c, d=e) }`. */
		public QualifiedRef $name,
		/** @var Arg[]|null The arguments passed to the mapping, e.g. `c` and `d=e` in `{ a:b(c, d=e) }` */
		public ?array $args,
	) {
	}
}