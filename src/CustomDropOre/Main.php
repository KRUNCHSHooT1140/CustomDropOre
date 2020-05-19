<?php

namespace CustomDropOre;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\item\Item;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener
{
	
	public function onEnable(){
		$this->getLogger()->info("[CustomDropOre] Enable! Good Luck");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onBreak(BlockBreakEvent $ev){
		if($ev->getBlock()->getId() == 16){
			$ev->setDrops(array(Item::get(263, 0, 1)));
			$ev->setXpDropAmount(mt_rand(0, 2));
		}
		if($ev->getBlock()->getId() == 15){
			$ev->setDrops(array(Item::get(265, 0, 1)));
		}
		if($ev->getBlock()->getId() == 14){
			$ev->setDrops(array(Item::get(266, 0, 1)));
		}
		if($ev->getBlock()->getId() == 21){
			$ev->setDrops(array(Item::get(351, 4, 1)));
			$ev->setXpDropAmount(mt_rand(2, 5));
		}
		if($ev->getBlock()->getId() == 73){
			$ev->setDrops(array(Item::get(331, 0, 1)));
			$ev->setXpDropAmount(mt_rand(1, 5));
		}
		if($ev->getBlock()->getId() == 153){
			$ev->setDrops(array(Item::get(406, 0, 1)));
			$ev->setXpDropAmount(mt_rand(2, 5));
		}
		if($ev->getBlock()->getId() == 56){
			$ev->setDrops(array(Item::get(264, 0, 1)));
			$ev->setXpDropAmount(mt_rand(3, 7));
		}
		if($ev->getBlock()->getId() == 129){
			$ev->setDrops(array(Item::get(388, 0, 1)));
			$ev->setXpDropAmount(mt_rand(3, 7));
		}
	}
	
	public function onDisable(){
		$this->getLogger()->info("[CustomDropOre] Disable! stay Strong");
	}
}
