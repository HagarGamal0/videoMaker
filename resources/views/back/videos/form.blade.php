@csrf            
   <div class="row">                 
 @php $name='name'  ;  @endphp   

<div class="col-md-6">
 <div class="form-group bmd-form-group">
 <label class="bmd-label-floating">Video Name</label>
<input type="text" name={{$name}} value="{{isset($row) ? $row->{$name} : '' }}" 
class="form-control @error($name) is-invalid @enderror">
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
<input type="text" name={{$key}}
 value="{{isset($row) ? $row->{$key} : '' }}" 
 class="form-control @error($key) is-invalid @enderror ">                 
      @error($key)
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
   </div>
       </div>

      @php $yo='youtube' ;  @endphp

       <div class="col-md-6">
      <div class="form-group bmd-form-group">
      <label class="bmd-label-floating">Youtube url</label>
<input type="url" name={{$yo}} value="{{isset($row) ? $row->{$yo} : '' }}"
 class="form-control @error($yo) is-invalid @enderror ">               
     @error($yo)
     <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
     </span>
     @enderror
  </div>
      </div>

     @php $key='published' ;  @endphp   

<div class="col-md-6">
<div class="form-group bmd-form-group">
<label class="bmd-label-floating">Video Status</label>
<select name={{$key}} class="form-control 
@error($key) is-invalid @enderror ">

 <option value="1"{{isset($row) && $row->{$key}== 1 ? 'selected': '' }}  >published</option>
 <option value="0" {{isset($row) && $row->{$key} == 0 ? 'selected': '' }} >hidden</option>
                </select>
    @error($key)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

 </div>
     </div>

      @php $key='category_id' ;  @endphp

     <div class="col-md-6">
    <div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Video Category</label>
    <select name={{($key)}} class="form-control
     @error($key) is-invalid @enderror ">
 @foreach ($categories as $category)     
   <option value="{{$category->id}}"
     {{isset($row) && $row->{$key} == $category->id ? 'selected' : '' }} >{{$category->name}}</option>
@endforeach
</select>                 
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
         <label class="bmd-label-floating">Video Describtion</label>
   
<textarea name={{$des}} rows="5" class="form-control 
  @error($des) is-invalid @enderror" cols="30" rows="10">{{isset($row) ? $row->{$des} : '' }}</textarea>
               @error($des)
               <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
             </span>
         @enderror
                    
         </div>
        </div>

  
        @php $des='meta_des';  @endphp                
  <div class="col-md-12">
   <div class="form-group bmd-form-group">
     <label class="bmd-label-floating">Meta Describtion</label>
<textarea name={{$des}} rows="2" class="form-control
 @error($des) is-invalid @enderror" cols="30" rows="10">{{isset($row) ? $row->{$des}: '' }}</textarea>
                    @error($des)
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                  </span>
              @enderror
                         
              </div>
             </div>


   @php $key='skills[]' ;  @endphp

     <div class="col-md-6">
    <div class="form-group bmd-form-group">
    <label class="bmd-label-floating">Skills</label>
    <select name={{($key)}} multiple style="height: 100px" class="form-control
     @error($key) is-invalid @enderror"  >
 @foreach ($skills as $skill)     
   <option value="{{$skill->id}}" {{ in_array($skill->id , $selectedSkills ) ? 'selected': '' }}>{{$skill->name}}</option>
@endforeach
</select>                 
   @error($key)
   <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
   </span>
   @enderror

</div>
    </div>