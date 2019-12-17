 <?php
error_reporting(E_ALL & ~E_NOTICE);
/* Displays user information and some useful messages */
session_start();
require 'server.php';
include 'edit.php';



	
?>
 <html>
 
					<body>
			<div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                              <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Reservation No.</th>
                                            <th>Adviser</th>
                                            <th>Organization</th>
                                            <th>Activity</th>
                                            <th>Date</th>
                                            <th>Status</th>
											<th>comments</th>
                                        </tr>
                                    </thead>              
                                    <tbody> 
                         <?php 
                                    
                                        $sql = "SELECT * FROM reservation"; // table name
                                        $result = $db->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                    ?>              

										<?php
                                            while($row = $result->fetch_assoc()) 
											echo "<tr><th><a href='edit.php?edit=$row[reservation_id]'>$row[reservation_id]</a></th> <th>$row[adviser]</th>  <th>$row[organization]</th>
										<th>$row[activity]</th> <th>$row[event_date]</th>
										<th>$row[status]</th>
										<th>$row[comments]</th>
					</a>";{
                                        ?>
                                        
                                       <?php 
                                           }
                                            } 
                                        ?>
                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
		
				
					</body>
</html>