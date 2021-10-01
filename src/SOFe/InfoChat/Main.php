<?php

declare(strict_types=1);

namespace SOFe\InfoChat;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use SOFe\InfoAPI\InfoAPI;
use SOFe\InfoAPI\PlayerInfo;
use SOFe\InfoAPI\StringInfo;

final class Main extends PluginBase implements Listener {
	public function onEnable() : void {
		$this->saveDefaultConfig();
	}

	public function onChat(PlayerChatEvent $event) : void {
		$event->setFormat(InfoAPI::resolve($this->getConfig()->get("chat-format"), new ChatInfo("infochat", [
			"player" => new PlayerInfo($event->getPlayer()),
			"message" => new StringInfo($event->getMessage()),
		])));
	}
}
