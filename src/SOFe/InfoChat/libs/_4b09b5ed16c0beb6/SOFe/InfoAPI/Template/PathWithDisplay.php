<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Template;

use pocketmine\command\CommandSender;
use Shared\SOFe\InfoAPI\Display;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\AwaitGenerator\Traverser;

use function count;
use function sprintf;


















































































































































final class PathWithDisplay implements CoalesceChoice {
	public function __construct(
		public ResolvedPath $path,
		public Display $display,
	) {
	}

	public function getPath() : ResolvedPath {
		return $this->path;
	}

	public function getDisplay() : ?Display {
		return $this->display;
	}
}