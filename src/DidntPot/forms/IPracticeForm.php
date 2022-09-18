<?php

namespace DidntPot\forms;

use pocketmine\Player;

interface IPracticeForm
{
    /**
     * @param Player $player
     * @param mixed ...$args
     *
     * Displays the form to the player.
     */
    public function display(Player $player, ...$args): void;
}