<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Tb Alunmi</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-id">
                                        <th class="title"> Id: </th>
                                        <td class="value"> <?php echo $data['id']; ?></td>
                                    </tr>
                                    <tr  class="td-naran">
                                        <th class="title"> Naran: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['naran']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="naran" 
                                                data-title="Enter Naran" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['naran']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-sexo">
                                        <th class="title"> Sexo: </th>
                                        <td class="value">
                                            <span  data-source='<?php echo json_encode_quote(Menu :: $sexo); ?>' 
                                                data-value="<?php echo $data['sexo']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="sexo" 
                                                data-title="Enter Sexo" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="radiolist" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['sexo']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-data_moris">
                                        <th class="title"> Data Moris: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['data_moris']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="data_moris" 
                                                data-title="Enter Data Moris" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['data_moris']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-fatin_moris">
                                        <th class="title"> Fatin Moris: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['fatin_moris']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="fatin_moris" 
                                                data-title="Enter Fatin Moris" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['fatin_moris']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-data_registu">
                                        <th class="title"> Data Registu: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['data_registu']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="data_registu" 
                                                data-title="Enter Data Registu" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['data_registu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-tinama_remata">
                                        <th class="title"> Tinama Remata: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tinama_remata']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tinama_remata" 
                                                data-title="Enter Tinama Remata" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['tinama_remata']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_departamentu">
                                        <th class="title"> Id Departamentu: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/tb_alunmi_id_departamentu_option_list'); ?>' 
                                                data-value="<?php echo $data['id_departamentu']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_departamentu" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_departamentu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_municipiu">
                                        <th class="title"> Id Municipiu: </th>
                                        <td class="value">
                                            <span  data-source='<?php print_link('api/json/tb_alunmi_id_municipiu_option_list'); ?>' 
                                                data-value="<?php echo $data['id_municipiu']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_municipiu" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_municipiu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-Id_postu">
                                        <th class="title"> Id Postu: </th>
                                        <td class="value">
                                            <span  data-source='<?php 
                                                $dependent_field = (!empty($data['id_municipiu']) ? urlencode($data['id_municipiu']) : null);
                                                print_link('api/json/tb_alunmi_Id_postu_option_list/'.$dependent_field); 
                                                ?>' 
                                                data-value="<?php echo $data['Id_postu']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="Id_postu" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['Id_postu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_suku">
                                        <th class="title"> Id Suku: </th>
                                        <td class="value">
                                            <span  data-source='<?php 
                                                $dependent_field = (!empty($data['Id_postu']) ? urlencode($data['Id_postu']) : null);
                                                print_link('api/json/tb_alunmi_id_suku_option_list/'.$dependent_field); 
                                                ?>' 
                                                data-value="<?php echo $data['id_suku']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_suku" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_suku']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-id_aldeia">
                                        <th class="title"> Id Aldeia: </th>
                                        <td class="value">
                                            <span  data-source='<?php 
                                                $dependent_field = (!empty($data['id_suku']) ? urlencode($data['id_suku']) : null);
                                                print_link('api/json/tb_alunmi_id_aldeia_option_list/'.$dependent_field); 
                                                ?>' 
                                                data-value="<?php echo $data['id_aldeia']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="id_aldeia" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['id_aldeia']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-imagen">
                                        <th class="title"> Imagen: </th>
                                        <td class="value"><?php Html :: page_img($data['imagen'],400,400,1); ?></td>
                                    </tr>
                                    <tr  class="td-tinan_hahu_rejistu">
                                        <th class="title"> Tinan Hahu Rejistu: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['tinan_hahu_rejistu']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("tb_alunmi/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="tinan_hahu_rejistu" 
                                                data-title="Enter Tinan Hahu Rejistu" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['tinan_hahu_rejistu']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">save</i> Emprime dadus
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("tb_alunmi/edit/$rec_id"); ?>">
                                                    <i class="material-icons">edit</i> Hadia
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("tb_alunmi/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Ita Aseita hamus Dadus nee" data-display-style="modal">
                                                    <i class="material-icons">clear</i> Hamos
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="material-icons">block</i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
