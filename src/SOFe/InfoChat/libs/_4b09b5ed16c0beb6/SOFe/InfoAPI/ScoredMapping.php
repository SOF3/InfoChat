<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI;

use Shared\SOFe\InfoAPI\Mapping;

use function array_filter;
use function array_unshift;
use function count;



























































final class ScoredMapping {
	public function __construct(
		public int $score,
		public Mapping $mapping,
	) {
	}
}