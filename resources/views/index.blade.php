<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <main>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-8 mb-3">
                        <label for="searchInput" class="form-label">Search</label>
                        <input type="text" id="searchInput" class="form-control" placeholder="Search by Name/Department/Designation">
                    </div>
                    
                    <div class="row" id="userData">
                        @foreach ($users as $user)
                    <div class="col-md-4 mt-5 text-center">
                        <div class="card" style="width: 25rem;">
                            <div class="card-body">
                              <h5 class="card-title username">{{ $user->name }}</h5>
                              <h6 class="card-text userdesignation">{{ $user->designation->name }}</h6>
                              <p class="card-subtitle userdepartment">{{ $user->department->name }} </p>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            $(document).ready(function () {
                $('#searchInput').on('input', function () {
                    var query = $(this).val();
                    $.ajax({
                        url: '/', 
                        type: 'GET',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            console.log(data);
                            $('#userData').empty(); 
                            $('#userData').append(data); 
                        }
                    });
                });
            });
            
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
