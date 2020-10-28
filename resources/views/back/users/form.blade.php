@csrf
                      
                  
   <div class="row">
                      @php $name='name' ;  @endphp
                      
    <div class="col-md-6">
      <div class="form-group bmd-form-group">
          <label class="bmd-label-floating">Username</label>
          <input type="text" name={{$name}} value="{{isset($row) ? $row->{$name} : '' }}" class="form-control @error($name) is-invalid @enderror ">
      
          @error($name)
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
       @enderror

      </div>             
       </div>
        </div>
  
        @php $email='email' ;  @endphp

             <div class="col-md-6">
            <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email address</label>
       <input type="email"  name={{$email}}  value="{{isset($row) ? $row->email: '' }}" class="form-control @error($email) is-invalid @enderror ">
                         
           @error($email)
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
           @enderror
    
        </div>
            </div>

            @php $password='password' ;  @endphp

                      
             <div class="col-md-6">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">password</label>
           <input type="password"  name={{$password}}   class="form-control @error($password) is-invalid @enderror">
                    @error($password)
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
              @enderror
                         
              </div>
             </div>