<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!--any con get
	<form action="{{ url('any') }}" method="get">
		<input type="submit" value="Submit"/>
	</form>
	<a href="{{ url('any') }}">any con get</a>
	<hr>
	any con delete
	<form action="{{ url('any') }}" method="post">
		@method('delete')
		@csrf
		<input type="submit" value="Submit"/>
	</form>
	<hr>
	any con post
	<form  action="{{ url('any') }}" method="post">
		@csrf
		<input type="submit" value="Submit"/>
	</form>
	<hr>
	any con put
	<form  action="{{ url('any') }}" method="post">
		@method('put')
		@csrf
		<input type="submit" value="Submit"/>
	</form>
	<hr>
	get
	<form  action="{{ url('get') }}" method="get">
		<input type="submit" value="Submit"/>
	</form>
	<hr>
	delete
	<form  action="{{ url('delete') }}" method="post">
		@method('delete')
		@csrf
		<input type="submit" value="Submit"/>
	</form>
	<hr>
	post
	<form  action="{{ url('post') }}" method="post">
		@csrf
		<input type="submit" value="Submit"/>
	</form>
	<hr>
	put
	<form  action="{{ url('put') }}" method="post">
		@method('put')
		@csrf
		<input type="submit" value="Submit"/>
	</form>-->
    Bikes:<br>
    </div>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <!--<th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>-->
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            Kawasaki
                        </td>
                        <td>
                            200
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="post">
								@method('delete')
								@csrf
								<input type="submit" value="delete"/>
							</form>
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="post">
								@method('put')
								@csrf
								<input type="submit" value="put"/>
							</form>
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="get">
								<input type="submit" value="get"/>
							</form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            Yamaha
                        </td>
                        <td>
                            300
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="post">
								@method('delete')
								@csrf
								<input type="submit" value="delete"/>
							</form>
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="post">
								@method('put')
								@csrf
								<input type="submit" value="put"/>
							</form>
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="get">
								<input type="submit" value="get"/>
							</form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            Yamaha
                        </td>
                        <td>
                            400
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="post">
								@method('delete')
								@csrf
								<input type="submit" value="delete"/>
							</form>
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="post">
								@method('put')
								@csrf
								<input type="submit" value="put"/>
							</form>
                        </td>
                        <td>
                               <form  action="{{ url('delete') }}" method="get">
								<input type="submit" value="get"/>
							</form>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <form  action="{{ url('delete') }}" method="post">
			@csrf
			<input type="submit" value="post"/>
		</form>
    </div>
</body>
</html>