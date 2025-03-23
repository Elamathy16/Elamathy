<?php
extract($_POST);
$c_name=$t1;
$c_value=$t2;
if(isset($_POST['s1']))
{
    setcookie($c_name,$c_value);
    echo 'item is added to cart';
}
else
if(isset($_POST['s2']))
{
    if(isset($_COOKIE[$c_name]))
    foreach($_COOKIE as $key=>$val)
    {
        echo $key.'is'.$val."<br>\n";
    }
    else
        echo "No item is found in cart";
}
else if(isset($_POST['s3']))
{
    if(!isset($_COOKIE[$c_name]))
        echo "No items to be deleted";
    else{
        foreach($_COOKIE as $key=>$val)
        {
            setcookie($key,$val,time()-7200);
        }
        echo "All cookies are deleted";
    }
}
?>