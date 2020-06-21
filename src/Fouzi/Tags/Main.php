<?php

namespace Fouzi\Tags;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat as TF;
use jojoe77777\FormAPI\SimpleForm;

class Main extends PluginBase {
  
  public function onEnable()
  {
    $this->getLogger()->info(TF::BLUE . "Tags by iiFouzi is enabled, make sure to drop a follow in www.github.com/iiFouzi");
    $this->getServer()->getPluginManager()->getPlugin("FormAPI");
  }
  
  public function onDisable()
  {
    $this->getLogger()->info(TF::RED . "Bruh you just disabled TagsUI of fouzi, you suck");
  }
}