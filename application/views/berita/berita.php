        <div class="jumbotron">  
            <h1>News</h1>
        </div>
<div class="container-fluid p-5">

  <div class="row">
    <div class="col-lg-4">
      <form class="nosubmit">
        <input class="nosubmit" type="search" placeholder="Search...">
      </form>
    </div>
    <div class="col-lg-8">
      <div class="tab">
        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'BT')" id="defaultOpen">Berita Terbaru</btnto>
        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'ARC')">ARC</btnto>
        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'UP')">UPT Percetakan</btnto> 
        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'ADD')">AAC Dayan Dawood</btnto>
        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'RSP')">RSP Prince Nayef</btnto>
      </div>
    </div>
  </div>
   
  
    <div class="tabcontent mt-5 active" id="BT"> 
      <?php foreach ($getAllBerita as $b) { 
          if ($b->hot_news==1) {
        ?>
        <div class="row"> 
        <div class="col-lg-8">
          <img src="<?=base_url()?>foto/<?=$b->foto;?>" class="card-img-top " alt="..."  style="border-top-right-radius: 30px; width: 100%; height: auto;">
        </div>
        <div class="col-lg-4">
          <div class="card-body">
            <h5 class="card-title"><b><a href="<?php echo base_url('berita/detail');?>/<?=$b->id_berita?>"><?=$b->judul?></a></b></h5>
            <div class="row mx-md-n5 my-3">
              <div class="col px-md-5">
                <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                  <span>Admin</span>
              </div>
              <div class="col px-md-3">
                <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                  <span><?=$b->tgl_upload?></span>
              </div>
            </div>
            <div class="text-justify">
              <small class="text-muted">
                <?=substr($b->berita, 0, 600)?><a href="">  Selengkapnya......</a></small>
            </div>
          </div>
        </div>
        <?php } } ?>
      </div>
      
      

      <div class="row p-5">   
      <?php foreach ($getAllBerita as $b) { ?>
        <div class="col-lg-4">
            <img src="<?=base_url()?>foto/<?=$b->foto;?>" class="card-img-top " alt="..."  style="border-top-right-radius: 30px; width: 100%; height: auto;">
              <h5 class="card-title"><b><a href="<?php echo base_url('berita/detail');?>/<?=$b->id_berita?>"><?=$b->judul?></a></b></h5>
                <div class="row mx-md-n5 my-3">
                  <div class="col px-md-5">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span>Admin</span>
                  </div>
                  <div class="col px-md-3">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span><?=$b->tgl_upload?></span>
                  </div>
                </div>
                <div class="text-justify">
                  <small class="text-muted">
                    <?=substr($b->berita, 0, 600)?><a href="">  Selengkapnya......</a></small>
                </div>
        </div>
        <?php } ?> 
      </div>

      <div class="tabcontent mt-5 active" id="ARC"> 
      <div class="row p-5">   
      <?php foreach ($getAllBerita as $b) {  ?>
         <?php if ($b->kategori_berita=1) {
        ?>
        <div class="col-lg-4">
            <img src="<?=base_url()?>foto/<?=$b->foto;?>" class="card-img-top " alt="..."  style="border-top-right-radius: 30px; width: 100%; height: auto;">
              <h5 class="card-title"><b><a href="<?php echo base_url('berita/detail');?>/<?=$b->id_berita?>"><?=$b->judul?></a></b></h5>
                <div class="row mx-md-n5 my-3">
                  <div class="col px-md-5">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span>Admin</span>
                  </div>
                  <div class="col px-md-3">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span><?=$b->tgl_upload?></span>
                  </div>
                </div>
                <div class="text-justify">
                  <small class="text-muted">
                    <?=substr($b->berita, 0, 600)?><a href="">  Selengkapnya......</a></small>
                </div>
        </div>
         <?php } ?>
        <?php } ?> 
        </div>
      </div>

      <div class="tabcontent mt-5 active" id="UP"> 
      <div class="row p-5">   
      <?php foreach ($getAllBerita as $b) {  
         if ($b->kategori_berita==2) {
        ?>
        <div class="col-lg-4">
            <img src="<?=base_url()?>foto/<?=$b->foto;?>" class="card-img-top " alt="..."  style="border-top-right-radius: 30px; width: 100%; height: auto;">
              <h5 class="card-title"><b><a href="<?php echo base_url('berita/detail');?>/<?=$b->id_berita?>"><?=$b->judul?></a></b></h5>
                <div class="row mx-md-n5 my-3">
                  <div class="col px-md-5">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span>Admin</span>
                  </div>
                  <div class="col px-md-3">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span><?=$b->tgl_upload?></span>
                  </div>
                </div>
                <div class="text-justify">
                  <small class="text-muted">
                    <?=substr($b->berita, 0, 600)?><a href="">  Selengkapnya......</a></small>
                </div>
        </div>
        <?php } } ?> 
        </div>
      </div>

      <div class="tabcontent mt-5 active" id="ADD"> 
      <div class="row p-5">   
      <?php foreach ($getAllBerita as $b) {  
         if ($b->kategori_berita==3) {
        ?>
        <div class="col-lg-4">
            <img src="<?=base_url()?>foto/<?=$b->foto;?>" class="card-img-top " alt="..."  style="border-top-right-radius: 30px; width: 100%; height: auto;">
              <h5 class="card-title"><b><a href="<?php echo base_url('berita/detail');?>/<?=$b->id_berita?>"><?=$b->judul?></a></b></h5>
                <div class="row mx-md-n5 my-3">
                  <div class="col px-md-5">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span>Admin</span>
                  </div>
                  <div class="col px-md-3">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span><?=$b->tgl_upload?></span>
                  </div>
                </div>
                <div class="text-justify">
                  <small class="text-muted">
                    <?=substr($b->berita, 0, 600)?><a href="">  Selengkapnya......</a></small>
                </div>
        </div>
        <?php } } ?> 
        </div>
      </div>

      <div class="tabcontent mt-5 active" id="RSP"> 
      <div class="row p-5">   
      <?php foreach ($getAllBerita as $b) {  
         if ($b->kategori_berita==4) {
        ?>
        <div class="col-lg-4">
            <img src="<?=base_url()?>foto/<?=$b->foto;?>" class="card-img-top " alt="..."  style="border-top-right-radius: 30px; width: 100%; height: auto;">
              <h5 class="card-title"><b><a href="<?php echo base_url('berita/detail');?>/<?=$b->id_berita?>"><?=$b->judul?></a></b></h5>
                <div class="row mx-md-n5 my-3">
                  <div class="col px-md-5">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span>Admin</span>
                  </div>
                  <div class="col px-md-3">
                    <i class="cobaaa"><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 
                      <span><?=$b->tgl_upload?></span>
                  </div>
                </div>
                <div class="text-justify">
                  <small class="text-muted">
                    <?=substr($b->berita, 0, 600)?><a href="">  Selengkapnya......</a></small>
                </div>
        </div>
        <?php } } ?> 
        </div>
      </div>



       

           
          <!-- <hr class="hr-text" data-content="Seputar Kampus">

          <div class="row">

            <div class="col-lg-8">

              <div class="card-body">

                  <h5 class="card-title mb-4"><b>Perusahaan skin care Aceh binaan BRIN masuk semifinal China-ASEAN IEC</b></h5>

                  <img src="<?php echo base_url('assets/img/50.png') ?>" class="card-img-top" src="..." alt="Card image cap" style="border-top-right-radius: 30px">

                  <div class="text-justify">

                    <p class="text-muted mt-4">

                    Banda Aceh (ANTARA) - Perusahaan perawatan kulit (skin care) lokal Aceh, PT Biona Ceudah Rupa binaan Badan Riset dan Inovasi Nasional (BRIN) dalam program PPBR (Perusahaan Pemula Berbasis Riset) masuk semifinal kompetisi China-ASEAN Innovation and Entrepreneurship Competition (CAIEC) bidang Bio-Medicine.</p>

                  </div>

                    <button type="button" class="btn btn-warning"><a href="<?php echo site_url('berita/beritalima');?>">Baca Selengkapnya</a></button>

              </div>

            </div>

            <div class="col-lg-4">

              <div class="card">

                <img src="<?php echo base_url('assets/img/6.jpeg') ?>"   src="..." alt="Card image cap">

                    <div class="card-body">

                      <div class="row mx-md-n5 my-3">

                        <div class="col px-md-5">

                          <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                          <span>Admin</span>

                        </div>

                        <div class="col px-md-2">

                          <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                          <span>6 September 2022</span>

                        </div>

                      </div>

                        <h5 class="card-title"><b><a href="<?php echo site_url('berita/beritaenam');?>">IKM Cantila, produksi cairan pembersih tangan berbahan baku nilam dan sereh wangi</a>

                      </b></h5>

                      <div class="text-justify">

                    <small class="text-muted">

                    Pandemi Covid-19 beberapa tahun silam, menjadi momentum bagi Ambri Agusmanto dan sejawatnya untuk memproduksi hand sanitizer, atau pembersih tangan. Kala itu, kebutuhan masyarakat terhadap antiseptik meningkat pesat, seriring dengan kasus yang meningkat.

</small>

                  </div>

                    </div> 

              </div> -->

              <!-- <div class="card">

                <img src="<?php echo base_url('assets/img/Rectangle 13 (1).png ') ?>" width="" heigth=""  src="..." alt="Card image cap">

                    <div class="card-body">

                      <div class="row mx-md-n5 my-3">

                        <div class="col px-md-5">

                          <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                          <span>Admin</span>

                        </div>

                        <div class="col px-md-2">

                          <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                          <span>6 September 2022</span>

                        </div>

                      </div>

                        <h5 class="card-title"><b>Amanah dan ARC-USK Banda Aceh Berdayakan Milenial Untuk Pengembangan Minyak Nilam</b></h5>

                    </div> 

              </div> -->

            <!-- </div>

            <hr class="hr-text" data-content="Kabar Mahasiswa">

            <div class="row">

              <div class="col-lg-8">

                <div class="card-body">

                    <img src="<?php echo base_url('assets/img/22.png ') ?>" class="card-img-top" src="..." alt="Card image cap" style="border-top-right-radius: 30px">

                      <div class="row mx-md-n5 my-3">

                        <div class="col px-md-5">

                          <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                          <span>Admin</span>

                        </div>

                        <div class="col px-md-5">

                          <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                          <span>6 September 2022</span>

                        </div>

                      </div>

                          <h5 class="card-title mb-4"><b>Program Pertukaran Pelajar, 10 Siswa SMAN 1 Blangjerango Belajar ke SMA Lab School USK</b></h5>

                      <div class="text-justify">

                        <p class="text-muted mt-4">

                        SMA Negeri 1 Blangjerango Kabupaten Gayo Lues melaksanakan kegiatan pertukaran pelajar sister school ke SMA Laboratorium Universitas Syiah Kuala (USK), Darussalam, Banda Aceh. Kegiatan belajar di SMA Laboratorium USK itu, berlangsung selama 5 hari sejak 31 Oktober hingga 4 November 2022.Kepala SMAN 1 Blangjerango, Abu Rahman MPd dalam rilis dikirim ke media ini, Sabtu (5/11/2022), mengatakan, jumlah siswa menimba ilmu ke SMA Lab School USK sebanyak 10 orang, terdiri dari 2 orang siswa kelas X, 5 orang siswa kelas XI dan 2 orang siswa kelas XII.

                        </p>

                      </div>

                </div>

              </div>

              <div class="col-lg-4">

                <div class="card"> -->

                  <!-- <img src="<?php echo base_url('assets/img/Rectangle 13 (1).png ') ?>"   src="..." alt="Card image cap">

                      <div class="card-body">

                        <div class="row mx-md-n5 my-3">

                          <div class="col px-md-5">

                            <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                            <span>Admin</span>

                          </div>

                          <div class="col px-md-2">

                            <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                            <span>6 September 2022</span>

                          </div>

                        </div>

                          <h5 class="card-title"><b>Amanah dan ARC-USK Banda Aceh Berdayakan Milenial Untuk Pengembangan Minyak Nilam</b></h5>

                      </div> 

                </div>

                <div class="card">

                  <img src="<?php echo base_url('assets/img/Rectangle 13 (1).png ') ?>" width="" heigth=""  src="..." alt="Card image cap">

                      <div class="card-body">

                        <div class="row mx-md-n5 my-3">

                          <div class="col px-md-5">

                            <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                            <span>Admin</span>

                          </div>

                          <div class="col px-md-2">

                            <i><iconify-icon icon="fluent:rectangle-landscape-28-filled" style="color: #d9d9d9;"></iconify-icon></i> 

                            <span>6 September 2022</span>

                          </div>

                        </div>

                          <h5 class="card-title"><b>Amanah dan ARC-USK Banda Aceh Berdayakan Milenial Untuk Pengembangan Minyak Nilam</b></h5>

                      </div>  -->

                </div>
            </div>
          </div>
    </div>
</div>


  <div class="tabcontent active" id="ARC">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus repellendus consequatur culpa sapiente eum hic placeat eius. Ipsum labore error blanditiis, tenetur, debitis hic, eligendi est ad omnis odit saepe!</p>
  </div>

  <div class="tabcontent active" id="UP">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus repellendus consequatur culpa sapiente eum hic placeat eius. Ipsum labore error blanditiis, tenetur, debitis hic, eligendi est ad omnis odit saepe!</p>
  </div>

  <div class="tabcontent active" id="ADD">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus repellendus consequatur culpa sapiente eum hic placeat eius. Ipsum labore error blanditiis, tenetur, debitis hic, eligendi est ad omnis odit saepe!</p>
  </div>

  <div class="tabcontent active" id="RSP">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus repellendus consequatur culpa sapiente eum hic placeat eius. Ipsum labore error blanditiis, tenetur, debitis hic, eligendi est ad omnis odit saepe!</p>
  </div>

</div>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
  </script>