<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>laravel - dwes - product</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="{{ url('') }}">dwes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{$activeHome ?? ''}}">
                        <a class="nav-link" href="{{ url('') }}">Bikes</a>
                    </li>
            </div>
        </nav>
        <div class="modal fade" id="modalDeleteType" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
    		<div class="modal-content">
    		<div class="modal-header">
        	<h5 class="modal-title">Confirm delete</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
        	<p>Confirm delete <span id="deleteType">XXX</span>?</p>
        </div>
        <div class="modal-footer">
        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        	<form id="modalDeleteResourceForm" action="" method="post">
            	@method('delete')
            	@csrf
            	<input type="submit" class="btn btn-primary" value="Delete type"/>
        	</form>
        </div>
    </div>
  </div>
</div>
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h4 class="display-4">Bikes</h4>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <h3>Bike list</h3>
                </div>
	            <div class="row" style="margin-top: 8px;"></div>
	    			<div class="row" style="margin-top: 8px;">
	        			<table class="table table-striped">
	        	    		<thead>
	    	            		<tr>
	    	                		<th scope="col">ID</th>
	    	                		<th scope="col">Model</th>
	    	                		<th scope="col">Price</th>
	    	                		<th scope="col">Delete</th>
	    	                		<th scope="col">Edit</th>
	    	                		<th scope="col">Show</th>
	    	            		</tr>
	    	    	    		</thead>
		        	    		<tbody>
			    	                <tr>
			    	                    <td>
			    	                        1
			    	                    </td>
		    	                    	<td>
		    	                	        Yamaha
		    	            	        </td>
		    	        	            <td>
		    	    	                    300
		    		                    </td>
		    	                        <td>
			                               <form  action="{{ url('delete/1') }}" method="post">
												@method('delete')
												@csrf
											<input type="submit" value="delete"/>
										</form>
				                        </td>
				                        <td>
				                            <form  action="{{ url('show/1') }}" method="get">
												@method('put')
												@csrf
												<input type="submit" value="edit"/>
											</form>
				                        </td>
				                        <td>
				                            <form  action="{{ url('edit/1') }}" method="get">
												@csrf
												<input type="submit" value="show"/>
											</form>
				                        </td>
		    		                </tr>
			    	                <tr>
			    	                    <td>
			    	                        2
			    	                    </td>
		    	                    	<td>
		    	                	        Tesla
		    	            	        </td>
		    	        	            <td>
		    	    	                    350
		    		                    </td>
		    	                        <td>
			                               <form  action="{{ url('destro/2') }}" method="post">
											@method('delete')
											@csrf
											<input type="submit" value="delete"/>
										</form>
				                        </td>
				                        <td>
				                            <form  action="{{ url('edit/2') }}" method="post">
												@method('put')
												@csrf
												<input type="submit" value="edit"/>
											</form>
				                        </td>
				                        <td>
				                            <form  action="{{ url('show/2') }}" method="get">
												<input type="submit" value="show"/>
											</form>
				                        </td>
		    		                </tr>
			    	                <tr>
			    	                    <td>
			    	                        3
			    	                    </td>
		    	                    	<td>
		    	                	        Alfa romeo
		    	            	        </td>
		    	        	            <td>
		    	    	                    400
		    		                    </td>
		    	                        <td>
			                               <form  action="{{ url('destroy/3') }}" method="post">
											@method('delete')
											@csrf
											<input type="submit" value="delete"/>
										</form>
				                        </td>
				                        <td>
				                            <form  action="{{ url('edit/3') }}" method="post">
												@method('put')
												@csrf
												<input type="submit" value="edit"/>
											</form>
				                        </td>
				                        <td>
				                            <form  action="{{ url('show/3') }}" method="get">
												<input type="submit" value="show"/>
											</form>
				                        </td>
		    		                </tr>
	        		    		</tbody>
	        				</table>
	    				</div>
	    			<div class="row">
	        			<form  action="{{ url('create') }}" method="get">
							@csrf
							<input type="submit" value="add bike"/>
						</form>
	    			</div>
                <hr>
            </div>
        </main>
        <footer class="container">
            <p>&copy; IZV 2032</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{ url('assets/js/type-modal-delete.js') }}"></script>
    </body>
</html>