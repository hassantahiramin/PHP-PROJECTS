<?php
   require_once('inc/autoload.php');
   $page = 'competitor-reference';
   include('header.php');
 ?>
    <div class="maincontainer left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-12 main-content">
                    <!-- List products -->
                  <?php $Competitor->show_results(); ?>
                  <!-- ./ List Products -->
                  <!-- Modal -->
                  <div class='modal fade' id='SuccessMessage' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-md'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'><i class='fa fa-times'></i></button>
                          <h4 class='modal-title' id='mySmallModalLabel'><i class='fa fa-shopping-cart'></i> Enquiry Cart</h4>
                        </div>
                        <div class='modal-body'>
                          <b>You Have Successfully Added Item To Enquiry Cart</b>
                        </div>
                        <div class='modal-footer'>
                          <button type='submit' class='button button-continue-shop' data-dismiss='modal'>CONTINUE SHOPPING</button>
                          <a href='cart' class='button button-view-cart'>VIEW SHOPPING CART</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
 <?php include('footer.php'); ?>
