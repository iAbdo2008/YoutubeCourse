<?php

namespace oPinqz;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable() : void {
        $this->getServer()->getLogger()->info("§aAna Ashta3'lt");
    }

    public function onDisable() : void {
        $this->getServer()->getLogger()->info("§aAna Atafet");
    }

}