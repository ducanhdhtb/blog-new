@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 ">
            <div class="panel panel-default">
                <div class="panel-heading">Hello : <span style="color:red;font-weight: bold">{{ Auth::user()->name }}</span></div>

                <div class="panel-body">
                <div class="rows">
                    <div class="col-md-6">
                        <p>Address :<i><u>{{ Auth::user()->name }}</u></i></p>
                        <p>Email :<i><u>{{ Auth::user()->email }}</u></i></p>
                        <p>Join day :<i><u>{{ Auth::user()->created_at }}</u></i></p>
                        <p>level :
                        <i><u>
                        <?php if(Auth::user()->role == 0)
                        {
                            echo "Member";
                        }
                        else
                        {
                            echo "Admin";
                        }

                         ?>
                             
                         </u></i></p>
                        
                    </div>
                    <div class="col-md-6">Avartar</div>
                </div>
       
            

            </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: pink">Write Blog</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="" method="POST" role="form">                                    
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" id="" placeholder="Input field">
                            <br>

                            <label>Category</label>
                            <select name="category" class="form-control">
                                <option value="0">Love</option>
                                <option value="1">Romantic</option>
                                <option value="2">Bill</option>
                            </select>

                            <label for="">Content</label>
                            <textarea name="content" rows="7" class="form-control"></textarea>
                        </div>                
                        <div class="text-center">
                        <button type="submit" class="btn btn-danger">Submit</button>
                        </div>                
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

  
 
</div>
@endsection
