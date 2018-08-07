<h1>Projects</h1>

<p class="bg-success">
    
    <?php if($this->session->flashdata('project_created')): ?>
    
    <?php echo $this->session->flashdata('project_created'); ?>
    
    <?php endif; ?>
    
    
    <?php if($this->session->flashdata('project_updated')): ?>
    
    <?php echo $this->session->flashdata('project_updated'); ?>
    
    <?php endif; ?> 
    
    
    <?php if($this->session->flashdata('project_deleted')): ?>
    
    <?php echo $this->session->flashdata('project_deleted'); ?>
    
    <?php endif; ?> 
    
    
    <?php if($this->session->flashdata('task_updated')): ?>
    
    <?php echo $this->session->flashdata('task_updated'); ?>
    
    <?php endif; ?> 
    
        
</p>

<a class="btn btn-primary pull-right" href="<?php echo base_url();?>projects/create">Create Project</a>

<table class="table table-hover">
    
    <thead>
        <tr>
            <th>
            Project Name
            </th>
            <th>
            Project Body
            </th> 
        </tr>        
    </thead>
    
    <tbody>
        
        <?php foreach($projects as $project): ?>
        
        <tr>
            
        <?php echo "<td><a href='". base_url()."projects/display/".$project->id."'>".$project->project_name."</a></td>"; ?>
        <?php echo "<td>".$project->project_body."</td>"; ?>
            
            <td><a class="btn btn-danger" href="<?php echo base_url();?>projects/delete/<?php echo $project->id; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
        
        </tr>
        
        <?php endforeach; ?>
        
        
    </tbody>
    
    
</table>

