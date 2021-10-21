<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Posts</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Skynet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/create')}}">Create</a>
        </li>    
      </ul>
    </div>
  </div>
</nav> 
<div class="table-section">
  <table class="table" id="posttable">
    <thead>
      <tr>
        <th scope="col">Id</td>
        <th scope="col">User Id</td>
        <th scope="col">Title</td>
        <th scope="col">Body</td>
        <th scope="col">Action</td>
      </tr>
    </thead>
    <tbody id="tablecontent">
  @foreach($posts as $post)
    <tr>
      <th scope="row" class="postid">{{$post->id}}</th>
      <td class="postUser">{{$post->userId}}</td>
      <td class="postTitle">{{$post->title}}</td>
      <td class="postBody">{{$post->body}}</td>
      <td class="condition"><input type="checkbox" name="" class="ischecked"></td>
    </tr>
  @endforeach
  </tbody>
  </table>
  <div class="mb-3 text-center">
  {{$posts->links()}}
  </div>
  <div class="mb-3 text-center">
    <button class="btn btn-primary" id="excelexport" onclick="exportToExcel()">
      Export to Excel
    </button>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

<script>
    exportToExcel=()=>{
      selectedValues=[];
      let table=document.querySelector('#tablecontent');
       //console.log(table.rows);   
      
        for(let i=0;i<table.rows.length;i++)
        {
          let con=table.rows[i].querySelector('.condition').lastChild.checked;
          if(con==true)
          {
            let data={};
            let id=table.rows[i].querySelector('.postid').innerText;
            let name=table.rows[i].querySelector('.postUser').innerText;
            let title=table.rows[i].querySelector('.postTitle').innerText;
            let body=table.rows[i].querySelector('.postBody').innerText;
            data.id=id;
            data.userId=name;
            data.title=title;
            data.body=body;
            selectedValues.push(data);
          }
        }
      let users=XLSX.utils.book_new();
      let file=XLSX.utils.json_to_sheet(selectedValues);
      XLSX.utils.book_append_sheet(users,file,"users");
      XLSX.writeFile(users,"users.csv");
     
      
    }
</script>
</body>
</html>