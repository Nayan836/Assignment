<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registretion User Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
    <style>
    .container{
        padding-top: 40px;
    }
    .parsley-errors-list li{
      color: red;
      list-style: none;
    }
    </style>
</head>
<body>
    <div class="container">
    <div class="row">
       
       <div class="col-md-6 offset-md-3">
          <div class="card">
                    <div class="card-header">
                      Register new user
                   </div>
                   @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                  <div class="card-body">
                    <form id="registerForm" method="POST" action="{{route('auth.register')}}">
                         @csrf
                         <div class="form-group">
                             <label for="name">Nmae</label>
                             <input type="text" class="form-control" name="name"  >
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" required   >
                       </div>
                       <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" name="password"  >
                       </div>
                       <div class="form-group">
                          <label for="cpassword">Confirm Password</label>
                          <input type="password" class="form-control" name="password_confirmation" >
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone"  >
                     </div>
                      <button type="submit"  class="btn btn-primary">Submit</button>
               </form>
         </div>
        </div>
       </div>
    </div>
    </div>
    <script>
    $(function(){
       $('#registerForm').parsley();
    })
    </script>
</body>
</html>