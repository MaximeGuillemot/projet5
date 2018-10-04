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
        <div class="item_img"><img id="item_pos" src="" alt="Item icon"></div>
        <div class="item_img"><img src="../public/images/item_appearances/generic_armor.png" alt="Item icon"></div>
        <div class="item_img"><img id="item_grid" src="" alt="Item grid"></div>
        <div class="stats_wrapper" style="margin-right: 30px; margin-top: 20px; height: 120px;">
            <h4>General</h4>
            <ul>
                <li>Weight: <span id="" class="stat_value">---</span></li>
                <li>Sell Price: <span id="" class="stat_value">---</span></li>
                <li>Cannot Junk: <span id="" class="stat_value">---</span></li>
                <li>Cannot Drop: <span id="" class="stat_value">---</span></li>
                <li>Cannot Rob: <span id="" class="stat_value">---</span></li>
            </ul>
        </div>
    </div>

    <div id="item_desc_wrapper" class="flex">
        <div id="item_reqs" class="flex" name="">
            <fieldset>
                <legend>Item Requirements</legend>
                <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_reqs_stats">
                        <h4>Characteristics</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/strength.png" alt="Strength Icon"> Str.: <span id="req_str" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/agility.png" alt="Agility Icon"> Agi.: <span id="req_agi" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/intelligence.png" alt="Intelligence Icon"> Int.: <span id="req_int" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/wisdom.png" alt="Wisdom Icon"> Wis.: <span id="req_wis" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/endurence.png" alt="Endurence Icon"> End.: <span id="req_end" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/luck.png" alt="Luck Icon"> Luck: <span id="req_luck" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_powers">
                        <h4>Powers</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/fire.png" alt="Fire Icon"> Fire: <span id="req_fire" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/earth.png" alt="Earth Icon"> Earth: <span id="req_earth" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/water.png" alt="Water Icon"> Water: <span id="req_water" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/air.png" alt="Air Icon"> Air: <span id="req_air" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/dark.png" alt="Dark Icon"> Dark: <span id="req_dark" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/light.png" alt="Light Icon"> Light: <span id="req_light" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_resists">
                        <h4>Resistances</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/fire_r.png" alt="Fire Resist Icon"> Fir R.: <span id="req_fire_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/earth_r.png" alt="Earth Resist Icon"> Ear. R.: <span id="req_earth_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/water_r.png" alt="Water Resist Icon"> Wat. R.: <span id="req_water_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/air_r.png" alt="Air Resist Icon"> Air. R.: <span id="req_air_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/dark_r.png" alt="Dark Resist Icon"> Dar. R.: <span id="req_dark_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/light_r.png" alt="Light Resist Icon"> Lig. R.: <span id="req_light_resist" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_caracs">
                        <h4>Combat</h4>
                        <ul>
                            <li>Damage: <span id="req_damage" class="stat_value">---</span></li>
                            <li>Armor: <span id="req_armor_class" class="stat_value">---</span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Utility Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/picklock.png" alt="Pick Lock Icon"> Pick.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/hide.png" alt="Hide Icon"> Hide: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/sneak.png" alt="Sneak Icon"> Sneak: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/peek.png" alt="Peek Icon"> Peek.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/rob.png" alt="Hide Icon"> Rob: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/plunder.png" alt="Hide Icon"> Plund.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Combat Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/powerconjuring.png" alt="Power Conjuring Icon"> P.Conj.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/meditation.png" alt="Meditation Icon"> Medit.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/immobilization.png" alt="Immobilization Icon"> Immo.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/dualweapons.png" alt="Dual Weapons Icon"> Dual: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/primalscream.png" alt="Primal Scream Icon"> Prim.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/search.png" alt="Search Icon"> Search: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Attack Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/attack.png" alt="Attack Icon"> Att.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/archery.png" alt="Archery Icon"> Arc.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/powerfulblow.png" alt="Poweful Blow Icon"> PowB.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/stunblow.png" alt="Stun Blow Icon"> StunB.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/criticalstrike.png" alt="Critical Strike Icon"> Crit.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/armorpierce.png" alt="Armor Pierce Icon"> Arm.P.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Defense Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/dodge.png" alt="Dodge Icon"> Dodge: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/parry.png" alt="Parry Icon"> Parry: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/firstaid.png" alt="First Aid Icon"> F.Aid.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/rapidhealing.png" alt="Rapid Healing Icon"> Rap.H.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/resurrection.png" alt="Resurrection Icon"> Res.: <span id="armor_class" class="stat_value">---</span>
                            </li>
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
                            <li>
                                <img src="../public/images/stats/strength.png" alt="Strength Icon"> Str.: <span id="str" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/agility.png" alt="Agility Icon"> Agi.: <span id="agi" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/intelligence.png" alt="Intelligence Icon"> Int.: <span id="int" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/wisdom.png" alt="Wisdom Icon"> Wis.: <span id="wis" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/endurence.png" alt="Endurence Icon"> End.: <span id="end" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/luck.png" alt="Luck Icon"> Luck: <span id="luck" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_powers">
                        <h4>Powers</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/fire.png" alt="Fire Icon"> Fire: <span id="req_fire" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/earth.png" alt="Earth Icon"> Earth: <span id="req_earth" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/water.png" alt="Water Icon"> Water: <span id="req_water" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/air.png" alt="Air Icon"> Air: <span id="req_air" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/dark.png" alt="Dark Icon"> Dark: <span id="req_dark" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/light.png" alt="Light Icon"> Light: <span id="req_light" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_resists">
                        <h4>Resistances</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/fire_r.png" alt="Fire Resist Icon"> Fir R.: <span id="req_fire_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/earth_r.png" alt="Earth Resist Icon"> Ear. R.: <span id="req_earth_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/water_r.png" alt="Water Resist Icon"> Wat. R.: <span id="req_water_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/air_r.png" alt="Air Resist Icon"> Air. R.: <span id="req_air_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/dark_r.png" alt="Dark Resist Icon"> Dar. R.: <span id="req_dark_resist" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/light_r.png" alt="Light Resist Icon"> Lig. R.: <span id="req_light_resist" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>

                    <div class="stats_wrapper" id="item_reqs_caracs">
                        <h4>Combat</h4>
                        <ul>
                            <li>Damage: <span id="req_damage" class="stat_value">---</span></li>
                            <li>Armor: <span id="req_armor_class" class="stat_value">---</span></li>
                        </ul>
                    </div>
                </div>
                
                <div class="item_wrapper flex">
                <div class="stats_wrapper" id="item_caracs">
                        <h4>Utility Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/picklock.png" alt="Pick Lock Icon"> Pick.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/hide.png" alt="Hide Icon"> Hide: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/sneak.png" alt="Sneak Icon"> Sneak: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/peek.png" alt="Peek Icon"> Peek.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/rob.png" alt="Hide Icon"> Rob: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/plunder.png" alt="Hide Icon"> Plund.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Combat Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/powerconjuring.png" alt="Power Conjuring Icon"> P.Conj.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/meditation.png" alt="Meditation Icon"> Medit.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/immobilization.png" alt="Immobilization Icon"> Immo.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/dualweapons.png" alt="Dual Weapons Icon"> Dual: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/primalscream.png" alt="Primal Scream Icon"> Prim.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/search.png" alt="Search Icon"> Search: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Attack Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/attack.png" alt="Attack Icon"> Att.: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/archery.png" alt="Archery Icon"> Arc.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/powerfulblow.png" alt="Poweful Blow Icon"> PowB.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/stunblow.png" alt="Stun Blow Icon"> StunB.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/criticalstrike.png" alt="Critical Strike Icon"> Crit.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/armorpierce.png" alt="Armor Pierce Icon"> Arm.P.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                    <div class="stats_wrapper" id="item_caracs">
                        <h4>Defense Skills</h4>
                        <ul>
                            <li>
                                <img src="../public/images/stats/dodge.png" alt="Dodge Icon"> Dodge: <span id="damage" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/parry.png" alt="Parry Icon"> Parry: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/firstaid.png" alt="First Aid Icon"> F.Aid.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/rapidhealing.png" alt="Rapid Healing Icon"> Rap.H.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                            <li>
                                <img src="../public/images/stats/resurrection.png" alt="Resurrection Icon"> Res.: <span id="armor_class" class="stat_value">---</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>