<article>
    <div class="container-fluid">
        <div class="card pt-5">
            <img id="myImg" class="card-img" src="<?php echo base_url('assets/img/46.png') ?>" alt="Card image">
        </div>

        <div class="row">
            <div class="col-sm-8"> 
                <div class="card">
                     <img class="card-img" src="<?php echo base_url('assets/img/48.png') ?>" height="495px" alt="Card image">
                </div> 
            </div>
            <div class="col-sm-4"> 
                <div class="card">
                     <img class="card-img" src="<?php echo base_url('assets/img/47.png') ?>" alt="Card image">
                </div> 
            </div>
        </div>

        <hr class="hr-text" data-content="Galeri Produk">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
        </div>

        <hr class="hr-text" data-content="Kegiatan">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
        </div>

        <hr class="hr-text" data-content="Asset">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
        </div>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
            </div>
            <div class="card">
                <img class="card-img-top" src="<?php echo base_url('assets/img/31.png') ?>" alt="Card image cap">
                
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