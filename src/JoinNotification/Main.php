<?php

namespace JoinNotification;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{                                       
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("Everything loaded!");
    }

    /**
    * @param PlayerJoinEvent $event
    *
    * @priority HIGHEST
    */
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        if ($player->isOp()) {
            $event->setJoinMessage("Hello! Guys, " . $player->getDisplayName() . " [ADMIN] joined the game!");
        }else {
            $event->setJoinMessage("Hello! Guys, " . $player->getDisplayName() . " [GUEST] joined the game!");
        }
    }
}
