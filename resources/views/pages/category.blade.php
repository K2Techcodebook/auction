@extends('layouts.site')

@section('title') Create - Category @endsection

@section('content')



<!-- FORM POPUP -->
<div class="form-popup">
  <!-- CLOSE BTN -->
  <div class="close-btn">
      <!-- SVG PLUS -->
      <svg class="svg-plus">
          <use xlink:href="#svg-plus"></use>
      </svg>
      <!-- /SVG PLUS -->
  </div>
  <!-- /CLOSE BTN -->
  <!-- FORM POPUP CONTENT -->
  <div class="form-popup-content">
    <h4 class="popup-title">    {{ __('Login') }} to your Account</h4>
    <div class="col-lg-10 col-lg-offset-2">
      @if (session('status'))
       <div class="alert alert-success">
         {{ session('status') }}
       </div>
       @endif
       @if (count($errors) > 0)
         @foreach ($errors->all() as $error)
       <div class="alert alert-danger">{{ $error }}</div>
         @endforeach
       @endif
     </div>
      <!-- LINE SEPARATOR -->
      <hr class="line-separator">
      <!-- /LINE SEPARATOR -->
       <form id="send-announcement-form" role="form"  method="POST" action="{{route('store_industry')}}">
        @csrf
        <div id="cat_fields"></div>
        <label for="username" class="rl-label">{{ __('Category Name') }}</label>
        <input id="catname[]" type="text" placeholder="Enter Industries Name...." class="form-control{{ $errors->has('catname') ? ' is-invalid' : '' }}" name="catname[]" value="{{ old('catname') }}" required autofocus>
         @if ($errors->has('catname'))
         <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('catname') }}</strong>
         </span>
         @endif

         <div class="input-group-btn">
           <button class="btn btn-success" type="button"  onclick="cat_fields();"> <span class="icon-plus-sign" aria-hidden="true"></span>Add More  </button>
         </div>
         <button type="submit" class="button mid dark">Save <span class="primary">Now!</span></button>
      </form>
    </div>
    <!-- /CLOSE BTN -->
<!-- FORM POPUP CONTENT -->
    <div class="form-popup-content">
        <h4 class="popup-title">    ADD A CATEGORY </h4>
        <div class="col-lg-10 col-lg-offset-2">
                                   @if (session('status'))

                                                 <div class="alert alert-success">
                                                     {{ session('status') }}
                                                 </div>
                                             @endif
                                             @if (count($errors) > 0)
                                                 @foreach ($errors->all() as $error)

                                                     <div class="alert alert-danger">{{ $error }}</div>

                                                 @endforeach

                                             @endif


                                   </div>
        <!-- LINE SEPARATOR -->
        <hr class="line-separator">
        <!-- /LINE SEPARATOR -->

         <form id="send-announcement-form" role="form"  method="POST" action="{{route('store_industry')}}">
            @csrf
            <div id="cat_fields">

            </div>
            <label for="username" class="rl-label">{{ __('Category Name') }}</label>

            <input id="catname[]" type="text" placeholder="Enter Industries Name...." class="form-control{{ $errors->has('catname') ? ' is-invalid' : '' }}" name="catname[]" value="{{ old('catname') }}" required autofocus>

                                         @if ($errors->has('catname'))
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $errors->first('catname') }}</strong>
                                             </span>
                                         @endif

                                         <div class="input-group-btn">
                                                                           <button class="btn btn-success" type="button"  onclick="cat_fields();"> <span class="icon-plus-sign" aria-hidden="true"></span>Add More  </button>
                                                                           </div>


            <button type="submit" class="button mid dark">Save <span class="primary">Now!</span></button>


        </form>
    </div>
      </div>



  @endsection



@section ('footer')
<script >
var room = 1;
function cat_fields() {
   room++;
   var objTo = document.getElementById('cat_fields')
   var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
   divtest.innerHTML = ' <div class="form-group row"> <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>     <div class="col-md-6"> <input type="text" class="form-control" id="catname[]" name="catname[]" value="" placeholder="Enter Industries Name....">    </div> </div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_cat_fields('+ room +');"> <span class="icon-minus-sign" aria-hidden="true"></span>Remove </button></div></div></div></div><div class="clear"></div>';
   objTo.appendChild(divtest)
}
function remove_cat_fields(rid) {
  $('.removeclass'+rid).remove();
}
</script>

@endsection
