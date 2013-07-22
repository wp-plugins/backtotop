<?php
$opt_name=array("image_name"=>"image_name");
$opt_value=array("image_value"=>get_option($opt_name['image_name']));
if(isset($_POST['submit'])){
	$opt_value=array("image_value"=>$_POST[$opt_name['image_name']]);
	update_option($opt_name['image_name'],$opt_value['image_value']);
	?>
    <div id="message" class="updated fade">
				<p><strong>
						<?php _e('Options saved.'); ?>
					</strong></p>
			</div>
    <?php
	}

?>



<div class="wrap">
			<h2><?php _e('Back To Top Settings')?></h2>
            
           <form name="myform" action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post">
           <p>
           <label for="">Choose Any Image</label><br/><br/>
           <?php for($i=1;$i<=25;$i++):?>
     <p class="button"> <?php echo $i; ?>:  </p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="<?php echo $opt_name['image_name'];?>" value="<?php echo $i; ?>" <?php if($opt_value['image_value']==$i)
		   echo 'checked="checked"';
		    ?>> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img  style="max-width:120px;max-height:80px;" src="<?php echo plugins_url(PLUGIN_DIR_NAME);?>/img/<?php echo $i;?>.png"/><br><br>
            
            <?php endfor ?>
           </p>
           
           
           
           <p class="submit">
           <input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e("Save Changes");?>">
           </p>
           
           </form>
           <br/><br/><br/><br/><br/><br />
<br />
Conect Me <a style="color:#00C" href="http:fb.com/arkaindas">Facebook > Arkaprava Majumder</a>
</div>