
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