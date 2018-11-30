<?php

namespace XIVAPI;

use XIVAPI\Api\Character;
use XIVAPI\Api\FreeCompany;
use XIVAPI\Api\Linkshell;
use XIVAPI\Api\Lodestone;
use XIVAPI\Api\Market;
use XIVAPI\Api\PatchList;
use XIVAPI\Api\PvPTeam;
use XIVAPI\Api\Search;
use XIVAPI\Api\Content;
use XIVAPI\Common\Environment;
use XIVAPI\Guzzle\Guzzle;

class XIVAPI
{
    /** @var Environment */
    public $environment;
    /** @var Search */
    public $search;
    /** @var Content */
    public $content;
    /** @var Character */
    public $character;
    /** @var FreeCompany */
    public $freecompany;
    /** @var Linkshell */
    public $linkshell;
    /** @var PvPTeam */
    public $pvpteam;
    /** @var Lodestone */
    public $lodestone;
    /** @var Market */
    public $market;
    /** @var PatchList */
    public $patchlist;

    public function __construct()
    {
        $this->environment  = new Environment();
        $this->search       = new Search();
        $this->content      = new Content();
        $this->character    = new Character();
        $this->freecompany  = new FreeCompany();
        $this->linkshell    = new Linkshell();
        $this->pvpteam      = new PvPTeam();
        $this->lodestone    = new Lodestone();
        $this->market       = new Market();
        $this->patchlist    = new PatchList();
    }

    public function queries($queries): XIVAPI
    {
        foreach ($queries as $query => $value) {
            Guzzle::setQuery($query, $value);
        }

        return $this;
    }
}
