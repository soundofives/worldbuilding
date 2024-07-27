

```statblock
name: Fraz Urb'luu, the Hollow King
size: Large
type: fiend
subtype: ""
alignment: chaotic evil
ac: 18
hp: 200
hit_dice: 16d10 + 112
speed: 40 ft., fly 40 ft.
stats:
  - 29
  - 17
  - 25
  - 26
  - 24
  - 26
skillsaves:
  - dexterity: 10
  - constitution: 14
  - intelligence: 15
  - wisdom: 14
  - deception: 20
  - perception: 14
  - stealth: 8
  - insight: 8
damage_vulnerabilities: piercing from magic weapons wielded by good creatures
damage_resistances: ""
damage_immunities: bludgeoning, piercing, and slashing from nonmagical weapons
condition_immunities: ""
senses: Truesight 120 ft., passive Perception 24
languages: All, Telepathy 120 ft.
cr: "26"
traits:
  - name: Shroud of the Hidden Hand (Mythic Trait, 1/Day).
    desc: |-
      When Fraz Urb'luu is reduced to 0 hit points, he doesn't die or fall unconscious. Instead, he resets to 200 hit points.
      For the next hour, he becomes invisible to creatures affected by his Lying Eyes trait, and he can summon up to three creatures of CR 6 or below with his Illusory Fiend ability, instead of one.
  - name: Lying Eyes
    desc: |-
      Each creature within 60 feet of Fraz Urb'luu that lacks Truesight can see only what he chooses it to see.
      He cannot use this ability to obscure or otherwise conceal himself while his Mythic Trait is not active.
  - name: Limited Magic Immunity
    desc: Fraz Urb'luu can't be affected or detected by spells of 6th level or lower unless it wishes to be. It has advantage on saving throws against all other spells and magical effects.
  - name: Master of Deceit
    desc: |-
      Illusions that Fraz creates can always have visual and audio components, and he can freely change the nature of the illusion as an action using the spell's normal parameters for the illusion. When he creates an illusion or as a bonus action on his turn, Fraz Urb'luu can choose one inanimate, nonmagical object that is part of the illusion and make that object real. The object remains real for 1 minute. The object cannot deal damage or cause harm to anyone.
  - name: Ephemeral Resistance (4/Day)
    desc: |-
      When Fraz Urb'luu is targeted with a spell or magical effect, he can choose to teleport to an unoccupied space he can see within 30 feet, revealing his previous position to be an illusory trick. If he does, he suffers no effects from the spell or magical effect.
  - name: Spellcasting
    desc: |-
      Fraz's innate spellcasting ability is Charisma (spell save DC 22, +15 to hit with spell attacks). Fraz can cast the following spells, requiring no material components:

      At will: detect thoughts, minor illusion
      3/day each: charm person, detect magic, invisibility, major image, suggestion
      1/day each: dominate person, plane shift
actions:
  - name: Multiattack
    desc: Fraz Urb'luu makes two attacks with his Phantasmal Fist, one of which he may replace with his Tail Thrash or use of his Deceptive Charm.
  - name: Phantasmal Fist
    desc: "Melee Weapon Attack: +16 to hit, reach 30 ft., one target. Hit: 23 (3d8+9) psychic damage and Fraz teleports to an unoccupied space within 5 feet of the target. Also, the target is cursed. The magical curse takes effect whenever the target takes a short or long rest, filling the target's thoughts with horrible images and dreams."
    attack_bonus: 16
    damage_dice: 3d8
    damage_bonus: 9
  - name: Tail Thrash
    desc: "Melee Weapon Attack: +16 to hit, reach 15 ft., one target. Hit: 28 (3d12+9) bludgeoning damage and 11 (2d10) psychic damage and the target must succeed on a DC 24 Strength saving throw or be pushed up to 15 feet away and knocked prone."
    attack_bonus: 16
    damage_dice: 3d12+2d10
    damage_bonus: 9
  - name: Deceptive Charm
    desc: "One creature Fraz Urb'luu can see within 60 feet must succeed on a DC 22 Wisdom saving throw or be Charmed by him for the next minute, or until it takes any damage."
  - name: Twisting Havoc (Recharge 5-6)
    desc: "Each creature of Fraz Urb'luu's choice affected by his Lying Eyes trait must succeed on a DC 22 Wisdom saving throw or become Charmed by Fraz and hostile to each other creature that failed this save, until the end of Fraz's next turn."
  - name: Sudden Spoiling (6th Level Spell)
    desc: One creature Fraz can see within 15 feet must succeed on a DC 20 Constitution saving throw or take 49 (11d8) necrotic damage, or half as much on a success.
    
      If this spell was cast as a reaction on the target's turn, the target is additionally Dazed until the end of Fraz's next turn.
  - name: Mastermind's Insight (Recharge 5-6)
    desc: Each player whose character Fraz can see must declare what action the character will take on their following turn, then each of those characters must succeed on a DC 24 Charisma (Deception) check or have Fraz learn that information.
bonus_actions:
  - name: Master of Appearances
    desc: Fraz Urb'luu assumes the illusory appearance, voice, and mannerisms of any humanoid creature he has seen.
  - name: Sneering Command
    desc: Up to two creatures Fraz can see within 60 feet may each use their reaction to move up to half their speed and make an attack.
reactions:
  - name: Cruel Conciliation
    desc: When Fraz Urb'luu is missed with an attack, he can use his Deceptive Charm against the attacker.
  - name: Saw it Coming (Recharges when Fraz uses his Mastermind's Insight)
    desc: When a creature Fraz Urb'luu can see begins to take an action, Fraz can move up to his speed and take an action or a bonus action.
  - name: Deceptive Demise (4th Level Spell, 2/Day)
    desc: When Fraz takes any damage, he can teleport up to 30 feet to a location he can see, turn invisible until the beginning of his next turn, and attempt to Hide. A corpse-like duplicate of Fraz is left in his place, which dissolves into mist at the end of Fraz Urb'luu's next turn, or if it takes any damage.
legendary_description: Fraz Urb'luu can take 3 legendary actions, choosing from the options below.
legendary_actions:
  - name: Phantasmal Fist
    desc: Fraz Urb'luu makes an attack with his Phantasmal Fist.
  - name: Corrupt Memories
    desc: One Charmed creature Fraz Urb'luu can see within 60 feet must succeed on a DC 22 Wisdom saving throw or have its Charisma score reduced by 4 (1d8), to a minimum of 1, for as long as it remains Charmed.

      A creature that has its Charisma score reduced to 1 in this way believes itself to be a demon in Fraz Urb'luu's service and remains Charmed until freed by Greater Restoration or similar magic.
  - name: Illusory Fiend (Concentration)
    desc: Fraz Urb'luu shapes the raw energies of the Abyss into a semi-real demon of CR 6 or lower in an unoccupied space he can see within 60 feet. The demon acts on initiative count 0 under Fraz's control and is destroyed if it begins its turn more than 60 feet away from him, or if he loses concentration.
  - name: Tailored Bane
    desc: Choose a spell in secret. The first time a creature within 60 feet casts that spell before the beginning of Fraz's next turn, the spell backfires and targets its caster.
mythic_actions:
  - name: Disjunctive Touch
    desc: Fraz Urb'luu ends one spell or destroys one magic item of Very Rare or lesser rarity within 5 feet.
    
      A creature wielding the magic item can make a DC 24 Dexterity saving throw, preventing the item's destruction on a success.
  - name: Hollow the Heart (Costs 2 Actions, 1/day)
    desc: "Fraz Urb'luu plunges his claws into the chest of a creature within 10 feet, forcing it to make a DC 23 Constitution saving throw.
    
      On a failed save, Fraz Urb'luu rips the creature's still-beating heart from its chest. The creature becomes Dominated by Fraz Urb'luu and dies if it ceases to be Dominated by him.
      
      On a successful save, the creature instead takes 55 (10d10) piercing damage. Fraz Urb'luu regains 1 use of Hollow the Heart. A creature with no heart succeeds automatically on this saving throw."
columns: 4
```

Fraz as two/three-part villain: massive illusionary terrain skill challenge + charming, rakshasa-like mastermind play, then violent mad berserker

The Rakshasas are demons borne of the primal fears and nightmares of the people of the Forges of Creation. They are scheming demons--rather than the pure bloodshed that many demons seek, rakshasas derive pleasure from the eternal struggle and degrading hope of their victims.
**"Above and beyond any external reward, rakshasas pursue evil ends to kindle hatred in the eyes of their victims, then watch it gradually turn to despair as the poor unfortunates are made to understand the true degree to which their intellect was unfit to contest that of a rakshasa."**
So, akin to how Grazzt lifts his worshippers and victims up to the greatest points of pleasure, Rakshasas revel in the futile struggle that ends in glorious failure. This, too, is what Fraz loves: he loves to see his plans unfold. He loves watching the pawns in the game fight against him, only to realize they're far too deep in his web to escape. He loves to be hated. To be fought. All this, and his victims still lose.

The most powerful rakshasa is Fraz Urb'luu, an ancient Demon Lord. On the inception of the Blood War, rakshasas escaped the Abyss and spread across the Planescape, using their powers of illusion, deception, and shapeshifting to hide in plain sight. Not all rakshasas serve Fraz, but those that do are given a means of protection in return for their servitude: Fraz rips their hearts from their chest, granting them freedom from their most vital weakness but forcing them into eternal domination. These are the hollow rajahs.

Fraz is a trickster. An illusionist. His schemes involve making the heroes think they're winning, that they're doing good, but in the end seeing their faces turn to despair as they realize that all along, Fraz has been in control or that they've actually being working towards his evil ends.

Fraz became Demon King by deception, manipulation, illusion, and trickery. He tricked the Pale Night into donning the Last Word. He deceives Demon Kings into coming to his realm just so he can coerce them into his service. He's a bitch.
- Fraz can disjunct, but the Godtrap had a back-fire mechanic that disjuncted Fraz's own magic, making  him quite weak for a long time. Fraz is still trying to recover from this.
Something Fraz can do that is trickster-y: he tries to manipulate people into ruining the Empire. He is sewing chaos through the War, spreading lies and prophecies about the murder of Vecna, etc. He wants to see the beauty of the Last and First City rip itself apart. Further, he has taken the Crew as his personal play things in carrying out this doom. At the same time, he wants to see Orcus trapped forever and to retake his position as Demon King.

Fraz is arrogant, but yet fearful of his own position. He's like the genius that could use his brilliance to do good in the world, but instead he uses it only to tear down others. Fraz is an evil trickster. An illusionist. A manipulator. More than a simple prankster, Fraz's tricks and schemes are entirely and fundamentally malevolent. He is as a rakshasa,
"Above and beyond any external reward, rakshasas pursue evil ends to kindle hatred in the eyes of their victims, then watch it gradually turn to despair as the poor unfortunates are made to understand the true degree to which their intellect was unfit to contest that of a rakshasa."
He desires rule because he views himself as the only being intelligent enough, worthy enough, to rule. While his deeper, viler schemes seep into the roots of the world over millennia, he passes the time with tricks and twists, manipulating puppets with the goal of making his victims fight tooth and nail to keep the things they love, but in the end turning to despair as they realize they never could win against him. He loves to approach his manipulations from the guise weakness or foolishness--it is to him, the most fantastic of all ironies and deceptions that someone like him could ever be a fool.

Fraz and the Myriad:
Fraz-Urb'luu's Cults of Deception pose as worshipers of a divine power, infiltrating or founding congregations and precipitating crises, pushing worshipers to make ever-escalating moral compromises in the supposed pursuit of an ever out-of-reach greater good. Such cults are often led or supported by one of the succubi or rakshasas that form the core of the Great Deceiver's cohort.

Fraz loves the Myriad because it is a religion that steals the life and independence of others. It promises good and hope while undermining tradition and faith. The Myriad is indeed much older than Fraz and his manipulations, but early on in the life of the church Fraz's rakshasas found their places and steered it on a crash-course with the Cycladenes.


How to use Illusions in combat (like Seeming and above):
**For Seeming remember that no one should no which is the real one, including the players so they should play both until you want the trick revealed.**

A skill challenge to unravel illusions
New way to think about Fog Cloud and invisible enemies : transition to gridless combat, where it's more about using skills to locate them and the location is made up.
"Make it up. It's going to be weird if all you've run are combats with a map, but you're essentailly transitioning into squareless combat. So allt he mini's stay on the table, and as players and bad guys stat moving around, they get removed from the map until they either leave the cloud and get put back down, or the cloud ends and you arbitrarily put everyone mini back.

And they you just narrarate what people can hear and smell. If they move to attack someone, you have to decide who that person is. If they're moving to a sound, maybe roll percentile dice to see who that sound was. On a good roll they've identified a bad guy, on a bad roll, maybe they're going after the cleric."