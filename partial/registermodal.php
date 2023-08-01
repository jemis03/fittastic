<div class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="registermodalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popupheader">
                <h5 class="modal-title" id="registermodalLabel">Register to this website</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/fittastic/partial/handleregister.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="registerfname">First name</label>
                        <input type="text" class="form-control" id="registerfname" name="registerfname" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="registerlname">Last name</label>
                        <input type="text" class="form-control" id="registerlname" name="registerlname" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="registerdateofbirth">Date of birth </label>
                        <input type="date" class="form-control" name="registerdateofbirth" id="registerdateofbirth">
                    </div>
                    <div class="form-group mgender">
                        <label for="registergender">Gender :</label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="registermgender" name="registergender" value="Male" class="custom-control-input">
                            <label class="custom-control-label pl-4" for="registermgender">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="registerfgender" name="registergender" value="Female" class="custom-control-input">
                            <label class="custom-control-label pl-4" for="registerfgender">Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registeremail">Email address</label>
                        <input type="email" class="form-control" id="registeremail" name="registeremail" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="registerpassword">Password</label>
                        <input type="password" class="form-control" id="registerpassword" name="registerpassword">
                    </div>
                    <div class="form-group">
                        <label for="registercpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="registercpassword" name="registercpassword">
                    </div>
                    <div class="form-group">
                        <label for="registerchoice">Please enter your choice</label>
                        <select class="custom-select" name="registerchoice" id="registerchoice">
                            <option selected>Trainee</option>
                            <option>Trainer</option>
                        </select>
                    </div>
                    

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>