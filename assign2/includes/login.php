<!-- login section -->

<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center;">Login</h4>
      </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 controldivreg">
              <div class="loginform">
                 <form action="includes/check_login.php" method="post" id="login">
                 <fieldset class="form-group">
                   <label for="Email1"> User Name </label>
                   <input type="text" class="form-control" id="email_val" name="username" placeholder="Enter User Name" required>
                 </fieldset>
                 <fieldset class="form-group">
                   <label for="Password1"> Password </label>
                   <input type="password" class="form-control" id="pass_val" name="password" placeholder="Password" required>
                 </fieldset>
           <!--     <div class="checkbox">
                   <label>
                     <input type="checkbox"> Check me out
                   </label>
                 </div> -->
                 <button type="submit" class="btn btn-primary" style="margin-left:40%;">Log In</button>
               </form>
               </div>
             </div>
           </div>
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
  function fnreset() {
      document.getElementById("login").reset();
  }
  window.onload = fnreset;
</script>
