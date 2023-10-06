<?php

namespace Astronomy\Planets;
include("Planets.php");
include("Earth.php");

// $planet = new Astronomy\Planets();  // without namespace (unqualified)
$planet = new Planets(); // with or without namespace (qualified and prefer to use always)
$planet->getName();


$earth = new \Astronomy\Planets\Earth();
$earth->getName();

// new DateTime();    // can't use this without qualified namespace
new \DateTime();    // correct way to use