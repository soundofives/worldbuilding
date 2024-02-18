<html>
<head>
	<title>History Engine</title>
<script language="JavaScript">
   function Go(x){
 		alert ( x );
      location.href = ?pathP=x;
}
</script>
 </head>

<body>

<form action="historyEngine.php" method="get">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
    <td>No "Nation dead"</td>
    <td>'Dead' possible: <input type="radio" name="dead" value="0" checked> Dark Ages: <input type="radio" name="dead" value="1"> 'Crisis' <input type="radio" name="dead" value="2"></td>
</tr>
<tr>
    <td>Print Order</td>
    <td>AD <input type="radio" name="order" value="0" checked> BC <input type="radio" name="order" value="1"></td>
</tr>
<tr>
    <td>Magical</td>
    <td>No <input type="radio" name="magic" value="0" checked> Yes <input type="radio" name="magic" value="1"></td>
</tr>
<tr>
    <td>Name of Nation</td>
    <td><input type="text" name="name" size="20"></td>
</tr>
<tr>
    <td>Start Year</td>
    <td><input type="text" name="year" value="0"></td>
</tr>
<tr>
    <td>Durration</td>
    <td><input type="text" name="dur" value="20"></td>
</tr>
<tr>
    <td valign="top">Number of Surrounding Nations</td>
    <td><select name="numbers"><option>2</option>
<option>3</option>
<option>4</option>
<option selected>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
</select></td>
</tr>
<tr>
    <td valign="top" width="200">Fixed Nations<br>(Enter the name of a Nation, separate the nations by a comma (,). You can give a date, at which the nation should be destroyed by adding a colon and a number)</td>
    <td><textarea name="nations" cols="30" rows="6" wrap="soft"></textarea></td>
</tr>
<tr>
    <td valign="top">Health of Nation</td>
    <td><select name="health">
		<option value="50">very weak</option>
		<option value="75">weak</option>
		<option value="100" selected>average</option>
		<option value="150">good</option>
		<option value="200">very good</option>
		<option value="500">long lived</option>
	</select></td>
</tr>
<tr>
    <td valign="top">Vitality of Nation</td>
    <td><select name="vitality">
		<option value="50">very weak</option>
		<option value="75">weak</option>
		<option value="100" selected>average</option>
		<option value="150">good</option>
		<option value="200">very good</option>
		<option value="500">long lived</option>
</select></td>
</tr>
<tr>
    <td valign="top">Aggressivity of Nation</td>
    <td><select name="agressivity">
		<option value="50">very weak</option>
		<option value="75">weak</option>
		<option value="100" selected>average</option>
		<option value="150">good</option>
		<option value="200">very good</option>
	?></select></td>
</tr>
<tr>
    <td valign="top">Military Might of Nation</td>
    <td><select name="military">
		<option value="50">very weak</option>
		<option value="75">weak</option>
		<option value="100" selected>average</option>
		<option value="150">good</option>
		<option value="200">very good</option>
	?></select></td>
</tr>
<tr>
    <td valign="top">War Probability</td>
    <td><select name="warProb">
		<option value="-10:War">1/4</option>
		<option value="-5:War">1/2</option>
		<option value="0:War" selected>average</option>
		<option value="10:War">2*</option>
		<option value="20:War">3*</option>
	?></select></td>
</tr>
<tr>
    <td valign="top">prefered Start</td>
    <td><select name="prefered[]" multiple size=15><br />

<br />

<option value="
">
</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="#
">#
</option>
<br />

<br />

<option value="# 
"># 
</option>
<br />

<br />

<option value="#      and afterwards modified with modDone
">#      and afterwards modified with modDone
</option>
<br />

<br />

<option value="#      x:Number is not yet supported but shall be once a +- modificator
">#      x:Number is not yet supported but shall be once a +- modificator
</option>
<br />

<br />

<option value="#    (hl stands for hyper-link)
">#    (hl stands for hyper-link)
</option>
<br />

<br />

<option value="#   agressivity, health and military: like vitality. All four can be negative or x:Number
">#   agressivity, health and military: like vitality. All four can be negative or x:Number
</option>
<br />

<br />

<option value="#   chance: how likely is it, that the event happens (percentage)
">#   chance: how likely is it, that the event happens (percentage)
</option>
<br />

<br />

<option value="#   mod: the value, chance is modified by every year.
">#   mod: the value, chance is modified by every year.
</option>
<br />

<br />

<option value="#   modDone: the value the chance is modified by, after it happened (the chance is first set to 0
">#   modDone: the value the chance is modified by, after it happened (the chance is first set to 0
</option>
<br />

<br />

<option value="#   type: not supported yet, but should be kept
">#   type: not supported yet, but should be kept
</option>
<br />

<br />

<option value="#   vitality: the value, the vitality of the area is modified when the event takes place
">#   vitality: the value, the vitality of the area is modified when the event takes place
</option>
<br />

<br />

<option value="# Each event got at least 8 entries. Each entry displays the name of the Event first, followed by 
"># Each event got at least 8 entries. Each entry displays the name of the Event first, followed by 
</option>
<br />

<br />

<option value="# Empty rows and all rows beginning with # are ignored by the program.
"># Empty rows and all rows beginning with # are ignored by the program.
</option>
<br />

<br />

<option value="# In addition, each Entry can hold any number of additional entries. These describe modifications
"># In addition, each Entry can hold any number of additional entries. These describe modifications
</option>
<br />

<br />

<option value="# Setting links: Minor Work of Art"># Setting links: Minor Work of Art</option>
<br />

<br />

<option value="# THE EVENT-LIST FILE
"># THE EVENT-LIST FILE
</option>
<br />

<br />

<option value="# Thanks for the links goes to: the ENWorld 1000-Links Thread,
"># Thanks for the links goes to: the ENWorld 1000-Links Thread,
</option>
<br />

<br />

<option value="# The entries are:
"># The entries are:
</option>
<br />

<br />

<option value="# The objects of the historyEngine are able to handle more than one eventFile conqurently, adding
"># The objects of the historyEngine are able to handle more than one eventFile conqurently, adding
</option>
<br />

<br />

<option value="# There are two additional entries possible: war and treaty. If one of theses entries is given
"># There are two additional entries possible: war and treaty. If one of theses entries is given
</option>
<br />

<br />

<option value="# This file looks more complicated, than it is.
"># This file looks more complicated, than it is.
</option>
<br />

<br />

<option value="# Two special entries are follow and precurser. An event, that got the precurser-entry will 
"># Two special entries are follow and precurser. An event, that got the precurser-entry will 
</option>
<br />

<br />

<option value="# all events of all files and overwriting events put in first with events of the same name
"># all events of all files and overwriting events put in first with events of the same name
</option>
<br />

<br />

<option value="# and set to 1, the entry will be treated as a war or treaty (in case of treaty, a 2 can be set
"># and set to 1, the entry will be treated as a war or treaty (in case of treaty, a 2 can be set
</option>
<br />

<br />

<option value="# asking for a name: Prophet
"># asking for a name: Prophet
</option>
<br />

<br />

<option value="# been build. All these entries got a flag of 1 instead of 0 like the standard entries.
"># been build. All these entries got a flag of 1 instead of 0 like the standard entries.
</option>
<br />

<br />

<option value="# from later files.
"># from later files.
</option>
<br />

<br />

<option value="# if the right flag is set beforhand. (look at Libary is Build and Library is Destroyed)
"># if the right flag is set beforhand. (look at Libary is Build and Library is Destroyed)
</option>
<br />

<br />

<option value="# set a flag for another Event, that is marked with follow. The follow-event may only happen,
"># set a flag for another Event, that is marked with follow. The follow-event may only happen,
</option>
<br />

<br />

<option value="# the type of what is to be modified, a value and a flag, that will be explained later on.
"># the type of what is to be modified, a value and a flag, that will be explained later on.
</option>
<br />

<br />

<option value="# to other events. For example becomes it more likely, that a Library is destroyed, after one has
"># to other events. For example becomes it more likely, that a Library is destroyed, after one has
</option>
<br />

<br />

<option value="# which signals a trade treaty. At least one additional entry must be present.
"># which signals a trade treaty. At least one additional entry must be present.
</option>
<br />

<br />

<option value="A Religion dies">A Religion dies</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Animal Epidemic">Animal Epidemic</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Army Uprising">Army Uprising</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Artifact created">Artifact created</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Artifact destroyed">Artifact destroyed</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Bandit Activity">Bandit Activity</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Barbarian Invaders">Barbarian Invaders</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a Cathedral finished">Building of a Cathedral finished</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a Cathedral started">Building of a Cathedral started</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a Monument finished">Building of a Monument finished</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a Monument started">Building of a Monument started</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a New Capital City finished">Building of a New Capital City finished</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a New Capital City started">Building of a New Capital City started</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a Palace finished">Building of a Palace finished</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Building of a Palace started">Building of a Palace started</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Channel Build">Channel Build</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="City Sacced">City Sacced</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="City founded">City founded</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Comet sighted">Comet sighted</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Comets">Comets</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Complete abandonment of a Philosophy">Complete abandonment of a Philosophy</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Complete abandonment of a Technology">Complete abandonment of a Technology</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Curse affecting imporant Family lifted">Curse affecting imporant Family lifted</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Curse affecting imporant Family">Curse affecting imporant Family</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Death of a god">Death of a god</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Disappearance of a known Sight">Disappearance of a known Sight</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Earthquake">Earthquake</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Enemy Destroyed Permanently">Enemy Destroyed Permanently</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Epidemic">Epidemic</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Exploration-Travel">Exploration-Travel</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Famine">Famine</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Famous Artis emerges">Famous Artis emerges</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Flood">Flood</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Food Failure">Food Failure</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Forest Fire">Forest Fire</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Gaining of Land">Gaining of Land</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Great General">Great General</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Great Harvest">Great Harvest</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Great Storm">Great Storm</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Hurricane">Hurricane</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Immigration">Immigration</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Important Birth">Important Birth</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Important Person is found">Important Person is found</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Important Person is missing">Important Person is missing</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Important Wedding">Important Wedding</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Inspireing Ruler">Inspireing Ruler</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="International Games">International Games</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Landslides">Landslides</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Legendary Hero">Legendary Hero</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Legendary Lost Battle">Legendary Lost Battle</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Legendary Victory">Legendary Victory</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Library is Build">Library is Build</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Library is Destroyed">Library is Destroyed</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Loss of Land">Loss of Land</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Lunar Eclipse">Lunar Eclipse</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Magic Incursion">Magic Incursion</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Major Criminal caught">Major Criminal caught</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Major Fire">Major Fire</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Major Work of Art">Major Work of Art</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Major blessing affecting entire nation">Major blessing affecting entire nation</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Major curse affecting entire nation">Major curse affecting entire nation</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Major curse lifted">Major curse lifted</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Meteors Impact">Meteors Impact</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Military Invention">Military Invention</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Minor Work of Art">Minor Work of Art</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Missed Important Person is dead">Missed Important Person is dead</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Monster Activity">Monster Activity</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Monster activity">Monster activity</option>
<br />

<br />

<option value="Murder of Ruler">Murder of Ruler</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="National Games">National Games</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="New Dynasty">New Dynasty</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="New Philosophy">New Philosophy</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="New Political System">New Political System</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="New Religion founded">New Religion founded</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="New Road">New Road</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Old Dynasty regains control">Old Dynasty regains control</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Prophet">Prophet</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Rebellion Ends">Rebellion Ends</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Revolt">Revolt</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Reward offered for Criminal">Reward offered for Criminal</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Reward offered for Rescue">Reward offered for Rescue</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Reward offered for Retrieval">Reward offered for Retrieval</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="School of Wizards closed">School of Wizards closed</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="School of wizardry opened">School of wizardry opened</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Scientific Invention">Scientific Invention</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Shipwreck">Shipwreck</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Shism">Shism</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Solar Eclipses">Solar Eclipses</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Strange Omens">Strange Omens</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Strange Sight discovered">Strange Sight discovered</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Technical Invention">Technical Invention</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Trade Treaty">Trade Treaty</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Traderoute closed">Traderoute closed</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Traderoute">Traderoute</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Tradewar">Tradewar</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Treaty">Treaty</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Undead army attacks">Undead army attacks</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Victorious Conquest">Victorious Conquest</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Volcanoe eruption">Volcanoe eruption</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="War">War</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Witchhunts">Witchhunts</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Wizards battling each other">Wizards battling each other</option>
<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<br />

<option value="Wizards terrorizing countryside, vying for dominion">Wizards terrorizing countryside, vying for dominion</option>
</select></td>
</tr>
<tr>
    <td valign="top">Negativ List<br>(These Events will not happen in your history)</td>
    <td><select name="negative[]" multiple size=15><br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="
">
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#
">#
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# 
"># 
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#      and afterwards modified with modDone
">#      and afterwards modified with modDone
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#      x:Number is not yet supported but shall be once a +- modificator
">#      x:Number is not yet supported but shall be once a +- modificator
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#    (hl stands for hyper-link)
">#    (hl stands for hyper-link)
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#   agressivity, health and military: like vitality. All four can be negative or x:Number
">#   agressivity, health and military: like vitality. All four can be negative or x:Number
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#   chance: how likely is it, that the event happens (percentage)
">#   chance: how likely is it, that the event happens (percentage)
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#   mod: the value, chance is modified by every year.
">#   mod: the value, chance is modified by every year.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#   modDone: the value the chance is modified by, after it happened (the chance is first set to 0
">#   modDone: the value the chance is modified by, after it happened (the chance is first set to 0
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#   type: not supported yet, but should be kept
">#   type: not supported yet, but should be kept
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="#   vitality: the value, the vitality of the area is modified when the event takes place
">#   vitality: the value, the vitality of the area is modified when the event takes place
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# Each event got at least 8 entries. Each entry displays the name of the Event first, followed by 
"># Each event got at least 8 entries. Each entry displays the name of the Event first, followed by 
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# Empty rows and all rows beginning with # are ignored by the program.
"># Empty rows and all rows beginning with # are ignored by the program.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# In addition, each Entry can hold any number of additional entries. These describe modifications
"># In addition, each Entry can hold any number of additional entries. These describe modifications
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# Setting links: Minor Work of Art"># Setting links: Minor Work of Art</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# THE EVENT-LIST FILE
"># THE EVENT-LIST FILE
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# Thanks for the links goes to: the ENWorld 1000-Links Thread,
"># Thanks for the links goes to: the ENWorld 1000-Links Thread,
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# The entries are:
"># The entries are:
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# The objects of the historyEngine are able to handle more than one eventFile conqurently, adding
"># The objects of the historyEngine are able to handle more than one eventFile conqurently, adding
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# There are two additional entries possible: war and treaty. If one of theses entries is given
"># There are two additional entries possible: war and treaty. If one of theses entries is given
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# This file looks more complicated, than it is.
"># This file looks more complicated, than it is.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# Two special entries are follow and precurser. An event, that got the precurser-entry will 
"># Two special entries are follow and precurser. An event, that got the precurser-entry will 
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# all events of all files and overwriting events put in first with events of the same name
"># all events of all files and overwriting events put in first with events of the same name
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# and set to 1, the entry will be treated as a war or treaty (in case of treaty, a 2 can be set
"># and set to 1, the entry will be treated as a war or treaty (in case of treaty, a 2 can be set
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# asking for a name: Prophet
"># asking for a name: Prophet
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# been build. All these entries got a flag of 1 instead of 0 like the standard entries.
"># been build. All these entries got a flag of 1 instead of 0 like the standard entries.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# from later files.
"># from later files.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# if the right flag is set beforhand. (look at Libary is Build and Library is Destroyed)
"># if the right flag is set beforhand. (look at Libary is Build and Library is Destroyed)
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# set a flag for another Event, that is marked with follow. The follow-event may only happen,
"># set a flag for another Event, that is marked with follow. The follow-event may only happen,
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# the type of what is to be modified, a value and a flag, that will be explained later on.
"># the type of what is to be modified, a value and a flag, that will be explained later on.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# to other events. For example becomes it more likely, that a Library is destroyed, after one has
"># to other events. For example becomes it more likely, that a Library is destroyed, after one has
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="# which signals a trade treaty. At least one additional entry must be present.
"># which signals a trade treaty. At least one additional entry must be present.
</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="A Religion dies">A Religion dies</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Animal Epidemic">Animal Epidemic</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Army Uprising">Army Uprising</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Artifact created">Artifact created</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Artifact destroyed">Artifact destroyed</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Bandit Activity">Bandit Activity</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Barbarian Invaders">Barbarian Invaders</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a Cathedral finished">Building of a Cathedral finished</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a Cathedral started">Building of a Cathedral started</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a Monument finished">Building of a Monument finished</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a Monument started">Building of a Monument started</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a New Capital City finished">Building of a New Capital City finished</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a New Capital City started">Building of a New Capital City started</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a Palace finished">Building of a Palace finished</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Building of a Palace started">Building of a Palace started</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Channel Build">Channel Build</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="City Sacced">City Sacced</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="City founded">City founded</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Comet sighted">Comet sighted</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Comets">Comets</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Complete abandonment of a Philosophy">Complete abandonment of a Philosophy</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Complete abandonment of a Technology">Complete abandonment of a Technology</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Curse affecting imporant Family lifted">Curse affecting imporant Family lifted</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Curse affecting imporant Family">Curse affecting imporant Family</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Death of a god">Death of a god</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Disappearance of a known Sight">Disappearance of a known Sight</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Earthquake">Earthquake</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Enemy Destroyed Permanently">Enemy Destroyed Permanently</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Epidemic">Epidemic</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Exploration-Travel">Exploration-Travel</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Famine">Famine</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Famous Artis emerges">Famous Artis emerges</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Flood">Flood</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Food Failure">Food Failure</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Forest Fire">Forest Fire</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Gaining of Land">Gaining of Land</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Great General">Great General</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Great Harvest">Great Harvest</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Great Storm">Great Storm</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Hurricane">Hurricane</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Immigration">Immigration</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Important Birth">Important Birth</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Important Person is found">Important Person is found</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Important Person is missing">Important Person is missing</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Important Wedding">Important Wedding</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Inspireing Ruler">Inspireing Ruler</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="International Games">International Games</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Landslides">Landslides</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Legendary Hero">Legendary Hero</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Legendary Lost Battle">Legendary Lost Battle</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Legendary Victory">Legendary Victory</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Library is Build">Library is Build</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Library is Destroyed">Library is Destroyed</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Loss of Land">Loss of Land</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Lunar Eclipse">Lunar Eclipse</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Magic Incursion">Magic Incursion</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Major Criminal caught">Major Criminal caught</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Major Fire">Major Fire</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Major Work of Art">Major Work of Art</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Major blessing affecting entire nation">Major blessing affecting entire nation</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Major curse affecting entire nation">Major curse affecting entire nation</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Major curse lifted">Major curse lifted</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Meteors Impact">Meteors Impact</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Military Invention">Military Invention</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Minor Work of Art">Minor Work of Art</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Missed Important Person is dead">Missed Important Person is dead</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Monster Activity">Monster Activity</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Monster activity">Monster activity</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Murder of Ruler">Murder of Ruler</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="National Games">National Games</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="New Dynasty">New Dynasty</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="New Philosophy">New Philosophy</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="New Political System">New Political System</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="New Religion founded">New Religion founded</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="New Road">New Road</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Old Dynasty regains control">Old Dynasty regains control</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Prophet">Prophet</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Rebellion Ends">Rebellion Ends</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Revolt">Revolt</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Reward offered for Criminal">Reward offered for Criminal</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Reward offered for Rescue">Reward offered for Rescue</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Reward offered for Retrieval">Reward offered for Retrieval</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="School of Wizards closed">School of Wizards closed</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="School of wizardry opened">School of wizardry opened</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Scientific Invention">Scientific Invention</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Shipwreck">Shipwreck</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Shism">Shism</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Solar Eclipses">Solar Eclipses</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Strange Omens">Strange Omens</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Strange Sight discovered">Strange Sight discovered</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Technical Invention">Technical Invention</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Trade Treaty">Trade Treaty</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Traderoute closed">Traderoute closed</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Traderoute">Traderoute</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Tradewar">Tradewar</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Treaty">Treaty</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Undead army attacks">Undead army attacks</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Victorious Conquest">Victorious Conquest</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Volcanoe eruption">Volcanoe eruption</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="War">War</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Witchhunts">Witchhunts</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Wizards battling each other">Wizards battling each other</option>
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<br />
<b>Warning</b>:  preg_match(): No ending delimiter '^' found in <b>/usr/www/users/orfinl/3rdE/historyX.php</b> on line <b>134</b><br />
<option value="Wizards terrorizing countryside, vying for dominion">Wizards terrorizing countryside, vying for dominion</option>
</select></td>
</tr>
<tr>
    <td valign="top" width="200">Fixed Events<br>(Enter Year:Event i.e. 102:Library is Build. Several Events are divided by commas (,). You have to use the exact wording and capitals as in the lists above.)</td>
    <td><textarea name="fixed" cols="30" rows="6" wrap="soft"></textarea></td>
</tr>
<!--<tr>
    <td valign="top">Event-File</td>
	<td><select name="pathP" onChange="location.href=?pathP=this.form.pathP.options[this.form.pathP.options.selectedIndex].value)">
		<option value=""></option>
		<option value="./eventList.txt">Standard</option>
	</select>-->
	<input type="hidden" name=path value="./eventList.txt">
	</td>
</tr>
<tr><td colspan="2">
<table width="600" border="0" bgcolor="#c9c9c9" cellpadding="0">
<tr><td><b>Name Characteristics: </b># of Syllables: <select name="num_syls"><option value="r">Random</option>
<option value="1">1</option>
<option value="2" selected>2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="15">Gnome</option>
</select></td><td><!--female <input type="radio" name="gender" value="female" checked>&nbsp; &nbsp; male <input type="radio" name="gender" value="male">--></td></tr>
<tr><td>

Viking &nbsp;<input type="checkbox" name="langA[]" value="Viking" checked> &nbsp;Asian &nbsp;<input type="checkbox" name="langA[]" value="Asian" checked> &nbsp;Fantasy &nbsp;<input type="checkbox" name="langA[]" value="Fantasy" checked> &nbsp;Elfish &nbsp;<input type="checkbox" name="langA[]" value="Elfish" checked> &nbsp;Dwarfish &nbsp;<input type="checkbox" name="langA[]" value="Dwarfish" checked> &nbsp;Ork &nbsp;<input type="checkbox" name="langA[]" value="Ork" checked> &nbsp;Osispun &nbsp;<input type="checkbox" name="langA[]" value="Osispun" checked> &nbsp;</script></td><td><input type="hidden" name="num_names" value="2000"></td></tr>
<!--<tr><td>Reduce End To: 
Med &nbsp;<input type="checkbox" name="langB[]" value="Med"> &nbsp;Fra &nbsp;<input type="checkbox" name="langB[]" value="Fra"> &nbsp;Hol &nbsp;<input type="checkbox" name="langB[]" value="Hol"> &nbsp;Sla &nbsp;<input type="checkbox" name="langB[]" value="Sla"> &nbsp;Angel &nbsp;<input type="checkbox" name="langB[]" value="Angel"> &nbsp;</td></tr>-->
</table>
</td></tr>
<tr>
    <td></td>
    <td><input type="submit" name="submit" value="Starten"></td>
</tr>

</table>
</form>


</body>
</html>
