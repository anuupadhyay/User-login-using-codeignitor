<div class="col-xs-9">

<h1><?php echo $task->task_name; ?></h1>

<p>Project name: <?php echo $project_name; ?></p>

<p>Created: <?php echo $task->date_created ;?></p>

<p>Due on: <?php echo $task->due_date;?></p>

<h4>Description</h4>

<p class="task-description">

<?php echo $task->task_body; ?>
    
</p>

</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
    
    <h4>Task Actions</h4>
    
    <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a></li>
    <li class="list-group-item"><a href="<?php echo base_url();?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></li>
    <li class="list-group-item"><a href="<?php echo base_url();?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark Incomplete</a></li>
  .   
</ul>
</div>
