<?php
function logicGate($type, $input1, $input2 = ""){
    $output = "";
    if($type == "AND"){
        if($input1 == 0 || $input2 == 0){
            $output = 0;
        } else {
            $output = 1;
        }
    }
    if($type == "OR"){
        if($input1 == 1 || $input2 == 1){
            $output = 1;
        } else {
            $output = 0;
        }
    }
    if($type == "NOT"){
        if($input1 == 1){
            $output = 0;
        } else if($input1 == 0){
            $output = 1;
        }
    }
    if($type == "NAND"){
        if($input1 == 1 || $input2 == 1){
            $output = 0;
        } else {
            $output = 1;
        }
    }
    if($type == "NOR"){
        if($input1 == 0 || $input2 == 0){
          $output = 1;
        } else {
          $output = 0;
        }
    }
    if($type == "XOR"){
        if($input1 == $input2){
          $output = 0;
        } else {
          $output = 1;
        }
    }
    if($type == "XNOR"){
        if($input1 == $input2){
          $output = 1;
        } else {
          $output = 0;
        }
    }
    return $output;
}

$AND = logicGate("AND", 1, 1);
$OR = logicGate("OR", 1, 0);
$NOT = logicGate("NOT", 0);
$NAND = logicGate("NAND", 1, 1);
$NOR = logicGate("NOR", 0, 1);
$XOR = logicGate("XOR", 0, 0);
$XNOR = logicGate("XNOR", 1, 1);

echo "AND Gate: ".$AND."\n";
echo "OR Gate: ".$OR."\n";
echo "NOT Gate: ".$NOT."\n";
echo "NAND Gate: ".$NAND."\n";
echo "NOR Gate: ".$NOR."\n";
echo "XOR Gate: ".$XOR."\n";
echo "XNOR Gate: ".$XNOR."\n";





?>
