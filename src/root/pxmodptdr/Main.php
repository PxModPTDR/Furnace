<?php
namespace root\pxmodptdr;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use root\pxmodptdr\command\FurnaceCommand;

class Main extends PluginBase {
    use SingletonTrait;

    public function onLoad(): void
    {
        self::setInstance($this);
    }

    public function onEnable(): void
    {
        // Ne pas partager ce plugin ! Même si vous l'avez acheté, ce n'est pas une raison dans tous les cas !
        $this->saveDefaultConfig();
        $this->getLogger()->info("§1Activation du plugin Furnace by PxModPTDR (RootShop)");
        $this->getServer()->getCommandMap()->register("", new FurnaceCommand());
    }
}