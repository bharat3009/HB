<!DOCTYPE html>
<html lang="en">
<head>
    <title>History</title>
</head>

<body id="page-top" class="index">

<!-- Navigation -->
<feedback-header></feedback-header>
<!-- Header -->
<!-- Contact Section -->
<section id="contact" style="height: 100%">
    <div class="container">
        <br>
        <h4 style="text-align: center">History List</h4>

        <div class="bs-example">
            <div class="panel-group" id="accordion" ng-repeat="comments in commentsData">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"
                               href="#/commentsDetail?commentId={{comments.commentId}}">Comment
                                {{comments.commentId}}</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p><img src="http://localhost:8080/Feedback/uploads/{{comments.filepath}}" height="100px;"
                                    width="100px;" alt="No Image"></p>

                            <p>{{comments.commentsDetail}}</p>

                            <p>{{comments.commentDate}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<feedback-footer></feedback-footer>
</html>
