<div class="jumbotron">  
            <h1>Business Unit</h1>
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

        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'SUB')" id="defaultOpen">Semua Unit Bisnis</btnto>

        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'BA')">Bisnis Akademik</btnto>

        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'BNA')">Bisnis Non - Akademik</btnto>  

        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'TK')">Terbuka Kerjasama</btnto>

      </div>

    </div>

  </div>
    <?php 
        foreach ($getAllBisnis as $g) {
            
        }
    ?>
    <!-- <div class="tab">
        <buttonto type="button" class="buttonto buttonto1 active" onclick="openCity(event, 'SUB')">Semua Unit Bisnis</buttonto>
        <buttonto type="button" class="buttonto buttonto1" onclick="openCity(event, 'BA')">Bisnis Akademik</buttonto>
        <buttonto type="button" class="buttonto buttonto1" onclick="openCity(event, 'BNA')">Bisnis Non - Akademik</buttonto> 
        <buttonto type="button" class="buttonto buttonto1" onclick="openCity(event, 'TK')">Terbuka Kerjasama</buttonto>
    </div>  -->
        <div class="tabcontent" id="SUB">
        <!-- isi konten  -->
            <div class="card-deck">
                <?php 
                foreach ($getAllBisnis as $g) { ?>
            
                       
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top picbis" src="<?=base_url()?>foto/<?=$g->foto_unit;?>"  alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru"><?=$g->detail?> 
                                </div>
                            </div>  
                    </div>
                    <!-- href="<?php echo site_url('bisnis/detailunittiga');?>" -->
                    <div class="card-body"> 
                        <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a ><?=$g->nama_unit?></a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8"><?=$g->jenis_usaha?></dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8"><?=$g->lokasi?></dd>
                        </dl>
                    </div> 
                </div>
              <?php } ?>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/25.JPG') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">Apotek Pendidikan Universitas Syiah Kuala merupakan unit bisnis yang diremdikan pada 15 Juni 2022 dan dikelola di bawah Badan Pengembangan Bisnis dan Usaha (BPBU) Universitas Syiah Kuala Banda Aceh
                                </div>
                            </div> 
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunit');?>">Apotek Pendidikan</a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Kesehatan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">alan Tgk. Syech Abdur Rauf No.1, Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/26.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/27.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>  
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/
                        .JPG') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">
UPT Bahasa is a technical implementing unit at Universitas Syiah Kuala, a non-structural institution entrusted with assisting the university’s work program through the provision of language teaching and testing services.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunitempat');?>">UPT Bahasa </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Pendidikan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/29.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div> 
                
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/40.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/33.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Rumah sakit hewan pendidikan Prof. Dr. Noerjanto Fakultas Kedokteran Hewan Universitas Syiah Kuala didirikan berdasarkan Surat Keputusan Rektor Universitas Syiah Kuala Nomor. 2317 Tahun 2013 tentang Pembentukan Rumah Sakit Hewan Prof. Dr. Noerjanto Pada Fakultas Kedokteran Hewan Universitas Syiah Kuala. 
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunitdua');?>">Rumah Sakit Hewan </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Kesehataan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Jl. Tgk. Hasan Krueng Kalee No.4, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/34.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Klinik Pratama dr. T. Makmur Mohd. Zein adalah salah satu Klinik Pratama Pemerintah dibawah naungan Universitas Syiah Kuala di Banda Aceh. Bertujuan untuk memberikan pelayanan Kesehatan yang bermutu dan berkesinambungan yang berorientasi pada keselamatan dan kepuasan pasien.
                                </div>
                            </div>  
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunitlima');?>">Klinik Pratama </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Kesehatan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/35.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
            </div>

            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/36.jpg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top picbiss" src="<?php echo base_url('assets/img/39.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>  
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                
                <div class="card">
                    <div class="containerbarunya">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/40.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>    -->
                    </div>
                    <div class="card-body"> 
                    <!-- <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl> -->
                    </div> 
                </div>
            </div> 
        </div>
      
        <div id="BA" class="tabcontent">
        <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/29.jpg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top picbiss" src="<?php echo base_url('assets/img/36.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>  
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/28.JPG') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">
UPT Bahasa is a technical implementing unit at Universitas Syiah Kuala, a non-structural institution entrusted with assisting the university’s work program through the provision of language teaching and testing services.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunitempat');?>">UPT Bahasa </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Pendidikan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/35.jpg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/35.jpg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>    -->
                    </div>
                    <div class="card-body"> 
                    <!-- <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl> -->
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/35.jpg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>    -->
                    </div>
                    <div class="card-body"> 
                    <!-- <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl> -->
                    </div> 
                </div>
            </div>
        </div>

        <div id="BNA" class="tabcontent">
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top picbis" src="<?php echo base_url('assets/img/24.jpg') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">Gedung AAC (Academic Activity Center) Prof. Dr. Dayan Dawood, MA yang selanjutnya disebut Gedung AAC dibangun pada tahun 2000 yang merupakan hibah dari Pemerintah Jepang. Tujuan utama pembangunan gedung ini adalah untuk mendukung berbagai kegiatan akademik dan administrasi yang dilaksanakan oleh pihak Rektorat Universitas Syiah Kuala. 
                                </div>
                            </div>  
                    </div>
                    <div class="card-body"> 
                        <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunittiga');?>">Academic Activity Center </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Pendidikan</dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/49.jpeg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/23.jpg') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
            </div>
            <div class="card-deck">
            <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/25.JPG') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">Apotek Pendidikan Universitas Syiah Kuala merupakan unit bisnis yang diremdikan pada 15 Juni 2022 dan dikelola di bawah Badan Pengembangan Bisnis dan Usaha (BPBU) Universitas Syiah Kuala Banda Aceh
                                </div>
                            </div> 
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunit');?>">Apotek Pendidikan</a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Kesehatan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">alan Tgk. Syech Abdur Rauf No.1, Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/33.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Rumah sakit hewan pendidikan Prof. Dr. Noerjanto Fakultas Kedokteran Hewan Universitas Syiah Kuala didirikan berdasarkan Surat Keputusan Rektor Universitas Syiah Kuala Nomor. 2317 Tahun 2013 tentang Pembentukan Rumah Sakit Hewan Prof. Dr. Noerjanto Pada Fakultas Kedokteran Hewan Universitas Syiah Kuala. 
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunitdua');?>">Rumah Sakit Hewan </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Kesehataan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Jl. Tgk. Hasan Krueng Kalee No.4, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
                
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/34.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Klinik Pratama dr. T. Makmur Mohd. Zein adalah salah satu Klinik Pratama Pemerintah dibawah naungan Universitas Syiah Kuala di Banda Aceh. Bertujuan untuk memberikan pelayanan Kesehatan yang bermutu dan berkesinambungan yang berorientasi pada keselamatan dan kepuasan pasien.
                                </div>
                            </div>  
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8"><a href="<?php echo site_url('bisnis/detailunitlima');?>">Klinik Pratama </a></dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Kesehatan </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh</dd>
                        </dl>
                    </div> 
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/40.JPG') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top picbiss" src="<?php echo base_url('assets/img/39.jpg') ?>"  alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div> 
                
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/26.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="containerbarunya">
                        <img class="card-img-top" src="<?php echo base_url('assets/img/27.JPG') ?>" alt="Card image cap">
                        
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>   
                    </div>
                    <div class="card-body"> 
                    <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl>
                    </div> 
                </div>
                <div class="card">
                    <div class="containerbarunya">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/29.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>    -->
                    </div>
                    <div class="card-body"> 
                    <!-- <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl> -->
                    </div> 
                </div> 
                
                <div class="card">
                    <div class="containerbarunya">
                        <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/40.JPG') ?>" alt="Card image cap">
                         
                            <div class="overlay">
                                <div class="textbaru">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Faucibus lectus massa amet interdum cras justo, purus. 
                                    Nunc magna massa quam erat tellus nec urna. 
                                    Sollicitudin sit quis varius suscipit pharetra tellus mauris, 
                                    scelerisque. Ultrices condimentum potenti sed malesuada lectus eu.
                                </div>
                            </div>    -->
                    </div>
                    <div class="card-body"> 
                    <!-- <dl class="row">
                            <dt class="col-md-4">Unit Bisnis</dt>
                            <dd class="col-md-8">Lorem ipsum </dd>
                            <dt class="col-md-4">Jenis Usaha</dt>
                            <dd class="col-md-8">Lorem ipsum dolor </dd>
                            <dt class="col-md-4">Lokasi</dt>
                            <dd class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit</dd>
                        </dl> -->
                    </div> 
                </div>
            </div>
        </div>
        
        <div id="TK" class="tabcontent mt-5">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/55.png ') ?>" class="card-img-top fotokerja" alt="...">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-md-3">Unit Bisnis</dt>
                                    <dd class="col-md-9">Ruko 2 Lantai</dd>
                                    <dt class="col-md-3">Spesifikasi</dt>
                                    <dd class="col-md-9">2 Lantai pinggir jalan kota</dd>
                                    <dt class="col-md-3">Lokasi</dt>
                                    <dd class="col-md-9">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24352</dd>
                                </dl>
                                <button type="button" class="btn btnbarunya"><img src="<?php echo base_url('assets/img/wa2.png ') ?>"> Hubungi Kami</button> 
                            </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/58.png ') ?>" class="card-img-top fotokerja" alt="...">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-md-3">Unit Bisnis</dt>
                                    <dd class="col-md-9">Tanah Seluas 12 Hektar</dd>
                                    <dt class="col-md-3">Spesifikasi</dt>
                                    <dd class="col-md-9">12 Hektar jauh dari pemukiman</dd>
                                    <dt class="col-md-3">Lokasi</dt>
                                    <dd class="col-md-9">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24352</dd>
                                </dl>
                                <button type="button" class="btn btnbarunya"><img src="<?php echo base_url('assets/img/wa2.png ') ?>"> Hubungi Kami</button> 
                            </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/55.png ') ?>" class="card-img-top fotokerja" alt="...">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-md-3">Unit Bisnis</dt>
                                    <dd class="col-md-9">Ruko 2 Lantai</dd>
                                    <dt class="col-md-3">Spesifikasi</dt>
                                    <dd class="col-md-9">2 Lantai pinggir jalan kota</dd>
                                    <dt class="col-md-3">Lokasi</dt>
                                    <dd class="col-md-9">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24352</dd>
                                </dl>
                            <button type="button" class="btn btnbarunya"><img src="<?php echo base_url('assets/img/wa2.png ') ?>"> Hubungi Kami</button> 
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/58.png ') ?>" class="card-img-top fotokerja" alt="...">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-md-3">Unit Bisnis</dt>
                                    <dd class="col-md-9">Tanah Seluas 12 Hektar</dd>
                                    <dt class="col-md-3">Spesifikasi</dt>
                                    <dd class="col-md-9">12 Hektar jauh dari pemukiman</dd>
                                    <dt class="col-md-3">Lokasi</dt>
                                    <dd class="col-md-9">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24352</dd>
                                </dl>
                                <button type="button" class="btn btnbarunya"><img src="<?php echo base_url('assets/img/wa2.png ') ?>"> Hubungi Kami</button> 
                            </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/55.png ') ?>" class="card-img-top fotokerja" alt="...">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-md-3">Unit Bisnis</dt>
                                    <dd class="col-md-9">Ruko 2 Lantai</dd>
                                    <dt class="col-md-3">Spesifikasi</dt>
                                    <dd class="col-md-9">2 Lantai pinggir jalan kota</dd>
                                    <dt class="col-md-3">Lokasi
                                    </dt>
                                    <dd class="col-md-9">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24352</dd>
                                </dl>
                                <button type="button" class="btn btnbarunya"><img src="<?php echo base_url('assets/img/wa2.png ') ?>"> Hubungi Kami</button> 
                            </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/58.png ') ?>" class="card-img-top fotokerja" alt="...">
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-md-3">Unit Bisnis</dt>
                                    <dd class="col-md-9">Tanah Seluas 12 Hektar</dd>
                                    <dt class="col-md-3">Spesifikasi</dt>
                                    <dd class="col-md-9">12 Hektar jauh dari pemukiman</dd>
                                    <dt class="col-md-3">Lokasi</dt>
                                    <dd class="col-md-9">Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 24352</dd>
                                </dl>
                            <button type="button" class="btn btnbarunya"><img src="<?php echo base_url('assets/img/wa2.png ') ?>"> Hubungi Kami</button> 
                            </div>
                    </div>
                </div>
            </div>
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