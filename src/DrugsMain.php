<?php

namespace Drugs;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\{Server, Player};
use pocketmine\event\player\{PlayerJoinEvent, PlayerQuitEvent};


class Main extends PluginBase implements Listener{



        public function onEnable(){

            $this->getLogger()->notice("§a§lDrugs");

            $this->getServer()->getPluginManager()->registerEvents($this, $this);

        }


