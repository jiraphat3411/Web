<?php
    #จงเขียนโคด PHP ตามขั้นตอนต่อไปนี้
    #กำหนดตัวแปร var1 มีค่า 5
    $var1 = 5;
    #กำหนดตัวแปร var2 มีค่า 2
    $var2 = 2;
    #พิมพ์ค่าผลลัพธ์การคำนวณ
    #(1) ค่าเฉลี่ยเลขคณิตของตัวแปรทั้ง 2
    $ans = ($var1+$var2)/2;
    print "($var1+$var2)/2 = $ans \n";
    #(2) ผลต่างระหว่าง var1 และ var2
    $ans = $var1-$var2;
    print "$var1-$var2 = $ans \n";
    #(3) var1 ยกกำลัง var2
    $ans = $var1**$var2;
    print "$var1**$var2 = $ans \n";
    #(4) เศษจากการหาร var1 ด้วย var2
    $ans = $var1%$var2 ;
    print "$var1%$var2 = $ans \n";
?>