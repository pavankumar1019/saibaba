var today = new Date();
var day = today.getDay();
var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
console.log("Today is : " + daylist[day] + ".");
if (daylist[day]="Monday")
{

    var gulikhal = "1:30-3:00";
    var yamaganda ="10:30-12:00";
}
if (daylist[day]="Tuesday")
{
 
    var gulikhal = "12:00-1:30";
    var yamaganda ="9:00-10:30";
}
if (daylist[day]="Wednesday")
{
 
    var gulikhal = "10:30-12:00;";
    var yamaganda ="7:30-9:00";
}
if (daylist[day]="Thursday")
{
 
    var gulikhal = "9:00-10:30";
    var yamaganda = "6:00-7:30";
}
if (daylist[day]="Friday")
{
 
    var gulikhal = "7:30-9:00";
    var yamaganda = "3:00-4:30";
}
if (daylist[day]="Saturday")
{
    var gulikhal = "6:00-7:30";
    var yamaganda ="1:30-3:00";
}
if (daylist[day]="Sunday")
{
 
    var gulikhal = "3:00-4:30";
    var yamaganda ="12:00-1:30";
}