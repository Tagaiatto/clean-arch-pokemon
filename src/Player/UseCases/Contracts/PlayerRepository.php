<?php

declare(strict_types=1);

namespace App\Player\UseCases\Contracts;

use App\Player\Domain\Player;

interface PlayerRepository
{
    public function get(int $pk): ?Player;
    public function debitMoney(Player $player, float $money): bool;
    public function addIntoBag(Player $player, array $items): bool;
    public function profileInfo(int $playerId): array;
}
