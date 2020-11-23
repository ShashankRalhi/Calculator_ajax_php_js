<?php


$finalresult=0;
$temp=$_POST['temp'];
$opt=$_POST['opt3'];
$result=$_POST['result'];

sel($opt);


    function sel($opt)
    {
        
    if($opt=="+")
    add();
    else if($opt=="-")
    sub();
    else if($opt=="*")
    mul();
    else if($opt=="/")
    div();
    else
    show();
    }

function add()
{
  global $result,$temp,$finalresult;
    $finalresult=$result+$temp;
  
}

function sub()
{
    global $result,$temp,$finalresult;
    $finalresult=$result-$temp;
}

function mul()
{
    global $result,$temp,$finalresult;
    $finalresult=$result*$temp;
}

function div()
{
    global $result,$temp,$finalresult;
    $finalresult=$result/$temp;
}
function show()
{
    global $finalresult;
 
 $finalresult = $result;
}
echo $finalresult;

?>