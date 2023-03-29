<style>
     {
   box-sizing: border-box;
}

.formstyle h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 50px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    text-align: center;
}
.formstyle h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}

.post {
  border: 1px solid #c6c7cc;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 640px;
  margin-left: 28%;
margin-right:24%;
}
fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}
input {
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  margin: 0;
   
}
.account-info {
  padding: 20px 20px 0 20px;
}
.account-info label {
  color: #395870;
  display: block;
  font-weight: bold;
  margin-bottom: 20px;
}
.account-info input {
  background: #fff;
  border: 1px solid #c6c7cc;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
  color: #636466;
  padding: 6px;
  margin-top: 6px;
  width: 100%;
}
.account-action {
  background: #f0f0f2;
  border-top: 1px solid #c6c7cc;
  padding: 20px;
}
.account-action .btn {
  background: linear-gradient(#49708f, #293f50);
  border: 0;
  color: #fff;
  cursor: pointer;
  font-weight: bold;
  float: center;
  padding: 8px 16px;
}
.account-action label {
  color: #7c7c80;
  font-size: 12px;
  float: center;
  margin: 10px 0 0 20px;
}
.textarea{
	border: 1px solid #c6c7cc;
  border-radius: 5px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
}

.account-info select{
  width:100%;
  background: #fff;
  border: 1px solid #c6c7cc;
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1);
  color: #636466;
  padding: 6px;
  margin-top: 6px;
  
}

.mc
{
    width: 75%;
    height: 43px;
    padding: 12px 20px;
    margin-left: 80px;
    margin-top: 25px;
    display: inline-block;
    border: 1px solid #ccc;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px;
    box-sizing: border-box;
    font-style: courier;
    

}



.buttoon
{
  
  float: right;
  margin-right: 97px;
  margin-top: -43px;

  background-color:green;
  border-top-right-radius:  4px;
  border-bottom-right-radius: 4px;
  color: white;
  font-family: verdana;
  font-size: 17px;
  height:43px; 
  width:160px;
  cursor: pointer;
    border: 2px solid green;
}
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
        <div class="pull-right">
            <a class=" btn" href="{{ route('projects.index') }}"> رجوع</a>
        </div>
    </div>
</div>
<head>
<title>تعديل مشروع</title>
</head>
<link rel="stylesheet" type="text/css" href="css/create.css">
<script>
   function validatePost() {
    var x = document.forms["myPost"]["topic_subject"].value;
    if (x == "") 
        {
        alert("title is required");
        return false;
      }
      var y = document.forms["myPost"]["topic_descr"].value;
    if (y == "") 
        {
        alert("Please write a Description");
        return false;
      }
    }
</script>
<style>

.post {
  border: 1px solid #c6c7cc;
  border-radius: 5px;
  font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;
  overflow: hidden;
  width: 640px;
  margin-left: 28%;
margin-right:24%;
}

</style>
<body>
    <br><br>
<div class="formstyle">

</div>
<div style="background-image:url('images/team.jpg'); background-repeat:repeat-x; border-radius:6px; width:100%; height:100%;">
 @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form method="post" action="{{ route('projects.store') }}" method="POST" name="myPost" onsubmit="return validatePost()" class="post">
      @csrf
  <fieldset class="account-info">
  <label>
   اسم المشروع
      <input type="text" name="name"  value="{{ $project->name }}" class="sub">
   
    <label>
        
   اسم المشرف
    </label>
	         <input type="text" name="sup"  value="{{ $project->sup }}" class="sub">

</label>
    
نوع المشرف     
</label>      
          <input type="text" name="type"  value="{{ $project->type }}" class="sub">

</label>
حالة المشروع    
 </label>
	         <input type="text" name="status"  value="{{ $project->status }}" class="sub">

           
المستحلص 
  </label>
         <input type="text" name="abstract"  value="{{ $project->abstract }}" class="sub">

</label>
  
   

  </fieldset>
  <fieldset class="account-action">
    <input class="btn" type="submit" name="submit" value="تعديل" >
  </fieldset>
</form>
<br>
</div>
</form>
<br>
</div>