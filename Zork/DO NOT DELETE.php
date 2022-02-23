<html>
<body style="background-color:black">
<?php
echo "<font color='White'>";
//Area, item, and enemy descriptions
$a1 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Interior Deep North</font> <br> You are in the very end of the deep dark cave. Underneath a rock here you see something... It looks like some sort of <font color='Green'>Rubber Suit</font>! Perhaps you can take it somehow? <embed height='0' width='0' src='Treasure Found Fanfare.ogg'></font>";
$a2 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Interior Deep Middle</font> <br> The cave is darkest here. Cold, wet, and quiet, besides the whistling wind through the cracks of the cave. North and south would take you to other parts of the deep cave. East will take you near the entrance/exit. <embed height='0' width='0' src='Shower Room.ogg'></font>";
$a3 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Interior Deep South</font> <br> You have defeated the Voltage Zombie here! <embed height='0' width='0' src='Victory Fanfare.ogg'> <br> Inside the dark mysterious room lies a few car batteries that look slightly amped up, but definitely not usable or able to be picked up.</font>";
$a4 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Exterior Rocky Cliff</font> <br> From the outside of this cave north of you, lies a huge rocky area with a cliff to the west. South will keep you on a rocky path, and east will take you closer to the field. <embed height='0' width='0' src='The Sunlands.ogg'> </font>";
$a5 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Rocky Cliff</font> <br> You have defeated the Zombie here! <embed height='0' width='0' src='Victory Fanfare.ogg'> <br> Here lies a cliff to the west, as well as a rocky path that could take you north or south to different areas. East brings you to a peaceful rocky field, but wait just one second! It seems as though the zombie has something in his back pocket... A <font color='green'>map</font>!!! This will definitely come in handy when getting lost in this vast wasteland!</font>";
$a6 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cliff Peak</font> <br> South and west has a beautiful view of the valleys, since you are on the edge of a cliff. It probably isn't a good idea to head towards the valleys, but surely you can try. On the other hand, north and east will each take you to separate cliff spots. <embed height='0' width='0' src='Midboss Battle.ogg'></font>";
$b1 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Interior North</font> <br> Here is the not-so-dark north-east corner of the cave. It is very quiet compared to the other parts of the cave. West and South will take you to other parts of the cave, in which the latter will take you towards the exit.</font>";
$b2 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Interior Middle</font> <br> You are at the cave entrance/exit. You can leave or venture onward, where noises lurk within. Be prepared for anything that may get in your way, and remember where the exit is at all times, which is east from here.</font>";
$b3 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Interior South</font> <br> In the more damp and cold portion of the cave, lies a corner with lots of rocks that don't look mobile. Is there a laughing sound, somewhere?</font>";
$b4 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Exterior Rocky Field</font> <br> You enter a field with rock formations that seem to be a cave's exterior. Grass patches and cracks in the ground are everywhere. To the west and south is more of the same, but perhaps you should venture on anyway? <embed height='0' width='0' src='Route 111.ogg'></font>";
$b5 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Rocky Field</font> <br> A field filled with random pieces of rock is your current sighting. You can make out what looks like a cliff south of here, same goes with west, and north looks like the outside of a cave. Not to mention the lumber shed on your east, however you cannot enter there through that way, you would need to be north of the lumber shed to get inside. </font> <embed height='0' width='0' src='Route 101.ogg'>";
$b6 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cliff Burton's Abandoned Park</font> <br> This place is dark, cold, and demolished. There are beer bottles everywhere, as well as black ice patches that can't easily be seen. The bus that would come to this park is nearly destroyed, laying on its side. It seems the zombies are puppets to their master, who wants everyone to die. What a dark world we live in. North from here will bring you to the outside of a cave. Going to the west will take you to the other part of the cliff. East has the back of a lumber shed that seems inaccessible from here. There seems to be a dead corpse with a <font color='Green'>Sword</font> in his hand.</font>";
$c1 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Exterior Mountain</font> <br> You are on an escalating piece of earth, what seems to be the bottom of a mountain. You can go south or east to different rock-filled locations. Wait.. is that a <font color='Green'>Pickaxe</font>? What great timing to find such a weapon! With this, you could probably break rocks! Should you pick it up?</font>";
$c2 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Cave Exterior Entrance</font> <br> You end up outside of a cave. To the west there is the cave that you could persevere. It is incredibly dark inside. North is the outside of the cave, south takes you to the front yard of a house, and to the east seems to be the left side of the same house. <embed height='0' width='0' src='The Impact Site.ogg'></font>";
$c3 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>House Front Yard</font> <br> You reached the front of a house to the east, where the door is wide open, with a light glimmering inside from an unknown source. To the west and north, there is the outside of a cave. Behind you, towards south, is a field.</font>";
$c4 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Centre Fields</font> <br> You are in a field, filled with nothingness. To the north and the east, you see a house, where the front of it would be north. To the west, is the outside of a cave. To the south is a tool shed full of lumber.</font> <embed height='0' width='0' src='Route 201.ogg'>";
$c5 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Lumber Shed Front</font> <br> You step inside the lumber shed, to see most obviously, a lot of logs and chopped up wood. Nothing all that useful here, however there could be something in the back room, which would be south from your location.</font>";
$c6 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Lumber Shed Back</font> <br> Ah! Here is a room with a bed, clothing rack, and everything! There is a <font color='Green'>Flame Resistant Helmet</font> here! Excellent!</font>";
$d1 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Mountain Cliff</font> <br> Ah, the mountains. Here is where they border into fields. West from here will take you to the outside of a cave. South looks like the side of a house. East just seems to be more mountains, nothing too special.</font>";
$d2 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>House Left Yard</font> <br> This is the north side of the house, or the west yard if you would be looking from the front of the house. To the north looks like the start of a mountain region, to the east is... er... more mountains, and finally west is the entrance of a cave. How exciting!</font>";
$d3 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>House Interior</font> <br> You enter the mysterious abandoned house. There seems to be only a front and back of this house to venture into, which are west and east, respectively. There's a light that seems to be coming from <font color='Green'>Matches and a Lamp</font>! You might need this bunch for a later time!</font>";
$d4 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>House Right Yard</font> <br> You walk to the southern side of a house, or technically the east side if you are looking from the front. Now, to the west is a field, and to the east is a forest. However, it's hard to see what south is... Maybe its worth venturing into? It's all up to you, player. Hurry up and pick something.</font>";
$d5 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Suspicious Fire Pit</font> <br> So you decided to venture into the darker area, huh? Well, it looks like a mysterious fire pit, that has been used recently. There seems to be only two different directions you can go from here, north or south. Hmm.. The south has something glowing like crazy, like a golden color. There also seems to be a faint sound of something relative to a drum. You better go check it out.</font>";
$d6 = "<font color='Orange' style='font-family:verdana'> <font color='Red' size='10'>PUNJI STAKES!!!</font></font>";
$e1 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Mountain's Climax</font> <br> You're on top of a mountain! That's intense. Any-who, To the south is a lower altitude of the same mountain, and same goes for the west. The north and east have a beautiful sight of fields, clouds, and more mountains, which also goes down in altitude. Wait! There is an item inside the snow.. How will you get through the ice to get to it?<embed height='0' width='0' src='Cookie Country.ogg'></font>";
$e2 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Mountain's Mid-Section</font> <br> You are at the halfway point to the mountain's peak. To the south is a backyard of sorts, to a nice house. The west will also take you to a part of the house as well. Finally, north will take you to the mountain's climax. <embed height='0' width='0' src='Valley Of Repose.ogg'></font>";
$e3 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>House Backyard</font> <br> You have defeated the Inferno Zombie here! <embed height='0' width='0' src='Victory Fanfare.ogg'> <br> You are in the backyard of the house, it seems to be pretty empty, as if someone has moved out. The fencing is taken down on one side, you therefore can move north from here to move to the mountain regions. To the west is the inside of the house. </font>";
$e4 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Forest</font> <br> You are in a dark and creepy forest, filled with the unknown. There are only 2 different directions you can venture into: west and south. West will take you to the side of a house. To the south is a giant hole. What in the world is that doing here? Its definitely possible to persevere. <embed height='0' width='0' src='Tropical Wilds.ogg'></font>";
$e5 = "<font color='Orange' style='font-family:verdana'> <font color='Purple' size='10'>Hole Entrance</font> <br> This place is dark, cold, and muddy. The room south of here has a loud grunting sound occasionally, and it feels like the room is getting a bit warmer upon every step closer to that room. Should you desire to go north instead, you will go to a dark and creepy forest.</font><embed height='0' width='0' src='The Final Trial.ogg'>";
$zombie = "<font color='red' size='6'>Zombie appears! <br> You could attack or run away, what do you think you should do? <embed height='0' width='0' src='Mt Pyre Outer.ogg'></font>";
$voltzombie = "<font color='red' size='6'>Voltage Zombie Appears! <br> You could attack or run away, what do you think you should do? <embed height='0' width='0' src='UxieMespritAzelf Battle.ogg'></font>";
$firezombie = "<font color='red' size='6'>Inferno Zombie Appears! <br> You could attack or run away, what do you think you should do? <embed height='0' width='0' src='Dialga Palkia Battle.ogg'></font>";
$demonzombie = "<font color='red' size='6'> The Zombie Demon Appears!!! <br> This is the moment you have been waiting for. You can fight or run away, what do you think you should do? Make this battle count. </font> <embed height='0' width='0' src='Champion Battle!.ogg'>";
$victory = "<img src='http://i1.ytimg.com/vi/gFg6QOlV-EE/hqdefault.jpg'> <br> <td> <font color='Gold'> You have won! Congratafrigulations! <br> ... What? You seriously expected something better? Well.. I dunno.. I guess I will let you know about a secret. You can command i am error for a secret. <br> Also, you might be wondering who in the world is narrating this. My name is Tyler. I am a madman who makes people play games for their survival for fun. I recommend you play again. Cause it's fun. <br> Also, dont post the way to beat this on Youtube. People will cheat. That isn't cool. </font></td>";
$help = "<font color='Blue'>You need help? Seriously? Alright moron, Ill show you the way: <br> north / south / east / west = Directions you can go from one point to another <br> pick up (item) = Picking up the item that is in that area of the map... For example: Saying 'pick up matches and lamp' will pick up the matches and lamp item! <br> attack = Fight the enemy that stands before you <br> run away = Escape from the enemy that stands before you <br> inventory = brings up your list of items <br> help = Gives you this screen... Wait... You seriously needed to know what this was? Society clearly needs help... Not like, help as in, the uh, command but, you know, brain help... Yeah. <br></font>";
$backpage= "<script> function goBack() {window.history.back()} </script> <button onclick='goBack()'> Back to area description! </button>";
$deathresult = "<font size='5' color='red'> Your death was </font>";
$fall = "<font size='6' color='red'> falling off a cliff! <br> </font>";
$runfail = "<font size='5' color='blue'> You're running away? </font> <font size='6' color='red'> Too bad! <br></font>";
$attackfail = "<font size='6' color='blue'> Should have had the right equipment... Pity. <br></font>";
//only the first page load!
if(!ISSET($_POST['submit'])) {$coord = 'C4'; $desc = $c4;}
$hpcount = 100;
$suit = 0;
$pickaxe = 0;
$matchlamp = 0;
$sword = 0;
$helmet = 0;
$rock = 0;
$zcount = 0;
$izcount = 0;
$vzcount = 0;
$ice = 0;
$map = 0;
$teleporter = 0;
echo "<td> <font color='Green' size='6'> Please read this green area first time playing! </font> <font color='Green' size='4'>In this game, you type in commands and press your enter button on your keyboard or press the 'submit command' button on screen. If you cannot figure out where to go or how to say certain commands, please type in 'help' into the text box to get more information. Remember that this game is on a grid-based system. For example, while at 'C4' if you command 'south', you will go to 'C5'. Keep in mind the game is case sensitive and so, you will always need to use lowercase upon typing commands. Thank you and have fun! </font> </td> <br>";
//after the first "submit" click, it does this every time!
If(ISSET($_POST['submit'])) {$submit = $_POST['submit']; $switch = true; $begin = $_POST['start']; $command = $_POST['command']; $coord = $_POST['coordinate']; $unable = '<font size="6" color="Magenta"> Unable to do that!</font> <br>'; echo "<font color='#FFCC99' size='5'> You commanded: $command </font><br>";
	$suit = $_POST['suit'];
	$pickaxe = $_POST['pickaxe'];
	$matchlamp = $_POST['matchlamp']; 
	$sword = $_POST['sword']; 
	$helmet = $_POST['helmet']; 
	$rock = $_POST['rock'];
	$hpcount = $_POST['hp'];
	$zcount = $_POST['zombie'];
	$izcount = $_POST['infernozombie'];
	$vzcount = $_POST['voltagezombie'];
	$map = $_POST['map'];
	$ice = $_POST['ice'];
	$teleporter = $_POST['teleporter'];
	//define acceptable commands
	if(($command != 'north') && ($command != 'south') && ($command != 'east') && ($command != 'west') && ($command != 'attack') && ($command != 'run away') && ($command != 'pick up rubber suit') && ($command != 'pick up pickaxe') && ($command != 'pick up matches and lamp') && ($command != 'pick up sword') && ($command != 'pick up helmet') && ($command != 'pick up flame resistant helmet') && ($command != 'help') && ($command != 'i am error') && ($command != 'inventory') && ($command != 'break rock') && ($command != 'commit suicide') && ($command != 'pick up map') && ($command != 'melt ice') && ($command != 'pick up teleporter') && ($command != 'break ice') && ($command != 'map') && ($command != 'use teleporter')) {
		echo "<img src='http://i1.ytimg.com/vi/u1KipihjCnA/hqdefault.jpg'> <br> <td> No, No. No comprendo. Eez not gude cammand. </td> <br>";
		$desc= "Eef you have problemo, try deeferent cammand, if no gud, type 'help'. Meester narrater wud be pleazed." . $backpage;
	}
	else {
		//All the possibilities for movement and attacks
		$death = "<font color='Red'>You have died! You have failed to continue your journey to eliminate the Zombie Demon and the apocalypse once and for all! Tell ya what: There is a family not too far from here with a child that is slowly growing into a strong developed human that would be a perfect specimen for your mission, if you choose to do it again. <br> <font size='7' style='text-align:center'>Just make sure you remember not to screw up, you moron.<br></font></font> <br> <embed height='0' width='0' src='Super Mario 3D World - Miss!-Too Bad! (Death Music).mp3'>";
		if (($coord == 'A1') && ($matchlamp == 1) && ($command == "north") && ($switch = true)) {$desc = $a1; echo $unable; $switch = false;}
		if (($coord == 'A1') && ($matchlamp == 1) && ($command == "south") && ($switch == true)){$coord = 'A2'; $desc = $a2; $switch = false;}
		if (($coord == 'A1') && ($matchlamp == 1) && ($command == "west") && ($switch == true)){$desc = $a1; echo $unable; $switch = false;}
		if (($coord == 'A1') && ($matchlamp == 1) && ($command == "east") && ($switch == true)){$coord = 'B1'; $desc = $b1; $switch = false;}
		if (($coord == 'A2') && ($matchlamp == 1) && ($command == "north") && ($switch == true)){$coord = 'A1'; $desc = $a1; $switch = false;}
		if (($coord == 'A2') && ($matchlamp == 1) && ($command == "south") && ($vzcount == 0) && ($switch == true)){$coord = 'Voltage Zombie'; $desc = $voltzombie; $switch = false;}
		elseif (($coord == 'A2') && ($matchlamp == 1) && ($command == "south") && ($vzcount != 0) && ($switch == true)){$coord = 'A3'; $desc = $a3; $switch = false;}
		if (($coord == 'A2') && ($matchlamp == 1) && ($command == "west") && ($switch == true)){$desc = $a2; echo $unable; $switch = false;}
		if (($coord == 'A2') && ($matchlamp == 1) && ($command == "east") && ($switch == true)){$coord = 'B2'; $desc = $b2; $switch = false;}
		if (($coord == 'Voltage Zombie') && ($matchlamp == 1) && ($command == "attack") && ($switch == true) && ($suit == 1) && ($sword == 1)){$coord = 'A3'; $desc = $a3; $vzcount = $vzcount + 1; $hpcount = $hpcount - 40; $switch = false;}
		if (($coord == 'Voltage Zombie') && ($matchlamp == 1) && ($command == "attack") && ($switch == true) && ($suit != 1)){$desc = $death; echo $attackfail; $switch = false;}
		if (($coord == 'Voltage Zombie') && ($matchlamp == 1) && ($command == "attack") && ($switch == true) && ($sword != 1)){$desc = $death; echo $attackfail; $switch = false;}
		if (($coord == 'Voltage Zombie') && ($matchlamp == 1) && ($command != "attack") && ($switch == true)){$desc = $death; echo $runfail; $switch = false;}
		if (($coord == 'A3') && ($matchlamp == 1) && ($command == "north") && ($switch == true)){$coord = 'A2'; $desc = $a2; $switch = false;}
		if (($coord == 'A3') && ($matchlamp == 1) && ($command == "south") && ($switch == true)){$desc = $a3; echo $unable; $switch = false;}
		if (($coord == 'A3') && ($matchlamp == 1) && ($command == "west") && ($switch == true)){$desc = $a3; echo $unable; $switch = false;}
		if (($coord == 'A3') && ($matchlamp == 1) && ($command == "east") && ($switch == true)){$coord = 'B3'; $desc = $b3; $switch = false;}
		if (($coord == 'A4') && ($command == "north") && ($switch == true)){$desc = $a4; echo $unable; $switch = false;}
		if (($coord == 'A4') && ($command == "south") && ($zcount == 0) && ($switch == true)){$coord = 'Zombie'; $desc = $zombie; $switch = false;}
		elseif (($coord == 'A4') && ($command == "south") && ($zcount != 0) && ($switch == true)){$coord = 'A5'; $desc = $a5; $switch = false;}
		if (($coord == 'A4') && ($command == "west") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;}
		if (($coord == 'A4') && ($command == "east") && ($switch == true)){$coord = 'B4'; $desc = $b4; $switch = false;}
		if (($coord == 'Zombie') && ($command == "attack") && ($switch == true) && ($sword == 1)){$coord = 'A5'; $desc = $a5; $zcount = $zcount + 1; $hpcount = $hpcount - 40; $switch = false;}
		if (($coord == 'Zombie') && ($command == "attack") && ($switch == true) && ($sword != 1)){$desc = $death; echo $attackfail; $switch = false;}
		if (($coord == 'Zombie') && ($command != "attack") && ($switch == true)){$desc = $death; echo $runfail; $switch = false;}
		if (($coord == 'A5') && ($command == "north") && ($switch == true)){$coord = 'A4'; $desc = $a4; $switch = false;}
		if (($coord == 'A5') && ($command == "south") && ($switch == true)){$coord = 'A6'; $desc = $a6; $switch = false;}
		if (($coord == 'A5') && ($command == "west") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;}
		if (($coord == 'A5') && ($command == "east") && ($switch == true)){$coord = 'B5'; $desc = $b5; $switch = false;}
		if (($coord == 'A6') && ($command == "north") && ($zcount == 0) && ($switch == true)){$coord = 'Zombie'; $desc = $zombie; $switch = false;}
		elseif (($coord == 'A6') && ($command == "north") && ($zcount != 0) && ($switch == true)){$coord = 'A5'; $desc = $a5; $switch = false;}
		if (($coord == 'A6') && ($command == "south") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;}
		if (($coord == 'A6') && ($command == "west") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;}
		if (($coord == 'A6') && ($command == "east") && ($switch == true)){$coord = 'B6'; $desc = $b6; $switch = false;}
		if (($coord == 'B1') && ($matchlamp == 1) && ($command == "north") && ($switch == true)){$desc = $b1; echo $unable; $coord = 'B1'; $switch = false;}
		if (($coord == 'B1') && ($matchlamp == 1) && ($command == "south") && ($switch == true)){$coord = 'B2'; $desc = $b2; $switch = false;}
		if (($coord == 'B1') && ($matchlamp == 1) && ($command == "west") && ($switch == true)){$coord = 'A1'; $desc = $a1; $switch = false;}
		if (($coord == 'B1') && ($matchlamp == 1) && ($command == "east") && ($switch == true)){$desc = $b1; echo $unable; $coord = 'B1'; $switch = false;}
		if (($coord == 'B2') && ($matchlamp == 1) && ($command == "north") && ($switch == true)){$coord = 'B1'; $desc = $b1; $switch = false;}
		if (($coord == 'B2') && ($matchlamp == 1) && ($command == "south") && ($switch == true)){$coord = 'B3'; $desc = $b3; $switch = false;}
		if (($coord == 'B2') && ($matchlamp == 1) && ($command == "west") && ($switch == true)){$coord = 'A2'; $desc = $a2; $switch = false;}
		if (($coord == 'B2') && ($matchlamp == 1) && ($command == "east") && ($switch == true)){$coord = 'C2'; $desc = $c2; $switch = false;}
		if (($coord == 'B3') && ($matchlamp == 1) && ($command == "north") && ($switch == true)){$coord = 'B2'; $desc = $b2; $switch = false;}
		if (($coord == 'B3') && ($matchlamp == 1) && ($command == "south") && ($switch == true)){$desc = $b3; echo $unable; $switch = false;}
		if (($coord == 'B3') && ($matchlamp == 1) && ($command == "west") && ($vzcount == 0) && ($switch == true)){$coord = 'Voltage Zombie'; $desc = $voltzombie; $switch = false;}
		elseif (($coord == 'B3') && ($matchlamp == 1) && ($command == "west") && ($vzcount != 0) && ($switch == true)){$coord = 'A3'; $desc = $a3; $switch = false;}
		if (($coord == 'B3') && ($matchlamp == 1) && ($command == "east") && ($switch == true)){$desc = $b3; echo $unable; $switch = false;}
		if (($coord == 'B4') && ($command == "north") && ($switch == true)){$desc = $b4; echo $unable; $switch = false;}
		if (($coord == 'B4') && ($command == "south") && ($switch == true)){$coord = 'B5'; $desc = $b5; $switch = false;}
		if (($coord == 'B4') && ($command == "west") && ($switch == true)){$coord = 'A4'; $desc = $a4; $switch = false;}
		if (($coord == 'B4') && ($command == "east") && ($switch == true)){$coord = 'C4'; $desc = $c4; $switch = false;}
		if (($coord == 'B5') && ($command == "north") && ($switch == true)){$coord = 'B4'; $desc = $b4; $switch = false;}
		if (($coord == 'B5') && ($command == "south") && ($switch == true)){$coord = 'B6'; $desc = $b6; $switch = false;}
		if (($coord == 'B5') && ($command == "west") && ($vzcount == 0) && ($switch == true)){$coord = 'Zombie'; $desc = $zombie; $switch = false;}
		elseif (($coord == 'B5') && ($command == "west") && ($vzcount != 0) && ($switch == true)){$coord = 'A5'; $desc = $a5; $switch = false;}
		if (($coord == 'B5') && ($command == "east") && ($switch == true)){$desc = $b5; echo $unable; $switch = false;}
		if (($coord == 'B6') && ($command == "north") && ($switch == true)){$coord = 'B5'; $desc = $b5; $switch = false;}
		if (($coord == 'B6') && ($command == "south") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;}
		if (($coord == 'B6') && ($command == "west") && ($switch == true)){$coord = 'A6'; $desc = $a6; $switch = false;}
		if (($coord == 'B6') && ($command == "east") && ($switch == true)){$desc = $b6; echo $unable; $switch = false;}
		if (($coord == 'C1') && ($command == "north") && ($switch == true)){$desc = $c1; echo $unable; $switch = false;}
		if (($coord == 'C1') && ($command == "south") && ($switch == true)){$coord = 'C2'; $desc = $c2; $switch = false;}
		if (($coord == 'C1') && ($command == "west") && ($switch == true)){$coord = 'B1'; $desc = $b1; $switch = false;}
		if (($coord == 'C1') && ($command == "east") && ($switch == true)){$coord = 'D1'; $desc = $d1; $switch = false;}
		if (($coord == 'C2') && ($command == "north") && ($switch == true)){$coord = 'C1'; $desc = $c1; $switch = false;}
		if (($coord == 'C2') && ($command == "south") && ($switch == true)){$coord = 'C3'; $desc = $c3; $switch = false;}
		if (($coord == 'C2') && ($command == "west") && ($matchlamp == 1) && ($switch == true)){$coord = 'B2'; $desc = $b2; $switch = false;}
		if (($coord == 'C2') && ($command == "west") && ($matchlamp != 1) && ($switch == true)){$desc = 'You need a light source in order to persevere'; $switch = false;}
		if (($coord == 'C2') && ($command == "east") && ($switch == true)){$coord = 'D2'; $desc = $d2; $switch = false;}
		if (($coord == 'C3') && ($command == "north") && ($switch == true)){$coord = 'C2'; $desc = $c2; $switch = false;}
		if (($coord == 'C3') && ($command == "south") && ($switch == true)){$coord = 'C4'; $desc = $c4; $switch = false;}
		if (($coord == 'C3') && ($command == "west") && ($switch == true)){$desc = $c3; echo $unable; $switch = false;}
		if (($coord == 'C3') && ($command == "east") && ($switch == true)){$coord = 'D3'; $desc = $d3; $switch = false;}
		if (($coord == 'C4') && ($command == "north") && ($switch == true)) {$coord = 'C3'; $desc = $c3; $switch = false;}
		if (($coord == 'C4') && ($command == "south") && ($switch == true)){$coord = 'C5'; $desc = $c5; $switch = false;}
		if (($coord == 'C4') && ($command == "west") && ($switch == true)){$coord = 'B4'; $desc = $b4; $switch = false;}
		if (($coord == 'C4') && ($command == "east")  && ($switch == true)){$coord = 'D4'; $desc = $d4; $switch = false;}
		if (($coord == 'C5') && ($command == "north") && ($switch == true)){$coord = 'C4'; $desc = $c4; $switch = false;}
		if (($coord == 'C5') && ($command == "south") && ($switch == true)){$coord = 'C6'; $desc = $c6; $switch = false;}
		if (($coord == 'C5') && ($command == "west") && ($switch == true)){$desc = $c5; echo $unable; $switch = false;} 
		if (($coord == 'C5') && ($command == "east") && ($switch == true)){$desc = $c5; echo $unable; $switch = false;}
		if (($coord == 'C6') && ($command == "north") && ($switch == true)){$coord = 'C5'; $desc = $c5; $switch = false;}
		if (($coord == 'C6') && ($command == "south") && ($switch == true)){$desc = $c6; echo $unable; $switch = false;}
		if (($coord == 'C6') && ($command == "west") && ($switch == true)){$desc = $c6; echo $unable; $switch = false;}
		if (($coord == 'C6') && ($command == "east") && ($switch == true)){$coord = 'D1'; $desc = $d1; $switch = false;}
		if (($coord == 'D1') && ($command == "north") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;}
		if (($coord == 'D1') && ($command == "south") && ($switch == true)){$coord = 'D2'; $desc = $d2; $switch = false;}
		if (($coord == 'D1') && ($command == "west") && ($switch == true)){$coord = 'C1'; $desc = $c1; $switch = false;}
		if (($coord == 'D1') && ($command == "east") && ($switch == true)){$coord = 'E1'; $desc = $e1; $switch = false;}
		if (($coord == 'D2') && ($command == "north") && ($switch == true)){$coord = 'D1'; $desc = $d1; $switch = false;}
		if (($coord == 'D2') && ($command == "south") && ($switch == true)){$coord = 'D3'; $desc = $d3; $switch = false;}
		if (($coord == 'D2') && ($command == "west") && ($switch == true)){$coord = 'C2'; $desc = $c2; $switch = false;}
		if (($coord == 'D2') && ($command == "east") && ($switch == true)){$coord = 'E2'; $desc = $e2; $switch = false;}
		if (($coord == 'D3') && ($command == "north") && ($switch == true)){$desc = $d3; echo $unable; $switch = false;}
		if (($coord == 'D3') && ($command == "south") && ($switch == true)){$desc = $d3; echo $unable; $switch = false;}
		if (($coord == 'D3') && ($command == "west") && ($switch == true)){$coord = 'C3'; $desc = $c3; $switch = false;}
		if (($coord == 'D3') && ($command == "east") && ($izcount == 0) && ($switch == true)){$coord = 'Inferno Zombie'; $desc = $firezombie; $switch = false;}
		elseif (($coord == 'D3') && ($command == "east") && ($izcount != 0) && ($switch == true)){$coord = 'E3'; $desc = $e3; $switch = false;}
		if (($coord == 'D4') && ($command == "north") && ($switch == true)) {$desc = $d4; echo $unable; $switch = false;}
		if (($coord == 'D4') && ($command == "south") && ($switch == true)) {$coord = 'D5'; $desc = $d5; $switch = false;}
		if (($coord == 'D4') && ($command == "west") && ($switch == true)) {$coord = 'C4'; $desc = $c4; $switch = false;}
		if (($coord == 'D4') && ($command == "east") && ($switch == true)) {$coord = 'E4'; $desc = $e4; $switch = false;}
		if (($coord == 'D5') && ($command == "north") && ($switch == true)){$coord = 'D4'; $desc = $d4; $switch = false;} 
		if (($coord == 'D5') && ($command == "south") && ($switch == true)){$coord = 'D6'; $desc = $d6; $switch = false;}
		if (($coord == 'D5') && ($command == "west") && ($switch == true)){$desc = $d5; echo $unable; $switch = false;}
		if (($coord == 'D5') && ($command == "east") && ($switch == true)){$desc = $d5; echo $unable; $switch = false;}
		if ($coord == 'D6'){$desc = $death; echo "<font color='Orange'> Your death was <font color='Red' size='5'>PUNJI STAKES!!! </font><br></font>"; $switch = false;}
		if (($coord == 'E1') && ($command == "north") && ($switch == true)){$desc = $death; echo $deathresult; echo $fall; $switch = false;} 
		if (($coord == 'E1') && ($command == "south") && ($switch == true)){$coord = 'E2'; $desc = $e2; $switch = false;}
		if (($coord == 'E1') && ($command == "west") && ($switch == true)){$coord = 'D1'; $desc = $d1; $switch = false;}
		if (($coord == 'E1') && ($command == "east") && ($switch == true)){$desc = $e1; echo $unable; $switch = false;}
		if (($coord == 'E2') && ($command == "north") && ($switch == true)){$coord = 'E1'; $desc = $e1; $switch = false;}
		if (($coord == 'E2') && ($command == "south") && ($izcount == 0) && ($switch == true)){$coord = 'Inferno Zombie'; $desc = $firezombie; $switch = false;}
		elseif (($coord == 'E2') && ($command == "south") && ($izcount != 0) && ($switch == true)){$coord = 'E3'; $desc = $e3; $switch = false;}
		if (($coord == 'E2') && ($command == "west") && ($switch == true)){$coord = 'D2'; $desc = $d2; $switch = false;}
		if (($coord == 'E2') && ($command == "east") && ($switch == true)){$desc = $e2; echo $unable; $switch = false;}
		if (($coord == 'Inferno Zombie') && ($command == "attack") && ($switch == true) && ($helmet == 1) && ($sword == 1)){$coord = 'E3'; $desc = $e3; $izcount = $izcount + 1; $hpcount = $hpcount - 40; $switch = false;}
		if (($coord == 'Inferno Zombie') && ($command == "attack") && ($switch == true) && ($helmet != 1)){$desc = $death; echo $attackfail; $switch = false;}
		if (($coord == 'Inferno Zombie') && ($command == "attack") && ($switch == true) && ($sword != 1)){$desc = $death; echo $attackfail; $switch = false;}
		if (($coord == 'Inferno Zombie') && ($command != "attack") && ($switch == true)){$desc = $death; echo $runfail; $switch = false;}
		if (($coord == 'E3') && ($command == "north") && ($switch == true)){$coord = 'E2'; $desc = $e2; $switch = false;}
		if (($coord == 'E3') && ($command == "south") && ($switch == true)){$desc = $e3; echo $unable; $switch = false;}
		if (($coord == 'E3') && ($command == "west") && ($switch == true)){$coord = 'D3'; $switch = false;}
		if (($coord == 'E3') && ($command == "east") && ($switch == true)){$desc = $e3; echo $unable; $switch = false;}
		if (($coord == 'E4') && ($command == "north") && ($switch == true)) {$desc = $e4; echo $unable; $switch = false;}
		if (($coord == 'E4') && ($command == "south") && ($matchlamp == 1) && ($switch == true)) {$coord = 'E5'; $desc = $e5; $switch = false;}
		if (($coord == 'E4') && ($command == "south") && ($matchlamp != 1) && ($switch == true)) {$desc = 'You need a light source in order to persevere'; $switch = false;}
		if (($coord == 'E4') && ($command == "west") && ($switch == true)) {$coord = 'D4'; $desc = $d4; $switch = false;}
		if (($coord == 'E4') && ($command == "east") && ($switch == true)) {$desc = $e4; echo $unable; $switch = false;}
		if (($coord == 'E5') && ($command == "north") && ($matchlamp == 1) && ($switch == true)){$coord = 'E4'; $desc = $e4; $switch = false;}
		if (($coord == 'E5') && ($command == "north") && ($matchlamp != 1) && ($switch == true)){$desc = 'You need a light source in order to persevere'; $switch = false;}
		if (($coord == 'E5') && ($command == "south") && ($matchlamp == 1) && ($switch == true)){$coord = 'Zombie Demon'; $desc = $demonzombie; $switch = false;}
		if (($coord == 'E5') && ($command == "south") && ($matchlamp != 1) && ($switch == true)){$desc = 'You need a light source in order to persevere'; $switch = false;}
		if (($coord == 'E5') && ($command == "west") && ($switch == true)){$desc = $e5; echo $unable; $switch = false;}
		if (($coord == 'E5') && ($command == "east") && ($switch == true)){$desc = $e5; echo $unable; $switch = false;}
		if (($command == 'i am error') && ($switch == true)){$desc = "<img border='0' src='http://i1.kym-cdn.com/entries/icons/original/000/001/368/i-am-error.jpeg' width='200' height='200'> <br> <embed height='0' width='0' src='OOT_Secret.mp3'> <br> Its a secret to everybody."; $switch = false;}
		if (($coord == 'Zombie Demon') && ($command == "attack") && ($switch == true) && ($suit == 1) && ($helmet == 1) && ($sword == 1)){$hpcount = $hpcount - 60; $desc = $victory; $switch = false;}
		elseif (($coord == 'Zombie Demon') && ($command != "attack") && ($switch == true)){$desc = $death; echo $runfail; $switch = false;}
		elseif (($coord == 'Zombie Demon') && ($command == "attack") && ($switch == true) && ($suit != 1)){$desc = $death; echo $attackfail; $switch = false;}
		elseif (($coord == 'Zombie Demon') && ($command == "attack") && ($switch == true) && ($helmet != 1)){$desc = $death; echo $attackfail; $switch = false;}
		elseif (($coord == 'Zombie Demon') && ($command == "attack") && ($switch == true) && ($sword != 1)){$desc = $death; echo $attackfail; $switch = false;}
		if (($command == 'commit suicide') && ($switch == true)) {$desc = $death; echo "<font color='purple' size='5'> As if that wasn't horribly dramatic. What a douche move.. Killing yourself..</font>"; $switch = false;}
		if (($command == "help") && ($switch == true)){echo $help; $desc = $backpage; $switch = false;}
		if (($command == "map") && ($switch == true)){echo "Here is your map. " . $backpage . "<br>"; $desc = "<img src='http://i.imgur.com/oPalCe9.jpg'>";}
		if (($command == "use teleporter") && ($switch == true)){echo "For some strange reason, the teleporter re-directed you here, and has caused you to regain all of your health!<br>"; $desc = $d5; $coord = 'D5'; $hpcount = $hpcount + 100; $teleporter = $teleporter - 1; $switch = false;}
		if ($hpcount > 100){$hpcount = 100;}
		if ($hpcount < 0){$hpcount = 0;}
		if ($hpcount == 0){$desc = $death; echo "<font color='orange' size='6'>You ran out of health!</font>";}
		//item pick ups
			if (($coord == 'A1') && ($command == "break rock") && ($pickaxe == 1) && ($switch == true)){$desc = "You broke the rock! You can now pick up the <font color='Green'>Rubber Suit</font>!<br>"; $rock = $rock + 1; $switch = false;}
			if (($coord == 'A1') && ($command == "break rock") && ($pickaxe != 1) && ($switch == true)){$desc = "Aye, you need something that can break through rock first.<br>"; $switch = false;}
			if (($coord == 'A1') && ($command == "pick up rubber suit") && ($rock == 1) && ($switch == true)){$desc = $a1; echo "You got the Rubber Suit!<br>"; $suit = $suit + 1; $switch = false;}
			if (($coord == 'A1') && ($command == "pick up rubber suit") && ($rock != 1) && ($switch == true)){$desc = "Well, you're gunna need to break that rock before you can grab the rubber suit underneath.<br>"; $switch = false;}
			if (($coord == 'C1') && ($command == "pick up pickaxe") && ($switch == true)){$desc = $c1; echo "You got the Pickaxe!<br>"; $pickaxe = $pickaxe + 1; $switch = false;}
			if (($coord == 'D3') && ($command == "pick up matches and lamp") && ($switch == true)){$desc = $d3; echo "You got the Matches and the Lamp!<br>"; $matchlamp = $matchlamp + 1; $switch = false;}
			if (($coord == 'B6') && ($command == "pick up sword") && ($switch == true)){$desc = $b6; echo "You got the Sword!<br>"; $sword = $sword + 1; $switch = false;}
			if (($coord == 'C6') && ($command == "pick up flame resistant helmet") && ($switch == true)){$desc = $c6; echo "You got the Flame Resistant Helmet!<br>"; $helmet = $helmet + 1; $switch = false;}
			if (($coord == 'E1') && ($command == "melt ice") && ($matchlamp == 1) && ($switch == true)){$desc = "You have melted the ice and you can now collect your prize... A <font color='green'>teleporter</font>? Wow. Strange. You better pick it up.<br>"; $ice = $ice + 1; $switch = false;}
			if (($coord == 'E1') && ($command == "melt ice") && ($matchlamp != 1) && ($switch == true)){$desc = "Aye, you're gunna need something that can melt through the ice first... Something hot...<br>"; $switch = false;}
			if (($coord == 'E1') && ($command == "break ice") && ($switch == true)){echo "Well, I certainly don't believe you can just easily break ice, even with strong equipment. I think it would be best to melt it.<br>"; $desc = $e1; $switch = false;}
			if (($coord == 'E1') && ($command == "pick up teleporter") && ($ice == 1) && ($switch == true)){$desc = $e1; echo "You got the teleporter! Type 'use teleporter' in the command bar to see what it does... hmm... I wonder..<br>"; $teleporter = $teleporter + 1; $switch = false;}
			if (($coord == 'A5') && ($command == "pick up map") && ($switch == true)){$desc = $a5; echo "You got the map! Now you can see where you're going by typing 'map' into the command bar!<br>"; $map = $map + 1; $switch = false;}
			if (($command == "inventory") && ($switch == true)){echo $suit; echo " Rubber Suit <br>"; echo $pickaxe; echo " Pickaxe <br>"; echo $matchlamp; echo " Matches and Lamp <br>"; echo $sword; echo " Sword <br>"; echo $helmet; echo " Flame Resistant Helmet <br>"; echo $map; echo " Map <br>"; echo $teleporter; echo " Teleporter <br>"; echo "Here is your personal list of items.<br>"; $desc = $backpage;}
	}
}
	echo $desc . "<br>";
	echo "<font color='#FFCC99' size='5' style='font-family:verdana'> You are now at: $coord </font><br>";
	if ($hpcount >= 50) {echo "<font color='Green' font='5'> Your health: $hpcount % </font> <br>";}
	elseif (($hpcount <= 49) && ($hpcount >= 31)) {echo "<font color='Yellow' font='5'> Your health: $hpcount % </font> <br>";}
	elseif ($hpcount <= 30) {echo "<font color='Red' font='5'> Your health: $hpcount % </font> <br>";}
?>
</body>
</html>