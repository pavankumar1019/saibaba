var day;
switch (new Date().getDay()) {
    case 0:
      day = "Sunday";
      var gulikhal = "3:00-4:30";
      var yamaganda ="12:00-1:30";
      break;
    case 1:
      day = "Monday";
      var gulikhal = "1:30-3:00";
      var yamaganda ="10:30-12:00";
      break;
    case 2:
      day = "Tuesday";
      var gulikhal = "12:00-1:30";
    var yamaganda ="9:00-10:30";
      break;
    case 3:
      day = "Wednesday";
      var gulikhal = "10:30-12:00;";
      var yamaganda ="7:30-9:00";
      break;
    case 4:
      day = "Thursday";
      var gulikhal = "9:00-10:30";
      var yamaganda = "6:00-7:30";
      break;
    case 5:
      day = "Friday";    
    var gulikhal = "7:30-9:00";
    var yamaganda = "3:00-4:30";
      break;
    case  6:
      day = "Saturday";
      var gulikhal = "6:00-7:30";
    var yamaganda ="1:30-3:00";
  }
document.getElementById("Gulikhala").innerHTML = gulikhal;
document.getElementById("Yamagandakhala").innerHTML = yamaganda;