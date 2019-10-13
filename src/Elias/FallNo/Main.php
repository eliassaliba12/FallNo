<?php

namespace Elias\FallNo;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\entity\EntityDamageEvent;

class Main extends PluginBase implements Listener {

public function onEnable() {
 $this->getLogger()->info("your plugin started");
 $this->getServer()->getPluginManager()->registerevents(($this), $this);
 $this->saveResource("config.yml");
}
public function onFall(EntityDamageEvent $event) {
 if($event->getCause() === EntityDamageEvent::CAUSE_FALL) {
  $event->setCancelled();// cancels the event
 }elseif(in_array($event->getPlayer()->getLevel()->getFolderName(), Main::get()->getConfig()->get("worlds"))){
$event->setCancelled(false);
}
}
}
