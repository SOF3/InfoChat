<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\InfoAPI\Pathfind;

use Closure;
use Shared\SOFe\InfoAPI\Mapping;
use SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\InfoAPI\QualifiedRef;
use SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\InfoAPI\ReadIndices;
use SplPriorityQueue;
use function array_merge;
use function array_shift;
use function count;






















































































































/**
 * @extends SplPriorityQueue<Cost, Path>
 */
final class Heap extends SplPriorityQueue {
	public function compare(mixed $priority1, mixed $priority2) : int {
		return $priority1->compare($priority2);
	}

	public function insertPath(Path $path) : void {
		$this->insert($path, $path->cost);
	}
}