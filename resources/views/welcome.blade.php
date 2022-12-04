@extends ('header')

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Add <b>Product</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href= "{{ url('list/products/'.request()->route('categoryId')) }}" class="btn btn-primary" ><i class="material-icons">&#xE15C;</i> <span>Back</span></a>
                       
                    </div>
                </div>
            </div>
            <div class="modal-content">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                     @csrf
            @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
            @endif 

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="modal-body">  
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control"  name ="name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="numeric" class="form-control" name ="price">
                    </div>
                   
                </div>
                <div class="modal-footer">
                   <a href= "{{ url('list/products/'.request()->route('categoryId')) }}"> <input type="button" class="btn btn-default"  value="Cancel"></a>
                 <button type="submit" class="btn btn-success">Submit</button>

                    <!-- <input type="submit" class="btn btn-success" value="Add"> -->
                </div>
                   <input type="hidden" name="categoryId" value="{{request()->route('categoryId')}}" >

            </form>
        </div>
    
        </div>
    </div>        
</div>
@extends ('footer')
