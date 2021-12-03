<div class="container-tight mt-5 mb-4">
        <div class="card card-md">
          <div class="card-body">
            <h1 class="text-center mb-3">Addition - Quiz</h1>
            <label for="question"></label>

            <input class="form-control col-12 ml-2" type="number" placeholder="(generate)" id="question" readonly></input><h4 class="text-center mt-2 mr-2 ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></h4>
            <input class="form-control col-12" type="number" id="question1" placeholder="(generate)" readonly></input></center>
            <p for="answer" class="h2 text-center mt-3">Answer <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/microsoft/310/beaming-face-with-smiling-eyes_1f601.png" alt="" width="25px"></p>
                <input class="form-control text-center col-12" type="number" id="answer" placeholder="(punch in your answer)"></input>
                <button class="btn btn-danger col-12 mt-2" onclick="q123()">Generate Question</button>
                <button class="btn btn-success col-12 mt-2" onclick="A123()">Submit</button><p class="text-center mt-2">Also Try: <a href="division.php" class="badge bg-primary">Division</a> <a href="multiplication.php" class="badge bg-primary">Multiplication</a> <a href="subtraction.php" class="badge bg-primary">Subtraction</a></p>
            </div>
        </div>
    </div>
</div>
<script>
function q123()
{
document.getElementById("question").value =
Math.floor(Math.random() * 1000) ;

document.getElementById("question1").value =
Math.floor(Math.random() * 500) ;
}
function A123()
{
no1 = parseInt(document.getElementById("question").value)
no2 = parseInt(document.getElementById("question1").value)
subRes = parseInt(document.getElementById("answer").value)

res = no1+no2
alert("Great, we've recorded your response. Click `OK` for answer.")
alert(res)
if ( res != subRes)
    alert("Oops, Your Answer Was Incorrect ❌!")
else 
alert("Hurray, Your Answer Was Correct ✅!")
answer = document.getElementById("answer").value

document.getElementById("question").value =""
document.getElementById("question1").value =""
document.getElementById("answer").value =""
}
</script>