<?php get_header(); ?>


<div class="container">

      <div class="row">
        <div class="col-sm-12 text-center">
                    <h1>REKAM MEDIS PASIEN</h1>
                    <h3><?php echo get_option('wp_dental_setting_nama'); ?></h3>
                    <h5><?php echo get_option('wp_dental_setting_alamat'); ?></h5>
	<hr />
        </div>
      </div>


        <?php if(have_posts()): while(have_posts()): the_post();?>
	<?php $data = get_post_meta(get_the_ID()); ?>

      <div class="row">
<div class="col-sm-3 text-center">

<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail(array(150,150));
}
else {
	echo '<img src="' . get_template_directory_uri() . '/no-image.jpg" width="150">';
}
?>
</div>
<div class="col-sm-9 text-center">
  <h1>No Register : <?php the_title()?></h1>
  <h1><small>Tanggal : <?php the_time('j F Y') ?></small></h1>
</div>
</div>
<hr />
      <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>Detail Pasien</h4>
                  </div>
                  <div class="panel-body">
                    <p>
                      <label>Nama :</label> <?php echo $data["_nama"][0]; ?><br />
                      <label>Umur :</label> <?php echo $data["_umur"][0]; ?> tahun<br />
                      <label>Jenis Kelamin :</label> <?php echo $data["_jenis_kelamin"][0]; ?><br />
                      <label>Alamat :</label> <?php echo $data["_alamat"][0]; ?><br />
                      <label>Telepon :</label> <?php echo $data["_telepon"][0]; ?><br />
                      <label>Pekerjaan :</label> <?php echo $data["_pekerjaan"][0]; ?>
                    </p>
                  </div>
                </div>
        </div>
        <div class="col-sm-6">
          <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>Keadaan Umum</h4>
                  </div>
                  <div class="panel-body">
                    <p>
                      <label>Keluhan Utama :</label> <?php echo $data["_keluhan_utama"][0]; ?><br />
                      <label>Penyakit Sistemik :</label>
				<?php if ( empty( $data["_ps_hipertensi"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_hipertensi"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_diabetes"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_diabetes"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_jantung"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_jantung"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_ginjal"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_ginjal"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_hepatitis"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_hepatitis"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_tbc"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_tbc"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_aids"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_aids"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_pms"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_pms"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_hamil"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_hamil"][0] . ''; } ?>
				<?php if ( empty( $data["_ps_lain_lain"][0] ) ) { echo '' ; } else { echo '*' . $data["_ps_lain_lain"][0] . ''; } ?>
				<br />
                      <label>Alergi Obat :</label> <?php echo $data["_alergi_obat"][0]; ?><br />
                      <label>Tekanan Darah :</label> <?php echo $data["_tekanan_darah"][0]; ?> mmHG<br />
                      <label>Denyut Nadi :</label> <?php echo $data["_denyut_nadi"][0]; ?> kali per menit<br />
                      <label>Riwayat Cabut Gigi :</label> <?php echo $data["_riwayat_cabut_gigi"][0]; ?>
                    </p>
                  </div>
                </div>
        </div>
      </div> <!-- / end client details section -->

      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default">
                  <div class="panel-heading text-center">
                    <h4>Keadaan Rongga Mulut Gigi Dewasa</h4>
                  </div>
                  <div class="panel-body">

                    <div class="col-sm-6 text-right"><label>Atas Kanan</label><br />
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-right">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_18"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_18"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_17"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_17"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_16"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_16"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_15"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_15"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_14"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_14"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_13"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_13"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_12"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_12"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_11"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_11"][0]; } ?></button>
		      </div>
		    </div>
		    </div>

                    <div class="col-sm-6 text-left"><label>Atas Kiri</label><br />
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-left">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_21"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_21"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_22"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_22"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_23"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_23"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_24"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_24"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_25"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_25"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_26"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_26"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_27"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_27"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_28"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_28"][0]; } ?></button>
		      </div>
		    </div>
		    </div><br /><br /><br />

                    <div class="col-sm-6 text-right">
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-right">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_48"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_48"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_47"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_47"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_46"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_46"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_45"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_45"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_44"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_44"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_43"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_43"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_42"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_42"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_41"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_41"][0]; } ?></button>
		      </div>
		    </div>
			<p><label>Bawah Kanan</label></p>
		    </div>

                    <div class="col-sm-6 text-left">
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-left">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_31"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_31"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_32"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_32"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_33"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_33"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_34"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_34"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_35"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_35"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_36"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_36"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_37"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_37"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_38"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_38"][0]; } ?></button>
		      </div>
		    </div>
			<p><label>Bawah Kiri</label><p>
		    </div>



                  </div>
                </div>
        </div>
      </div>


      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default">
                  <div class="panel-heading text-center">
                    <h4>Keadaan Rongga Mulut Gigi Anak</h4>
                  </div>
                  <div class="panel-body">

                    <div class="col-sm-6 text-right"><label>Atas Kanan</label><br />
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-right">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_55"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_55"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_54"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_54"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_53"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_53"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_52"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_52"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_51"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_51"][0]; } ?></button>
		      </div>
		    </div>
		    </div>
                    <div class="col-sm-6 text-left"><label>Atas Kiri</label><br />
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-left">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_61"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_61"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_62"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_62"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_63"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_63"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_64"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_64"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_65"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_65"][0]; } ?></button>
		      </div>
		    </div>
		    </div><br /><br /><br />
                    <div class="col-sm-6 text-right">
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-right">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_85"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_85"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_84"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_84"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_83"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_83"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_82"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_82"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_81"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_81"][0]; } ?></button>
		      </div>
		    </div>
			<p><label>Bawah Kanan</label></p>
		    </div>
                    <div class="col-sm-6 text-left">
		    <div class="btn-toolbar" role="toolbar" style="margin: 0;">
		      <div class="btn-group pull-left">
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_71"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_71"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_72"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_72"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_73"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_73"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_74"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_74"][0]; } ?></button>
 		        <button type="button" class="btn btn-default krm_data">
				<?php if ( empty( $data["_gg_75"][0] ) ) { echo '&nbsp;' ; } else { echo $data["_gg_75"][0]; } ?></button>
		      </div>
		    </div>
			<p><label>Bawah Kiri</label><p>
		    </div>




                  </div>
                </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>Keterangan Tambahan</h4>
                  </div>

          	<div class="col-sm-12"><div id="content" role="main"><p><?php the_content()?></p></div></div>

          </div>
        </div>
      </div>

        <?php comments_template('comments-wp_dental.php'); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>  
        <?php endif;?>

</div><!-- .container -->

<?php get_footer(); ?>
