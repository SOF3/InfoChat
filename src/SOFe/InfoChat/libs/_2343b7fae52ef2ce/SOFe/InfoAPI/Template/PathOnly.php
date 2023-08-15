<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\InfoAPI\Template;

use pocketmine\command\CommandSender;
use Shared\SOFe\InfoAPI\Display;
use SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\AwaitGenerator\Traverser;

use function count;
use function sprintf;



































































































































final class PathOnly implements CoalesceChoice {
	public function __construct(
		public ResolvedPath $path,
	) {
	}

	public function getPath() : ResolvedPath {
		return $this->path;
	}

	public function getDisplay() : ?Display {
		return null;
	}
}