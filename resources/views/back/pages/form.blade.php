@csrf
                      
                  
   <div class="row">
                      @php $name='name' ;  @endphp
                      
    <div class="col-md-6">
      <div class="form-group bmd-form-group">
          <label class="bmd-label-floating">Pages Name</label>
          <input type="text" name={{$name}} value="{{isset($row) ? $row->{$name} : '' }}" class="form-control @error($name) is-invalid @enderror ">
      
          @error($name)
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
       @enderror

      </div>             
       </div>
        </div>

        @php $key='meta_keywords' ;  @endphp

        <div class="col-md-6">
       <div class="form-group bmd-form-group">
       <label class="bmd-label-floating">Meta Keyword</label>
  <input type="text"  name={{$key}}  value="{{isset($row) ? $row->{$key}: '' }}" class="form-control @error($key) is-invalid @enderror ">
                    
      @error($key)
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror

   </div>
       </div>



        @php $des='des' ;  @endphp

                      
        <div class="col-md-12">
       <div class="form-group bmd-form-group">
         <label class="bmd-label-floating">Page Describtion</label>
   
      <textarea name="{{$des}}" class="form-control @error($des) is-invalid @enderror" cols="30" rows="10">{{isset($row) ? $row->{$des}: '' }}</textarea>
               @error($des)
               <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
             </span>
         @enderror
                    
         </div>
        </div>

  
  
            @php $des='meta_des' ;  @endphp

                      
             <div class="col-md-12">
            <div class="form-group bmd-form-group">
              <label class="bmd-label-floating">Meta Describtion</label>
        
           <textarea name="{{$des}}" rows="5" class="form-control @error($des) is-invalid @enderror" cols="30" rows="10">{{isset($row) ? $row->{$des}: '' }}</textarea>
                    @error($des)
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
              @enderror
                         
              </div>
             </div>