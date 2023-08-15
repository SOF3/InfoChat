<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\InfoAPI;

use Closure;
use Generator;
use pocketmine\event\Event;
use pocketmine\plugin\Plugin;
use pocketmine\world\Position;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\AwaitGenerator\GeneratorUtil;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\PmEvent\Blocks;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\PmEvent\Events;
use SOFe\InfoChat\libs\_3d8f8cae4eec45ba\SOFe\Zleep\Zleep;





















final class PluginInitContext implements InitContext {
	public function __construct(private Plugin $plugin) {
	}

	public function watchEvent(array $events, string $key, Closure $interpreter) : Traverser {
		return Events::watch($this->plugin, $events, $key, $interpreter);
	}

	public function watchBlock(Position $position) : Traverser {
		return Traverser::fromClosure(function() use ($position) {
			$traverser = Blocks::watch($position);
			try {
				while ($traverser->next($_block)) {
					yield null => Traverser::VALUE;
				}
			} finally {
				yield from $traverser->interrupt();
			}
		});
	}

	public function sleep(int $ticks) : Generator {
		return Zleep::sleepTicks($this->plugin, $ticks);
	}
}