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
	
	/* Code by DragoVN */
        public function onBreak(BlockBreakEvent $ev){
	       // Block id
	       $idb = $ev->getBlock()->getId();
	       // Array for block need drop item
	       $array_1 = [16, 15, 14, 21, 73, 153, 56, 129];
	       // Items drop
	       $array_2 = [
	              16 => [263, 0, 1], 15 => [265, 0, 1],
		      14 => [266, 0, 1], 21 => [251, 4, 1],
		      73 => [331, 0, 1], 153 => => [406, 0, 1], 56 => [264, 0, 1],
		      129 => [388, 0, 1]
	       ];
	       if(in_array($idb, $array_1)){
		      $ev->setDrops(array(Item::get($array_2[$idb][0], $array_2[$idb][1], $array_2[$idb][2])));
		      $ev->setXpDropAmount(mt_rand(0, $idb/($idb-1.5)));
	       }		
        }
	
	public function onDisable(){
		$this->getLogger()->info("[CustomDropOre] Disable! stay Strong");
	}
}
