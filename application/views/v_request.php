<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Learn IT Request Application</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://static1.squarespace.com/static/59fb8ebd0abd045aa311627a/t/5a217ced71c10bb08041ed9b/favicon.ico">
    <!-- Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link href="<?= base_url() ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css"/>
    <link href="<?= base_url() ?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
<!--    <link href="--><?//= base_url() ?><!--assets/css/minified/components.min.css" rel="stylesheet" type="text/css">-->
    <link href="<?= base_url() ?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/loaders/pace.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/loaders/blockui.min.js"></script>

    <script src="<?= base_url() ?>assets/js/jquery.steps.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/forms/styling/switch.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/core/libraries/jquery_ui/touch.min.js"></script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/core/app.js"></script>
</head>

<body onload='$(".se-pre-con").fadeOut("slow");' style="background-image: url('<?=base_url()?>assets/images/signup-bg.jpg');background-size: cover;    background-attachment: fixed; ">
<div class="se-pre-con"></div>
<div class="page-content"  >

    <div class="form-v1-content">
<!--        <div style="background: #0F192A;position: absolute;width: 100%;height: auto"></div>-->
        <div id="cover-spin"></div>
            <div class="wizard-form">
            <form class="form-register" action="#"  id="save_request" method="post">
                <div id="form-total">
                    <!-- SECTION 1 -->

                    <h2>
                        <p class="step-icon"><span>01</span></p>
                        <span class="step-text">Company Infomation</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Company Infomation</h3>
                                <p>Please enter your information and proceed to the next step so we can build your request application.  </p>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Company Name</legend>
                                        <input type="text" class="form-control" id="Company-name" name="Company-name" placeholder="Company Name" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Company Address</legend>
                                        <input type="text" class="form-control" id="Company-address" name="Company-address" placeholder="Company Address" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Your Email</legend>
                                        <input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Phone Number</legend>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="+1 888-999-7777" required>
                                    </fieldset>
                                </div>
                                <div class="form-holder">
                                    <fieldset>
                                        <legend>Fax Number</legend>
                                        <input type="text" class="form-control" id="fax" name="fax" placeholder="+44 41 444-5555" required>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Representative Name</legend>
                                        <input type="text" class="form-control" id="Representative-name" name="Representative-name" placeholder="Representative Name" required>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Representative Description</legend>
                                        <input type="text" class="form-control" id="Description" name="Description" placeholder="Description" required>
                                    </fieldset>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Representative Phone Number</legend>
                                        <input type="text" class="form-control" id="Representative-phone" name="Representative-phone" placeholder="+1 888-999-7777" required>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                    </section>
                    <!-- SECTION 2 -->
                    <h2>
                        <p class="step-icon"><span>02</span></p>
                        <span class="step-text">Course Information</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="wizard-header">
                                <h3 class="heading">Course Information</h3>
                                <p>Please enter your course information.</p>
                            </div>

                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Platform Study</legend>
                                        <div class="radio" style="width: 50%;float: left;margin-top: 3px;">
                                            <label>
                                                <input type="radio" value="Windows" name="platform-study" class="control-primary" checked="checked">
                                                Windows
                                            </label>
                                        </div>

                                        <div class="radio" style="width: 50%;float: left;margin-top: 3px;">
                                            <label>
                                                <input type="radio" value="Mac" name="platform-study" class="control-primary">
                                                Mac
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <fieldset>
                                        <legend>Place Study</legend>
                                        <div class="radio" style="width: 33%;float: left;margin-top: 3px;">
                                            <label>
                                                <input type="radio" value="Online" name="place-study" class="control-primary" checked="checked">
                                                Online
                                            </label>
                                        </div>

                                        <div class="radio" style="width: 33%;float: left;margin-top: 3px;">
                                            <label>
                                                <input type="radio"  value="Company" name="place-study" class="control-primary">
                                                Company
                                            </label>
                                        </div>

                                        <div class="radio" style="width: 33%;float: left;margin-top: 3px;">
                                            <label>
                                                <input type="radio" value="Institute"  name="place-study" class="control-primary">
                                                Institute
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>
                            <div class="form-row">  <div class="form-holder"> </div> </div>






                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <p class="step-icon"><span>03</span></p>
                        <span class="step-text">Course Selection</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div>
                                <div class="lds-dual-ring"></div>

                                <div class="wizard-header">
                                    <h3 class="heading">Course Selection</h3>
                                    <p>Please choose courses and topics.</p>

                                </div>
                                <table class="table learnit_table">
                                    <th style="border: none;font-size: 13px;font-weight: normal !important">Topics to Include:</th>
                                    <th style="color: #1e88e5;border: none;font-size: 13px;font-weight: normal !important">"H" for Hands On</th>
                                    <th style="color: #4caf50;border: none;font-size: 13px;font-weight: normal !important">"D" for demo</th>
                                    <th style="color: #ffa256;border: none;font-size: 13px;font-weight: normal !important">"O" for optional/if time</th>
                                </table>
                                <div class="panel-group content-group-lg">
                                    <div class="panel panel-white">
                                        <div class="panel-heading" style="height: 53px;">
                                            <h6 class="panel-title">
                                                <a  data-toggle="collapse" data-target="#collapsible-control-right-group1">Excel</a>
                                                <div class="checkbox" style="float: left;margin-top: 2px;margin-bottom: 0px">
                                                    <label  style="    padding-left: 0px;">
                                                        <div class="checkbox" style="float: left;margin-top: 0px;margin-bottom: 0px" >
                                                            <label>
                                                                <input type="checkbox" class="control-custom" name="excel_checkbox" >
                                                            </label>
                                                        </div>
                                                    </label>
                                                </div>
                                                <input type="number" class="form-control-edited" style="width: 24%;height: 26px;float: right;text-align: center" name="excel_std_no" placeholder="No of student.">
                                                <span class="calculate-time excel-calculate-time">--:-- + --:--</span>
                                                <input type="hidden" class="excel-input-calculate-time" name="excel-input-calculate-time">
                                                <span class="calculate-time-fixed excel-calculate-time">--:-- + --:--</span>
                                            </h6>
                                        </div>
                                        <style>
                                            .learnit_table thead tr{
                                                background: #f5f5f5;
                                                border-top: 1px solid #bbbbbb;
                                            }
                                            .learnit_table th{
                                                font-weight: bold !important;
                                                font-size: 12px;
                                            }
                                            .learnit_table th span{
                                                font-weight: bold !important;
                                                font-size: 8px;
                                                display: block;
                                            }
                                            .learnit_table td .radio{
                                                margin: 0px !important;
                                            }
                                            .learnit_table td .radio label{
                                                padding: 0px !important;
                                            }
                                            .learnit_table td .radio label .choice{
                                                left: -12px !important;
                                            }
                                            .learnit_table td input{
                                                border: 0px !important;
                                                width: 40px !important;
                                            }
                                            .learnit_table tbody tr td:nth-child(1){
                                                padding: 12px 10px !important;
                                            }
                                            .learnit_table th{
                                                padding: 12px 12px !important;

                                            }
                                            .calculate-time{
                                                float: right;
                                                padding: 1px 20px;
                                                background-color: #f5f5f5;
                                                margin: 0px 15px;
                                                color: #333;
                                                font-weight: bold;
                                                border-radius: 3px;
                                                font-size: 14px !important;
                                                border: 1px dashed #999999;
                                            }
                                            .calculate-time-fixed{
                                                position: fixed;
                                                top: 229px;
                                                height: 53px;
                                                right: 124px;
                                                padding: 1px 12px;
                                                background-color: rgba(0,0,0,0.1);
                                                margin: 0px 15px;
                                                color: #333;
                                                font-weight: bold;
                                                border-radius: 3px;
                                                font-size: 18px !important;
                                                z-index: 100;
                                                line-height: 2.5em;
                                                border: 1px solid rgba(0, 0, 0, 0.15);
                                                display: none;
                                            }

                                        </style>

                                        <div id="collapsible-control-right-group1" class="panel-collapse collapse in ">
                                            <div class="panel-body" style="    padding-left: 0px;padding-right: 0px;padding-top: 0px">
                                                    <table class="table learnit_table">
                                                        <thead>
                                                        <th style="width: 70%;">Topic</th>
                                                        <th style="width: 15%;">Origin Module</th>
                                                        <th style="width: 15%;">Timing <span >(in Minutes)</span></th>
                                                        <th>H</th>
                                                        <th>D</th>
                                                        <th>O</th>
                                                        </thead>
                                                        <tbody>
                                                        <?php $excel_counter=0 ?>
                                                        <?php foreach ($excel_array as $value){ ?>
                                                            <?php $excel_counter++ ?>
                                                            <tr>
                                                                <td><?=$value[0]?><input type="hidden" class="excel_value" name="excel_<?=$excel_counter?>_value"></td>
                                                                <td><input type="number" value="<?=$value[1]?>" class="form-control excel_origin" name="excel_<?=$excel_counter?>_origin" placeholder="No."></td>
                                                                <td><input type="number" value="<?=$value[2]?>" class="form-control excel_time" name="excel_<?=$excel_counter?>_time" placeholder="Mi."></td>
                                                                <td>
                                                                    <div class="radio" style="">
                                                                        <label>
                                                                            <input type="radio" value="h" name="excel_<?=$excel_counter?>" class="control-primary select_radio_button_excel">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio" style="">
                                                                        <label>
                                                                            <input type="radio" value="d" name="excel_<?=$excel_counter?>" class="control-primary select_radio_button_excel">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio" style="">
                                                                        <label>
                                                                            <input type="radio" value="o" name="excel_<?=$excel_counter?>" class="control-primary select_radio_button_excel">
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>




                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-white">
                                        <div class="panel-heading" style="height: 53px;">
                                            <h6 class="panel-title">
                                                <a  data-toggle="collapse" data-target="#collapsible-control-right-group2">Word</a>
                                                 <div class="checkbox" style="float: left;margin-top: 2px;margin-bottom: 0px">
                                                    <label style="    padding-left: 0px;">
                                                        <div class="checkbox" style="float: left;margin-top: 0px;margin-bottom: 0px" >
                                                            <label>
                                                                <input type="checkbox" class="control-custom"  name="word_checkbox">
                                                            </label>
                                                        </div>
                                                    </label>
                                                </div>
                                                <input type="number" class="form-control-edited" style="width: 24%;height: 26px;float: right;text-align: center" name="word_std_no" placeholder="No of student.">
                                                <span class="calculate-time word-calculate-time">--:-- + --:--</span>
                                                <input type="hidden" class="word-input-calculate-time" name="word-input-calculate-time">
                                                <span class="calculate-time-fixed word-calculate-time">--:-- + --:--</span>
                                            </h6>
                                        </div>
                                        <div id="collapsible-control-right-group2" class="panel-collapse collapse in">
                                            <div class="panel-body" style="    padding-left: 0px;padding-right: 0px;padding-top: 0px">
                                                <table class="table learnit_table">
                                                    <thead>
                                                    <th style="width: 70%;">Topic</th>
                                                    <th style="width: 15%;">Origin Module</th>
                                                    <th style="width: 15%;">Timing <span >(in Minutes)</span></th>
                                                    <th>H</th>
                                                    <th>D</th>
                                                    <th>O</th>
                                                    </thead>
                                                    <tbody>
                                                    <?php $word_counter=0 ?>
                                                    <?php foreach ($word_array as $value){ ?>
                                                        <?php $word_counter++ ?>
                                                        <tr>
                                                            <td><?=$value[0]?><input type="hidden" class="word_value" name="word_<?=$word_counter?>_value"></td>
                                                            <td><input type="number" value="<?=$value[1]?>" class="form-control word_origin" name="word_<?=$word_counter?>_origin" placeholder="No."></td>
                                                            <td><input type="number" value="<?=$value[2]?>" class="form-control word_time" name="word_<?=$word_counter?>_time" placeholder="Mi."></td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="h" name="word_<?=$word_counter?>" class="control-primary select_radio_button_word">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="d" name="word_<?=$word_counter?>" class="control-primary select_radio_button_word">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="o" name="word_<?=$word_counter?>" class="control-primary select_radio_button_word">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-white">
                                        <div class="panel-heading" style="height: 53px;">
                                            <h6 class="panel-title">
                                                <a  data-toggle="collapse" data-target="#collapsible-control-right-group3">PowerPoint</a>
                                                 <div class="checkbox" style="float: left;margin-top: 2px;margin-bottom: 0px">
                                                    <label  style="    padding-left: 0px;">
                                                        <div class="checkbox" style="float: left;margin-top: 0px;margin-bottom: 0px" >
                                                            <label>
                                                                <input type="checkbox" class="control-custom"  name="powerpoint_checkbox" >
                                                            </label>
                                                        </div>
                                                    </label>
                                                </div>
                                                <input type="number" class="form-control-edited" style="width: 24%;height: 26px;float: right;text-align: center" name="powerpoint_std_no" placeholder="No of student.">
                                                <span class="calculate-time powerpoint-calculate-time">--:-- + --:--</span>
                                                <input type="hidden" class="powerpoint-input-calculate-time" name="powerpoint-input-calculate-time">
                                                <span class="calculate-time-fixed powerpoint-calculate-time">--:-- + --:--</span>
                                            </h6>
                                        </div>
                                        <div id="collapsible-control-right-group3" class="panel-collapse collapse in">
                                            <div class="panel-body" style="    padding-left: 0px;padding-right: 0px;padding-top: 0px">
                                                <table class="table learnit_table">
                                                    <thead>
                                                    <th style="width: 70%;">Topic</th>
                                                    <th style="width: 15%;">Origin Module</th>
                                                    <th style="width: 15%;">Timing <span >(in Minutes)</span></th>
                                                    <th>H</th>
                                                    <th>D</th>
                                                    <th>O</th>
                                                    </thead>
                                                    <tbody>
                                                    <?php $powerpoint_counter=0 ?>
                                                    <?php foreach ($powerpoint_array as $value){ ?>
                                                        <?php $powerpoint_counter++ ?>
                                                        <tr>
                                                            <td><?=$value[0]?><input type="hidden" class="powerpoint_value" name="powerpoint_<?=$powerpoint_counter?>_value"></td>
                                                            <td><input type="number" value="<?=$value[1]?>" class="form-control powerpoint_origin" name="powerpoint_<?=$powerpoint_counter?>_origin" placeholder="No."></td>
                                                            <td><input type="number" value="<?=$value[2]?>" class="form-control powerpoint_time" name="powerpoint_<?=$powerpoint_counter?>_time" placeholder="Mi."></td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="h" name="powerpoint_<?=$powerpoint_counter?>" class="control-primary select_radio_button_powerpoint">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="d" name="powerpoint_<?=$powerpoint_counter?>" class="control-primary select_radio_button_powerpoint">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="o" name="powerpoint_<?=$powerpoint_counter?>" class="control-primary select_radio_button_powerpoint">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-white">
                                        <div class="panel-heading" style="height: 53px;">
                                            <h6 class="panel-title">
                                                <a  data-toggle="collapse" data-target="#collapsible-control-right-group4">Outlook</a>
                                                 <div class="checkbox" style="float: left;margin-top: 2px;margin-bottom: 0px">
                                                    <label  style="    padding-left: 0px;">
                                                        <div class="checkbox" style="float: left;margin-top: 0px;margin-bottom: 0px" >
                                                            <label>
                                                                <input type="checkbox" class="control-custom"  name="outlook_checkbox" >
                                                            </label>
                                                        </div>
                                                    </label>
                                                </div>
                                                <input type="number" class="form-control-edited" style="width: 24%;height: 26px;float: right;text-align: center" name="outlook_std_no" placeholder="No of student.">
                                                <span class="calculate-time outlook-calculate-time">--:-- + --:--</span>
                                                <input type="hidden" class="outlook-input-calculate-time" name="outlook-input-calculate-time">
                                                <span class="calculate-time-fixed outlook-calculate-time">--:-- + --:--</span>
                                            </h6>
                                        </div>
                                        <div id="collapsible-control-right-group4" class="panel-collapse collapse in">
                                            <div class="panel-body" style="    padding-left: 0px;padding-right: 0px;padding-top: 0px">
                                                <table class="table learnit_table">
                                                    <thead>
                                                    <th style="width: 70%;">Topic</th>
                                                    <th style="width: 15%;">Origin Module</th>
                                                    <th style="width: 15%;">Timing <span >(in Minutes)</span></th>
                                                    <th>H</th>
                                                    <th>D</th>
                                                    <th>O</th>
                                                    </thead>
                                                    <tbody>
                                                    <?php $outlook_counter=0 ?>
                                                    <?php foreach ($outlook_array as $value){ ?>
                                                        <?php $outlook_counter++ ?>
                                                        <tr>
                                                            <td><?=$value[0]?><input type="hidden" class="outlook_value" name="outlook_<?=$outlook_counter?>_value"></td>
                                                            <td><input type="number" value="<?=$value[1]?>" class="form-control outlook_origin" name="outlook_<?=$outlook_counter?>_origin" placeholder="No."></td>
                                                            <td><input type="number" value="<?=$value[2]?>" class="form-control outlook_time" name="outlook_<?=$outlook_counter?>_time" placeholder="Mi."></td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="h" name="outlook_<?=$outlook_counter?>" class="control-primary select_radio_button_outlook">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="d" name="outlook_<?=$outlook_counter?>" class="control-primary select_radio_button_outlook">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="radio" style="">
                                                                    <label>
                                                                        <input type="radio" value="o" name="outlook_<?=$outlook_counter?>" class="control-primary select_radio_button_outlook">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>




                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>


                </div>
                <div class="success-request" style="display: none" >
                    <h2 style="color: #43a047;font-weight: bold;margin-top: 10px;">Request Complete Successfully!</h2>
                </div>
            </form>
        </div>

    </div>
 </div>
<!--<script type="text/javascript" src="--><?//= base_url() ?><!--assets/js/pages/form_checkboxes_radios.js"></script>-->
<script type="text/javascript" >
    $(function() {



        $(".control-primary").uniform({
            radioClass: 'choice',
            wrapperClass: 'border-primary-600 text-primary-800'
        });
        // Custom color
        $(".control-custom").uniform({
            radioClass: 'choice',
            wrapperClass: 'border-indigo-600 text-indigo-800'
        });

        $('.collapse').collapse();

        Number.prototype.pad = function(size) {
            var s = String(this);
            while (s.length < (size || 2)) {s = "0" + s;}
            return s;
        }

        $(document).on("change",'.select_radio_button_excel',
            function(){
                if ($(this).is(':checked')) {
                    $(this).parent().parent().parent().parent().parent().parent().find('.excel_value').val($(this).val());
                }
                var h=0,d=0,o=0,dh=0;
                var hours=0;
                var minutes=0;
                var o_hours=0;
                var o_minutes=0;
                $('.excel_value').each(function(i){
                    if($(this).val() == 'h'){
//                        alert($(this).parent().parent().find('.excel_time').val())
                        h = h+ Number($(this).parent().parent().find('.excel_time').val());
                    }else if($(this).val() == 'd'){
                        d = d+ Number($(this).parent().parent().find('.excel_time').val());
                    }else if($(this).val() == 'o'){
                        o = o+ Number($(this).parent().parent().find('.excel_time').val());
                    }
                });
                if(d!=0){
                    d = d / 2.5;
                }
                hours = Number(h+d)/60;
                minutes = (h+d)%60;
                o_hours = Number(o)/60;
                o_minutes = (o)%60;

                $('.excel-calculate-time').html("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
                $('.excel-input-calculate-time').val("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
            });

        $(document).on("change",'.select_radio_button_word',
            function(){
//            alert('d');
                if ($(this).is(':checked')) {
                    $(this).parent().parent().parent().parent().parent().parent().find('.word_value').val($(this).val());
                }
                var h=0,d=0,o=0,dh=0;
                var hours=0;
                var minutes=0;
                var o_hours=0;
                var o_minutes=0;
                $('.word_value').each(function(i){
                    if($(this).val() == 'h'){
//                        alert($(this).parent().parent().find('.word_time').val())
                        h = h+ Number($(this).parent().parent().find('.word_time').val());
                    }else if($(this).val() == 'd'){
                        d = d+ Number($(this).parent().parent().find('.word_time').val());
                    }else if($(this).val() == 'o'){
                        o = o+ Number($(this).parent().parent().find('.word_time').val());
                    }
                });
                if(d!=0){
                    d = d / 2.5;
                }
                hours = Number(h+d)/60;
                minutes = (h+d)%60;
                o_hours = Number(o)/60;
                o_minutes = (o)%60;

                $('.word-calculate-time').html("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
                $('.word-input-calculate-time').val("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
            });


        $(document).on("change",'.select_radio_button_powerpoint',
            function(){
                if ($(this).is(':checked')) {
                    $(this).parent().parent().parent().parent().parent().parent().find('.powerpoint_value').val($(this).val());
                }
                var h=0,d=0,o=0,dh=0;
                var hours=0;
                var minutes=0;
                var o_hours=0;
                var o_minutes=0;
                $('.powerpoint_value').each(function(i){
                    if($(this).val() == 'h'){
//                        alert($(this).parent().parent().find('.powerpoint_time').val())
                        h = h+ Number($(this).parent().parent().find('.powerpoint_time').val());
                    }else if($(this).val() == 'd'){
                        d = d+ Number($(this).parent().parent().find('.powerpoint_time').val());
                    }else if($(this).val() == 'o'){
                        o = o+ Number($(this).parent().parent().find('.powerpoint_time').val());
                    }
                });
                if(d!=0){
                    d = d / 2.5;
                }
                hours = Number(h+d)/60;
                minutes = (h+d)%60;
                o_hours = Number(o)/60;
                o_minutes = (o)%60;

                $('.powerpoint-calculate-time').html("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
                $('.powerpoint-input-calculate-time').val("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
            });


        $(document).on("change",'.select_radio_button_outlook',
            function(){
                if ($(this).is(':checked')) {
                    $(this).parent().parent().parent().parent().parent().parent().find('.outlook_value').val($(this).val());
                }
                var h=0,d=0,o=0,dh=0;
                var hours=0;
                var minutes=0;
                var o_hours=0;
                var o_minutes=0;
                $('.outlook_value').each(function(i){
                    if($(this).val() == 'h'){
//                        alert($(this).parent().parent().find('.outlook_time').val())
                        h = h+ Number($(this).parent().parent().find('.outlook_time').val());
                    }else if($(this).val() == 'd'){
                        d = d+ Number($(this).parent().parent().find('.outlook_time').val());
                    }else if($(this).val() == 'o'){
                        o = o+ Number($(this).parent().parent().find('.outlook_time').val());
                    }
                });
                if(d!=0){
                    d = d / 2.5;
                }
                hours = Number(h+d)/60;
                minutes = (h+d)%60;
                o_hours = Number(o)/60;
                o_minutes = (o)%60;

                $('.outlook-calculate-time').html("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
                $('.outlook-input-calculate-time').val("<span style='color:#1e88e5'>"+(Math.trunc(hours)).pad()+':'+minutes.pad()+"</span>"+' + '+"<span style='color:#4caf50'>"+(Math.trunc(o_hours)).pad()+':'+o_minutes.pad()+"</span>");
            });

        var base_url = 'http://' + window.location.host + '/';
        $(document).on('click', 'a[href$="finish"]', function () {
            $('#cover-spin').show(0)
            var values = $('#save_request').serialize();
            $.ajax({
                type: 'POST',
                url: '' + base_url + 'learnit/Request/send_request' ,
                data: values,
                cache: "false",
                success: function (data) {
                    $('#cover-spin').hide(0);
                    $('#form-total').css('display','none');
                    $('.success-request').css('display','block');
//                    $('.success-request').show(0);
                }
            });
            return false;
        });

    });

</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
