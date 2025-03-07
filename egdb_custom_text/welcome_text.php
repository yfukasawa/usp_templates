<div class="width900">
  <br>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1>Welcome to <?php echo "$dbTitle";?> </h1>
      <h2> Easy access for multi-omics datasets for wild strawberries. </h2>
      <h3> A Multi-Omics Approach to Understanding Wild Strawberries  </h3>
      <h4 class="p_font18">
	Welcome to the distributed version of our database, designed for easy deployment in your own environment. For the latest information on our project, please visit <a href="https://c-bio.mine.utsunomiya-u.ac.jp/wild-strawberry-eng/">our official websitei</a>.
      </h4>

      <p>
	Commercially grown strawberries (2n = 56) contain multiple subgenomes passed down from their ancestral wild strawberries (2n = 14).
	Unlike cultivated varieties, which have been selectively bred, wild strawberries -- shaped by natural selection -- feature simpler genome structures while maintaining great genetic diversity.
	These qualities make them excellent resources for identifying beneficial genes and developing breeding markers.
      </p>
      <p>
	Although strawberries hold significant commercial value worldwide and rank as the second most produced vegetable in Japan after tomatoes, our understanding of their biology is still limited.
	By integrating genomics, transcriptomics, and metabolomics data, we aim to reveal how strawberries respond to pathogens, pests, and environmental stresses, as well as uncover the causes of physiological disorders.
	Our goal is to develop valuable genetic markers and establish a platform for chemical analysis, including plant hormone studies, ultimately contributing to future advancements in strawberry breeding and cultivation.
      </p>
      <div class="row">
        <img class='rounded col-xs-12 col-sm-12 col-md-12 col-lg-12' src='<?php echo "$images_path/header_img.jpg";?>' alt='img example'>
      </div>

    </div>
  </div>
  <br>
  <?php 
    if (!$rm_citation) {
      if (file_exists(realpath("$custom_text_path/db_citation.php")) && filesize(realpath("$custom_text_path/db_citation.php")) >0) {
        include_once realpath("$custom_text_path/db_citation.php");
      }
    }
  ?>

  <br>

</div>

