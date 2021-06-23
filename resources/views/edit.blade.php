@extends('layouts.admin')
@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Add Category</h1>
             <div class="btn-group mr-2">
                    <a href="{{url('/')}}" class="btn btn-outline-secondary">All Categories</a>
                    @csrf             </div>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            
          <div class="card-body">
          <form action="{{url('update/'.$categoriess->id)}}" method="post">
                @csrf
@method('PATCH')
                                      <input type="hidden" name="_token" value="ZTp076smOAQZQcLjplDuaAjj9PukkjH4VJYbJlbZ">
                        <label for="name">Category Name:</label>
                        <input type="text" value='{{$categoriess->Name}}' class="form-control" name=" Name" />
              
                  
                    <button type="submit" value="Update" class="btn btn-primary">Update</button>
                    @csrf

                </form>
            </div>
        </div>
    </main>
  </div>
</div>
@endsection
