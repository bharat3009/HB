<!DOCTYPE html>
<html lang="en">
<title>Login</title>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:;">Feedback Tool</a>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 ">
                <h2>Sing in with us</h2>

                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group  floating-label-form-group controls">
                            <label>User Name</label>
                            <input type="text" class="form-control" ng-model="username" placeholder="Name" id="name"
                                   required data-validation-required-message="Please enter your name.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group  floating-label-form-group controls">
                            <label>Password</label>
                            <input type="password" class="form-control" ng-model="password" placeholder="Passwoord"
                                   id="" required data-validation-required-message="Please enter your email address.">

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>

                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg" ng-click="myLogin()">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
<feedback-footer></feedback-footer>
</html>
