<?php

namespace Drugs;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\{Server, Player};
use pocketmine\event\player\{PlayerJoinEvent, PlayerQuitEvent};
use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;


class Main extends PluginBase implements Listener{



        public function onEnable(){

            $this->getLogger()->notice("§a§lDrugs");

            $this->getServer()->getPluginManager()->registerEvents($this, $this);

        }
        public function onItemConsume(PlayerInteractEvent $event){
            $player = $event->getPlayer();
            $item = $event->getItem();
                
  if ($item->getId() === ItemIds::(353)){
          
          $effect = Effect::getEffect(Effect::HASTE)->setDuration(INT32_MAX);
          $p->addEffect(new EffectInstance($effect,$time,$amp,true))
} 
   if ($item->getId() === ItemIds::(ID)) {

           $effect = Effect::getEffect(Effect::HASTE)->setDuration(INT32_MAX);
          $p->addEffect(new EffectInstance($effect,$time,$amp,true))
  }
                

}

