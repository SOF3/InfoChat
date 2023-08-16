<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Template;

use Closure;
use pocketmine\command\CommandSender;
use RuntimeException;
use Shared\SOFe\InfoAPI\Mapping;
use Shared\SOFe\InfoAPI\Parameter;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Ast;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Ast\MappingCall;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Pathfind;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\ReadIndices;

use function array_keys;
use function array_map;
use function count;
use function implode;
use function json_decode;
use function range;
use function sprintf;







































































































































































final class ResolvedPath {
	/**
	 * @param non-empty-array<int, ResolvedPathSegment> $segments
	 */
	public function __construct(
		public array $segments,
	) {
	}

	public function getTargetKind() : string {
		return $this->segments[count($this->segments) - 1]->mapping->targetKind;
	}
}