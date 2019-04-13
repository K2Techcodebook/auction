
@extends('layouts.site')

@section('title') Add Items @endsection

@section('content')
       <!-- DASHBOARD CONTENT -->
       <div class="dashboard-content">
            <!-- HEADLINE -->
            <div class="headline buttons primary">
                <h4>Add Product</h4>
            </div>

          @if(session('success'))

          <div class="alert alert-success"> {{session('success')}} </div> 

          @endif


          @if(session('error'))

          <div class="alert alert-error"> {{session('error')}} </div> 

          @endif
            		<!-- FORM BOX ITEMS -->
			<div class="form">
				<!-- FORM BOX ITEM -->
				<div class="form-box-item">
					<h4>Itmes Information</h4>
					<hr class="line-separator">
					<!-- PROFILE IMAGE UPLOAD -->
			
					<!-- PROFILE IMAGE UPLOAD -->
				
					<form  action="{{route('uploadItem')}}" method="POST"  enctype="multipart/form-data">
					@csrf
						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="category" class="rl-label required">Select Category</label>
							<label for="category" class="select-block">
								<select name="category_id" id="category">
                                @foreach($categories as $category)
                                	<option value="{{$category->id}}">{{$category->categogry_name}}</option>
                                @endforeach
								
								</select>
								<!-- SVG ARROW -->
								<svg class="svg-arrow">
									<use xlink:href="#svg-arrow"></use>
								</svg>
								<!-- /SVG ARROW -->
							</label>
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_name" class="rl-label required">Name of the Item (Max 40 Characters)</label>
							<input type="text" id="item_name" name="item_name" placeholder="Enter them item name here..."required/>

							
							
                            @if ($errors->has('item_name'))

                            <br/>
                            <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('item_name') }}</strong>
                            </span>
                         
                            @endif
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_name" class="rl-label required">Bid Amount</label>
							<input type="text" id="item_name" name="bid" placeholder="Enter bid amount here..." required/>

							
							
                            @if ($errors->has('bid'))

                            <br/>
                            <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('bid') }}</strong>
                            </span>
                         
                            @endif
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="item_name" class="rl-label required">Start time</label>
							<input type="datetime-local" id="item_name" name="start_time" placeholder="Enter them item name here..." required/>

							
							
                            @if ($errors->has('start_time'))

                            <br/>
                            <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('start_time') }}</strong>
                            </span>
                         
                            @endif

							
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container half">
							<label for="item_name" class="rl-label required">End time</label>
							<input type="datetime-local" id="item_name" name="end_time" placeholder="Enter them item name here..." required/>

							
                            @if ($errors->has('end_time'))

                            <br/>
                            <span class="invalid-feedback" role="alert">
                            <strong style="color:red">{{ $errors->first('end_time') }}</strong>
                            </span>
                         
                            @endif
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container">
							<label for="item_description" class="rl-label required">Item Description</label>
							<textarea id="item_description" name="description" placeholder="Enter them item description here..." required></textarea>

							@if ($errors->has('description'))
           
							<br/>
							<br/>
							<span class="invalid-feedback" role="alert">
							<strong style="color:red">{{ $errors->first('description') }}</strong>
							</span>

							@endif
						</div>
						<!-- /INPUT CONTAINER -->

						<!-- INPUT CONTAINER -->
						<div class="input-container fallback">
							<label class="rl-label required">Upload Main File</label>
							<!-- UPLOAD FILE -->
							<div class="upload-file ">
								<div class="upload-file-actions">
                                <input type="file" name="file[]" id="file" onchange="chooseImage(event)" multiple>
									
						
								</div>


							@if ($errors->has('file'))

							<br/>
							<span class="invalid-feedback" role="alert">
							<strong style="color:red">{{ $errors->first('file') }}</strong>
							</span>

							@endif
								
						
							<!-- UPLOAD FILE -->
						</div>
						</div>


						<div class="input-container" id="imagePreviewDiv">
					
						</div>



				
						<!-- /INPUT CONTAINER -->

					
			<!-- /FORM BOX ITEM -->
			<div class="input-container">
			<hr class="line-separator">
						<button class="button big primary">Submit Item</button>	
			
				</div>	
				
					</form>


               
					

                    
				</div>
				
            </div>

		
				
            
            </div>
            </div>

  @endsection


  @section ('footer')


@endsection





<script>

function chooseImage(event){
	//get the file and preview
	var files = document.getElementById('file');

	//check for the total image 
	if(event.target.files.length > 5){
	   
		$("body").xmalert({
        x: "right",
        y: "top",
        xOffset: 30,
        yOffset: 30,
        alertSpacing: 40,
        lifetime: 6000,
        fadeDelay: 0.3,
        template: "messageError",
        title: "Error!",
        paragraph: "Too many images max of 5"
    });
	files.value = '';
	return false;

	}

	
    var i =0;
	var event = event;

	
	for(i = 0; event.target.files.length > i;  i++){
		console.log(event.target.files[i].name);
  
		//check the file type

	


		if (event.target.files[i].name.split('.').pop() != "jpg" && event.target.files[i].name.split('.').pop() != "png" && event.target.files[i].name.split('.').pop() != "jpeg" && event.target.files[i].name.split('.').pop() != "JPG" && event.target.files[i].name.split('.').pop() != "PNG" && event.target.files[i].name.split('.').pop() != "JPEG") {
        
       $("body").xmalert({
        x: "right",
        y: "top",
        xOffset: 30,
        yOffset: 30,
        alertSpacing: 40,
        lifetime: 6000,
        fadeDelay: 0.3,
        template: "messageError",
        title: "Error!",
        paragraph: "File extension not supported"
        });
	   files.value = '';



		}else{
           
		showImages(event,i);
		}
	
	
	}
  

}



function showImages(event,i){

var imagePreviewDiv = document.getElementById('imagePreviewDiv');
imagePreviewDiv.innerHTML = "";
  

var reader = new FileReader();
reader.onload = function() {
preveiwSendFile = reader.result;
    //imagePreview.src = preveiwSendFile;
imagePreviewDiv.innerHTML +=`<img src="${preveiwSendFile}"  style="height:200px; width:200px; margin:5px; border-width:2px; border-color:grey;"/>`;
   
            
}
reader.readAsDataURL(event.target.files[i]);


}
</script>