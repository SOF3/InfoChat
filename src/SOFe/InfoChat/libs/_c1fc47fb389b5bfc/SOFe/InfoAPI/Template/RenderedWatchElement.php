<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\InfoAPI\Template;

use Closure;
use Generator;
use RuntimeException;
use SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\AwaitGenerator\Await;
use SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\AwaitGenerator\Traverser;

use function count;
use function implode;
use function is_string;























































































































interface RenderedWatchElement extends RenderedElement {
	/**
	 * @return Traverser<string>
	 */
	public function watch() : Traverser;
}