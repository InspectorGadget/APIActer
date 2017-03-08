<?php

/* 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace RTG\APIActer;

/* Essentials */
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\Server;
use pocketmine\utils\Utils;

class Loader extends PluginBase {
    
    public $config;
    
    public function onEnable() {
        
        $this->saveDefaultConfig();
        $this->config = new Config($this->getDataFolder() . "config.yml");
        
        $api = $this->config->get("api-key");
        $ip = $this->getServer()->getIp();
        
        if(empty($api)) {
            $this->getLogger()->warning("No API Key found, setting to FREE version!");
        }
        else {
            $link = "http://localhost/?ip=$ip&port=19132&api=$api";
            if($link === false) {
                $this->getLogger()->warning("Bye");
                $this->setEnabled(false);
            }
            else {
                $this->getLogger()->warning("Connecting to the API Server!");
            }
        }
        
    }
    
    public function onDisable() {
        $this->config->save();
    }
    
}