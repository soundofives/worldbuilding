
```statblock
creature: Thug
name: Young Devil Leader
forceColumns: True
columns: 2
```

```statblock
name: Young Devil Thug
size: Medium
type: humanoid
subtype: any race
alignment: any non-good alignment
ac: 12
hp: 13
hit_dice: 2d8 + 4
speed: 30 ft.
stats:
  - 10
  - 15
  - 14
  - 10
  - 10
  - 11
skillsaves:
  - intimidation: 2
damage_vulnerabilities: ""
damage_resistances: ""
damage_immunities: ""
condition_immunities: ""
senses: passive Perception 10
languages: any one language (usually Common)
cr: 1/4
traits:
  - name: Pack Tactics
    desc: The thug has advantage on an attack roll against a creature if at least one of the thug's allies is within 5 ft. of the creature and the ally isn't incapacitated.
    attack_bonus: 0
actions:
  - name: Multiattack
    desc: The thug makes two melee attacks.
    attack_bonus: 0
  - name: Club
    desc: "Melee Weapon Attack: +1 to hit, reach 5 ft., one creature. Hit: 2 (1d4) bludgeoning damage."
    attack_bonus: 2
    damage_dice: 1d4
    damage_bonus: 0
  - name: Slingshot
    desc: "Ranged Weapon Attack: +4 to hit, range 100/400 ft., one target. Hit: 4 (1d4+2) bludgeoning damage."
    attack_bonus: 4
    damage_dice: 1d4
forceColumns: True
columns: 2
```

```statblock
name: Last and First City Guard
size: Medium
type: humanoid
subtype: any race
alignment: any alignment
ac: 16
hp: 26
hit_dice: 3d8 + 12
speed: 30 ft.
stats:
  - 13
  - 12
  - 18
  - 10
  - 11
  - 10
saves:
  - constitution: 7
skillsaves:
  - perception: 2
damage_vulnerabilities: ""
damage_resistances: ""
damage_immunities: ""
condition_immunities: "poisoned"
senses: passive Perception 12
languages: any one language (usually Common)
cr: 1/2
traits:
  - name: Undead Fortitude
    desc: If damage reduces the guard to 0 hit points, it must make a Constitution saving throw with a DC of 5+the damage taken, unless the damage is radiant or from a critical hit. On a success, the zombie drops to 1 hit point instead.
    attack_bonus: 0
actions:
  - name: Spear
    desc: "Melee or Ranged Weapon Attack: +3 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 4 (1d6 + 1) piercing damage or 5 (1d8 + 1) piercing damage if used with two hands to make a melee attack."
    attack_bonus: 3
    damage_dice: 1d6
    damage_bonus: 1

```

```statblock
name: Shynedar-Kai Assassin
size: Medium
type: humanoid
subtype: any race
alignment: any neutral or evil alignment
ac: 15
hp: 46
hit_dice: 3d10 + 3d8 + 16
speed: 30 ft.
stats:
  - 9
  - 16
  - 14
  - 10
  - 13
  - 17
saves:
  - dexterity: 5
  - intelligence: 2
  - wisdom: 3
  - charisma: 5
skillsaves:
  - acrobatics: 7
  - deception: 5
  - perception: 3
  - persuasion: 5
  - religion: 2
  - stealth: 7
damage_vulnerabilities: ""
damage_resistances: poison
damage_immunities: ""
condition_immunities: ""
senses: passive Perception 13
languages: Thieves' cant plus any two languages
cr: "5"
traits:
  - name: Lay on Hands
    desc: 15 HP
    attack_bonus: 0
  - name: Dueling Fighting Style
    desc: Deal and extra 2 damage when wielding only one weapons (chain or dagger)
  - name: Divine Smite
    desc: On a melee hit, add 2d8 or 3d8 necrotic damage.
  - name: Vow of Enmity
    desc: Bonus action, gain advantage against an enemy to 10 minutes or until dead.
  - name: Abjure Enemy
    desc: Wis save or frighten opponent for 1 minute
  - name: Assassinate
    desc: During its first turn, the assassin has advantage on attack rolls against any creature that hasn't taken a turn. Any hit the assassin scores against a surprised creature is a critical hit.
    attack_bonus: 0
  - name: Evasion
    desc: If the assassin is subjected to an effect that allows it to make a Dexterity saving throw to take only half damage, the assassin instead takes no damage if it succeeds on the saving throw, and only half damage if it fails.
    attack_bonus: 0
  - name: Sneak Attack (1/Turn)
    desc: The assassin deals an extra 8 (2d6) damage when it hits a target with a weapon attack and has advantage on the attack roll, or when the target is within 5 ft. of an ally of the assassin that isn't incapacitated and the assassin doesn't have disadvantage on the attack roll.
    attack_bonus: 0
    damage_dice: 2d6
actions:
  - name: Multiattack
    desc: The assassin makes two spiked chain attacks.
    attack_bonus: 0
  - name: Spiked Chain
    desc: "Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) piercing damage"
    attack_bonus: 6
    damage_dice: 2d6
    damage_bonus: 3
  - name: Light Crossbow
    desc: "Ranged Weapon Attack: +6 to hit, range 80/320 ft., one target. Hit: 7 (1d8 + 3) piercing damage"
    attack_bonus: 6
    damage_dice: 1d8
    damage_bonus: 3
spells:
  - "3rd-level spellcaster. Their spellcasting ability is Charisma (spell save DC 13, +5 to hit with spell attacks). They has the following paladin spells prepared:"
  - 1st level (3 slots): Bane, Hunter's Mark, Divine Favor, Shield of Faith

```


```statblock
name: Milo
size: Medium
type: humanoid
subtype: dark High Elf
alignment: True Neutral
ac: 12
hp: 10
hit_dice: 2d6 + 0
speed: 30 ft.
stats:
  - 8
  - 14
  - 11
  - 17
  - 12
  - 14
saves:
  - intelligence: 5
  - wisdom: 3
skillsaves:
  - arcana: 5
  - history: 5
damage_vulnerabilities: ""
damage_resistances: ""
damage_immunities: ""
condition_immunities: ""
senses: passive Perception 11
languages: Sinisar Common, Cryptic Tanorian, Heavenly Sinisar, Old Sinisar
cr: "2"
traits: []
actions:
  - name: Dagger
    desc: "Melee or Ranged Weapon Attack: +4 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 4 (1d4 + 2) piercing damage."
    attack_bonus: 4
    damage_dice: 1d4
    damage_bonus: 2
spells:
  - "Milo is a 2nd-level spellcaster. Her spellcasting ability is Intelligence (spell save DC 13, +5 to hit with spell attacks). She has the following wizard spells prepared:"
  - Cantrips (at will): message, ray of frost, friends
  - 1st level (3 slots): disguise self, sleep, shield
```


```statblock
creature: Otyugh
forceColumns: True
columns: 2
```

```statblock
creature: Gelatinous Cube
```
