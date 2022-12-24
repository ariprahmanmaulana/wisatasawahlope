@extends('layouts.main')
@section('container')
<style>
    .deskripsi {
        line-height: 20px;
        max-height: calc(20px * 10);
        overflow: hidden;
    }
    .button-readmore::after {
        content: 'Baca Selengkapnya';
    }
    #check-readmore:checked ~ .button-readmore::after {
        content: 'Kembali';
    }
    #check-readmore:checked ~ .deskripsi {
        max-height: 100%;
    }
    #check-readmore {
        position: absolute;
        left: -1000px;
    }
</style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <input type="checkbox" id="check-readmore">
                    <h3 class="card-title">Sejarah Wisata Sawah Lope</h3>
                    <p class="deskripsi card-text mt-3">Ada salah satu desa tempat wisata yang cukup terkenal, Namanya Desa Cikaso. Desa Cikaso adalah desa kecil yang berada di Kecamatan Kramatmulya Kabupaten Kuningan . Desa ini dikenal luas sebagai salah satu tujuan wisata dan juga memiliki kebudayaan dan lokasi pertanian yang cukup bagus. Tidak hanya di Kuningan, Desa lain pun juga cukup terkenal di Kuningan sebagai salah satu destinasi wisata Indonesia khusus nya provinsi Jawa Barat. <br>
                    Pada saat pandemi Covid-19 tahun 2019 pemerintah melakukan cara untuk membatasi penyebaran virus dengan cara menutup atau lockdown dan Desa Cikaso pun termasuk salah satu desa yang yang terdampak dan kemudian dilockdown. Semua pintu masuk dan keluar ditutup sehingga warga tidak bisa masuk sama sekali, sehingga kegiatan orang yang bekerja diluar desapun harus menginap dulu disaudaranya akibat dilockdown. <br>
                    Selama Lockdown kira-kira 1 bulan lamanya, masyarakat diharuskan tetap mencari makan, sementara tidak bisa keluar rumah atau desa, karena dijaga ketat, baik gang kecil maupun perbatasan Desa Karangmangu, Desa Kurucuk dan Desa Bojong dijaga sama TNI, Polisi, pihak kesehatan dan Aparat desa lainnya. Karena kejadian ini, para pedagang yang ada sekarang di wisata Sawah Lope itu mereka tidak bisa berjualan, sekolah juga diliburkan, maka mereka datang kesini sekitar 30-40 pedagang pada awalnya saat itu. Nah dikarenakan semakin ramai, pemerintah desa melihat bahwa ini bisa menjadi potensi dikarenakan lokasi diSawah Lope  selalu ramai, karena awalnya diujung atas ada gambar mural yang biasa dipakai berfoto awal sebelum ada gazebo-gazebo. Akhirnya pada tahun 2019 pemdes Desa Cikaso membentuk yang namanya kelompok untuk menegelola wisata, namanya KOMPEPAR (Kelompok Pemerhati Pariwisata) akan tetapi di ubah karena ada keputusan dari Bupati menjadi POKDARWIS (Kelompok Sadar Wisata). <br>
                    Setelah dibentuk POKDARWIS, masalah belum selesai dikarenakan dana desa pada saat itu dipergunakan tidak ada untuk wisata semuanya untuk bencana wabah Covid-19. Akhirnya para pengurus dari POKDARWIS berinisiatif untuk bekerjasama dalam hal keuangan untuk membuat gazebo-gazebo, setelah gazebo  terbuat kita sewakan dan untuk pintu masuk juga kita adakan tiket masuk sehingga uang terkumpul lumayan banyak dan dari keuntungannya dibuatkan lebih banyak lagi gazebo sampai sekarang.</p>
                    <label for="check-readmore" class="button-readmore btn btn-primary"></label>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Visi Misi</h3>
                    <p class="card-text mt-3">
                        <h5>Visi</h5>
                        <p>Menjadikan Desa Cikaso sebagai tujuan wisata utama di Kabupaten Kuningan.</p>
                        <h5>Misi</h5>
                        <p>Meningkatkan daya saing produk wisata. Menjadikan SDM berkualitas dan professional. Meningkatkan pemasaran dan jejaring pariwisata.Bermitra dengan seluruh pemangku kepentingan (masyarakat pemerintah dan swasta),Meningkatkan dan memberikan kemudahan dan layanan wisata.</p>
                    </p>
                </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Struktur Organisasi</h3>
                        <table class="table table-striped">
                            <thead>
                        <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Posisi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Kelapa Desa Cikaso</td>
                        <td>Penasehat</td>
                        </tr>
                        <tr>
                        <td>Dr. Ir. H. Yoyo Sunaryo N.MP</td>
                        <td>Ketua</td>
                        </tr>
                        <tr>
                        <td>Zaenal Arifudin .SKM</td>
                        <td>Sekretaris</td>
                        </tr>
                        <tr>
                        <td>Oong Suhar</td>
                        <td>Bendahara</td>
                        </tr>
                        <tr>
                        <td>Ali Moch. Nur .SE</td>
                        <td>Sektor IT</td>
                        </tr>
                        <tr>
                        <td>Anton</td>
                        <td>Sektor Gazebo</td>
                        </tr>
                        <tr>
                        <td>Rafi</td>
                        <td>Sektor Tiket Timur</td>
                        </tr>
                        <tr>
                        <td>Nana</td>
                        <td>Sektor Tiket Barat</td>
                        </tr>
                    </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Kontak Resmi</h3>
                        <h6 class="mt-3">Objek Wisata Sawah Lope</h6>
                        <p><i class="bi bi-telephone"> &nbsp;&nbsp; Oong Suhar :</i> 085224663045</p>
                        <p><i class="bi bi-geo-alt"> &nbsp;&nbsp; Sekretariat :</i> Jln. Sidumampir Dusun Manis Desa Cikaso Kecamatan Kramatmulya Kab. Kuningan Jawa Barat</p>
                        <h6>Social Media</h6>
                        <p><a href="https://www.facebook.com/sawahlope" class="text-decoration-none" style="color: #212529"> <i class="bi bi-facebook"> &nbsp;&nbsp; Facebook :</i> Sekretariat Sawah Lope Cikaso</a></p>
                        <p><a href="https://instagram.com/sekretariat_sawah_lope_cikaso?igshid=YmMyMTA2M2Y"  class="text-decoration-none" style="color: #212529"><i class="bi bi-instagram"> &nbsp;&nbsp; Instagram :</i> @sekretariat_sawah_lope_cikaso</a></p>
                        <p><a href="https://www.youtube.com/@daengali8240" class="text-decoration-none" style="color: #212529"> <i class="bi bi-youtube"> &nbsp;&nbsp; Youtube :</i> Daeng Ali</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-4 text-center bg-secondary p-2">
      <div class="sosmed mb-3">
        <h6><a href="https://www.facebook.com/sawahlope" class="text-decoration-none" style="color: #212529"> <i class="bi bi-facebook"></i> Sawah Lope Cikaso</a> &nbsp; &nbsp; &nbsp; <a href="https://instagram.com/sekretariat_sawah_lope_cikaso?igshid=YmMyMTA2M2Y"  class="text-decoration-none" style="color: #212529"><i class="bi bi-instagram"></i> @sekretariat_sawah_lope_cikaso</a></h6> 
        <h6><a href="https://www.youtube.com/@daengali8240" class="text-decoration-none" style="color: #212529"> <i class="bi bi-youtube"></i>  Daeng Ali</a> &nbsp; &nbsp; &nbsp; <a href="#" class="text-decoration-none" style="color: #212529"><i class="bi bi-telephone"></i> Oong Suhar : 085224663045 </a></h6>
        <p ><a href="https://maps.app.goo.gl/iwoZVKiQfD7g3NHr8" class="text-decoration-none" style="color: #212529"> Jln. Sidumampir Dusun Manis Desa Cikaso Kecamatan Kramatmulya Kab. Kuningan Jawa Barat</a></p>
  </div>
      
      <h6>&copy; Copyright 2022 - Kuningan || Sawah Lope Desa Cikaso || All Rights Reserved || Powered by Kerja Praktek 58 UNIKU 2022</h6>
    </footer>
@endsection