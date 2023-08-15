<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\InfoAPI\Template;

use pocketmine\command\CommandSender;
use Shared\SOFe\InfoAPI\Display;
use SOFe\InfoChat\libs\_2343b7fae52ef2ce\SOFe\AwaitGenerator\Traverser;

use function count;
use function sprintf;

interface TemplateElement {
	/**
	 * @template R of RenderedElement
	 * @template G of RenderedGroup
	 * @param GetOrWatch<R, G> $getOrWatch
	 * @return R
	 */
	public function render(mixed $context, ?CommandSender $sender, GetOrWatch $getOrWatch) : RenderedElement;
}