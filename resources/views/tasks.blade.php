@extends('app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

<div id="nav">
    <!-- Current Tasks -->
    @if (count($tasks) > 0)
			
		<div class="panel panel-default">
			<div class="panel-heading">
                Current Templates
            </div>
			<form action="/task" method="POST" class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Task Name -->
				<div class="form-group">
					<label for="task" class="col-sm-3 control-label">Template</label>

					<div class="col-sm-6">
						<input type="text" name="name" id="task-name" class="form-control">
					</div>
				</div>

				<!-- Add Task Button -->
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-default">
							<i class="fa fa-plus"></i> Add Template
						</button>
					</div>
				</div>
			</form>
			
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Templates</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        
                                        <button>Delete</button>
                                       
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
	<!-- Current Zones -->
    @if (count($tasks) > 0)
			
		<div class="panel panel-default">
			<div class="panel-heading">
                Current Zones
            </div>
			<form action="/task" method="POST" class="form-horizontal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<!-- Task Name -->
				<div class="form-group">
					<label for="task" class="col-sm-3 control-label">Template</label>

					<div class="col-sm-6">
						<input type="text" name="name" id="task-name" class="form-control">
					</div>
				</div>

				<!-- Add Task Button -->
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<button type="submit" class="btn btn-default">
							<i class="fa fa-plus"></i> Create a Zone
						</button>
					</div>
				</div>
			</form>
			
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Templates</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        
                                        <button>Delete</button>
                                       
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
<div id="section">
	<div id="map-canvas" style="width:1400px;height:800px;"></div>
</div>
<script>
var map = new google.maps.Map(document.getElementById("map-canvas"),{
    center:{
        lat: 27.72,
        lng: 85.36
    },
    zoom:15
});

var marker = new google.maps.Marker({
    postion:{
        lat: 27.72,
        lng: 85.36    
    },
    map:map,
    draggale:true
});

var searchBox = new google.maps.places.SearchBox(document.getElementById('pac-input'));

</script>
@endsection