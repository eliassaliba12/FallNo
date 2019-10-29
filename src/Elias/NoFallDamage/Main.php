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

if($e->getCause() === EntityDamageEvent::CAUSE_FALL){

$worlds_disabled = $config->get(“worlds”, []);

foreach($worlds_disabled as $worlds){

if(strtolower($e->getEntity()->getLevel()->getName()) === $worlds){
}else {
$event->setCancled();
}
}
}
