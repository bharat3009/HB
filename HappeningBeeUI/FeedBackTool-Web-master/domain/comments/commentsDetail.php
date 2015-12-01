<!DOCTYPE html>
<html lang="en">
<head>
<title>History Detail</title>
</head>

<body id="page-top" class="index" >

<!-- Navigation -->
<feedback-header></feedback-header>
<!-- Header -->
<!-- Contact Section -->
<section id="contact" style="height: 100%">
    <div class="container">
        <br>
        <h4 style="text-align: center">History Detail</h4>
        <div class="bs-example">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <p>Comment {{commentsData.commentId}}</p>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <p><img src="http://localhost:8080/Feedback/uploads/{{commentsData.filepath}}" height="100px;" width="100px;" alt="No Image"></p>
                            <p>{{commentsData.commentsDetail}}</p>
                            <p>{{commentsData.commentDate}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Footer -->
<feedback-footer></feedback-footer>
</body>
</html>
