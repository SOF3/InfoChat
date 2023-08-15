<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\InfoAPI;

use Closure;
use Generator;
use pocketmine\event\Event;
use pocketmine\plugin\Plugin;
use pocketmine\world\Position;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\AwaitGenerator\GeneratorUtil;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\AwaitGenerator\Traverser;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\PmEvent\Blocks;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\PmEvent\Events;
use SOFe\InfoChat\libs\_0c501cd8aaf9f020\SOFe\Zleep\Zleep;

interface InitContext {
	/**
	 * @template E of Event
	 * @param class-string<E>[] $events
	 * @param Closure(E): string $interpreter
	 * @return Traverser<E>
	 */
	public function watchEvent(array $events, string $key, Closure $interpreter) : Traverser;

	/**
	 * @return Traverser<null>
	 */
	public function watchBlock(Position $position) : Traverser;

	/**
	 * @return Generator<mixed, mixed, mixed, void>
	 */
	public function sleep(int $ticks) : Generator;
}