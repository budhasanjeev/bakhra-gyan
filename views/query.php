<?php
/**
 * Created by PhpStorm.
 * User: sanjeev-budha
 * Date: 4/21/16
 * Time: 11:50 PM
 */
session_start();
require('../common/Common.php');

if(!$_SESSION['email']){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>कृषि सुझाब</title>
</head>

<body>
<?php
require('../views/Layout/header.php');
?>

<div id="content">

</div>

<?php
require('../views/Layout/footer.php');
?>

<div class="modal fade" id="view_profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog" style="width: auto">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title"></h3>
            </div>

            <div class="modal-body">

                <div class="container">

                    <div class="col-md-3" style="border-right: 1px solid #226CB5;" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
                        <div class="row profile-pic">
                            <img style="width: 60%; height: 40%" src="">
                        </div>
                        <div class="row profile-table">
                            <h2 id="fullName"></h2>
                            <hr/>
                            <table cellpadding="1">
                                <tr>
                                    <td><span class="glyphicon glyphicon-home"></span></td>
                                    <td><h5 id="address"></h5></td>
                                </tr>

                                <tr>
                                    <td><span class="glyphicon glyphicon-earphone"></span></td>
                                    <td><h5 id="mobileNumber"></h5></td>
                                </tr>

                                <tr>
                                    <td><span class="glyphicon glyphicon-phone-alt"></span></td>
                                    <td><h5 id="phoneNumber"></h5></td>
                                </tr>

                                <tr>
                                    <td><span class="glyphicon glyphicon-envelope"></span></td>
                                    <td><h5 id="emailAddress"></h5></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-8" style="float: right;">

                        <div class="tab-content">
                            <div id="history" class="tab-pane fade in active">
                                <h3>News History</h3>
                                <table id="newsList" style="text-align: left;" class="table table-bordered table-responsive">
                                    <thead>
                                    <tr>
                                        <td>S.N</td>
                                        <th>News headline</th>
                                        <th>Created Date</th>
                                        <th>Last Updated Date</th>
                                    </tr>
                                    </thead>
                                    <tbody id="newsListBody">

                                    </tbody>
                                </table>
                            </div>
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
</body>
</html>

