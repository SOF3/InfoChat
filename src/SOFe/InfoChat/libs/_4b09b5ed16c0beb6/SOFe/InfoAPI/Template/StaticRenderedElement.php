<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\InfoAPI\Template;

use pocketmine\command\CommandSender;
use Shared\SOFe\InfoAPI\Display;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\AwaitGenerator\Traverser;

use function count;
use function sprintf;




















final class StaticRenderedElement implements RenderedGetElement, RenderedWatchElement {
	public function __construct(private string $raw) {
	}

	public function get() : string {
		return $this->raw;
	}

	public function watch() : Traverser {
		return Traverser::fromClosure(function() {
			yield $this->raw => Traverser::VALUE;
		});
	}
}