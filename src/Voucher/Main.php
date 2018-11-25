<?php

namespace Voucher;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\Task;
use pocketmine\utils\TextFormat as TF;
use pocketmine\utils\Config;


class Main extends PluginBase implements Listener {
	
	public function onEnable() {
		
		$this->saveDefaultConfig();
		$this->getServer()->getLogger()->notice("Voucher has been enabled!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		
	}
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool {
		
		if(strtolower($command->getName()) === "voucher") {
			
			if(count($args) < 1) {
			   
				$sender->sendMessage(TF::BOLD . TF::RED . "Invalid Argument." . TF::RESET . TF::GRAY . " Usage: /voucher {name}!");
				return true;
			 
			}
			$player = $sender->getServer()->getPlayer($args[0]);
		   if(!$player instanceof Player) {
			   $sender->sendMessage(TF::BOLD . TF::RED . "Error:" . TF::RESET . TF::DARK_RED . " Player not found/Online");
			   return true;
			   
			   }
			if($sender->hasPermission("voucher.cmd") || $sender->isOp()){
				
									
							$voucher = Item::get(Item::PAPER, 2, 1);
							$voucher->setCustomName(TF::RESET . TF::BOLD . TF::RED . "Voucher" . TF::RESET . TF::GRAY . " (Tap anywhere/Right-Click)\n\n" . TF::DARK_GRAY . " *" . TF::AQUA . " Chance to get: \n" . TF::DARK_GRAY . " *" . TF::GRAY . " Fancy items!");
							
							$player->getInventory()->addItem($voucher);

				}
			}
			
			if(!$sender->hasPermission("voucher.cmd")) {
				
			   $sender->sendMessage(TF::BOLD . TF::RED . "Error:" . TF::RESET . TF::DARK_RED . " Insufficient permssions.");				
			}
			
			else {
				
			  $sender->sendMessage(TF::BOLD . TF::RED . "Success:" . TF::RESET . TF::DARK_RED . " Voucher has been given to " . $args[0]);
				
		}
		
		return true;
		
	}
	
	public function onInteract(PlayerInteractEvent $event) {
		
		$player = $event->getPlayer();
		
		if($event->getItem()->getId() === 339) {
		
		$damage = $event->getItem()->getDamage();
			
		if($damage === 2) {
				
				$random = rand(1, 10);
				
	switch($random) {
				
				case 1:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("one-voucher") as $item) {
				
				foreach($this->getConfig()->get("one-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 2:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("two-voucher") as $item) {
				
				foreach($this->getConfig()->get("two-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 3:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("three-voucher") as $item) {
				
				foreach($this->getConfig()->get("three-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 4:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("four-voucher") as $item) {
				
				foreach($this->getConfig()->get("four-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 5:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("five-voucher") as $item) {
				
				foreach($this->getConfig()->get("five-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
		
				case 6:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("six-voucher") as $item) {
				
				foreach($this->getConfig()->get("six-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 7:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("seven-voucher") as $item) {
				
				foreach($this->getConfig()->get("seven-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 8:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("eight-voucher") as $item) {
				
				foreach($this->getConfig()->get("eight-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 9:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("nine-voucher") as $item) {
				
				foreach($this->getConfig()->get("nine-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
                $player->sendMessage("You won" . $max . " * " . $won . "!");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
				case 10:
				
				$voucher = Item::get(Item::PAPER, 2, 1);
   
				foreach($this->getConfig()->get("ten-voucher") as $item) {
				
				foreach($this->getConfig()->get("ten-max") as $max) {
				
				$player->getInventory()->addItem(Item::get($item, 0, mt_rand(1, $max)));
				    }
				}
				$player->addTitle(TF::YELLOW . "Redeemed " . TF::RED . "Voucher");
				$player->getInventory()->removeItem($voucher);
				
				break;
				
            	}
			}
		}
	}
}
