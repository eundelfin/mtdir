<html>
    <head>
        <title>Insert Data Into Database Using CodeIgniter Form</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    </head>
    <body>

<div id="container">
<?php echo form_open('insert_ctrl'); ?>
<h1>Register</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php echo form_label('Mountain Name :'); ?> <?php echo form_error('dname'); ?><br />
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

<?php echo form_label('Location :'); ?> <?php echo form_error('dlocation'); ?><br />
<?php echo form_input(array('id' => 'dlocation', 'name' => 'dlocation')); ?><br />

<?php echo form_label('Coordinates :'); ?> <?php echo form_error('dcoordinates'); ?><br />
<?php echo form_input(array('id' => 'dcoordinates', 'name' => 'dcoordinates')); ?><br />

<?php echo form_label('Region :'); ?> <?php echo form_error('dregion'); ?><br />
<?php echo form_input(array('id' => 'dregion', 'name' => 'dregion')); ?><br />

<?php echo form_label('Elevation :'); ?> <?php echo form_error('delevation'); ?><br />
<?php echo form_input(array('id' => 'delevation', 'name' => 'delevation')); ?><br />

<?php echo form_label('Difficulty Scale :'); ?> <?php echo form_error('ddificultyscale'); ?><br />
<?php echo form_input(array('id' => 'ddificutlyscale', 'name' => 'ddificultyscale', 'placeholder' => 'Minor or Major')); ?><br />

<?php echo form_label('Difficulty Class :'); ?> <?php echo form_error('ddificultyclass'); ?><br />
<?php echo form_input(array('id' => 'ddificultyclass', 'name' => 'ddificultyclass')); ?><br />

<?php echo form_label('Trail Class :'); ?> <?php echo form_error('dtrailclass'); ?><br />
<?php echo form_input(array('id' => 'dtrailclass', 'name' => 'dtrailclass')); ?><br />

<?php echo form_label('Hours to Summit :'); ?> <?php echo form_error('dhourstosummit'); ?><br />
<?php echo form_input(array('id' => 'dhourstosummit', 'name' => 'dhourstosummit')); ?><br />

<?php echo form_label('Day(s) Required :'); ?> <?php echo form_error('ddaysrequired'); ?><br />
<?php echo form_input(array('id' => 'ddaysrequired', 'name' => 'ddaysrequired')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

            </div>
        </div>
    </body>
</html>
