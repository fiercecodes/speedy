<div class="container-tight mt-5 mb-4">
        <div class="card card-md">
          <div class="card-body">
            <h1 class="text-center mb-3">Caclulator</h1>
            <div class="mb-3">
            <input type="number" class="form-control" id="question" placeholder="(any number)">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" id="question1" placeholder="(any number)">
          </div>
          <p for="answer" class="h2 text-center mt-3">SpeedyBot <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/microsoft/310/robot_1f916.png" alt="Robot" width="25px"></p>
            <div class="mb-3">
            <input type="number" class="form-control" id="answer" placeholder="(auto answer)" readonly>
          </div>
          <div class="row g-2 align-items-center mb-n3">
                      <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                        <a class="btn btn-primary w-100" onclick="multiply()">
                        <i class="fa-solid fa-xmark fa-1x"></i>
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                        <a class="btn btn-secondary w-100" onclick="divide()">
                        <i class="fa-solid fa-divide fa-1x"></i>
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                        <a class="btn btn-success w-100" onclick="add()">
                        <i class="fa-solid fa-plus fa-1x"></i>
                        </a>
                      </div>
                      <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                        <a class="btn btn-warning w-100" onclick="subtract()">
                        <i class="fa-solid fa-minus fa-1x"></i>
                        </a>
                    </div>          </div>
</div>
      </div>
    </div>
    <script>
function add()
{
no1 = parseInt(document.getElementById("question").value)
no2 = parseInt(document.getElementById("question1").value)
subRes1 = parseInt(document.getElementById("answer").value)

subRes1 = no1+no2
document.getElementById("answer").value =subRes1	
}
function subtract()
{
no1 = parseInt(document.getElementById("question").value)
no2 = parseInt(document.getElementById("question1").value)
subRes2 = parseInt(document.getElementById("answer").value)

subRes2 = no1-no2
document.getElementById("answer").value =subRes2
}
function multiply()
{
no1 = parseInt(document.getElementById("question").value)
no2 = parseInt(document.getElementById("question1").value)
subRes3 = parseInt(document.getElementById("answer").value)

subRes3 = no1*no2
document.getElementById("answer").value =subRes3
}
function divide()
{
no1 = parseInt(document.getElementById("question").value)
no2 = parseInt(document.getElementById("question1").value)
subRes4 = parseInt(document.getElementById("answer").value)

subRes4 = no1/no2
document.getElementById("answer").value =subRes4	
}
</script>