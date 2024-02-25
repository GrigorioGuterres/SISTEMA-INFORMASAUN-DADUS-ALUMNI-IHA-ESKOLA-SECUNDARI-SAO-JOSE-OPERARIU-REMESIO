<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 comp-grid">
                    <h4 >The Dashboard</h4>
                </div>
            </div>
        </div>
    </div>
    <div  class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totaldadusaldeia();  ?>
                    <a class="animated tada record-count card bg-light text-dark"  href="<?php print_link("tb_aldeia/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">account_balance</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL DADUS ALDEIA</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 100) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-primary text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc"></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totalmunicipiu();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_municipiu/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">autorenew</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL MUNICIPIU</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 100) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc"></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totalpostu();  ?>
                    <a class="animated tada record-count card bg-light text-dark"  href="<?php print_link("tb_postu/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">autorenew</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL POSTU</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 100) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc"></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totalsuku();  ?>
                    <a class="animated tada record-count card bg-light text-dark"  href="<?php print_link("tb_suku/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons mi-xxxlg">autorenew</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL SUKU</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 100) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc"></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totaldepartamentu();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_departamentu/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL DEPARTAMENTU</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_totaldadusrejistu();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_alunmi/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">TOTAL DADUS REJISTU</div>
                                    <small class=""></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 comp-grid">
                    <?php $rec_count = $comp_model->getcount_tbalunmi();  ?>
                    <a class="animated zoomIn record-count card bg-light text-dark"  href="<?php print_link("tb_alunmi/") ?>">
                        <div class="row">
                            <div class="col-2">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="col-10">
                                <div class="flex-column justify-content align-center">
                                    <div class="title">Tb Alunmi</div>
                                    <div class="progress mt-2">
                                        <?php 
                                        $perc = ($rec_count / 100) * 100 ;
                                        ?>
                                        <div class="progress-bar bg-light text-dark" role="progressbar" aria-valuenow="<?php echo $rec_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perc ?>%">
                                            <span class="progress-label"><?php echo round($perc,2); ?>%</span>
                                        </div>
                                    </div>
                                    <small class="small desc"></small>
                                </div>
                            </div>
                            <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
