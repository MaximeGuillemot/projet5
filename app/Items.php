<?php

namespace App;

class Items
{
    private $itemStructure,
            $name,
            $idItem,
            $idAppearance,
            $weight,
            $idSellType,
            $sellPriceFormula,
            $weaponType,
            $equipPosition,
            $cannotJunk,
            $cannotDrop,
            $cannotRob,
            $cannotGet,
            $junkAtRemort,
            $canBeSummoned,
            $itemIsUnique,
            $damageRoll,
            $dealtExhaust,
            $unlimitedAmmo,
            $idItemKey,
            $difficulty,
            $slotH,
            $slotW,
            $containerGold,
            $containerUserRespawn,
            $containerGlobalRespawn,
            $signMessage;

    private $errors = [];

    const IDITEM_NOT_VALID = 0,
          NAME_NOT_VALID = 1,
          IDAPPEARANCE_NOT_VALID = 2,
          ITEMSTRUCTURE_NOT_VALID = 3,
          WEIGHT_NOT_VALID = 4,
          SELLTYPE_NOT_VALID = 5,
          SELLPRICEFORMULA_NOT_VALID = 6,
          WEAPONTYPE_NOT_VALID = 7,
          EQUIPPOSITION_NOT_VALID = 8,
          DAMAGEROLL_NOT_VALID = 9,
          DEALEXHAUST_NOT_VALID = 10,
          UNLIMITEDAMMI_NOT_VALID = 11,
          IDITEMKEY_NOT_VALID = 12,
          DIFFICULTY_NOT_VALID = 13,
          SLOTH_NOT_VALID = 14,
          SLOTW_NOT_VALID = 15,
          CONTAINERGOLD_NOT_VALID = 16,
          CONTAINERURESPAWN_NOT_VALID = 17,
          CONTAINERGRESPAWN_NOT_VALID = 18,
          SIGNMESSAGE_NOT_VALID = 19;

    public function __construct($data)
    {
        if(!empty($data))
        {
            $this->hydrate($data);
        }
    }

    private function hydrate($data)
    {
        foreach($data as $k => $v)
        {
            $method = 'set' . ucfirst($k);

            if(is_callable([$this, $method]))
            {
                $this->$method($v);
            }
        }
    }

    public function getArrayInfo()
    {
        $item_array = array();

        foreach($this as $key => $value)
        {
            if($key != 'errors')
            {
                $item_array[$key] = $value;
            }
        }
        
        return $item_array;
    }

    private function setIdItem($idItem)
    {
        if(empty($idItem))
        {
            $this->errors[] = self::IDITEM_NOT_VALID;
            return;
        }

        $idItem = (string) $idItem;

        if(strlen($idItem) > 20)
        {
            $this->errors[] = self::IDITEM_NOT_VALID;
            return;
        }

        $this->idItem = $idItem;
    }

    private function setName($name)
    {
        if(empty($name))
        {
            $this->errors[] = self::NAME_NOT_VALID;
            return;
        }

        $name = (string) $name;

        if(strlen($name) > 45)
        {
            $this->errors[] = self::NAME_NOT_VALID;
            return;
        }

        $this->name = $name;
    }

    private function setIdAppearance($idAppearance)
    {
        if(empty($idAppearance))
        {
            $this->errors[] = self::IDAPPEARANCE_NOT_VALID;
            return;
        }

        $idAppearance = (int) $idAppearance;

        if($idAppearance < 0 || $idAppearance > 2147483647)
        {
            $this->errors[] = self::IDAPPEARANCE_NOT_VALID;
            return;
        }

        $this->idAppearance = $idAppearance;
    }

    private function setItemStructure($itemStructure)
    {
        if(empty($itemStructure))
        {
            $this->itemStructure = 0;
            return;
        }

        $itemStructure = (int) $itemStructure;

        if($itemStructure < 0 || $itemStructure > 2147483647)
        {
            $this->errors[] = self::ITEMSTRUCTURE_NOT_VALID;
            return;
        }

        $this->itemStructure = $itemStructure;
    }

    private function setWeight($weight)
    {
        if(empty($weight))
        {
            $this->weight = 0;
            return;
        }

        $weight = (int) $weight;

        if($weight < 0 || $weight > 2147483647)
        {
            $this->errors[] = self::WEIGHT_NOT_VALID;
            return;
        }

        $this->weight = $weight;
    }

    private function setIdSellType($idSellType)
    {
        if(empty($idSellType))
        {
            $this->idSellType = 0;
            return;
        }

        $idSellType = (int) $idSellType;

        if($idSellType < 0 || $idSellType > 2147483647)
        {
            $this->errors[] = self::SELLTYPE_NOT_VALID;
            return;
        }

        $this->idSellType = $idSellType;
    }

    private function setSellPriceFormula($sellPriceFormula)
    {
        if(empty($sellPriceFormula))
        {
            $this->sellPriceFormula = null;
            return;
        }

        $sellPriceFormula = (string) $sellPriceFormula;

        if(strlen($sellPriceFormula) > 500)
        {
            $this->errors[] = self::SELLPRICEFORMULA_NOT_VALID;
            return;
        }

        $this->sellPriceFormula = $sellPriceFormula;
    }

    private function setWeaponType($weaponType)
    {
        if(empty($weaponType))
        {
            $this->weaponType = null;
            return;
        }

        $weaponType = (int) $weaponType;

        if($weaponType < 0 || $weaponType > 2147483647) // Max number to be replaced dynamically with ListWeaponType table
        {
            $this->errors[] = self::WEAPONTYPE_NOT_VALID;
            return;
        }

        $this->weaponType = $weaponType;
    }

    private function setEquipPosition($equipPosition)
    {
        if(empty($equipPosition))
        {
            $this->equipPosition = null;
            return;
        }

        $equipPosition = (int) $equipPosition;

        if($equipPosition < 0 || $equipPosition > 2147483647) // Max number to be replaced dynamically with ListEquipPosition table
        {
            $this->errors[] = self::EQUIPPOSITION_NOT_VALID;
            return;
        }

        $this->equipPosition = $equipPosition;
    }

    private function setCannotJunk($cannotJunk)
    {
        if(!empty($cannotJunk) && $cannotJunk === "on")
        {
            $this->cannotJunk = 1;
        }
        else
        {
            $this->cannotJunk = 0;
        }
    }

    private function setCannotDrop($cannotDrop)
    {
        if(!empty($cannotDrop) && $cannotDrop === "on")
        {
            $this->cannotDrop = 1;
        }
        else
        {
            $this->cannotDrop = 0;
        }
    }

    private function setCannotRob($cannotRob)
    {
        if(!empty($cannotRob) && $cannotRob === "on")
        {
            $this->cannotRob = 1;
        }
        else
        {
            $this->cannotRob = 0;
        }
    }

    private function setCannotGet($cannotGet)
    {
        if(!empty($cannotGet) && $cannotGet === "on")
        {
            $this->cannotGet = 1;
        }
        else
        {
            $this->cannotGet = 0;
        }
    }

    private function setJunkAtRemort($junkAtRemort)
    {
        if(!empty($junkAtRemort) && $junkAtRemort === "on")
        {
            $this->junkAtRemort = 1;
        }
        else
        {
            $this->junkAtRemort = 0;
        }
    }

    private function setCanBeSummoned($canBeSummoned)
    {
        if(!empty($canBeSummoned) && $canBeSummoned === "on")
        {
            $this->canBeSummoned = 1;
        }
        else
        {
            $this->canBeSummoned = 0;
        }
    }

    private function setItemIsUnique($itemIsUnique)
    {
        if(!empty($itemIsUnique) && $itemIsUnique === "on")
        {
            $this->itemIsUnique = 1;
        }
        else
        {
            $this->itemIsUnique = 0;
        }
    }

    private function setDamageRoll($damageRoll)
    {
        if(empty($damageRoll))
        {
            $this->damageRoll = null;
            return;
        }

        $damageRoll = (string) $damageRoll;

        if(strlen($damageRoll) > 500)
        {
            $this->errors[] = self::DAMAGEROLL_NOT_VALID;
            return;
        }

        $this->damageRoll = $damageRoll;
    }

    private function setDealtExhaust($dealtExhaust)
    {
        if(empty($dealtExhaust))
        {
            $this->dealtExhaust = null;
            return;
        }

        $dealtExhaust = (string) $dealtExhaust;

        if(strlen($dealtExhaust) > 500)
        {
            $this->errors[] = self::DEALEXHAUST_NOT_VALID;
            return;
        }

        $this->dealtExhaust = $dealtExhaust;
    }

    private function setUnlimitedAmmo($unlimitedAmmo)
    {
        if(!empty($unlimitedAmmo) && $unlimitedAmmo === "on")
        {
            $this->unlimitedAmmo = 1;
        }
        else
        {
            $this->unlimitedAmmo = 0;
        }
    }

    private function setIdItemKey($idItemKey)
    {
        if(empty($idItemKey))
        {
            $this->idItemKey = null;
            return;
        }

        $idItemKey = (string) $idItemKey;

        if(strlen($idItemKey) > 20)
        {
            $this->errors[] = self::IDITEMKEY_NOT_VALID;
            return;
        }

        $this->idItemKey = $idItemKey;
    }

    private function setDifficulty($difficulty)
    {
        if(empty($difficulty))
        {
            $this->difficulty = null;
            return;
        }

        $difficulty = (int) $difficulty;

        if($difficulty < 0 || $difficulty > 2147483647)
        {
            $this->errors[] = self::DIFFICULTY_NOT_VALID;
            return;
        }

        $this->difficulty = $difficulty;
    }

    private function setSlotH($slotH)
    {
        if(empty($slotH))
        {
            $this->slotH = 1;
            return;
        }

        $slotH = (int) $slotH;

        if($slotH < 1 || $slotH > 2147483647)
        {
            $this->errors[] = self::SLOTH_NOT_VALID;
            return;
        }

        $this->slotH = $slotH;
    }

    private function setSlotW($slotW)
    {
        if(empty($slotW))
        {
            $this->slotW = 1;
            return;
        }

        $slotW = (int) $slotW;

        if($slotW < 1 || $slotW > 2147483647)
        {
            $this->errors[] = self::SLOTW_NOT_VALID;
            return;
        }
        
        $this->slotW = $slotW;
    }

    private function setContainerGold($containerGold)
    {
        if(empty($containerGold))
        {
            $this->containerGold = null;
            return;
        }

        $containerGold = (int) $containerGold;

        if($containerGold < 0 || $containerGold > 2147483647)
        {
            $this->errors[] = self::CONTAINERGOLD_NOT_VALID;
            return;
        }

        $this->containerGold = $containerGold;
    }

    private function setContainerUserRespawn($containerUserRespawn)
    {
        if(empty($containerUserRespawn))
        {
            $this->containerUserRespawn = null;
            return;
        }

        $containerUserRespawn = (int) $containerUserRespawn;

        if($containerUserRespawn < 0 || $containerUserRespawn > 2147483647)
        {
            $this->errors[] = self::CONTAINERURESPAWN_NOT_VALID;
            return;
        }
         
        $this->containerUserRespawn = $containerUserRespawn;
    }

    private function setContainerGlobalRespawn($containerGlobalRespawn)
    {
        if(empty($containerGlobalRespawn))
        {
            $this->containerGlobalRespawn = null;
            return;
        }

        $containerGlobalRespawn = (int) $containerGlobalRespawn;

        if($containerGlobalRespawn < 0 || $containerGlobalRespawn > 2147483647)
        {
            $this->errors[] = self::CONTAINERGRESPAWN_NOT_VALID;
            return;
        }

        $this->containerGlobalRespawn = $containerGlobalRespawn;
    }

    private function setSignMessage($signMessage)
    {
        if(empty($signMessage))
        {
            $this->signMessage = null;
            return;
        }

        $signMessage = (string) $signMessage;

        if(strlen($signMessage) > 4294967296)
        {
            $this->errors[] = self::SIGNMESSAGE_NOT_VALID;
            return;
        }
        
        $this->signMessage = $signMessage;
    }

    public function getIdItem() { return $this->idItem; }
    public function getName() { return $this->name; }
    public function getIdAppearance() { return $this->idAppearance; }
    public function getItemStructure() { return $this->itemStructure; }
    public function getWeight() { return $this->weight; }
    public function getSellPriceFormula() { return $this->sellPriceFormula; }
    public function getWeaponType() { return $this->weaponType; }
    public function getEquipPosition() { return $this->equipPosition; }
    public function getCannotJunk() { return $this->cannotJunk; }
    public function getCannotDrop() { return $this->cannotDrop; }
    public function getCannotRob() { return $this->cannotRob; }
    public function getCannotGet() { return $this->cannotGet; }
    public function getJunkAtRemort() { return $this->junkAtRemort; }
    public function getCanBeSummoned() { return $this->canBeSummoned; }
    public function getItemIsUnique() { return $this->itemIsUnique; }
    public function getDamageRoll() { return $this->damageRoll; }
    public function getDealExhaust() { return $this->dealExhaust; }
    public function getUnlimitedAmmo() { return $this->unlimitedAmmo; }
    public function getIdItemKey() { return $this->idItemKey; }
    public function getDifficulty() { return $this->difficulty; }
    public function getSlotH() { return $this->slotH; }
    public function getSlotW() { return $this->slotW; }
    public function getContainerGold() { return $this->containerGold; }
    public function getContainerUserRespawn() { return $this->containerUserRespawn; }
    public function getContainerGlobalRespawn() { return $this->containerGlobalRespawn; }
    public function getSignMessage() { return $this->signMessage; }
    public function getErrors() { return $this->errors; }
}