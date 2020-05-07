<html ng-app="plunker">
<head>
	<script data-require="angular.js@1.4.x" src="https://code.angularjs.org/1.4.8/angular.js" data-semver="1.4.8"></script>
	<script>document.write('<base href="' + document.location + '" />');</script>

	<script src="app.js"></script>	
</head>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #8665f7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


<body ng-controller="MainCtrl">
	<h1>Database Table</h1>

	<div> 

		<form action="insert.php ", method="post">
	
			Name: <input type="text" name="fname" 
			placeholder = " Enter Name"/>
			Age : <input type = "number" step="1" no-float name="age" 
			placeholder=" Enter your Age (numbers only)"/>
			<input type="submit" />
		</form>
	
		<form action="delete.php" method="get">
			Row Name Delete: <input type="text" name= "name_del" 
			placeholder=" Enter their Name"/>
			Row Age Delete : <input type ="number" step="1" no-float name="age_del"
			placeholder= " Enter ther Age (numbers only)"/>
			<input type="submit" />
		</form>
	</div>
</body>
</html>

