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
                $p = $ev->getPlayer();
                
  if ($item->getId() === ItemIds::SUGAR){
          
          $effect = Effect::getEffect(Effect::HASTE);
          $speed = Effect::getEffect(Effect::SPEED);
          $time = 600;
          $amp = 2;
          $p->addEffect(new EffectInstance($effect,$time,$amp,true));
          $p->addEffect(new EffectInstance($speed,$time,$amp,true));
          $p->sendMessage(TextFormat::DARK_GRAY . "Booger Sugar Injested ");
} 
   if ($item->getId() === ItemIds::WHEAT) {

          $effect = Effect::getEffect(Effect::SLOWNESS);
          $speed = Effect::getEffect(Effect::LEVITATION);
          $time = 600;
          $amp = 1;
          $p->addEffect(new EffectInstance($effect,$time,$amp,true));
          $p->addEffect(new EffectInstance($speed,$time,$amp,true));
          $p->sendMessage(TextFormat::DARK_GRAY . "Gas Inhaled");
  }
          if ($item->getId() === ItemIds::RED_MUSHROOM) {

          $effect = Effect::getEffect(Effect::SLOWNESS);
          $speed = Effect::getEffect(Effect::NAUSEA);
          $time = 600;
          $amp = 1;
          $p->addEffect(new EffectInstance($effect,$time,$amp,true));
          $p->addEffect(new EffectInstance($speed,$time,$amp,true));
          $p->sendMessage(TextFormat::DARK_GRAY . "Shroms Have Been Injested");
  }
        
          if ($item->getId() === ItemIds::NETHER_WART) {

          $effect = Effect::getEffect(Effect::JUMP_BOOST);
          $speed = Effect::getEffect(Effect::LEVITATION);
          $time = 600;
          $amp = 1;
          $p->addEffect(new EffectInstance($effect,$time,$amp,true));
          $p->addEffect(new EffectInstance($speed,$time,$amp,true));
          $p->sendMessage(TextFormat::DARK_GRAY . "ACID STRIP!!!");
  }

}

