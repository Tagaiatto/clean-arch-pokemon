<?php

declare(strict_types=1);

namespace App\Player\Infra\Repository;

use App\Player\UseCases\Contracts\FindPlayerByPKRepository as FindPlayerByPKRepositoryInterface;
use App\Player\Domain\Factory\PlayerFactory;
use App\Player\Domain\Player;

class FindPlayerByPKRepository implements FindPlayerByPKRepositoryInterface
{
    public function get(int $pk): ?Player
    {
        return PlayerFactory::create([
            'name' => 'Ash Ketchum',
            'avatar' => 'https://i1.sndcdn.com/avatars-000740962879-t7ox4k-t500x500.jpg',
            'gender' => 'M',
            'xp' => 100,
            'money' => 30000
        ]);
    }
}