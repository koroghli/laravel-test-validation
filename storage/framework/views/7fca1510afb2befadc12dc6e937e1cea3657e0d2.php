<?php $__env->startSection('page','contact'); ?>
<?php $__env->startSection('title','contact'); ?>
<?php $__env->startSection('content'); ?>


  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>Contactez-Nous</h1>
          <?php if(isset($validation)): ?>
           <h2><?php echo e($validation); ?></h2>
         <?php else: ?>
          <?php echo e(Form::open(['url' => '/contact/email', "id" => "form"])); ?>

          <div class="form-group">
            <?php echo e(Form::label('name', 'Nom : ')); ?><br>
            <?php echo e(Form::text('name'),['class' => 'form-control']); ?><br>
            <?php echo e(Form::label('objet', 'Objet :')); ?><br>
            <?php echo e(Form::text('objet'),['class' => 'form-control']); ?><br>
            <?php echo e(Form::label('content', 'message :')); ?><br>
            <?php echo e(Form::textarea('content',null,array("rows" => 4)),['class' => 'form-control']); ?><br>
            <?php echo e(Form::submit('Envoyer'),['class' => 'btn btn-successes']); ?>

          </div>

          <?php echo e(Form::close()); ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-offset-10 col-md-1">
        <button type="button" name="button"><a href="/home">Accueil</a></button>
      </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>