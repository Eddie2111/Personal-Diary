<?php include("head.php"); ?>
<?php include_once("navbar.php")?>

<style>
    .ccard {
        margin:auto;
        padding: auto;
        height: 400px;
        width: 400px;
        padding: 0.5rem;
        box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        -webkit-box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        -moz-box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        margin-top: 30px;
    }
    .ccard1 {
        margin:auto;
        padding: auto;
        height: 400px;
        width: 800px;
        padding: 0.5rem;
        box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        -webkit-box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        -moz-box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        margin-top: 30px;
    }
    @media only screen and (max-width: 600px) {

        .ccard1 {
        margin:auto;
        padding: auto;
        height: 400px;
        width: 400px;
        padding: 0.5rem;
        box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        -webkit-box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        -moz-box-shadow: 11px 11px 23px 5px rgba(0,0,0,0.47);
        margin-top: 30px;
    }
    }
    .circle {
        height: 90px;
        width: 90px;
        background-color: #FAFAFA;
        border-radius: 50%;
        margin-left:15px;
        transition: 0.3s ease;
}
.circle:hover {
        height: 90px;
        width: 90px;
        background-color: #1a65e8;
        border-radius: 50%;
        
}

    </style>


    <body id="body-pd">
        
<!-- do not use grid because it's not responsive -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ccard" >
                        <center><h4> Login </h4> <br/></center>
                        <form action="proceeds/authentication.php" type="Submit" >
                        <div class="d-flex justify-content-center">

                        <button class="btn btn-primary" style="background-color:#259ce6">
                            Twitter
                        </button><span>&nbsp;</span>
                        <button class="btn btn-primary" style="background-color: #1125bd">
                            facebook
                        </button><span>&nbsp;</span>
                        <button class="btn btn-primary">
                            Google
                        </button>
                        </div>
                        <br/>
                        <div class="input-group mb-3">
                        <!-- email from here -->
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <div class="input-group mb-3">
                        
                            <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                            </span>
                        <!-- password from here -->
                            <input type="text" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <center><button type="submit" class="submit-button">Login</button></center>
                    
                    </div>
                    </form>


                    </div>
                
                    <div class="col">
                    <div class="ccard">  
                        Login 
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    </div>
        </div>
<br/>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="ccard1 ">
                    <div class="container">
  <div class="row">
    <div class="col-8">
    
                        <h4> Login </h4> <br/>
                        <form action="proceeds/authentication.php" type="Submit" >
                        <div class="d-flex ">

                        <button class="btn btn-primary" style="background-color:#259ce6">
                            Twitter
                        </button><span>&nbsp;</span>
                        <button class="btn btn-primary" style="background-color: #1125bd">
                            facebook
                        </button><span>&nbsp;</span>
                        <button class="btn btn-primary">
                            Google
                        </button>
                        </div>
                        <br/>
                        <div class="input-group mb-3">
                        <!-- email from here -->
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <div class="input-group mb-3">
                        
                            <span class="input-group-text" id="basic-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                            </span>
                        <!-- password from here -->
                            <input type="text" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <button type="submit" class="submit-button">Login</button>
                    
                    
                    </form>
    </div>
    <div class="col">
      <style>
          .secondcard{
          background-color: #1125bd;

          }
      </style>
      <div class="secondcard">bro </div>

    </div>
  </div>

                    </div>
                </div>
            </div>
        </div>