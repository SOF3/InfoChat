<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\Pathfind;

use Closure;
use Shared\SOFe\InfoAPI\Mapping;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\QualifiedRef;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\ReadIndices;
use SplPriorityQueue;
use function array_merge;
use function array_shift;
use function count;








































































final class Path {
	/**
	 * @param QualifiedRef[] $unreadCalls
	 * @param Mapping[] $mappings
	 * @param array<string, true> $implicitLoopDetector
	 */
	public function __construct(
		public array $unreadCalls,
		public string $tailKind,
		public array $mappings,
		public array $implicitLoopDetector,
		public Cost $cost,
	) {
	}
}