<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    
    <!-------------menu panel------------------->
                            <div class="x_panel">
                               <div class="x_title">
                                <h2>Tiket</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
      
                                
    <!--------------button action--------------->
              <div class="col-md-8 pull-left">
                  <div class="compose-btn">
                       <a class="btn btn-sm btn-primary" href="?module=add_tiket"><i class="fa fa-plus"></i> Tambah Tiket</a>
                       <a style="padding-top:10px;" class="btn btn-sm btn-danger bulk-actions" href="#"><i class="fa fa-remove"></i> Hapus terpilih</a>   
                   </div> 
             </div>
                              
    
    <!---------------button export-------------->
                                <div class="col-md-3 pull-right">
                                   <div class="compose-btn pull-right">
        <a href="#" title="" data-placement="top" data-toggle="tooltip" data-original-title="Pdf" class="btn btn-sm btn-default tooltips" onclick="$('#employees').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"><i class="fa fa-file-pdf-o"></i></a>

        <a href="#" title="" data-placement="top" data-toggle="tooltip" data-original-title="Excel" class="btn btn-sm btn-default tooltips" onclick="$('#employees').tableExport({type:'excel',escape:'false'});"><i class="fa fa-file-excel-o"></i></a>

         <a href="#" title="" data-placement="top" data-toggle="tooltip" data-original-title="Word" class="btn btn-sm btn-default tooltips" onclick="$('#employees').tableExport({type:'doc',escape:'false'});"><i class="fa fa-file-word-o"></i></a>

                                 </div>
                                </div>
                                
                                
                                
                                
    <!------------------content table------------>
                              <div class="x_content">
                              <table id="employees" class="dataTables-example table table-striped responsive-utilities jambo_table bulk_action">
                                        <thead>
                                            <tr class="headings">
                                                <th>
                                                    <input type="checkbox" id="check-all" class="flat">
                                                </th>
                                                <th class="column-title">Kode Tiket </th>
                                                <th class="column-title">Nama Tiket </th>
                                                <th class="column-title">Kategori </th>
                                                <th class="column-title">Harga </th>
                                                <th class="column-title">Stok </th>
                                                <th class="column-title no-link last" width="15%"><span class="nobr">Aksi</span>
                                                </th>
                                                <th class="bulk-actions" colspan="7">
                                                    <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> ) <i class="fa fa-check"></i></a>
                                                </th>
                                            </tr>
                                        </thead>

                            <tbody>
                                <?php
                                       
                                        $data = $query->show_tiket();
                                        foreach ($data as $row){
                                            
                                echo"<tr class='even pointer'>
                                    <td class='a-center '><input type='checkbox' class='flat' name='table_records' ></td>
                                    <td class=' '>$row[kode_tiket]</td>
                                    <td class=' '>$row[nama_tiket]</td>
                                    <td class=' '>$row[nama_kategori]</td>
                                    <td class=' '>Rp.$row[harga]</td>
                                    <td class=' '>$row[stok]</td>
                                    <td class=' last'>
                                    <a href='?module=edit_tiket&id=$row[kode_tiket]' title='Edit' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i></a>
                                    <a href='?module=tiket&act=hapus&id=$row[kode_tiket]' title='Hapus'  class='btn btn-sm btn-danger'><i class='fa fa-remove' onClick=\"return confirm('Apakah Anda benar-benar akan menghapus data ini ?')\"></i></a>
                                    </td>
                                </tr>";
                                }
                                ?>
                                         
                                
                                            
                            </tbody>
                            </table>
                                  
         </div>
         </div>
         </div>
                        <br />
                        <br />
                        <br />

         </div>

<?php
// Proses Hapus
if($_GET['act']=='hapus'){
    $id     = $_GET['id'];
    $query->delete_tiket($id);
    $query->log_aktifitas($_SESSION[id_user],'Menghapus data tiket',date('Y-m-d'),date('H:i:s'));
    echo "<script>window.location='?module=tiket';</script>";
}