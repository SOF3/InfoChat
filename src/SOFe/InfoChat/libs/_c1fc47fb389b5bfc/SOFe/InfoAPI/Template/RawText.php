<?php

declare(strict_types=1);

namespace SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\InfoAPI\Template;

use pocketmine\command\CommandSender;
use Shared\SOFe\InfoAPI\Display;
use SOFe\InfoChat\libs\_c1fc47fb389b5bfc\SOFe\AwaitGenerator\Traverser;

use function count;
use function sprintf;











final class RawText implements TemplateElement {
	public function __construct(public string $raw) {
	}

	public function render(mixed $context, ?CommandSender $sender, GetOrWatch $getOrWatch) : RenderedElement {
		return $getOrWatch->staticElement($this->raw);
	}
}