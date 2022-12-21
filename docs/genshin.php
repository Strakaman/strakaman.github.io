<!DOCTYPE html>
<html>
<body>

<?php 

class PullClass {
  public $items;
  public $rank;
  public $punct;
  public $reactions;

  function __construct($rank, $punct, $items, $reactions) {
        $this->rank = $rank;
		$this->punct = $punct;
		$this->items = $items;
		$this->reactions = $reactions;
  }
  
  function get_items() {
    return $this->items;
  }
  
  function get_rank() {
    return $this->rank;
  }
  
    function get_reactions() {
    return $this->reactions;
  }
  
  //didn't make a punct function just to see if i can just grab it because it's public
}

$threeStars = new PullClass(3, ".", array
  (
  array("Debate Club",""),
  array("Thrilling Tales",""),
  array("Cool Steel",""),
  array("Slingshot",""),
  array("Black Tassel","")
  ),
  array("Lame.", "Boooo!", "Well that sucks...","Bruh...","Gross.","Ugh.","Bleh!")
  );
$fourStars = new PullClass(4, "!", array
  (
  array("Bennett", "Teamwork is dreamwork!"),
  array("Fischl", "Oz, reveal thyself!"),
  array("Kaeya", "Don't get frostbite!"),
  array("Xinqui","Let me weave you a verse!"),
  array("Sucrose","Enhanced Anemo Module 75!")
  ),
  array("Nice!", "Pretty cool!","Sweet!")
  );
  
$fiveStars = new PullClass(5, "!!", array
  (
  array("Albedo", "Witness my great undertaking!"),
  array("Ayaka", "Kamisato Art: Sometsu!"),
  array("Ayato", "Pace yourself before you erase yourself!"),
  array("Diluc", "Time for retribution!"),
  array("Ganyu", "Born of ice and frost!"),
  array("Hutao", "Pyre, pyre, pants on fire!"),
  array("Keqing", "Cut to the chase!"),
  array("Nahida", "Share in my knowledge"),
  array("Raiden Shogun", "Inazuma shines eternal!"),
  array("Tighnari", "Let's nip that in the bud!"),
  array("Venti", "Wouldn't gliding be faster?"),
  array("Zhongli", "I will have order!")
  ),
  array("Max vibes!", "Super lucky!", "What the hell!?", "WHOA!")
  );

//echo "<br>".$fourStars->get_rank()." Stars:<br>";
//echo implode("<br>" , $fourStars->get_reactions());
//echo "<br><br>";

$randChance = rand(0,99);
if ($randChance < 50) {
	echo getGenshinDisplayString($threeStars);
}
else if ($randChance < 90) {
	echo getGenshinDisplayString($fourStars);
}
else {
	echo getGenshinDisplayString($fiveStars);
}

function getGenshinDisplayString($pullGroup)
{
	$items = $pullGroup->get_items();
	$reactions = $pullGroup->get_reactions();
	$randItem = $items[rand(0,count($items)-1)]; //rand is inclusive on both ends
	$randReact = $reactions[rand(0,count($reactions)-1)]; //rand is inclusive on both ends
	return $randReact." You pulled a ".$pullGroup->get_rank()."* ".$randItem[0].$pullGroup->punct." ".$randItem[1];

}

?>

</body>
</html>
