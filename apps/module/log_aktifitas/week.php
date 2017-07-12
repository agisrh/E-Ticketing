
                                
                                
    <!------------------content table------------>
                     <table class="dataTables-example table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">
                                                <th>No.</th>
                                                <th class="column-title">Aktifitas </th>
                                                <th class="column-title">Tanggal </th>
                                                <th class="column-title">Waktu </th>
                                            </tr>
                                        </thead>

                            <tbody>
                                <?php
                                       
                                        $data = $query->log_week($_SESSION[id_user]);
                                        $no=1;
                                        foreach ($data as $row){
                                            
                                echo"<tr class='even pointer'>
                                    <td class='a-center '>$no</td>
                                    <td class=' '>$row[aktifitas]</td>
                                    <td class=' '>".tgl_indo($row[tanggal])."</td>
                                    <td class=' '>$row[waktu]</td>
                                </tr>";
                                $no++;
                                }
                                ?>
                                
                                            
                            </tbody>
                            </table>
                                  
                        <br />
                        <br />
                        <br />


