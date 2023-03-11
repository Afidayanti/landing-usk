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

                        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'GP')" id="defaultOpen">Galeri Produk</btnto>

                        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'KG')">Kegiatan</btnto>

                        <btnto type="button" class="btnto buttwo1" onclick="openCity(event, 'AS')">Asset</btnto>  

                    </div>

                </div>
            </div>
    
        <div class="card pt-5">
            <img class="card-img" src="<?php echo base_url('assets/img/produk6.JPG') ?>" alt="Card image"> 
            
            <!--  id="myImg" -->
        </div>

        <div class="row">
            <div class="col-sm-8"> 
                <div class="card">
                     <img class="card-img gamgaleri" src="<?php echo base_url('assets/img/produk2.JPG') ?>" alt="Card image">
                </div> 
            </div>
            <div class="col-sm-4"> 
                <div class="card">
                     <img class="card-img gamgaleri" src="<?php echo base_url('assets/img/produk5.JPG') ?>"   style="object-fit: cover;" alt="Card image">
                </div> 
            </div>
        </div>

        <hr class="hr-text" data-content="Galeri Produk">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk1.JPG') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk3.JPG') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk9.JPG') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk10.JPG') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk5.JPG') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk11.JPG') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk8.JPG') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/produk7.JPG') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/produk.JPG') ?>" alt="Card image cap">
                 -->
            </div>
        </div>

        <hr class="hr-text" data-content="Kegiatan">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/kegiatan1.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/kegiatan2.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/kegiatan3.jpg') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/kegiatan4.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                 -->
            </div>
            <div class="card">
                <!-- <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                 -->
            </div>
        </div>

        <hr class="hr-text" data-content="Asset">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top aset" src="<?php echo base_url('assets/img/asetsabang.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top aset" src="<?php echo base_url('assets/img/asetlamte.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top aset" src="<?php echo base_url('assets/img/asetlam.jpg') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top aset" src="<?php echo base_url('assets/img/asetgajah.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top aset" src="<?php echo base_url('assets/img/asetule.jpg') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top aset" src="<?php echo base_url('assets/img/asetule2.jpg') ?>" alt="Card image cap">
                
            </div>
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