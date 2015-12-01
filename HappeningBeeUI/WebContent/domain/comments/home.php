<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
</head>

<body id="page-top" class="index">

<feedback-header></feedback-header>

<!-- Header -->


<!-- Contact Section -->
<section id="contact">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form method="post" enctype="multipart/form-data" name="sentMessage" id="contactForm" novalidate>
                    <br><br>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Comment Here</label>
                            <textarea rows="5" class="form-control" ng-model="commentsData" placeholder="Message"
                                      id="message" required
                                      data-validation-required-message="Please enter a message."></textarea>

                            <p class="help-block text-danger"></p>
                        </div>

                    </div>
                    <br>
                    <br>
                    <input id="image" name="file" class="file" type="file">
                    <br>
                    <button type="submit" id="submitClick" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
                <br>

                <div id="success"></div>
                <!--<div class="row">
                    <div class="form-group col-xs-12 ">
                        <button type="submit" class="btn btn-success btn-md col-xs-2 ">Send</button>
                    </div>
                </div>-->
                </form>
            </div>
        </div>
    </div>
</section>
<feedback-footer></feedback-footer>
</body>
</html>
