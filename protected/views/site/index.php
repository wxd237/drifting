 <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-12">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          
          	
          	<?php  for($i=0;$i<5;$i++) {  
          			if($i%3==0) echo '<div class="row">';
          			$book=$books[$i];
          	 ?>
           
  			<div class="col-6 col-sm-6 col-lg-4">
              <h4><?php echo $book->bookname;	?></h4>
                <?php echo CHtml::Image(Yii::app()->baseUrl.$book->photo,null,array('style'=>'width:200px;height:200px;'));?>
              <p><a class="btn btn-default" href="<?php echo $this->createUrl("/books/view&id=".$book->bookid);?>" role="button">查看详细 &raquo;</a></p>
            </div><!--/span-->

            <?php 
            	if($i%3==2) echo '</div>';
            } ?>

          </div><!--/row-->
        </div><!--/span-->
        <!---

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/span-->

        --->
      </div><!--/row-->
