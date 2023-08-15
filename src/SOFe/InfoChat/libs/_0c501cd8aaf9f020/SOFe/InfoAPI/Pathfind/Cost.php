<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\Pathfind;

use Closure;
use Shared\SOFe\InfoAPI\Mapping;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\QualifiedRef;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI\ReadIndices;
use SplPriorityQueue;
use function array_merge;
use function array_shift;
use function count;
























































































/**
 * Cost of a path.
 *
 * A path with fewer steps is better than a path with more steps.
 * If two paths have the same number of steps,
 * a path with lower score is better than a path with higher score.
 */
final class Cost {
	public function __construct(
		public int $sumScore,
		public int $numMappings,
	) {
	}

	public function addMapping(int $score) : self {
		return new self(
			sumScore: $this->sumScore + $score,
			numMappings: $this->numMappings + 1,
		);
	}

	public function compare(Cost $that) : int {
		if ($this->numMappings !== $that->numMappings) {
			return $this->numMappings <=> $that->numMappings;
		}

		return $this->sumScore <=> $that->sumScore;
	}
}