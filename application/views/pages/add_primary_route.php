<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.chained.min.js"></script>

<div class="row col-md-offset-2">
	<?php if(isset($msg)){ ?>
		<div class="alert alert-info"><?php echo $msg;?>
</div>
	<?php
	}
	?>

	<?php echo form_open('register/add_primary_route',array('role'=>'form','class'=>'form-horizontal','id'=>'create_user')); ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Add Primary Route</h4>
		</div>
		<div class="panel-body">
				<label>Primary Route</label>	
                <input type="text" class="form-control" name="primary_route" id="primary_route" style="width: 200px;" /> 

            </div>
            <div class="panel-footer">
                    <button class="btn btn-sm btn-primary" type="submit" value="submit">Submit</button>
            </div>
        </div>	
        </form>
    </div>

