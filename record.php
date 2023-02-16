<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

 {
  width: 300px;
  height: 200px;
  background: red;
  animation: mymove 5s infinite;
}
	mymove {
  50% {background-color: blue;}
}
</style>
<body>
<form>
<div class="container">
	Amploed Name 
	<input type="text" class="form-control" name="aname" placeholder="Enter Amploed Name" riqured></br>
	Department<input type="text" class="form-control" name="dm" placeholder="Enter Department" riqured></br>
	sallary<input type="text" class="form-control mt-2" name="sallary" placeholder="Enter sallary" riqured></br>
	Leave
	<select class="form-control">
		<option>pregent</option>
		<option>absent</option>
	</select></br>
	Joinige Date<input type="date" class="form-control mt-2" name="jd"  placeholder="Enter Joinige Date" riqured></br>
	reaign<input type="date" class="form-control" name="resign" placeholder="Enter reaign" riqured></br>
	<input type="submit" class="btn btn-dark w-100"value="submit">
	</div>
</form>
</body>

