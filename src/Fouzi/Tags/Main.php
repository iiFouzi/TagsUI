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
  }
  
  public function onDisable()
  {
    $this->getLogger()->info(TF::RED . "Bruh you just disabled TagsUI of fouzi, you suck");
  }
  
  public function onCommand(CommandSender $sender, Command $command, string $Label, array $args) {
    if(!sender instanceof Player){
      $sender->sendMessage(TF::GREEN . "WTF Are you even a player to run this command? Smh");
    }
    switch ($command->getName()) {
      case "tagsui":
        $this->openTagsForm($sender);
      break;
    }
    return true;
  }
  
  public function openTagsForm() {
    
    $form = new SimpleForm(function (Player $player, $data) {
      if($data === null){
        return true;
      }
      switch($data){
        case 0:
          $player->setDisplayName("§f[§4OG§f] " . $player->getName());
        break;
        case 1:
          $player->setDisplayName("§f[§2Quick§aDropper§f] " . $player->getName());
        break;
      }
    });
    $form->setTitle("TagsUI");
    $form->addButton("§f[§4OG§f]");
    $form->addButton("§f[§2Quick§aDropper§f]");
    $form->sendToPlayer($player);
    return $form;   

  }
  
}
