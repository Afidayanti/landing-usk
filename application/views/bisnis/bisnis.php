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
                <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'SUB')" id="menu0">Semua Unit Bisnis</btnto>
                <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'BA')" id="menu1">Bisnis Akademik</btnto>
                <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'BNA')" id="menu2">Bisnis Non - Akademik</btnto>
                <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'TK')" id="menu3">Terbuka Kerjasama</btnto> 
            </div>
        </div>
    </div> 
    <div class="tabcontent" id="SUB">
        <!-- isi konten  -->
        <div class="container-fluid pt-5">
            <div class="row">
                <?php 
                foreach ($getAllBisnis as $g) { ?>
            
                <div class="col-sm-4">
                    <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?=base_url()?>foto/<?=$g->foto_unit;?>"  alt="Card image cap">
                                <!-- <div class="overlay">
                                    <div class="textbaru"><?=$g->detail?> 
                                    </div>
                                </div>   -->
                    </div>
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
        </div> 
    </div>
    <div class="tabcontent" id="BA">
        <!-- isi konten  -->
        <div class="container-fluid pt-5">
            <div class="row">
                <?php 
                foreach ($getAllBisnis as $g) { ?>
                <?php if ($g->kategori == 1) { ?>
                  
               
                <div class="col-sm-4">
                    <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?=base_url()?>foto/<?=$g->foto_unit;?>"  alt="Card image cap">
                                <!-- <div class="overlay">
                                    <div class="textbaru"><?=$g->detail?> 
                                    </div>
                                </div>   -->
                    </div>
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
                <?php } ?>
            </div>
        </div> 
    </div>
    
    <div class="tabcontent" id="BNA">
        <!-- isi konten  -->
        <div class="container-fluid pt-5">
            <div class="row">
                <?php 
                foreach ($getAllBisnis as $g) { ?>
                <?php if ($g->kategori == 2) { ?>
                  
               
                <div class="col-sm-4">
                    <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?=base_url()?>foto/<?=$g->foto_unit;?>"  alt="Card image cap">
                                <!-- <div class="overlay">
                                    <div class="textbaru"><?=$g->detail?> 
                                    </div>
                                </div>   -->
                    </div>
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
                <?php } ?>
            </div>
        </div> 
    </div>
    <div class="tabcontent" id="TK">
        <!-- isi konten  -->
        <div class="container-fluid pt-5">
            <div class="row">
                <?php 
                foreach ($getAllBisnis as $g) { ?>
                <?php if ($g->kategori == 3) { ?>
                  
               
                <div class="col-sm-4">
                    <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?=base_url()?>foto/<?=$g->foto_unit;?>"  alt="Card image cap">
                                <!-- <div class="overlay">
                                    <div class="textbaru"><?=$g->detail?> 
                                    </div>
                                </div>   -->
                    </div>
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
                <?php } ?>
            </div>
        </div> 
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#menu0").addClass("active");
        document.getElementById("SUB").style.display = "block";
    });
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      var a = ['menu0','menu1','menu2','menu3'];
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      a.forEach((el,id)=>{
        if(evt.target.id == el)
        {
            $("#"+el).addClass("active");
        }
        else
        {
            $("#"+el).removeClass("active");
        }
      })
    } 
</script>