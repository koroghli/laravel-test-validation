<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div id="app">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="container">
                            <div class="navbar-header">

                              <div class="navbar-collapse collapse" >
                                <ul class="nav navbar-nav navbar-right" id="nav">
                                  <span><h1>La Pierre Rare</h1></span>
                                  <li id="a"><a href="/home">Accueil</a></li>
                                  <li><a href="/accueil">Accueil</a></li>
                                  <li><a href="/contact">Contact</a></li>
                                </ul>
                          </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>