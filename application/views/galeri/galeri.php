    <article>
         <div class="jumbotron">  
            <h1>Gallery</h1>
        </div>
        <div class="container-fluid pt-5">
            <div class="row"> 
                <div class="col-lg-4">
                    <form class="nosubmit">
                        <input class="nosubmit" type="search" placeholder="Search...">
                    </form>
                </div>
                <div class="col-lg-8">
                    <div class="tab">
                        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'GP')" id="menu1a">Galeri Produk</btnto>
                        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'KG')" id="menu1b">Kegiatan</btnto>
                        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'AS')" id="menu1c">Asset</btnto>  
                    </div>
                </div>
            </div>  
                <!-- <?php foreach ($getAlldataGaleri as $g) { ?>
                 
                <?php } ?> -->
                
            <div class="tabcontent" id="GP">
            <?php foreach ($getAlldataGaleri as $g) { ?>
            <hr class="hr-text" data-content="Asset">         
                <div class="row">
                    <div class="col-sm-4">
                        <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?=base_url()?>foto/<?=$g->foto_galeri;?>" alt="Card image cap">
                                <div class="overlay">
                                    <div class="textbaru"><?=$g->keterangan_galeri?>
                                    </div>
                                </div>  
                        </div>
                    </div>
                </div> 
                <?php } ?>
            </div>

             <div class="tabcontent" id="KG">
                <?php foreach ($getAlldataGaleri as $g) { ?>
                    <?php if ($g->kategori_galeri == 2) { ?>
            <hr class="hr-text" data-content="Asset">         
                <div class="row">
                    <div class="col-sm-4">
                        <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?php echo base_url('assets/img/produk6.JPG') ?>" alt="Card image cap">
                                <div class="overlay">
                                    <div class="textbaru">Lorem
                                    </div>
                                </div>  
                        </div>
                    </div>
                </div> 
                <?php } ?>
                <?php } ?>
            </div>


             <div class="tabcontent" id="AS">
                <?php foreach ($getAlldataGaleri as $g) { ?>
                     <?php if ($g->kategori_galeri == 3) { ?>
            <hr class="hr-text" data-content="Asset">         
                <div class="row">
                    <div class="col-sm-4">
                        <div class="containerbarunya">
                            <img class="card-img-top picbis" src="<?php echo base_url('assets/img/produk6.JPG') ?>" alt="Card image cap">
                                <div class="overlay">
                                    <div class="textbaru">Lorem
                                    </div>
                                </div>  
                        </div>
                    </div>
                </div> 
                <?php } ?>
                <?php } ?>
            </div>
            
            <div class="clearfix p-5 m-5"></div>
        </div>




            <!-- The Modal -->
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01"> 
            </div>
            <div class="clearfix p-5"></div>
    </article>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
modal.style.display = "none";
}
</script>

<script>
   $(document).ready(function() {
        $("#menu1a").addClass("active");
        document.getElementById("GP").style.display = "block";
    });
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      var a = ['menu1a','menu1b','menu1c'];
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