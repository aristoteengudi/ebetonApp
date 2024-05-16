<?php
?>

<div class="container-fluid">
    <div class="page-title-box">
        <div class="row align-items-center">

            <div class="col-sm-6">
                <h4 class="page-title">Inmate List</h4>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title"></h4>
                    <p class="text-muted m-b-30">
                    </p>

                    <table id="inmate_list" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>FirstName</th>
                            <th>Gender</th>
                            <th>Matricule</th>
                            <th>Age</th>
                            <th>Entry Date</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($model as $model){?>
                        <tr>
                            <td><?= $model->pris_nom?></td>
                            <td><?= $model->pris_prenom;?></td>
                            <td><?php  if ($model->genre= 'H')
                                echo 'Homme';
                            else
                                echo 'Femme'; ?></td>
                            <td><?= $model->pris_matricule?></td>
                            <td><?php
                                $first_date = new DateTime($model->pris_date_naissance);
                                $current_date = new DateTime (date('Y-m-d'));
                                $age = $current_date->diff($first_date);

                                echo $age->y;

                                ?></td>
                            <td></td>
                        </tr>
                        <?php }?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>


<!-- Required datatable js -->

<?php
$this->registerJsFile('@web/asset/plugins/datatables/jquery.dataTables.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/dataTables.bootstrap4.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
### Datatable Buttons
$this->registerJsFile('@web/asset/plugins/datatables/dataTables.buttons.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/buttons.bootstrap4.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/jszip.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/pdfmake.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/vfs_fonts.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/buttons.html5.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/buttons.print.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/buttons.colVis.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
### Responseive Plugins
$this->registerJsFile('@web/asset/plugins/datatables/dataTables.responsive.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
$this->registerJsFile('@web/asset/plugins/datatables/responsive.bootstrap4.min.js',['depends' => [\yii\web\JqueryAsset::className()]]);
//$this->registerJsFile('@web/asset/pages/datatables.init.js',['depends' => [\yii\web\JqueryAsset::className()]]);


#### Datatable CSS
$this->registerCssFile("@web/asset/plugins/datatables/dataTables.bootstrap4.min.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
], 'css-print-theme');
$this->registerCssFile("@web/asset/plugins/datatables/buttons.bootstrap4.min.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
], 'css-print-theme');
$this->registerCssFile("@web/asset/plugins/datatables/responsive.bootstrap4.min.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
], 'css-print-theme');
$this->registerCssFile("@web/asset/plugins/datatables/responsive.bootstrap4.min.css", [
    'depends' => [\yii\bootstrap\BootstrapAsset::className()],
], 'css-print-theme');


$url_fr= Yii::getAlias('@web/asset/pages/datatable.localisation_fr.json');
$this->registerJS("
    $('#inmate_list').DataTable({
        'lengthMenu': [[2, 25, 50, -1], [5, 25, 50, 'All']],
        language: {
            'url': ''
        }
    });

    //Buttons examples
    /*
    var table = $('#inmate_list').DataTable({
    	select: true,
    	dom: 'Bfrtip',
        lengthChange: false,
        'lengthMenu': [[5, 25, 50, -1], [5, 25, 50, 'All']],
        buttons: ['copy', 'excel', 'pdf', 'colvis'],
        language: {
    	    'url': '$url_fr'
    	}
    });
    
    table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    
    */
");
?>

