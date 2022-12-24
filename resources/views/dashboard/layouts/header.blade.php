<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Sawah Lope</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
{{-- jam --}}
      <div class="col-md-8 justify-content-start ms-0">
      <span id="clock"></span>
        <script>
          setInterval(customClock, 500);
          function customClock() {
              var time = new Date();
              var hrs = time.getHours();
              var min = time.getMinutes();
              var sec = time.getSeconds();
              
              document.getElementById('clock').innerHTML = hrs + ":" + min + ":" + sec;
              
          }
          
        </script>
        <style>
          #clock {
              font-size: 20px;
              color: white;
              font-weight:normal;
          }
          #tanggalwaktu {
            color:  white;
            font-weight: normal;
            margin-left: 25px;
            font-size: 20px; 
          }

        </style>

        <span id="tanggalwaktu"></span>
          <script>
              var tw = new Date();
              if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
              else (a=tw.getTime());
              tw.setTime(a);
              var tahun= tw.getFullYear ();
              var hari= tw.getDay ();
              var bulan= tw.getMonth ();
              var tanggal= tw.getDate ();
              var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
              var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September", "Oktober","November","Desember");
              document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
          </script>
        </div>

  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
              @csrf
                  <button type="submit"class="nav-link px-3 bg-dark border-0"> Logout  <span data-feather="log-out"></span></button>
              </form>
    </div>
  </div>
</header>