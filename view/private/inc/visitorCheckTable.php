<div class="container">
<div class="table-responsive"> 

                        <table class="table table-bordered table-striped text-center" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true">
                        <thead>
                                <tr>
                                    
                                    <th class="text-center" id="updateTableHeadName">Code</th>
                                    <th class="text-center" id="updateTableHeadTextEn">Name</th>
                                    <th class="text-center" id="updateTableHeadTextFr">Old</th>
                                    <th class="text-center" id="updateTableHeadType">New</th>
  
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // replace these with a foreach - $allText   
                                    $block =  'style="cursor: not-allowed;"';
                                    foreach ($visitors as $visitor) {
                                        ?>
                                    <tr>
                                        <td><?=$visitor["code"]?></td>
                                        <td><?=$visitor["nom"]?></td>
                                        <td><?=$visitor["curr"]?></td>
                                        <td><?=$visitor["new"]?></td>
                                        
                                              
                                    </tr>
                                    <?php
                              }                                     
                                    ?>
                            </tbody>
                        </table>
                            <form action="" method="POST" id = "visitorForm" class="d-flex justify-content-center">
                                <input type="text" name="visitorUpdate" class="d-none">
                                <button type="submit" class="btn btn-primary" id="mergeButton"></button>
                            </form>                        

                    </div>
                    </div>