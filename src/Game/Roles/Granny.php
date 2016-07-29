<?php namespace Slackwolf\Game\Roles;

use Slackwolf\Game\Role;

class Granny extends Role
{
    public function getName() {
        return Role::GRANNY;
    }

    public function getDescription() {
        return "A villager who if visited by anyone during the night, kills that person";
    }
}