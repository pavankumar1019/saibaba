
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/DM-Shri-Shirdi-Sai-Baba-Temple-Trust-106816784715888/"><i class="icon ion-social-facebook"></i></a></div>
            <!-- <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul> -->
            <p class="copyright">PAVAN KUMAR © <script>document.write(new Date().getFullYear())</script>All Rights Reserved @ dakshinashirdisai.com</p>
        </footer>
    </div>
   
    <script>
        $(document).ready(function(){
  $(".gal").click(function(){
    // alert("Hello! I am an alert box!!");
  var t = $(this).attr("src");
  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
  $("#myModal").modal();
  $('#myModal').modal('show');
});

// $("video").click(function(){
//   var v = $("video > source");
//   var t = v.attr("src");
//   $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
//   $("#myModal").modal();  
//     $('#myModal').modal('show');
// });
});//EOF Document.ready
    </script>
       <script>
      var t= new Date();
      panchang.calculate(t, function() {
        document.getElementById("day").innerHTML=panchang.Day.name;
        document.getElementById("tithi").innerHTML=panchang.Tithi.name;
        // document.getElementById("nakshtra").innerHTML=panchang.Nakshatra.name;
        // document.getElementById("karna").innerHTML=panchang.Karna.name;
        // document.getElementById("yoga").innerHTML=panchang.Yoga.name;
        // document.getElementById("raasi").innerHTML=panchang.Raasi.name;
        // document.getElementById("ayanamsa").innerHTML=panchang.Ayanamsa.name;

      });
      document.getElementById("Gulikhala").innerHTML = gulikhal;
document.getElementById("Yamagandakhala").innerHTML = yamaganda;
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>