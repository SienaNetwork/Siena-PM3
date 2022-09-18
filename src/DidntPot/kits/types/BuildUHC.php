<?php

namespace DidntPot\kits\types;

use DidntPot\kits\AbstractKit;
use DidntPot\player\item\types\GoldenApple;
use DidntPot\utils\Utils;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;

class BuildUHC extends AbstractKit
{
    public function __construct(float $xkb = 0.4, float $ykb = 0.4, int $speed = 10)
    {
        parent::__construct('BuildUHC', [], [], [], $xkb, $ykb, $speed, 'textures/items/bucket_lava.png');

        $e1 = new EnchantmentInstance(Enchantment::getEnchantment(0), 2);

        $e2 = new EnchantmentInstance(Enchantment::getEnchantment(17), 3);

        $e3 = new EnchantmentInstance(Enchantment::getEnchantment(2), 4);

        $e4 = new EnchantmentInstance(Enchantment::getEnchantment(9), 3);

        $e5 = new EnchantmentInstance(Enchantment::getEnchantment(19), 3);

        $this->items = [
            Utils::createItem(276, 0, 1, [$e4, $e2]),
            Utils::createItem(346, 0, 1),
            Utils::createItem(261, 0, 1, [$e5, $e2]),
            Utils::createItem(325, 10, 1),
            Utils::createItem(325, 8, 1),
            GoldenApple::create(false, 6),
            GoldenApple::create(true, 3),
            Utils::createItem(364, 0, 64),
            Utils::createItem(4, 0, 64),
            Utils::createItem(262, 0, 8),
            Utils::createItem(325, 10, 1),
            Utils::createItem(325, 8, 1),
            Utils::createItem(5, 2, 64),
            Utils::createItem(262, 0, 32),
            Utils::createItem(279, 0, 1),
            Utils::createItem(278, 0, 1)
        ];

        $helmet = Utils::createItem(310, 0, 1, [$e1, $e4]);

        $chest = Utils::createItem(311, 0, 1, [$e1, $e4]);

        $legs = Utils::createItem(312, 0, 1,
            [$e1, $e4, $e3]);

        $boots = Utils::createItem(313, 0, 1, [$e1, $e4]);

        $this->armor = [$helmet, $chest, $legs, $boots];
        $this->replaysEnabled = false;
    }
}