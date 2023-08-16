<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI;

use Closure;
use Generator;
use pocketmine\event\Event;
use pocketmine\plugin\Plugin;
use pocketmine\world\Position;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\AwaitGenerator\GeneratorUtil;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\PmEvent\Blocks;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\PmEvent\Events;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\Zleep\Zleep;















































final class MockInitContext implements InitContext {
	public function watchEvent(array $events, string $key, Closure $interpreter) : Traverser {
		return new Traverser(GeneratorUtil::empty());
	}

	public function watchBlock(Position $position) : Traverser {
		return new Traverser(GeneratorUtil::empty());
	}

	public function sleep(int $ticks) : Generator {
		return GeneratorUtil::pending();
	}
}