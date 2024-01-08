<?php

// switch   => loose comparison
// match    => strict comparison



$paymentStatus = 1;

switch($paymentStatus) {
    case 1:
        echo 'Paid';
        break;
    case 2:
    case 3:
        echo 'Payment Declined';
        break;
    case 0:
        echo 'Payment Pending';
        break;
    default: 
        echo 'Unknown Payment';
}



echo '<br /> <br />';



$paymentStatusDisplay =  match($paymentStatus) {
    1       => 'Paid',
    2, 3    => 'Payment Declined',
    0       => 'Payment Pending',
    default => 'Unknown Payment'
};

echo $paymentStatusDisplay;