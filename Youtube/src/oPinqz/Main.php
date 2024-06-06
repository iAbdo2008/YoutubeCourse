<?php

namespace oPinqz;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable() : void {
        $this->getServer()->getLogger()->info("§aAna Ashta3'lt");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onDisable() : void {
        $this->getServer()->getLogger()->info("§aAna Atafet");
    }

    public function onJoin(PlayerJoinEvent $e) {
        $player = $e->getPlayer();

        $player->sendMessage("Anta D5lt");
        $e->setJoinMessage($player->getName() . " D5l al Server");
    }

    public function onQuit(PlayerQuitEvent $e) {
        $player = $e->getPlayer();

        $e->setQuitMessage($player->getName() . " Tl3 mn al Server");
    }

}