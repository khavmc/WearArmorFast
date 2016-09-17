<?php

namespace WearArmorFast;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\inventory\InventoryBase
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener {
  
  public function onEnable(){
    $this->getLogger()->info(TextFormat::GREEN . "Enabled :)");
    $this->getServer()->getPluginManager()->registerEvents($this ,$this);
  }
  
  public function onTouch(PlayerInteractEvent $event){
    $player = $event->getPlayer();
    // Diamond Armor
    if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 310){
      $i= Item::get(310, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setHelmet($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 311){
      $i= Item::get(311, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setChestplate($i);
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 312){
      $i= Item::get(312, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setLeggings($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 313){
      $i= Item::get(313, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setBoots($i)
      
      // Iron Armor
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 306){
      $i= Item::get(306, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setHelmet($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 307){
      $i= Item::get(307, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setChestplate($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 308){
      $i= Item::get(308, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setLeggings($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 309){
      $i= Item::get(309, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setBoots($i)
      
      // Chain Armor]
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 302){
      $i= Item::get(302, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setHelmet($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 303){
      $i= Item::get(303, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setChestplate($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 304){
      $i= Item::get(304, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setLeggings($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 305){
      $i= Item::get(305, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setBoots($i);
      
      // Gold
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 314){
      $i= Item::get(314, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setHelmet($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 315){
      $i= Item::get(315, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setChestplate($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 316){
      $i= Item::get(316, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setLeggings($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 317){
      $i= Item::get(317, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setBoots($i)
      
      // Leather Armor
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 298){
      $i= Item::get(298, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setHelmet($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 299){
      $i= Item::get(299, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setChestplate($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 300){
      $i= Item::get(300, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setLeggings($i)
      
          if($event->getPlayer()->getInventory()->getItemInHand()->getId() === 301){
      $i= Item::get(301, 0, 1)
      $player->getInventory()->clearItem($i);
      $player->getInventory()->setBoots($i)
      
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
          }
    }
  }
}
