<h2>Edit Project</h2>

<?php $attributes= array('id'=>'create_form','class'=>'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('projects/edit/'.$project_data->id.'', $attributes);?>

<div class="form_group">
    
    <?php echo form_label('Project name'); ?>
    
    <?php 
    $data= array(
        
        'class' => 'form-control',
        'name' => 'project_name',
        'value' => $project_data->project_name
    );
    
    ?>
       
    <?php echo form_input($data); ?><br>
    
<div class="form_group">
    
    <?php echo form_label('Project Description'); ?>
    
    <?php 
    $data= array(
        
        'class' => 'form-control',
        'name' => 'project_body',
        'value' => $project_data->project_body
        
    );
    
    ?>
       
    <?php echo form_textarea($data); ?><br>
    
<div class="form_group">
        
    <?php 
    $data= array(
        
        'class' => 'btn btn-primary',
        'name' => 'submit',
        'value' => 'Update'
    );
    
    ?>
       
    <?php echo form_submit($data); ?>
    
</div>


<?php echo form_close();?>
