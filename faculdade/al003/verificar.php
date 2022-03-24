<php?
    $num =$_POST['n1'];
    echo "numero recebido =". $num;
    $resto= $num %2;
    if ($resto ==0)
    {
        echo " é par!!!"
    }
    else
    {
        echo"  é impar!!!"
    }
?>