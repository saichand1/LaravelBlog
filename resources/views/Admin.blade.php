@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                 <a href ="<?php echo 'blogpost' ?>"class="panel-heading"> Blog Post</a>
                 <a href ="<?php echo 'admincomment' ?>"class="panel-heading"> Comment</a>
                 <a href ="<?php echo 'cms' ?>"class="panel-heading"> CMS</a>
                 <a href ="<?php echo '' ?>"class="panel-heading"> About Us</a>


                <div class="panel-body">
                    welcome Admin

                    <table border="2" align="center" class="table table-border table-hover">
                    <p style="color:red"><?php echo Session::get('message');?></p>

                    
                    <thead>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Publish</th>
                      <th>Action</th>
                     
                </thead>
                <tbody>
            <?php 
                foreach($data as $row){
            ?>

            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->title ?></td>
                <td><?php echo $row->content?></td>
                <td><?php echo $row->published_at?></td>
                
            <td>
                <a href="<?php echo 'edit/'.$row->id?>">Edit</a> |
                <a href="<?php echo 'delete/' .$row->id?>">Delete</a>
               
            </td>
            </tr>
            <?php }?>   
    
            <?php echo $data->render(); ?>
    
            </tbody>
            </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
