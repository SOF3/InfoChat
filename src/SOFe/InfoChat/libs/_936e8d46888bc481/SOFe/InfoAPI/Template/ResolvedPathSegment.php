<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Template;

use Closure;
use pocketmine\command\CommandSender;
use RuntimeException;
use Shared\SOFe\InfoAPI\Mapping;
use Shared\SOFe\InfoAPI\Parameter;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Ast;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Ast\MappingCall;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Pathfind;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\ReadIndices;

use function array_keys;
use function array_map;
use function count;
use function implode;
use function json_decode;
use function range;
use function sprintf;





















































































































































































final class ResolvedPathSegment {
	/**
	 * @param list<ResolvedPathArg> $args
	 */
	public function __construct(
		public Mapping $mapping,
		public array $args,
	) {
	}
}