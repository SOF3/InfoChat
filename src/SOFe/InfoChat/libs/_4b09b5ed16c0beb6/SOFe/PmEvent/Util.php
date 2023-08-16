<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\PmEvent;

use Closure;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\AwaitGenerator\Await;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\AwaitGenerator\Channel;
use SOFe\InfoChat\libs\_4b09b5ed16c0beb6\SOFe\AwaitGenerator\Traverser;

final class Util {
	/**
	 * @template T
	 * @param Channel<T>[] $channels
	 * @param ?Closure(): void $finalize
	 * @return Traverser<T>
	 */
	public static function traverseChannels(array $channels, ?Closure $finalize = null) : Traverser {
		return Traverser::fromClosure(function() use ($channels, $finalize) {
			try {
				while (true) {
					[, $value] = yield from Await::safeRace(array_map(fn(Channel $channel) => $channel->receive(), $channels));
					yield $value => Traverser::VALUE;
				}
			} finally {
				if($finalize !== null) {
					$finalize();
				}
			}
		});
	}
}