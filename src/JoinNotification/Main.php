<?php

namespace JoinNotification;

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
           
            $this->getServer()->broadcastMessage( "Hello! Guys," .$name." [ADMIN] joined the game!");
           
        }
       
        else {
                    $this->getServer()->broadcastMessage( "Hello! Guys, ".$name." [DEFAULT] joined the game!");

       
    }
   
}

?>
