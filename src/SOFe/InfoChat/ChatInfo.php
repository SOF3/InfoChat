<?php

declare(strict_types=1);

namespace SOFe\InfoChat;

use SOFe\InfoAPI\ContextInfo;
use SOFe\InfoAPI\PlayerInfo;
use SOFe\InfoAPI\StringInfo;

final class ChatInfo extends ContextInfo {
	public PlayerInfo $player;
	public StringInfo $message;
}
