<h2>Items</h2>

<div class="content_wrapper">
    <button id="add_item_btn">Add Item</button>

    <table id="items_list">
        <tr>
            <th>Item Structure</th>
            <th>Name</th>
            <th>ID</th>
            <th>ID Appearance</th>
            <th>Weight</th>
            <th>Sell Price</th>
            <th>Weapon Type</th>
            <th>Equip Position</th>
            <th>Cannot Junk</th>
            <th>Cannot Drop</th>
            <th>Cannot Rob</th>
            <th>Cannot Get</th>
            <th>Junk At Remort</th>
            <th>Can Be Summoned</th>
            <th>Item Is Unique</th>
            <th>Damage Roll</th>
            <th>Dealt Exhaust</th>
            <th>Unlimited Ammo</th>
            <th>ID Item Key</th>
            <th>Difficulty</th>
            <th>Slot Height</th>
            <th>Slot Width</th>
            <th>Container Gold</th>
            <th>Container U Respawn</th>
            <th>Container G Respawn</th>
            <th>Sign Message</th>
        </tr>
    </table>
</div>

<div id="item_desc">
    <h3 id="item_name"></h3>
    <div class="flex">
        <div class="item_img"><img id="item_pos" src="../public/images/equipment/equipment_armor.png" alt="Item icon"></div>
        <div class="item_img"><img src="../public/images/item_appearances/generic_armor.png" alt="Item icon"></div>
        <div class="item_img"><img id="item_grid" src="../public/images/equipment_grid/grid3x3.png" alt="Item icon"></div>
    </div>

    <div id="item_desc_wrapper" class="flex">
        <div id="item_reqs" class="flex" name="">
            <fieldset>
                <legend>Item Requirements</legend>
                <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_reqs_stats">
                        <h4>Characteristics</h4>
                        <ul>
                            <li>Stength: <span id="req_str" class="stat_value">---</span></li>
                            <li>Agility: <span id="req_agi" class="stat_value">---</span></li>
                            <li>Intelligence: <span id="req_int" class="stat_value">---</span></li>
                            <li>Wisdom: <span id="req_wis" class="stat_value">---</span></li>
                            <li>Endurence: <span id="req_end" class="stat_value">---</span></li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_caracs">
                        <h4>Combat</h4>
                        <ul>
                            <li>Damage: <span id="req_damage" class="stat_value">---</span></li>
                            <li>Armor: <span id="req_armor_class" class="stat_value">---</span></li>
                            <li>Luck: <span id="req_luck" class="stat_value">---</span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_reqs_powers">
                        <h4>Powers</h4>
                        <ul>
                            <li>Fire: <span id="req_fire" class="stat_value">---</span></li>
                            <li>Earth: <span id="req_earth" class="stat_value">---</span></li>
                            <li>Water: <span id="req_water" class="stat_value">---</span></li>
                            <li>Air: <span id="req_air" class="stat_value">---</span></li>
                            <li>Dark: <span id="req_dark" class="stat_value">---</span></li>
                            <li>Light: <span id="req_light" class="stat_value">---</span></li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_resists">
                        <h4>Resistances</h4>
                        <ul>
                            <li>Fire Resist: <span id="req_fire_resist" class="stat_value">---</span></li>
                            <li>Earth Resist: <span id="req_earth_resist" class="stat_value">---</span></li>
                            <li>Water Resist: <span id="req_water_resist" class="stat_value">---</span></li>
                            <li>Air Resist: <span id="req_air_resist" class="stat_value">---</span></li>
                            <li>Dark Resist: <span id="req_dark_resist" class="stat_value">---</span></li>
                            <li>Light Resist: <span id="req_light_resist" class="stat_value">---</span></li>
                        </ul>
                    </div>
                </div>
            </fieldset>
        </div>

        <div id="item_details" class="flex" name="">
            <fieldset>
                <legend>Item Boosts</legend>

                <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_stats">
                        <h4>Characteristics</h4>
                        <ul>
                            <li>Stength: <span id="str" class="stat_value">---</span></li>
                            <li>Agility: <span id="agi" class="stat_value">---</span></li>
                            <li>Intelligence: <span id="int" class="stat_value">---</span></li>
                            <li>Wisdom: <span id="wis" class="stat_value">---</span></li>
                            <li>Endurence: <span id="end" class="stat_value">---</span></li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Combat</h4>
                        <ul>
                            <li>Damage: <span id="damage" class="stat_value">---</span></li>
                            <li>Armor: <span id="armor_class" class="stat_value">---</span></li>
                            <li>Luck: <span id="luck" class="stat_value">---</span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_powers">
                        <h4>Powers</h4>
                        <ul>
                            <li>Fire: <span id="fire" class="stat_value">---</span></li>
                            <li>Earth: <span id="earth" class="stat_value">---</span></li>
                            <li>Water: <span id="water" class="stat_value">---</span></li>
                            <li>Air: <span id="air" class="stat_value">---</span></li>
                            <li>Dark: <span id="dark" class="stat_value">---</span></li>
                            <li>Light: <span id="light" class="stat_value">---</span></li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_resists">
                        <h4>Resistances</h4>
                        <ul>
                            <li>Fire Resist: <span id="fire_resist" class="stat_value">---</span></li>
                            <li>Earth Resist: <span id="earth_resist" class="stat_value">---</span></li>
                            <li>Water Resist: <span id="water_resist" class="stat_value">---</span></li>
                            <li>Air Resist: <span id="air_resist" class="stat_value">---</span></li>
                            <li>Dark Resist: <span id="dark_resist" class="stat_value">---</span></li>
                            <li>Light Resist: <span id="light_resist" class="stat_value">---</span></li>
                        </ul>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>