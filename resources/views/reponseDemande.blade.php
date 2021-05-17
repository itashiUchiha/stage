<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                    <div class="card-header">
                        Reponse Demande 
                    </div>
                    <div class="card-body">
                        @if (Session::has("send_reponse"))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('send_reponse')}}
                            </div>
                        @endif
                        <form action="{{route("send_reponse")}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$suivie->id}}">
                            <div class="form-group">
                                <label for="title">etat_demande</label>
                                <input type="text" name="etat_demande" class="form-control" placeholder="enter post title" value="{{$suivie->etat_demande}}">
                            </div>
                            <div class="form-group">
                                <label for="body">commentaire </label>
                                <textarea name="commentaire" class="form-control"  rows="3">{{$suivie->commentaire}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">fichier</label>
                                <input type="file" name="fichier" class="form-control"  value="{{$suivie->fichier}}">
                            </div>
                            <button type="submit" class="btn btn-success"> Envoyer</button>
                        </form>
                    </div>
                </div>

                </div>
                
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>