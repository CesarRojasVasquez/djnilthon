<?php include "conexion.php";

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="ga.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="inicio.php"><img src="assets/images/nil.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="assets/images/nil.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="inicio.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Inicio</span></a></li>
                      
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                
                </div>
                <div class="user-dashboard">
                    <h1>Hola, Nilthon Santamaria Vasquez</h1>
                  
                    <div class="container">
	<div style="height:50px;"></div>
	<div class="well">
    <center><h2>Lista de Mensajes</h2></center>
    
    
	<div style="height:10px;"></div>
	<table width="100%" class="table table-striped table-bordered table-hover">
		<thead>
			<td align="center">Nombres Cliente</td>
			<td align="center">Correo Electronico</td>
      <td align="center">Celular</td>
      <td align="center">Mensaje</td>
		
		</thead>
		<tbody>
		<?php
			
			$query=mysqli_query($conn,"select * from `chat`");
			while($row=mysqli_fetch_array($query)){
				?>
				<tr>
				<td align="center"><span id="idchat<?php echo $row['idchat']; ?>"><?php echo $row['nombres']; ?></span></td>
        <td align="center"><span ><?php echo $row['correo']; ?></span></td>
        <td align="center" ><span ><?php echo $row['celular']; ?></span></td>
        <td align="center" ><span ><?php echo $row['mensaje']; ?></span></td>

       

			
       </tr>
       
				<?php
			}
		?>		
		</tbody>
	</table>
	</div>
	

	</div>
</div>
</div>
            
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Add Project</h4>
                </div>
                <div class="modal-body">
                            <input type="text" placeholder="Project Title" name="name">
                            <input type="text" placeholder="Post of Post" name="mail">
                            <input type="text" placeholder="Author" name="passsword">
                            <textarea placeholder="Desicrption"></textarea>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <button type="button" class="add-project" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>

</body>