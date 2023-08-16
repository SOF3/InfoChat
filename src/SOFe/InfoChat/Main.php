<?php

declare(strict_types=1);

namespace SOFe\InfoChat;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\lang\Translatable;
use pocketmine\plugin\PluginBase;
use SOFe\InfoChat\libs\_936e8d46888bc481\SOFe\InfoAPI\InfoAPI;

final class Main extends PluginBase implements Listener {
	public function onEnable() : void {
		$this->saveDefaultConfig();
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onChat(PlayerJoinEvent $event) : void {
		$event->setJoinMessage(InfoAPI::render(
			$this, $this->getConfig()->get("message-format"),
			["player" => $event->getPlayer()],
		));
	}
}