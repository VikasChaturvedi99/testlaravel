<html>
<head>
   <meta name="viewport" content="width=device-width">
   <title>Cloudinary Image Upload</title>
   <meta name="description" content="Prego is a project management app built for learning purposes">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container" style="margin-top: 100px;">
   <div class="row">
       <h4 class="text-center">
           Upload Images
       </h4>

       <div class="row">
           <div id="formWrapper" class="col-md-4 col-md-offset-4">
               <!-- <form class="form-vertical" role="form" enctype="multipart/form-data" method="post" action="{{ route('uploadImage')  }}">
                   {{csrf_field()}}
                   @if(session()->has('status'))
                       <div class="alert alert-info" role="alert">
                           {{session()->get('status')}}
                       </div>
                   @endif
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                       <input type="file" name="image_name" class="form-control" id="name" value="">
                       @if($errors->has('image_name'))
                           <span class="help-block">{{ $errors->first('image_name') }}</span>
                       @endif
                   </div>

                   <div class="form-group">
                       <button type="submit" class="btn btn-success">Upload Image </button>
                   </div>
               </form> -->
                       
               @if(session()->has('status'))
                       <div class="alert alert-info" role="alert">
                           {{session()->get('status')}}
                       </div>
                   @endif
               <form name="project-add" method="post" enctype="multipart/form-data" action="/uploadImage" >
                                        @csrf
                                        <!-- <label for="inputAddress">Add Project Name</label> -->
                                        <div class="d-flex">
                                            <div class="form-group">
                                                
                                                <input type="file" name="image_name" class="form-control" id="inputAddress" placeholder="Add New image">
                                                    @if($errors->has('image_name'))
                                                    <span class="help-block">{{ $errors->first('image_name') }}</span>
                                                    @endif
                                            </div>
                                            <div class="text-center">
                                            <button type="submit" class="btn btn-success">Upload Image </button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="col-lg-5 order-first order-md-last img-fluid" id="download-area">
                <img src="https://bananomonkeys.herokuapp.com/image?address=ban_1ttyqinz739g88tteqzyg3hwahg9oxbks8amsywqmim7j4afih7n9d1ssqjf&bg=t"
                    class="loaded" id="generated-monKey" alt="" href="#" onclick="downloadPNGImage(document.createElement('a'))" download>
            </div>

           </div>
       </div>
   </div>
</div>
</body>
<script >
function downloadPNGImage(linkElement) {
    var myDiv = document.getElementById('download-area');
    var myImage = myDiv.children[0];
    let downloadLink = myImage.src + "&format=png";
    linkElement.setAttribute('download', downloadLink);
    linkElement.href = downloadLink;
    linkElement.click();
}
</script>
</html>
