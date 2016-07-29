<?php namespace Slackwolf\Game;

use Slackwolf\Game\Roles\Beholder;
use Slackwolf\Game\Roles\Bodyguard;
use Slackwolf\Game\Roles\Hunter;
use Slackwolf\Game\Roles\Lycan;
use Slackwolf\Game\Roles\Seer;
use Slackwolf\Game\Roles\Tanner;
use Slackwolf\Game\Roles\Witch;
use Slackwolf\Game\Roles\WolfMan;
use Slackwolf\Game\Roles\Granny;

class Role
{
	public function appearsAsWerewolf() {
		return false;
	}

	public function isWerewolfTeam() {
		return false;
	}

	public function getName() {
		return null;
	}

	public function getDescription() {
		return null;
	}

	public function isRole($roleName) {
		return $roleName == $this->getName();
	}

    const VILLAGER = "Villager";
    const SEER = "Cop";
    const WEREWOLF = "Mafia";

    const BEHOLDER = "Beholder";
    const BODYGUARD = "Bodyguard";
    const HUNTER = "Hunter";
    const LYCAN = "Lycan";
    const TANNER = "Fool";
    const WITCH = "Witch";
    const WOLFMAN = "Wolf Man";
    const GRANNY = "Granny";

    public static function getSpecialRoles() {
    	return [
            new Beholder(),
            new Bodyguard(),
            new Hunter(),
            new Lycan(),
            new Seer(),
            new Tanner(),
            new Witch(),
            new WolfMan(),
            new Granny()
        ];
    }
}