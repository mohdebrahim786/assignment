<?php 
class Flight
{
protected $v1 =”airindiaflights”;
protected $v2=”indigoflights”;
public function flightsavlable( no.of_flights )
{
$c1 =0 ;
$c2=0;
for($i=1;$i<=$total_no_of_flights ;$i++)
{
if($vendor_name ==$v1)
{ $c1++;}
elseif($vendor_name== $v2)
{ $c2++;}
}
echo “ flight available for “.$v1.”are”.$c1;
echo “ flight available for “.$v2.”are”.$c2;
}
public function bookFlights( $choice, $available_seats,$seats_to_be _booked);
{
$vendor_name =$choice;
if($available_seats ==0)
{
echo” all seats are full”;
}
else
{
if ($seats_to_be_booked > $available_seats)
{
echo “ only “.$seats_to_be_booked -$available_seats. “seats are available”;
}
else
{
$available_seats-=$seats_to_be_booked;
echo” seats bookesd succesfully”;
}
}
?>