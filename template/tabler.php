<style>@media only screen and (max-width:728px) {
    .container-tight{
        margin-bottom:100px;
    }
}</style>
<div class="container-tight mt-5" style="margin-bottom: 200px;">
        <div class="card card-md">
          <div class="card-body">
            <h1 class="text-center">Trollive Tables</h1>
            <div class="mb-3">
  <div class="mb-3">
    <input type="number" class="form-control" id="number" placeholder="Anything Until ♾️">
    <div class="col-xl-auto mt-2">
        <button class="btn btn-primary col-12" onclick="addNumbers()">
    Print Tables</button>                  </div>
  </div><div id="result" class="mt-2"></div>
          </div>
</div>
      </div>
    </div>
    <script>
            function addNumbers() {
              var number;
              var result = "";
      
              number = Number(document.getElementById("number").value);
      
              for(var i = 1; i<= 12; i++){
                result = result + "<p style= font-size:15px>"+ number + ""+ "x" + ""+ i + ""+ "=" + "" + number * i+ "</p>";
              }
              document.getElementById("result").innerHTML = result;
            }
          </script>