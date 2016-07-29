<?php namespace Slackwolf\Game\Roles;

use Slackwolf\Game\Role;
class Tanner extends Role
{
	public function getName() {
		return Role::TANNER;
	}

	public function getDescription() {
		return "A player not on the side of the villagers or the mafia who wins if is killed.";
	}
}