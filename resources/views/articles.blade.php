<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 JQuery UI Autocomplete Search Example - cemtaner.com</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
     
    <div class="container my-5 d-flex justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">Search Form</div>
                <div class="card-body">
                    <form> 
                        <div class="form-group">
                            <input type="text" class="typeahead form-control" id="search-article" placeholder="Search article title..">
                        </div>
                    </form>
                </div>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Articles</li>
                    @foreach($articles as $item)
                        <li class="list-group-item">{{ $item->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
     
<script type="text/javascript">  
    $( "#search-article" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: '{{ route('search') }}',
            type: 'GET',
            dataType: "json",
            data: {
               search: request.term
            },
            success: function( data ) {
               response( data );
            }
          });
        },
        select: function (event, ui) {
           $('#search-article').val(ui.item.label);
           return false;
        }
      });
  
</script>
</body>
</html>