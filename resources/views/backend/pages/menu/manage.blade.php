@extends('backend.template.layout')

@section('body-content')
<!-- main content start -->
<div class="main-content">
    <div class="container-fluid">
        
        <!-- page indicator start -->
        <section class="page-indicator">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li>
                            <i class="fas fa-bars"></i>
                        </li>
                        <li>
                            Menu
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page indicator end -->

        <!-- dashbaord statistics seciton start -->
        <section class="statistics">

          
            <!-- add row start -->
            <div class="row add-row">
                <div class="col-md-12 text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        add new menu
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="exampleModalLabel">menu</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('menuStore') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                    <div class="row">
                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control-file" name="name" >                                 
                                            </div>                                      
                                        </div>  

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <input type="text" class="form-control-file" name="description" >                                 
                                            </div>                                      
                                        </div>  

                                       

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input type="text" class="form-control-file" name="price" >                                 
                                            </div>                                      
                                        </div>  

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category_id">
                                                    <option>-Please Select a Category</option>
                                                    @foreach(App\Models\category::orderBy('id','desc')->get() as $category) 

                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                   @endforeach
                                                   
                                                </select>
                                                                              
                                            </div>                                      
                                        </div>  

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <img src="{{ asset('backend/images/thumbnail.jpg') }}" id="image_preview_container" class="default-thhumbnail" width="100px" alt=""> 
                                                <input type="file" class="form-control-file" name="image" id="image">                                 
                                            </div>                                      
                                        </div>  

                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add</button>                                    
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>   

                </div>
            </div>
            <!-- add row end -->


            <!-- manage row start -->
            <div class="row">

                
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>name</td>
                                <td>description</td>
                               
                                <td>price</td>
                                <td>Category</td>
                                <td>image</td>
                               
                                <td>action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($menus as $menu)
                            <tr>
                                <th>{{ $i }}</th>
                                <th>{{ $menu->name }}</th>
                                <th>{{ $menu->description }}</th>
                                <th>{{ $menu->price }}</th>
                                <th>{{ $menu->category->name }}</th>
                                <td>
                                    @if( $menu->image != NULL )
                                    <img src="{{ asset('images/menu/'.$menu->image) }}" class="img-fluid" width="50px" alt="">
                                    @else
                                    <p class="badge badge-danger">No image uploaded</p>
                                    @endif
                                </td>

                                
                                <td>
                                
                                <!-- edit start -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $menu->id }}">
                                    edit
                                </button>
                                <div class="modal fade" id="edit{{ $menu->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">menu</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('menuUpdate', $menu->id) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                               
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label> Image *</label>
                                                            <img src="{{ asset('images/menu/'. $menu->image) }}"  width="100px" alt=""> 
                                                            <input type="file" class="form-control-file" name="image">                                 
                                                        </div>                                      
                                                    </div>  
                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Name</label>
                                                        <input type="text" class="form-control-file" name="name" value="{{$menu->name}}">                                 
                                                        </div>                                      
                                                    </div>  
            
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <input type="text" class="form-control-file" name="description" value="{{$menu->description}}">                                 
                                                        </div>                                      
                                                    </div>  
            
                                                   
            
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control-file" name="price" value="{{$menu->price}}">                                 
                                                        </div>                                      
                                                    </div>  
            
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select name="category_id">
                                                                <option ">----Please Select a Category</option>
                                                                @foreach(App\Models\category::orderBy('id','desc')->get() as $category) 
            
                                                                <option value="{{$category->id}}" {{ ( $category->id == $menu->category_id) ? 'selected' : '' }}>{{$category->name}}</option>
                                                               @endforeach
                                                               
                                                            </select>
                                                                                          
                                                        </div>                                      
                                                    </div>  
            
                                                                                  
                                                </div>
                                                
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>                                    
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- edit end -->

                                <!-- delete start -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $menu->id }}">
                                    delete
                                </button>
                                <div class="modal fade" id="delete{{ $menu->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">menu delete</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('menuDelete', $menu->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-success">yes</button>
                                            </form>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete end -->

                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- manage row end -->

        </section>
        <!-- dashbaord statistics seciton end -->

    </div>
</div>
<!-- main content end -->
@endsection