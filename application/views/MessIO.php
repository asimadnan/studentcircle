


<div class="container" style="padding-top:100px">
<h1 >
	Mess In Out

</h1>


 
    <form method="post" action="">
	   <fieldset class="form-group">
		        <label for="exampleSelect1">Mess Status</label>
		        <select class="form-control" id="exampleSelect1">
		          <option>Mess-In</option>
		          <option>Mess-Out</option>   

		        </select>
      </fieldset>

      	   <fieldset class="form-group">
      	   		  <input type="date" name="MessInout" placeholder="">
      </fieldset>
    </form>


				<div class="table" >
								<table class="table">
									<thead>
										<tr>
											<th>Date</th>
											<th>Mess Status</th>
										</tr>
									</thead>
									<tbody>



    <?php for ($i=0; $i < 10; $i++) {   ?>
    	

  										<tr>
											<td>12-1-2016</td>
											<td>Mess In</td>

										</tr>


    <?php }?>
    



    </tbody>
									<tfoot>	
									</tfoot>
								</table>
							</div>

</div>