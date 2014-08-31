<?php

namespace JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
   
    public function onEnable() {
       
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        
        $this->getLogger()->info("Everything loaded!");
    }
       
       
    }
   
    function onJoin(PlayerJoinEvent $event) {
       
        $player = $event->getPlayer();
        $name = $player->getDisplayName();
       
        if  ($player->isOp) {
           
            Server::getInstance()->broadcastMessage(TextFormat::DARK_RED . $name." [ADMIN] joined the game!");
           
        }
       
        else {
                    Server::getInstance()->broadcastMessage(TextFormat::DARK_GREEN . "Hello! Guys, ".$name."joined the game!");

       
    }
   
}

?>
