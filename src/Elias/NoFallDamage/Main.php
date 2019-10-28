<?php
namespace Elias\NoFallDamage;
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
 public function onFall(EntityDamageEvent $e): void{

     $player = $e->getPlayer();

  if(($e->getCause() === EntityDamageEvent::CAUSE_FALL)in_array($player->getLevel()->getFolderName(), Main::get()->getConfig()->get("worlds"))){
      $e->setCancelled(false);
   return false;
 }
 if($e->getCause() === EntityDamageEvent::CAUSE_FALL) {
  $e->setCancelled();// cancels the event
 }
 }
}
