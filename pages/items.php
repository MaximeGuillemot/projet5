<div id="items_page">
    <div class="content_wrapper">
        <button id="add_item_btn">Add Item</button>

        <table id="items_list">
            <tr>
                <th>Item Structure</th>
                <th>Name</th>
                <th>ID</th>
                <th>Weight</th>
                <th>Sell Price</th>
            </tr>
        </table>
    </div>

    <div id="item_desc">
        <h3 id="item_name"></h3>
        <div class="flex">
            <div class="item_img"><img id="item_pos" src="" alt="Item icon"></div>
            <div class="item_img"><img src="../public/images/item_appearances/generic_armor.png" alt="Item icon"></div>
            <div class="item_img"><img id="item_grid" src="" alt="Item grid"></div>
            <fieldset class="general_desc">
                <legend>General Options</legend>
                <div class="item_wrapper flex">
                    <div class="gen_desc_wrapper">
                        <h4>Cannots</h4>
                        <ul>
                            <li>
                                <img src="../public/images/item_options/junk.png" alt="Junk Icon"> Cannot Junk: 
                                <input type="checkbox" class="item_cannots" checked>
                            </li>
                            <li>
                                <img src="../public/images/item_options/drop.png" alt="Drop Icon"> Cannot Drop: 
                                <input type="checkbox" class="item_cannots" checked>
                            </li>
                            <li>
                                <img src="../public/images/item_options/rob.png" alt="Rob Icon"> Cannot Rob: 
                                <input type="checkbox" class="item_cannots">
                            </li>
                            <li>
                                <img src="../public/images/item_options/get.png" alt="Get Icon"> Cannot Get: 
                                <input type="checkbox" class="item_cannots">
                            </li>
                        </ul>
                    </div>
                    <div class="gen_desc_wrapper">
                        <h4>Weight & Sell Info</h4>
                        <ul>
                            <li>
                                <img src="../public/images/item_options/weight.png" alt="Weight Icon"> Weight: 
                                <input type="checkbox" class="item_sell_info">
                            </li>
                            <li>
                                <img src="../public/images/item_options/sell.png" alt="Sell Icon"> Sell Type: 
                                <input type="checkbox" class="item_sell_info" checked>
                            </li>
                            <li>
                                <img src="../public/images/item_options/sell.png" alt="Sell Icon"> Sell Price: 
                                <input type="checkbox" class="item_sell_info" checked>
                            </li>
                        </ul>
                    </div>
                    <div class="gen_desc_wrapper">
                        <h4>Others</h4>
                        <ul>
                            <li>
                                <img src="../public/images/item_options/remort.png" alt="Remort Icon"> Junk At Remort: 
                                <input type="checkbox" class="item_others">
                            </li>
                            <li>
                                <img src="../public/images/item_options/unique.png" alt="Unique Icon"> Item Is Unique: 
                                <input type="checkbox" class="item_others" checked>
                            </li>
                            <li>
                                <img src="../public/images/item_options/summon.png" alt="Summon Icon"> Can Be Summoned: 
                                <input type="checkbox" class="item_others">
                            </li>
                        </ul>
                    </div>
                </div>
            </fieldset>
        </div>

        <div id="item_desc_wrapper" class="flex">
            <div id="item_reqs" class="flex" name="">
                <fieldset class="reqs_boosts">
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

                        <div class="stats_wrapper" id="item_reqs_others">
                            <h4>Others</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/level.png" alt="Level Icon"> Level: <span id="req_level" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/karma.png" alt="Karma Icon"> Karma: <span id="req_karma" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="item_wrapper flex">
                        <div class="stats_wrapper" id="item_reqs_utility_skills">
                            <h4>Utility Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/picklock.png" alt="Pick Lock Icon"> Pick.: <span id="req_pick_lock" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/hide.png" alt="Hide Icon"> Hide: <span id="req_hide" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/sneak.png" alt="Sneak Icon"> Sneak: <span id="req_sneak" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/peek.png" alt="Peek Icon"> Peek.: <span id="req_peek" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/rob.png" alt="Hide Icon"> Rob: <span id="req_rob" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/plunder.png" alt="Hide Icon"> Plund.: <span id="req_plunder" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                        <div class="stats_wrapper" id="item_reqs_combat_skills">
                            <h4>Combat Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/powerconjuring.png" alt="Power Conjuring Icon"> P.Conj.: <span id="req_power_conjuring" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/meditation.png" alt="Meditation Icon"> Medit.: <span id="req_meditation" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/immobilization.png" alt="Immobilization Icon"> Immo.: <span id="req_immobilization" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/dualweapons.png" alt="Dual Weapons Icon"> Dual: <span id="req_dual_weapons" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/primalscream.png" alt="Primal Scream Icon"> Prim.: <span id="req_primal_scream" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/search.png" alt="Search Icon"> Search: <span id="req_search" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                        <div class="stats_wrapper" id="item_reqs_attack_skills">
                            <h4>Attack Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/attack.png" alt="Attack Icon"> Att.: <span id="req_attack" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/archery.png" alt="Archery Icon"> Arc.: <span id="req_archery" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/powerfulblow.png" alt="Poweful Blow Icon"> PowB.: <span id="req_powerful_blow" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/stunblow.png" alt="Stun Blow Icon"> StunB.: <span id="req_stun_blow" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/criticalstrike.png" alt="Critical Strike Icon"> Crit.: <span id="req_critical_strike" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/armorpierce.png" alt="Armor Pierce Icon"> Arm.P.: <span id="req_armor_pierce" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                        <div class="stats_wrapper" id="item_reqs_defense_skills">
                            <h4>Defense Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/dodge.png" alt="Dodge Icon"> Dodge: <span id="req_dodge" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/parry.png" alt="Parry Icon"> Parry: <span id="req_parry" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/firstaid.png" alt="First Aid Icon"> F.Aid.: <span id="req_first_aid" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/rapidhealing.png" alt="Rapid Healing Icon"> Rap.H.: <span id="req_rapid_healing" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/resurrection.png" alt="Resurrection Icon"> Res.: <span id="req_resurrection" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div id="item_details" class="flex" name="">
                <fieldset class="reqs_boosts">
                    <legend>Item Boosts & Malus</legend>

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

                        <div class="stats_wrapper" id="item_powers">
                            <h4>Powers</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/fire.png" alt="Fire Icon"> Fire: <span id="fire" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/earth.png" alt="Earth Icon"> Earth: <span id="earth" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/water.png" alt="Water Icon"> Water: <span id="water" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/air.png" alt="Air Icon"> Air: <span id="air" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/dark.png" alt="Dark Icon"> Dark: <span id="dark" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/light.png" alt="Light Icon"> Light: <span id="light" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>

                        <div class="stats_wrapper" id="item_resists">
                            <h4>Resistances</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/fire_r.png" alt="Fire Resist Icon"> Fir R.: <span id="fire_resist" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/earth_r.png" alt="Earth Resist Icon"> Ear. R.: <span id="earth_resist" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/water_r.png" alt="Water Resist Icon"> Wat. R.: <span id="water_resist" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/air_r.png" alt="Air Resist Icon"> Air. R.: <span id="air_resist" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/dark_r.png" alt="Dark Resist Icon"> Dar. R.: <span id="dark_resist" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/light_r.png" alt="Light Resist Icon"> Lig. R.: <span id="light_resist" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>

                        <div class="stats_wrapper" id="item_others">
                            <h4>Others</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/damage.png" alt="Damage Icon"> Dmg.: <span id="damage" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/exhaust.png" alt="Exhaust Icon"> Exh.: <span id="exhaust" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/armor.png" alt="Armor Icon"> AC: <span id="armor_class" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/health.png" alt="Health Icon"> HP: <span id="health" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/mana.png" alt="Mana Icon"> MP: <span id="mana" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/radiance.png" alt="Radiance Icon"> Rad.: <span id="radiance" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="item_wrapper flex">
                    <div class="stats_wrapper" id="item_utility_skills">
                            <h4>Utility Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/picklock.png" alt="Pick Lock Icon"> Pick.: <span id="pick_lock" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/hide.png" alt="Hide Icon"> Hide: <span id="hide" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/sneak.png" alt="Sneak Icon"> Sneak: <span id="sneak" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/peek.png" alt="Peek Icon"> Peek.: <span id="peek" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/rob.png" alt="Hide Icon"> Rob: <span id="rob" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/plunder.png" alt="Hide Icon"> Plund.: <span id="plunder" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                        <div class="stats_wrapper" id="item_combat_skills">
                            <h4>Combat Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/powerconjuring.png" alt="Power Conjuring Icon"> P.Conj.: <span id="power_conjuring" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/meditation.png" alt="Meditation Icon"> Medit.: <span id="meditation" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/immobilization.png" alt="Immobilization Icon"> Immo.: <span id="immobilization" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/dualweapons.png" alt="Dual Weapons Icon"> Dual: <span id="dual_weapons" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/primalscream.png" alt="Primal Scream Icon"> Prim.: <span id="primal_scream" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/search.png" alt="Search Icon"> Search: <span id="search" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                        <div class="stats_wrapper" id="item_attack_skills">
                            <h4>Attack Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/attack.png" alt="Attack Icon"> Att.: <span id="attack" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/archery.png" alt="Archery Icon"> Arc.: <span id="archery" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/powerfulblow.png" alt="Poweful Blow Icon"> PowB.: <span id="powerful_blow" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/stunblow.png" alt="Stun Blow Icon"> StunB.: <span id="stun_blow" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/criticalstrike.png" alt="Critical Strike Icon"> Crit.: <span id="critical_strike" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/armorpierce.png" alt="Armor Pierce Icon"> Arm.P.: <span id="armor_pierce" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                        <div class="stats_wrapper" id="item_defense_skills">
                            <h4>Defense Skills</h4>
                            <ul>
                                <li>
                                    <img src="../public/images/stats/dodge.png" alt="Dodge Icon"> Dodge: <span id="dodge" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/parry.png" alt="Parry Icon"> Parry: <span id="parry" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/firstaid.png" alt="First Aid Icon"> F.Aid.: <span id="first_aid" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/rapidhealing.png" alt="Rapid Healing Icon"> Rap.H.: <span id="rapid_healing" class="stat_value">---</span>
                                </li>
                                <li>
                                    <img src="../public/images/stats/resurrection.png" alt="Resurrection Icon"> Res.: <span id="resurrection" class="stat_value">---</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>