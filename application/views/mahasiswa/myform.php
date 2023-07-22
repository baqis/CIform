<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">
    ::selection {
        background-color: #E13300;
        color: white;
    }

    ::-moz-selection {
        background-color: #E13300;
        color: white;
    }

    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }
    </style>
</head>

<body>

    <?php echo validation_errors(); ?>

    <?php echo form_open('mahasiswa/inputForm'); ?>
    <!-- text, password, radio, checkbox, dropdown/select dan textarea -->
    <h3>Username</h3>
    <?php $data = array(
        'name'          => 'username',
        'id'            => 'username',
        'value'         => 'name',
        'maxlength'     => '70',
        'size'          => '50',
        'style'         => 'width:30%');
    echo form_input($data); ?>

    <h3>Password</h3>
    <?php $data = array(
        'name'          => 'password',
        'id'            => 'password',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '20',
        'style'         => 'width:30%');
    echo form_input($data); ?>

    <h3>Password Confirm</h3>
    <?php $data = array(
        'name'          => 'passconf',
        'id'            => 'passconf',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '20',
        'style'         => 'width:30%');
    echo form_input($data); ?>

    <h3>Email Address</h3>
    <?php $data = array(
        'name'          => 'email',
        'id'            => 'email',
        'value'         => '',
        'maxlength'     => '50',
        'size'          => '20',
        'style'         => 'width:30%');
    echo form_input($data); ?>

    <br>
    <h3>Jenis Kelamin</h3>
    <?php 
    echo form_radio('kelamin', 'accept', 'lk'); echo "Laki-laki <br>"; 
    echo form_radio('kelamin', 'accept', 'pr'); echo "Perempuan";
    ?>

    <br>
    <h3>Mahasiswa Aktif</h3>
    <?php echo form_checkbox('aktif', 'accept', TRUE); 
    echo "Aktif"?>

    <h3>Program Studi</h3>
    <?php $options = array(
        'd3ti'      => 'D3 Teknik Informatika',
        's1ti'      => 'S1 Teknik Informatika',
        'd3tm'      => 'D3 Teknik Mesin',
        's1tm'      => 'S1 Teknik Mesin');       
    $prodi = array('d3ti', 'd3tm');
    echo form_dropdown('prodi', $options, 'd3ti'); ?>

    <h3>Alamat</h3>
    <?php 
    $data = array(
        'name'          => 'alamat',
        'id'            => 'alamat',
        'set_value'         => 'alamat',
        // 'col'          => '5',
        // 'row'          => '6',
        'style'         => 'width:30%');
    echo form_textarea($data); ?>

    <br>
    <?php echo form_submit('submit', 'Submit'); ?>
    <!-- <div><input type="submit" value="Submit" /></div> -->


    <!-- Re-populating the form
    <h5>Username</h5>
    <input type="text" name="username" value="<?php //echo set_value('username'); ?>" size="50" />     -->
    </form>

</body>

</html>