<article>
<div class="gallery">
    <figure class="gallery__item gallery__item--1">
        <img id="myImg" src="<?php echo base_url('assets/img/unsplash_-VRpITPhqLU (1).png') ?>" alt="Gallery image 1" class="gallery__img">
    </figure>
    <figure class="gallery__item gallery__item--2">
        <img src="<?php echo base_url('assets/img/unsplash_NbtIDoFKGO8 (1).png') ?>" alt="Gallery image 2" class="gallery__img">
    </figure>
    <figure class="gallery__item gallery__item--3">
        <img src="<?php echo base_url('assets/img/unsplash_6q5QG8iIgRo (1).png') ?>" alt="Gallery image 3" class="gallery__img">
    </figure>
    <figure class="gallery__item gallery__item--4">
        <img src="<?php echo base_url('assets/img/unsplash_A4Ax1ApccfA (1).png') ?>" alt="Gallery image 4" class="gallery__img">
    </figure>
    <figure class="gallery__item gallery__item--5">
        <img src="<?php echo base_url('assets/img/unsplash_KdeqA3aTnBY (1).png') ?>" alt="Gallery image 5" class="gallery__img">
    </figure>
    <figure class="gallery__item gallery__item--6">
        <img src="<?php echo base_url('assets/img/unsplash_Ns8trMR4Om8 (1).png') ?>" alt="Gallery image 6" class="gallery__img">
    </figure>
     <figure class="gallery__item gallery__item--7">
        <img src="<?php echo base_url('assets/img/unsplash_goRh6TVJkHo (1).png') ?>" alt="Gallery image 7" class="gallery__img">
    </figure>
    <figure class="gallery__item gallery__item--8">
        <img src="<?php echo base_url('assets/img/unsplash_8GVsvPuiLUA (1).png') ?>" alt="Gallery image 8" class="gallery__img">
    </figure> 
    <figure class="gallery__item gallery__item--9">
        <img src="<?php echo base_url('assets/img/unsplash_8CqDvPuo_kI (1).png') ?>" alt="Gallery image 9" class="gallery__img">
    </figure>
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


<!-- 


.gallery {
  display: grid;
  grid-template-columns: repeat(8);
  grid-template-rows: repeat(10);
  grid-gap: 0; 
}

.gallery__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block; 
}

.gallery__item--1 {
  grid-column-start: 1;
  grid-column-end: 8;
  grid-row-start: 1;
  grid-row-end: 4;

 
}
.gallery__item--2 {
    grid-column-start: 4;
    grid-column-end: 7;
    grid-row-start: 1;
    grid-row-end: 4;
  
    /** Alternative Syntax **/
    /* grid-column: 3 / span 2;  */
    /* grid-row: 1 / span 2; */
  }
  
  .gallery__item--3 {
    grid-column-start: 7;
    grid-column-end: 10;
    grid-row-start: 1;
    grid-row-end: 4;
  
    /** Alternative Syntax **/
    /* grid-column: 5 / span 4;
    grid-row: 1 / span 5; */
  }
  
  .gallery__item--4 {
    grid-column-start: 1;
    grid-column-end: 4;
    grid-row-start: 4;
    grid-row-end: 7;
  
    /** Alternative Syntax **/
    /* grid-column: 1 / span 4;  */
    /* grid-row: 3 / span 3; */
  }
  
  .gallery__item--5 {
    grid-column-start: 4;
    grid-column-end: 7;
    grid-row-start: 4;
    grid-row-end: 7;
  
    /** Alternative Syntax **/
    /* grid-column: 1 / span 4; */
    /* grid-row: 6 / span 3; */
  }
  
  .gallery__item--6 {
    grid-column-start: 7;
    grid-column-end: 10;
    grid-row-start: 4;
    grid-row-end: 13;
  
    /** Alternative Syntax **/
    /* grid-column: 5 / span 4; */
    /* grid-row: 6 / span 3; */
  }
  .gallery__item--7 {
    grid-column-start: 1;
    grid-column-end: 4;
    grid-row-start: 7;
    grid-row-end: 13;
  }
  .gallery__item--8 {
    grid-column-start: 4;
    grid-column-end: 7;
    grid-row-start: 7;
    grid-row-end: 10;
  }
  .gallery__item--9 {
    grid-column-start: 4;
    grid-column-end: 7;
    grid-row-start: 10;
    grid-row-end: 13;
  }
   -->