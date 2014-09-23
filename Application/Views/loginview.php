<?php
class LoginView extends BaseView
{
	public function  contents()
	{
?>
      <!-- Main jumbotron for a primary marketing message or call to action -->

      <div class="page-header" style="text-align:center">
        <h1>Project A</h1>
      </div>
      <form action="main" method="post" class="form-horizontal" role="form">
        <div class="form-group">
          <label for="userTxt" class="col-sm-2 control-label">ユーザ:</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="userTxt" id="userTxt" placeholder="Username" value="">
          </div>
        </div>
        <div class="form-group">
          <label for="passTxt" class="col-sm-2 control-label">パスワード:</label>
          <div class="col-sm-10">
            <input type="password" class="form-control"  name="passTxt" id="passTxt" placeholder="Password" value="">
          </div>
        </div>
        <div class="form-group">
          <div class="controls col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary col-sm-5">Submit</button>
            <div class="col-sm-2"></div>
            <button type="button" class="btn col-sm-5">Cancel</button>
          </div>
        </div>
      </form>
<?php
	}
}
?>