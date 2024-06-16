<div class="container-fluid">
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

<div class="table-responsive"> 
    <table class="table table-bordered table-striped text-center" data-toggle="table" data-show-columns="true" data-search="true"data-pagination="true">
    <thead>
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Message</th>
                <th class="text-center">Date</th>
                <th class="text-center">Show Full Message</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($getMessages as $mess) {
                    ?>
                <tr>
                    <td><?=$mess["sentBy"]?></td>
                    <td><?=$mess["mess"]?></td>
                    <td><?=$mess["thedate"]?></td>
                    <td><a href="?showMessage=<?=$mess["cp_messages_id"]?>">Show</a></td>
                                                                                   
                </tr>
                <?php
          }                                     
                ?>
        </tbody>
    </table>               
</div>
</div>