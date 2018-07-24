
<?php $btn_type_choice            = $atts['btn_type']['btn_type_choice']; ?>
<?php $btn_url                    = $atts['btn_type']['target_button']['button_link']; ?>
<?php $btn_type_external_link     = $atts['btn_type']['target_button']['open_new_tab']; ?>
<?php $btn_type_choice_download   = $atts['btn_type']['download']; ?>
<?php $btn_type_download_pdf_link = $atts['btn_type']['download']['down_link']; ?>
<?php $btn_choice_pop_up          = $atts['btn_type']['popup']; ?>
<?php $btn_popup                  = $atts['btn_type']['popup']['popup']; ?>

<?php $button_id = uniqid('training-button-id-'); ?>
<div class="training-btn-wrapper" id="<?php echo $button_id;?>">
<?php if($btn_type_choice=='target_button') { ?>


        <a href="<?php echo $btn_url?>" target="<?php echo $btn_type_external_link;?>"><?php echo $atts['label']; ?></a>

    <?php }

else if($btn_type_choice=='download') { ?>

         <a href="<?php echo $btn_type_download_pdf_link['url'];?>" download ><?php echo $atts['label']; ?></a>

<?php }


elseif($btn_type_choice=='form_popup') { ?>

        <a href="<?php echo $btn_popup;?>" ><?php echo $atts['label']; ?></a>

<?php }?>

</div>

<style>
    #<?php echo $button_id; ?> a{
        color: <?php echo $atts['btn_txt_color'];?>;
        background-color:<?php echo $atts['btn_color'];?>;
        padding:20px 20px;
        text-decoration:none;

    }
    #<?php echo $button_id; ?> a:hover{
        color: <?php echo $atts['btn_hover_txt_color'];?>;
        background-color:<?php echo $atts['btn_hover_color'];?>;

    }
</style>

<?php //fw_print($atts); ?>

