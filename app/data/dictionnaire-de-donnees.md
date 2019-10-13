# Dictionnaire de données

## Personnage (`pokemon`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT(10)|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du pokemon|
|nom|VARCHAR(255)|NOT NULL|Le nom du pokemon|
|pv|INT(11)|NOT NULL|point de vie du pokemon|
|attaque|INT(11)|NOT NULL|point d'attaque du pokemon|
|defense|INT(11)|NOT NULL|point de défense du pokemon|
|attaque_spe|INT(11)|NOT NULL|point d'attaque spéciale du pokemon|
|defense_spe|INT(11)|NOT NULL|point de défense spéciale du pokemon|
|vitesse|INT(11)|NOT NULL|point de vitesse du pokemon|
|numero|INT(10)|UNSIGNED, NOT NULL|numéro du pokemon|



## Type de pokemon (`pokemon_type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT(11)|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|pokemon_numero|INT(10)|UNSIGNED, NOT NULL|Le numero du pokemon|
|type_id|INT(10)|UNSIGNED, NOT NULL|Le type_id du pokemon|


## Couleur du type du pokemon (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT(10)|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(255)|NOT NULL|Le nom du type |
|color|VARCHAR(6)|NOT NULL|La couleur du type |

