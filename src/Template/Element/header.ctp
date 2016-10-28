	<div class="container-fluid back">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">WebSiteName</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><li><?php echo $this->Html->link(
    'Posts',
    ['controller' => 'Publishs', 'action' => 'index'],['class'=>'aja']
); ?></li></li>
		      <li class="aja"><?php echo $this->Html->link(
    'Users',
    ['controller' => 'Users', 'action' => 'index'],['class'=>'aja']
); ?></li>
<li class="aja"><?php echo $this->Html->link(
    'Products',
    ['controller' => 'Products', 'action' => 'index'],['class'=>'aja']
); ?></li>
			
		    </ul>
		    <ul class="nav navbar-nav navbar-right">	
		      	<li>
		      		<?php

		      			if(!$this->request->session()->read('Auth.User.username')) 
		      			echo $this->Html->link('Register',['controller' => 'Users', 'action' => 'add']);
					?>
				</li>
		      	<li>
		      		<?php
		      			if(!$this->request->session()->read('Auth.User.username'))
		      			{
			   	       		echo $this->Html->link('Login',['controller' => 'Users', 'action' => 'login']); 
			   	       	}
			   	       	else
			   	       	{
			   	       		echo $this->Html->link('Logout',['controller' => 'Users', 'action' => 'logout']); 
			   	       	}
		    		?>
		    	</li>
		    </ul>
		  </div>
		</nav>

		<div class="row">
			<h1 style="color:white; font-size: 80px" align="center">Necesitas Clases</h1>
			<h3 style="color:white; font-size:30px" align="center">Busta.Contata.Aprnde</h3>
		</div>

		<div class="row" style="margin-top: 2%;">
			<div class="col-md-4">
				<div class="circle" id="div"></div>
				<h3 style="color:white; font-size:30px" align="center">Tutor Academy</h3>

			</div>
			<div class="col-md-4">

							<div class="circle" id="div1"></div>
	
				<h3 style="color:white; font-size:30px" align="center">Tutor Academy</h3>
			</div>
			<div class="col-md-4">
					<div class="circle" id="div2"></div>
			
				<h3 style="color:white; font-size:30px" align="center">Tutor Academy</h3>
			</div>
		</div>

		<div class="row" id="h1">
			
			<div class="col-md-push-1 col-md-3">
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Keyword   Menu">

			</div>

			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="State">

				 </div>
			</div>
			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="Location">

				 </div>
			</div>

			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
<button type="button" class="btn btn-warning" style="width: 100%;">Submit</button>

				 </div>
			</div>
		</div>


		<div class="row" id="h2">
			
			<div class="col-md-push-1 col-md-3">
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Keyword  Menu 1">

			</div>

			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="State">

				 </div>
			</div>
			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="Location">

				 </div>
			</div>

			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
<button type="button" class="btn btn-warning" style="width: 100%;">Submit</button>

				 </div>
			</div>
		</div>

		<div class="row" id="h3">
			
			<div class="col-md-push-1 col-md-3">
			<input type="text" class="form-control" id="exampleInputName2" placeholder="Enter Keyword   Menu 2">

			</div>

			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="State">

				 </div>
			</div>
			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
				   			<input type="text" class="form-control" id="exampleInputName2" placeholder="Location">

				 </div>
			</div>

			<div class="col-md-2 col-md-push-1">
				<div class="dropdown">
<button type="button" class="btn btn-warning" style="width: 100%;">Submit</button>

				 </div>
			</div>
		</div>

	</div>
	<script type="text/javascript">
		$(function(){
		    $("#h3").hide();
		    $("#h2").hide();
		    debugger;
		    $("#div").on("click", function(){
					 debugger;
					 $("#h1").show();
					$("#h3").hide();
					$("#h2").hide();
					$('#div').css('background-color', 'red');

					$('#div1').css('background-color', 'yellow');
					$('#div2').css('background-color', 'yellow');

		    });
		    $("#div1").on("click", function(){
		   		 $("#h3").hide();
		  		  $("#h1").hide();
		        
					$("#h2").show();
					$('#div1').css('background-color', 'red');
					$('#div2').css('background-color', 'yellow');

					$('#div').css('background-color', 'yellow');
		    });
		    $("#div2").on("click", function(){
		    	$("#h1").hide();
			    $("#h2").hide();
		        
				$("#h3").show();
					$('#div').css('background-color', 'yellow');
					$('#div1').css('background-color', 'yellow');

				$('#div2').css('background-color', 'red');
		    });
		    $("#tg1").on("click", function(){
		    		$('#tg1').css('background-color', 'orange');
		    		$('#tg1').css('color', 'white');
					$('#tg2').css('background-color', 'black');
					$('#tg2').css('color', 'black');
					

		    });

		     $("#tg2").on("click", function(){
		    		$('#tg2').css('background-color', 'orange');
		    		$('#tg2').css('color', 'white');
					$('#tg1').css('background-color', 'black');
					$('#tg1').css('color', 'white');
					

		    });
		});
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
    $('.aja').click(function() {
       // alert(this.href);//return false;
       // UrlToSend = this.href;
       /* $.post(UrlToSend,
        function(result) {
            alert(result);
            $('body').html(result);
        });*/
        $.ajax({
        url: this.href,
        type: 'ajax',
        success: function(data) {
           // alert(data);
            $('#MainDiv').html(data);
        }
        });  
            return false;
        });
        //.change();
    });
      </script>